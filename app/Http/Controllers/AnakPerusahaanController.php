<?php

namespace App\Http\Controllers;

use App\Models\AnakPerusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AnakPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perusahaan = AnakPerusahaan::with(['user', 'kategori'])->get();
        return response()->json(['status' => 'success', 'data' => $perusahaan]);
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
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20480',
            'berdiri_sejak' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        $data = $request->except(['foto', 'video']);

        // Handle file uploads
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('perusahaan/foto', 'public');
            $data['foto'] = $fotoPath;
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('perusahaan/video', 'public');
            $data['video'] = $videoPath;
        }

        $perusahaan = AnakPerusahaan::create($data);

        return response()->json(['status' => 'success', 'data' => $perusahaan], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perusahaan = AnakPerusahaan::with(['user', 'kategori', 'produk'])->findOrFail($id);
        return response()->json(['status' => 'success', 'data' => $perusahaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20480',
            'berdiri_sejak' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        $data = $request->except(['foto', 'video']);

        // Handle file uploads
        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($perusahaan->foto && Storage::disk('public')->exists($perusahaan->foto)) {
                Storage::disk('public')->delete($perusahaan->foto);
            }

            $fotoPath = $request->file('foto')->store('perusahaan/foto', 'public');
            $data['foto'] = $fotoPath;
        }

        if ($request->hasFile('video')) {
            // Delete old file if exists
            if ($perusahaan->video && Storage::disk('public')->exists($perusahaan->video)) {
                Storage::disk('public')->delete($perusahaan->video);
            }

            $videoPath = $request->file('video')->store('perusahaan/video', 'public');
            $data['video'] = $videoPath;
        }

        $perusahaan->update($data);

        return response()->json(['status' => 'success', 'data' => $perusahaan]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perusahaan = AnakPerusahaan::findOrFail($id);

        // Delete associated files
        if ($perusahaan->foto && Storage::disk('public')->exists($perusahaan->foto)) {
            Storage::disk('public')->delete($perusahaan->foto);
        }

        if ($perusahaan->video && Storage::disk('public')->exists($perusahaan->video)) {
            Storage::disk('public')->delete($perusahaan->video);
        }

        $perusahaan->delete();

        return response()->json(['status' => 'success', 'message' => 'Perusahaan deleted successfully']);
    }
}
