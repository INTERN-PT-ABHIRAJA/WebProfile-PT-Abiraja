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
        
        return response()->json([
            'product' => $product,
            'benefits' => $product->benefits,
            'photos' => $product->detailFotos,
            'anak_perusahaan' => $product->anakPerusahaan,
        ]);
    }
}
