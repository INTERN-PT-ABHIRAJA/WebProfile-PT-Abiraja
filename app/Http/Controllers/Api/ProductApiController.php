<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\DetailFotoProduk;
use App\Models\Benefit;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Get product details including benefits and detail photos
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProductDetails($id)
    {
        $product = Produk::with(['benefits', 'detailFotos', 'anakPerusahaan'])
            ->find($id);
            
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        
        // Prepare photos array with main photo and detail photos
        $photos = collect();
        
        // Add main photo if exists
        if ($product->foto) {
            $photos->push([
                'foto' => $product->foto,
                'foto_url' => $product->foto_url,
                'is_main' => true
            ]);
        }
        
        // Add detail photos
        foreach ($product->detailFotos as $detailFoto) {
            $photos->push([
                'foto' => $detailFoto->foto,
                'foto_url' => $detailFoto->foto_url,
                'is_main' => false
            ]);
        }
        
        return response()->json([
            'product' => $product,
            'benefits' => $product->benefits,
            'photos' => $photos,
            'anak_perusahaan' => $product->anakPerusahaan,
        ]);
    }
}
