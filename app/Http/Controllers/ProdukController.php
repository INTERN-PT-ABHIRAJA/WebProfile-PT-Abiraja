<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\DetailFotoProduk;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends BaseDashboardController
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setModel(Produk::class, 'products')
             ->setViewPath('dashboard.products')
             ->setRoutePrefix('dashboard.products')
             ->setAllowedOperations(['index', 'create', 'store', 'edit', 'update', 'destroy', 'show']);
    }

    /**
     * Display a listing of the resource with relationships.
     */
    public function index(Request $request)
    {
        $query = Produk::with(['anakPerusahaan', 'detailFoto']);
        
        // Add search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_produk', 'like', "%{$search}%")
                  ->orWhere('deskripsi_produk', 'like', "%{$search}%")
                  ->orWhereHas('anakPerusahaan', function($q) use ($search) {
                      $q->where('nama_perusahaan', 'like', "%{$search}%");
                  });
            });
        }

        $items = $query->paginate(10);

        return view($this->viewPath . '.index', compact('items'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_anak_perusahaan' => 'required|exists:anak_perusahaan,id_anak_perusahaan',
            'nama_produk' => 'required|string|max:150',
            'deskripsi_produk' => 'nullable|string',
            'rating' => 'nullable|numeric|min:0|max:5',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'detail_fotos' => 'nullable|array',
            'detail_fotos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'benefits' => 'nullable|array',
            'benefits.*' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['foto', 'detail_fotos', 'benefits']);

        // Handle main foto upload with dual storage
        if ($request->hasFile('foto')) {
            $data['foto'] = ImageHelper::dualUpload($request->file('foto'), 'produk/foto');
        }

        $produk = Produk::create($data);

        // Handle multiple detail photos with dual storage
        if ($request->hasFile('detail_fotos')) {
            foreach ($request->file('detail_fotos') as $detailFoto) {
                if ($detailFoto) {
                    $detailFotoPath = ImageHelper::dualUpload($detailFoto, 'produk/detail_foto');
                    DetailFotoProduk::create([
                        'id_produk' => $produk->id_produk,
                        'foto' => $detailFotoPath
                    ]);
                }
            }
        }
        
        // Handle benefits
        if ($request->has('benefits')) {
            foreach ($request->benefits as $benefit) {
                if (!empty($benefit)) {
                    \App\Models\Benefit::create([
                        'id_produk' => $produk->id_produk,
                        'nama_benefit' => $benefit
                    ]);
                }
            }
        }

        return redirect()->route('dashboard.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::with('anakPerusahaan')->findOrFail($id);
        return response()->json(['status' => 'success', 'data' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'id_anak_perusahaan' => 'sometimes|required|exists:anak_perusahaan,id_anak_perusahaan',
            'nama_produk' => 'sometimes|required|string|max:150',
            'deskripsi_produk' => 'nullable|string',
            'rating' => 'nullable|numeric|min:0|max:5',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'detail_fotos' => 'nullable|array',
            'detail_fotos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_detail_fotos' => 'nullable|array',
            'remove_detail_fotos.*' => 'integer|exists:detail_foto_produk,id_foto',
            'benefits' => 'nullable|array',
            'benefits.*' => 'nullable|string|max:255',
            'remove_benefits' => 'nullable|array',
            'remove_benefits.*' => 'integer|exists:benefits,id_benefit',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['foto', 'detail_fotos', 'remove_detail_fotos', 'benefits', 'remove_benefits']);

        // Handle main foto upload with dual storage
        if ($request->hasFile('foto')) {
            // Delete old file from both locations
            if ($produk->foto) {
                ImageHelper::deleteImage($produk->foto);
            }

            $data['foto'] = ImageHelper::dualUpload($request->file('foto'), 'produk/foto');
        }

        $produk->update($data);

        // Remove selected detail photos
        if ($request->has('remove_detail_fotos')) {
            $detailFotosToRemove = DetailFotoProduk::whereIn('id_foto', $request->remove_detail_fotos)
                ->where('id_produk', $produk->id_produk)
                ->get();

            foreach ($detailFotosToRemove as $detailFoto) {
                // Delete file from both storage locations
                ImageHelper::deleteImage($detailFoto->foto);
                // Delete record
                $detailFoto->delete();
            }
        }

        // Handle new detail photos with dual storage
        if ($request->hasFile('detail_fotos')) {
            foreach ($request->file('detail_fotos') as $detailFoto) {
                if ($detailFoto) {
                    $detailFotoPath = ImageHelper::dualUpload($detailFoto, 'produk/detail_foto');
                    DetailFotoProduk::create([
                        'id_produk' => $produk->id_produk,
                        'foto' => $detailFotoPath
                    ]);
                }
            }
        }
        
        // Remove selected benefits
        if ($request->has('remove_benefits')) {
            \App\Models\Benefit::whereIn('id_benefit', $request->remove_benefits)
                ->where('id_produk', $produk->id_produk)
                ->delete();
        }
        
        // Handle new benefits
        if ($request->has('benefits')) {
            foreach ($request->benefits as $benefit) {
                if (!empty($benefit)) {
                    \App\Models\Benefit::create([
                        'id_produk' => $produk->id_produk,
                        'nama_benefit' => $benefit
                    ]);
                }
            }
        }

        return redirect()->route('dashboard.products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Delete main foto from both locations
        if ($produk->foto) {
            ImageHelper::deleteImage($produk->foto);
        }

        // Delete all detail photos from both locations
        foreach ($produk->detailFoto as $detailFoto) {
            if ($detailFoto->foto) {
                ImageHelper::deleteImage($detailFoto->foto);
            }
            $detailFoto->delete();
        }
        
        // Delete all benefits
        $produk->benefits()->delete();

        $produk->delete();

        return redirect()->route('dashboard.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
