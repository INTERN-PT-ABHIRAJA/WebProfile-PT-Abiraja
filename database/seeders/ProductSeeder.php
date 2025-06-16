<?php

namespace Database\Seeders;

use App\Models\AnakPerusahaan;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get first company or create one if doesn't exist
        $company = AnakPerusahaan::first();
        if (!$company) {
            $company = AnakPerusahaan::create([
                'nama_perusahaan' => 'PT Abhiraja Digital Solutions',
                'alamat_perusahaan' => 'Jakarta, Indonesia',
                'telepon_perusahaan' => '+62-21-12345678',
                'email_perusahaan' => 'info@abhiraja.com',
                'deskripsi_perusahaan' => 'Perusahaan teknologi digital terdepan'
            ]);
        }

        $products = [
            [
                'nama_produk' => 'Paket Digital Marketing Premium',
                'deskripsi_produk' => 'Solusi pemasaran digital lengkap untuk meningkatkan brand awareness dan penjualan online Anda. Termasuk social media management, content creation, dan advertising strategy.',
                'harga' => 2500000,
                'stok' => 10,
                'foto' => 'assets/img/portfolio/digital-marketing.jpg',
            ],
            [
                'nama_produk' => 'Paket Web Development Professional',
                'deskripsi_produk' => 'Pembuatan website modern dengan teknologi terkini, responsive design, dan performa optimal. Cocok untuk bisnis yang ingin hadir secara profesional di dunia digital.',
                'harga' => 5000000,
                'stok' => 5,
                'foto' => 'assets/img/portfolio/web-development.jpg',
            ],
            [
                'nama_produk' => 'Paket Branding & Identity',
                'deskripsi_produk' => 'Layanan lengkap pembuatan brand identity, logo design, dan guidelines untuk bisnis Anda. Membantu membangun identitas visual yang kuat dan memorable.',
                'harga' => 3500000,
                'stok' => 8,
                'foto' => 'assets/img/portfolio/branding.jpg',
            ],
            [
                'nama_produk' => 'Paket SEO Optimization',
                'deskripsi_produk' => 'Optimasi mesin pencari untuk meningkatkan ranking website Anda di Google dan search engine lainnya. Termasuk audit SEO, keyword research, dan optimization strategy.',
                'harga' => 1800000,
                'stok' => 15,
                'foto' => 'assets/img/portfolio/seo.jpg',
            ],
            [
                'nama_produk' => 'Paket Mobile App Development',
                'deskripsi_produk' => 'Pengembangan aplikasi mobile Android dan iOS dengan fitur lengkap dan user-friendly interface. Dari konsep hingga deployment di app store.',
                'harga' => 8500000,
                'stok' => 3,
                'foto' => 'assets/img/portfolio/mobile-app.jpg',
            ],
            [
                'nama_produk' => 'Paket Website Maintenance',
                'deskripsi_produk' => 'Layanan pemeliharaan website bulanan untuk menjaga performa, keamanan, dan update konten. Termasuk backup rutin, security monitoring, dan technical support.',
                'harga' => 650000,
                'stok' => 20,
                'foto' => 'assets/img/portfolio/maintenance.jpg',
            ],
            [
                'nama_produk' => 'Paket E-Commerce Solution',
                'deskripsi_produk' => 'Solusi lengkap untuk toko online dengan fitur payment gateway, inventory management, dan customer relationship management. Siap untuk scale up bisnis Anda.',
                'harga' => 7200000,
                'stok' => 4,
                'foto' => 'assets/img/portfolio/ecommerce.jpg',
            ],
            [
                'nama_produk' => 'Paket Social Media Management',
                'deskripsi_produk' => 'Pengelolaan media sosial profesional untuk meningkatkan engagement dan followers. Termasuk content planning, scheduling, dan performance analytics.',
                'harga' => 1200000,
                'stok' => 12,
                'foto' => 'assets/img/portfolio/social-media.jpg',
            ],
            [
                'nama_produk' => 'Paket UI/UX Design',
                'deskripsi_produk' => 'Desain antarmuka pengguna yang intuitif dan user experience yang optimal untuk aplikasi dan website. Fokus pada usability dan conversion rate optimization.',
                'harga' => 4200000,
                'stok' => 6,
                'foto' => 'assets/img/portfolio/ui-ux.jpg',
            ],
            [
                'nama_produk' => 'Paket Cloud Hosting Premium',
                'deskripsi_produk' => 'Layanan hosting cloud dengan performa tinggi, uptime 99.9%, dan security terbaik. Termasuk SSL certificate, daily backup, dan 24/7 technical support.',
                'harga' => 890000,
                'stok' => 25,
                'foto' => 'assets/img/portfolio/cloud-hosting.jpg',
            ],
            [
                'nama_produk' => 'Paket Digital Consultation',
                'deskripsi_produk' => 'Konsultasi digital strategy untuk transformasi bisnis digital. Analisis mendalam tentang peluang digital dan roadmap implementasi yang tepat.',
                'harga' => 2800000,
                'stok' => 0,  // Out of stock for testing
                'foto' => 'assets/img/portfolio/consultation.jpg',
            ],
            [
                'nama_produk' => 'Paket Content Marketing',
                'deskripsi_produk' => 'Strategi content marketing yang komprehensif untuk membangun brand authority dan attract qualified leads. Termasuk blog writing, video content, dan content distribution.',
                'harga' => 1950000,
                'stok' => 9,
                'foto' => 'assets/img/portfolio/content-marketing.jpg',
            ]
        ];

        foreach ($products as $productData) {
            Produk::create([
                'id_anak_perusahaan' => $company->id_anak_perusahaan,
                'nama_produk' => $productData['nama_produk'],
                'deskripsi_produk' => $productData['deskripsi_produk'],
                'harga' => $productData['harga'],
                'stok' => $productData['stok'],
                'foto' => $productData['foto'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('Product seeder completed! ' . count($products) . ' products created.');
    }
}
