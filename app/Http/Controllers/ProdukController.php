<?php

namespace App\Http\Controllers;

use App\Models\Produk;
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
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        $data = $request->except(['foto', 'video']);

        // Handle file uploads
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('produk/foto', 'public');
            $data['foto'] = $fotoPath;
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('produk/video', 'public');
            $data['video'] = $videoPath;
        }

        $produk = Produk::create($data);

        return response()->json(['status' => 'success', 'data' => $produk], 201);
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
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        $data = $request->except(['foto', 'video']);

        // Handle file uploads
        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
                Storage::disk('public')->delete($produk->foto);
            }

            $fotoPath = $request->file('foto')->store('produk/foto', 'public');
            $data['foto'] = $fotoPath;
        }

        if ($request->hasFile('video')) {
            // Delete old file if exists
            if ($produk->video && Storage::disk('public')->exists($produk->video)) {
                Storage::disk('public')->delete($produk->video);
            }

            $videoPath = $request->file('video')->store('produk/video', 'public');
            $data['video'] = $videoPath;
        }

        $produk->update($data);

        return response()->json(['status' => 'success', 'data' => $produk]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Delete associated files
        if ($produk->foto && Storage::disk('public')->exists($produk->foto)) {
            Storage::disk('public')->delete($produk->foto);
        }

        if ($produk->video && Storage::disk('public')->exists($produk->video)) {
            Storage::disk('public')->delete($produk->video);
        }

        $produk->delete();

        return response()->json(['status' => 'success', 'message' => 'Produk deleted successfully']);
    }
}
