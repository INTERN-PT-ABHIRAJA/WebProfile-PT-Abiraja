<?php

namespace Database\Seeders;

use App\Models\AnakPerusahaan;
use App\Models\DetailFotoProduk;
use App\Models\kategori;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample categories if they don't exist
        $category1 = kategori::firstOrCreate(['nama_kategori' => 'Edukasi']);
        $category2 = kategori::firstOrCreate(['nama_kategori' => 'Branding']);
        $category3 = kategori::firstOrCreate(['nama_kategori' => 'Keuangan']);
        $category4 = kategori::firstOrCreate(['nama_kategori' => 'Kerajinan']);  // Create sample subsidiary companies if they don't exist
        $company1 = AnakPerusahaan::firstOrCreate([
            'nama_perusahaan' => 'PT Edukasi Prima'
        ], [
            'nama_perusahaan' => 'PT Edukasi Prima',
            'deskripsi' => 'Perusahaan yang bergerak di bidang edukasi',
            'alamat' => 'Jakarta, Indonesia',
            'id_user' => 1,  // Default user ID
            'id_kategori' => $category1->id
        ]);

        $company2 = AnakPerusahaan::firstOrCreate([
            'nama_perusahaan' => 'PT Branding Solutions'
        ], [
            'nama_perusahaan' => 'PT Branding Solutions',
            'deskripsi' => 'Perusahaan yang bergerak di bidang branding',
            'alamat' => 'Bandung, Indonesia',
            'id_user' => 1,  // Default user ID
            'id_kategori' => $category2->id
        ]);

        $company3 = AnakPerusahaan::firstOrCreate([
            'nama_perusahaan' => 'PT Financial Consultant'
        ], [
            'nama_perusahaan' => 'PT Financial Consultant',
            'deskripsi' => 'Perusahaan yang bergerak di bidang konsultasi keuangan',
            'alamat' => 'Surabaya, Indonesia',
            'id_user' => 1,  // Default user ID
            'id_kategori' => $category3->id
        ]);

        $company4 = AnakPerusahaan::firstOrCreate([
            'nama_perusahaan' => 'PT Woodcraft Indonesia'
        ], [
            'nama_perusahaan' => 'PT Woodcraft Indonesia',
            'deskripsi' => 'Perusahaan yang bergerak di bidang kerajinan kayu',
            'alamat' => 'Yogyakarta, Indonesia',
            'id_user' => 1,  // Default user ID
            'id_kategori' => $category4->id
        ]);

        // Create test products
        $products = [
            [
                'nama_produk' => 'Paket Edukasi Premium',
                'deskripsi_produk' => 'Paket edukasi komprehensif dengan kurikulum terdepan, mentor berpengalaman, dan sertifikasi internasional. Cocok untuk pengembangan skill profesional.',
                'harga_satuan' => 5000000,
                'stok' => 15,
                'berat' => null,
                'dimensi' => null,
                'material' => null,
                'foto' => 'assets/img/portfolio/lada.jpg',
                'kategori_id' => $category1->id,
                'anak_perusahaan_id' => $company1->id,
            ],
            [
                'nama_produk' => 'Branding & Marketing Solution',
                'deskripsi_produk' => 'Solusi branding terintegrasi meliputi desain logo, strategi marketing, dan kampanye digital. Tingkatkan brand awareness Anda dengan paket lengkap ini.',
                'harga_satuan' => 3500000,
                'stok' => 8,
                'berat' => null,
                'dimensi' => null,
                'material' => null,
                'foto' => 'assets/img/portfolio/jamur.jpg',
                'kategori_id' => $category2->id,
                'anak_perusahaan_id' => $company2->id,
            ],
            [
                'nama_produk' => 'Konsultasi Keuangan Bisnis',
                'deskripsi_produk' => 'Layanan konsultasi keuangan profesional untuk optimalisasi cash flow, perencanaan investasi, dan strategi pertumbuhan bisnis yang berkelanjutan.',
                'harga_satuan' => 2000000,
                'stok' => 12,
                'berat' => null,
                'dimensi' => null,
                'material' => null,
                'foto' => 'assets/img/portfolio/kayu.jpg',
                'kategori_id' => $category3->id,
                'anak_perusahaan_id' => $company3->id,
            ],
            [
                'nama_produk' => 'Kerajinan Kayu Premium',
                'deskripsi_produk' => 'Kerajinan kayu berkualitas tinggi dengan desain eksklusif. Dibuat dari kayu pilihan dengan finishing premium dan detail yang sempurna.',
                'harga_satuan' => 1500000,
                'stok' => 5,
                'berat' => 2.5,
                'dimensi' => '30x20x15 cm',
                'material' => 'Kayu Jati Premium',
                'foto' => 'assets/img/portfolio/kayu2.jpg',
                'kategori_id' => $category4->id,
                'anak_perusahaan_id' => $company4->id,
            ],
        ];

        foreach ($products as $productData) {
            $product = Produk::create($productData);

            // Add detail photos for each product
            DetailFotoProduk::create([
                'produk_id' => $product->id,
                'path_foto' => $productData['foto'],
                'deskripsi_foto' => 'Foto utama produk ' . $product->nama_produk,
            ]);

            // Add additional photos for variety
            if ($product->id <= 2) {
                DetailFotoProduk::create([
                    'produk_id' => $product->id,
                    'path_foto' => 'assets/img/portfolio/detail-' . $product->id . '.jpg',
                    'deskripsi_foto' => 'Foto detail produk ' . $product->nama_produk,
                ]);
            }
        }

        $this->command->info('Test products have been created successfully!');
    }
}
