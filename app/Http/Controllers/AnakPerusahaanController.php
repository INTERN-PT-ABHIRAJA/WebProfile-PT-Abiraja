<?php

namespace App\Http\Controllers;

use App\Models\AnakPerusahaan;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AnakPerusahaanController extends BaseDashboardController
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setModel(AnakPerusahaan::class, 'companies')
             ->setViewPath('dashboard.companies')
             ->setRoutePrefix('dashboard.companies')
             ->setAllowedOperations(['index', 'create', 'store', 'edit', 'update', 'destroy', 'show']);
    }

    /**
     * Check for related records before deleting
     */
    protected function checkRelatedRecords($item)
    {
        // Check if company has related products
        if ($item->produk()->count() > 0) {
            abort(403, 'Cannot delete company with existing products. Please remove the products first.');
        }
        
        return true;
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|exists:users,id_user',
            'id_kategori' => 'nullable|exists:kategori,id_kategori',
            'nama_perusahaan' => 'required|string|max:150',
            'deskripsi' => 'nullable|string',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'berdiri_sejak' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['foto']);

        // Handle foto upload with dual storage
        if ($request->hasFile('foto')) {
            $data['foto'] = ImageHelper::dualUpload($request->file('foto'), 'perusahaan/foto');
        }
        
        $perusahaan = AnakPerusahaan::create($data);

        return redirect()
            ->route('dashboard.companies.index')
            ->with('success', 'Anak Perusahaan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $perusahaan = AnakPerusahaan::with(['user', 'kategori', 'produk'])->findOrFail($id);
        return response()->json(['status' => 'success', 'data' => $perusahaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $perusahaan = AnakPerusahaan::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'id_user' => 'sometimes|required|exists:users,id_user',
            'id_kategori' => 'nullable|exists:kategori,id_kategori',
            'nama_perusahaan' => 'sometimes|required|string|max:150',
            'deskripsi' => 'nullable|string',
            'alamat' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'berdiri_sejak' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['foto']);

        // Handle foto upload with dual storage
        if ($request->hasFile('foto')) {
            // Delete old file from both locations
            if ($perusahaan->foto) {
                ImageHelper::deleteImage($perusahaan->foto);
            }

            $data['foto'] = ImageHelper::dualUpload($request->file('foto'), 'perusahaan/foto');
        }

        $perusahaan->update($data);

        return redirect()
            ->route('dashboard.companies.index')
            ->with('success', 'Anak Perusahaan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $perusahaan = AnakPerusahaan::findOrFail($id);

        // Delete foto from both locations
        if ($perusahaan->foto) {
            ImageHelper::deleteImage($perusahaan->foto);
        }

        $perusahaan->delete();

        return redirect()
            ->route('dashboard.companies.index')
            ->with('success', 'Anak Perusahaan berhasil dihapus!');
    }
}
