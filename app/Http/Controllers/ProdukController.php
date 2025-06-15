<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\DetailFotoProduk;
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
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20480',
            'detail_fotos' => 'nullable|array',
            'detail_fotos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['foto', 'video', 'detail_fotos']);

        // Handle main foto upload
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('produk/foto', 'public');
            $data['foto'] = $fotoPath;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('produk/video', 'public');
            $data['video'] = $videoPath;
        }

        $produk = Produk::create($data);

        // Handle multiple detail photos
        if ($request->hasFile('detail_fotos')) {
            foreach ($request->file('detail_fotos') as $detailFoto) {
                if ($detailFoto) {
                    $detailFotoPath = $detailFoto->store('produk/detail_foto', 'public');
                    DetailFotoProduk::create([
                        'id_produk' => $produk->id_produk,
                        'foto' => $detailFotoPath
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
            'harga' => 'sometimes|required|numeric|min:0',
            'stok' => 'sometimes|required|integer|min:0',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20480',
            'detail_fotos' => 'nullable|array',
            'detail_fotos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_detail_fotos' => 'nullable|array',
            'remove_detail_fotos.*' => 'integer|exists:detail_foto_produk,id_foto',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['foto', 'video', 'detail_fotos', 'remove_detail_fotos']);

        // Handle main foto upload
        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
                Storage::disk('public')->delete($produk->foto);
            }

            $fotoPath = $request->file('foto')->store('produk/foto', 'public');
            $data['foto'] = $fotoPath;
        }

        // Handle video upload
        if ($request->hasFile('video')) {
            // Delete old file if exists
            if ($produk->video && Storage::disk('public')->exists($produk->video)) {
                Storage::disk('public')->delete($produk->video);
            }

            $videoPath = $request->file('video')->store('produk/video', 'public');
            $data['video'] = $videoPath;
        }

        $produk->update($data);

        // Remove selected detail photos
        if ($request->has('remove_detail_fotos')) {
            $detailFotosToRemove = DetailFotoProduk::whereIn('id_foto', $request->remove_detail_fotos)
                ->where('id_produk', $produk->id_produk)
                ->get();

            foreach ($detailFotosToRemove as $detailFoto) {
                // Delete file from storage
                if ($detailFoto->foto && Storage::disk('public')->exists($detailFoto->foto)) {
                    Storage::disk('public')->delete($detailFoto->foto);
                }
                // Delete record
                $detailFoto->delete();
            }
        }

        // Handle new detail photos
        if ($request->hasFile('detail_fotos')) {
            foreach ($request->file('detail_fotos') as $detailFoto) {
                if ($detailFoto) {
                    $detailFotoPath = $detailFoto->store('produk/detail_foto', 'public');
                    DetailFotoProduk::create([
                        'id_produk' => $produk->id_produk,
                        'foto' => $detailFotoPath
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

        // Delete main associated files
        if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
            Storage::disk('public')->delete($produk->foto);
        }

        if ($produk->video && Storage::disk('public')->exists($produk->video)) {
            Storage::disk('public')->delete($produk->video);
        }

        // Delete all detail photos
        foreach ($produk->detailFoto as $detailFoto) {
            if ($detailFoto->foto && Storage::disk('public')->exists($detailFoto->foto)) {
                Storage::disk('public')->delete($detailFoto->foto);
            }
            $detailFoto->delete();
        }

        $produk->delete();

        return redirect()->route('dashboard.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
