<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use App\Models\DetailFotoProduk;
use App\Models\Produk;
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

    /**
     * Get product template for WhatsApp modal
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProductTemplate($id)
    {
        try {
            // Find product by ID using correct primary key
            $product = Produk::with(['anakPerusahaan', 'detailFotos'])->where('id_produk', $id)->first();

            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Produk tidak ditemukan'
                ], 404);
            }

            // Format price
            $formattedPrice = $product->harga ? 'Rp ' . number_format($product->harga, 0, ',', '.') : 'Hubungi Kami';

            // Get main image
            $mainImage = $product->foto_utama_url ?? asset('assets/img/default-product.jpg');

            // Create WhatsApp template message
            $whatsappTemplate = $this->createWhatsAppTemplate($product, $formattedPrice);

            // Prepare response data
            $responseData = [
                'id' => $product->id_produk,
                'name' => $product->nama_produk,
                'code' => 'PRD-' . str_pad($product->id_produk, 3, '0', STR_PAD_LEFT),
                'price' => $formattedPrice,
                'description' => $product->deskripsi_produk ?? 'Tidak ada deskripsi',
                'image' => $mainImage,
                'company' => $product->anakPerusahaan->nama_perusahaan ?? 'PT Abhiraja Giovanni Tryamanda',
                'stock_status' => $product->stok > 0 ? 'Tersedia (' . $product->stok . ' unit)' : 'Hubungi Kami',
                'whatsapp_template' => $whatsappTemplate,
                'specifications' => $this->getProductSpecifications($product),
                'benefits' => $this->getProductBenefits($product)
            ];

            return response()->json([
                'success' => true,
                'data' => $responseData
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengambil data produk',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    /**
     * Create WhatsApp message template
     *
     * @param Produk $product
     * @param string $formattedPrice
     * @return string
     */
    private function createWhatsAppTemplate(Produk $product, string $formattedPrice): string
    {
        $companyName = $product->anakPerusahaan->nama_perusahaan ?? 'PT Abhiraja Giovanni Tryamanda';
        $productCode = 'PRD-' . str_pad($product->id_produk, 3, '0', STR_PAD_LEFT);

        $template = "🛍️ *KONSULTASI PRODUK* 🛍️\n\n";
        $template .= "Halo, saya tertarik dengan produk berikut:\n\n";
        $template .= "📦 *Produk:* {$product->nama_produk}\n";
        $template .= "🏷️ *Kode:* {$productCode}\n";
        $template .= "💰 *Harga:* {$formattedPrice}\n";
        $template .= "🏢 *Perusahaan:* {$companyName}\n\n";

        // Add stock information if available
        if ($product->stok !== null) {
            $stockStatus = $product->stok > 0 ? "✅ Tersedia ({$product->stok} unit)" : '❌ Stok Habis';
            $template .= "📊 *Status Stok:* {$stockStatus}\n\n";
        }

        $template .= "Mohon informasi lebih lanjut mengenai:\n";
        $template .= "• Detail spesifikasi produk\n";
        $template .= "• Proses pemesanan\n";
        $template .= "• Metode pembayaran\n";
        $template .= "• Estimasi pengiriman\n\n";
        $template .= 'Terima kasih! 🙏';

        return $template;
    }

    /**
     * Get product specifications
     *
     * @param Produk $product
     * @return array
     */
    private function getProductSpecifications(Produk $product): array
    {
        $specs = [];

        if ($product->berat) {
            $specs[] = ['label' => 'Berat', 'value' => $product->berat . ' kg'];
        }

        if ($product->dimensi) {
            $specs[] = ['label' => 'Dimensi', 'value' => $product->dimensi];
        }

        if ($product->material) {
            $specs[] = ['label' => 'Material', 'value' => $product->material];
        }

        return $specs;
    }

    /**
     * Get product benefits
     *
     * @param Produk $product
     * @return array
     */
    private function getProductBenefits(Produk $product): array
    {
        return [
            'Kualitas terjamin',
            'Garansi resmi',
            'Layanan after-sales',
            'Konsultasi gratis'
        ];
    }
}
