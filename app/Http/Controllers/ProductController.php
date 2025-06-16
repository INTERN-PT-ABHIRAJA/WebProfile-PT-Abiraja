<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display products page with dynamic data
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get products from database
        $products = Produk::with(['anakPerusahaan', 'detailFotos'])
            ->orderBy('created_at', 'desc')
            ->take(12)  // Limit to 12 products for initial load
            ->get();

        return view('products.index', compact('products'));
    }

    /**
     * Load more products for AJAX pagination
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function loadMore(Request $request)
    {
        $offset = $request->get('offset', 0);
        $limit = $request->get('limit', 6);

        $products = Produk::with(['anakPerusahaan', 'detailFotos'])
            ->orderBy('created_at', 'desc')
            ->skip($offset)
            ->take($limit)
            ->get();

        $hasMore = Produk::count() > ($offset + $limit);

        return response()->json([
            'success' => true,
            'products' => $products->map(function ($product) {
                return [
                    'id' => $product->id_produk,
                    'name' => $product->nama_produk,
                    'description' => $product->deskripsi_produk,
                    'price' => $product->harga ? 'Rp ' . number_format($product->harga, 0, ',', '.') : 'Hubungi Kami',
                    'image' => $product->foto_utama_url ?? asset('assets/img/default-product.jpg'),
                    'company' => $product->anakPerusahaan->nama_perusahaan ?? 'PT Abhiraja Giovanni Tryamanda',
                    'stock' => $product->stok,
                    'badge' => $this->getProductBadge($product)
                ];
            }),
            'has_more' => $hasMore
        ]);
    }

    /**
     * Get product badge based on business logic
     *
     * @param Produk $product
     * @return string|null
     */
    private function getProductBadge(Produk $product)
    {
        // Check if product is new (created within last 30 days)
        if ($product->created_at && $product->created_at->diffInDays(now()) <= 30) {
            return ['text' => 'New', 'class' => 'bg-warning'];
        }

        // Check if product has low stock
        if ($product->stok !== null && $product->stok <= 5 && $product->stok > 0) {
            return ['text' => 'Stok Terbatas', 'class' => 'bg-danger'];
        }

        // Check if product is popular (you can define your own logic)
        // For example, based on view count, order count, etc.

        return null;
    }
}
