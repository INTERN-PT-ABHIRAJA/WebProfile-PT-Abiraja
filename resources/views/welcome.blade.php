<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PT ABHIRAJA GIOVANNI TRYAMANDA</title>
    <link rel="icon" href="assets/img/logo/Logo.png" type="image/png">

    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        as="style">
    <link rel="preload" href="assets/css/style.css" as="style">

    <!-- Critical CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Non-critical CSS - load async -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/swiper/swiper-bundle.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/animations.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/subsidiaries.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/product-modal.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/digital-services.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Fallback for non-JS browsers -->
    <noscript>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/css/animations.css" rel="stylesheet">
        <link href="assets/css/subsidiaries.css" rel="stylesheet">
        <link href="assets/css/product-modal.css" rel="stylesheet">
        <link href="assets/css/digital-services.css" rel="stylesheet">
    </noscript>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo/Logo.png" alt="Logo" class="img-fluid">
                </a>
                <div class="d-none d-lg-block d-md-block head">
                    <h6 class="text-black fw-bold m-0 p-0">PT ABHIRAJA GIOVANNI TRYAMANDA</h6>
                </div>
                <div class="d-sm-block d-md-none d-lg-none head">
                    <h6 class="text-black fw-bold m-0 p-0">PT ABHIRAJA GIOVANNI T</h6>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto w-100 justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#home">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#about">TENTANG KAMI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#services">LAYANAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#subsidiaries">ANAK PERUSAHAAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#digital-services">JASA DIGITAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#products">PRODUK KAMI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#contact">KONTAK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>


        <section class="hero-section-new" id="home">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1: Main Company Overview -->
                    <div class="swiper-slide">
                        <div class="slide-background"
                            style="background-image: url('{{ asset('assets/img/1cityscape.jpg') }}');"></div>
                        <div class="slide-overlay"></div>
                        <div class="slide-content main-slide">
                            <h1 class="fw-bold pb-3 pt-5">PT ABHIRAJA GIOVANNI TRYAMANDA</h1>
                            <p class="fs-5 kuning">Mitra Strategis untuk Kesuksesan Anda</p>
                            <div class="container-kotak pt-2 d-flex">
                                <div class="kotak" data-aos="fade-up" data-aos-delay="100">
                                    <i class="fas fa-university kuning"></i>
                                    <div>PENDIDIKAN</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="200">
                                    <i class="fas fa-user kuning"></i>
                                    <div>BRANDING</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="300">
                                    <i class="fas fa-money-bill kuning"></i>
                                    <div>FINANCE</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="400">
                                    <i class="fas fa-tasks kuning"></i>
                                    <div>MANAGEMENT</div>
                                </div>
                            </div>
                            <div class="container-kotak pt-4">
                                <div class="kotak" data-aos="fade-up" data-aos-delay="500">
                                    <i class="fas fa-hammer kuning"></i>
                                    <div>WOOD STUDIO</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="600">
                                    <i class="fas fa-tree kuning"></i>
                                    <div>AGRICULTURE</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="700">
                                    <i class="fas fa-hamburger kuning"></i>
                                    <div>JASA BOGA</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Branding & Digital -->
                    <div class="swiper-slide">
                        <div class="slide-background"
                            style="background-image: url('{{ asset('assets/img/hero/slide-2.jpg') }}');"></div>
                        <div class="slide-overlay"></div>
                        <div class="slide-content">
                            <h1>Jasa Pembuatan Aplikasi & Website</h1>
                            <p>Kami menyediakan layanan pembuatan aplikasi mobile dan website profesional untuk mendukung transformasi digital bisnis Anda.</p>
                            <a href="#contact" class="cta-button">Lihat Profile</a>
                        </div>
                    </div>

                    <!-- Slide 3: Finance & Tax -->
                    <div class="swiper-slide">
                        <div class="slide-background"
                            style="background-image: url('{{ asset('assets/img/hero/slide-3.jpg') }}');"></div>
                        <div class="slide-overlay"></div>
                        <div class="slide-content">
                            <h1>Finance & Tax</h1>
                            <p>Layanan keuangan dan perpajakan profesional untuk mendukung pertumbuhan bisnis Anda.</p>
                            <a href="#contact" class="cta-button">Konsultasi Sekarang</a>
                        </div>
                    </div>

                    <!-- Slide 4: KOL Management -->
                    <div class="swiper-slide">
                        <div class="slide-background"
                            style="background-image: url('{{ asset('assets/img/hero/slide-4.jpg') }}');"></div>
                        <div class="slide-overlay"></div>
                        <div class="slide-content">
                            <h1>KOL Management</h1>
                            <p>Manajemen Key Opinion Leader untuk memperluas jangkauan promosi produk dan layanan Anda.
                            </p>
                            <a href="#contact" class="cta-button">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>

                    <!-- Slide 5: Produk Unggulan Abhiraja -->
                    <div class="swiper-slide">
                        <div class="slide-background"
                            style="background-image: url('{{ asset('assets/img/hero/slide-5.jpg') }}');"></div>
                            <div class="slide-overlay"></div>
                        <div class="slide-content">
                            <h1>Produk Unggulan Abhiraja</h1>
                            <p>Temukan berbagai produk dan layanan terbaik dari PT Abhiraja Giovanni Tryamanda.</p>
                            <a href="#products" class="cta-button">Lihat Produk</a>
                        </div>
                    </div>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
        </section>
        <section class="page-section-2" id="about">
            <div class="container">
                <div class="row align-items-center bg-white">
                    <div class="col-md-6 deskripsi-PT" data-aos="fade-right">
                        <h2 class="fw-bold mb-4">PT ABHIRAJA GIOVANNI TRYARMANDA</h2>
                        <p>PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk
                            memberikan layanan
                            berkualitas tinggi di berbagai bidang, termasuk pendidikan, branding, keuangan, dan lebih
                            banyak lagi.</p>
                        <p>Kami memahami bahwa setiap bisnis memiliki kebutuhan unik, itulah sebabnya kami menawarkan
                            solusi yang disesuaikan untuk membantu Anda mencapai tujuan Anda. Dengan tim ahli yang
                            berpengalaman, kami siap menjadi mitra strategis untuk kesuksesan Anda.</p>
                        <button class="btn-custom mt-3" data-bs-toggle="modal"
                            data-bs-target="#aboutModal">Selengkapnya</button>
                    </div>
                    <div class="col-md-6 text-center logo" data-aos="fade-left">
                        <img src="assets/img/logo/LogoCut.png" class="img-fluid" alt="Logo">
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section-33" id="services">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Content Section -->
                    <div class="col-lg-6 col-md-12" data-aos="fade-right">
                        <div class="services-content">
                            <div class="section-badge mb-3">
                                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                                    <i class="fas fa-handshake me-2"></i>Success Stories
                                </span>
                            </div>
                            <h1 class="text-white fw-bold mb-4 display-5">Ikuti sukses mitra kami menuju kesuksesan.
                            </h1>
                            <p class="text-white-75 mb-4 lead">Konsultasikan permasalahan UMKM atau masalah pendidikan
                                Anda pada kami. Dapatkan konsultasi terbaik dari ahlinya untuk membantu bisnis Anda
                                berkembang.</p>

                            <!-- Statistics -->
                            <div class="row mb-4">
                                <div class="col-6 col-md-4">
                                    <div class="stat-item text-center">
                                        <h3 class="text-warning fw-bold mb-1 counter" data-target="491">491</h3>
                                        <small class="text-white-50">Klien Puas</small>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="stat-item text-center">
                                        <h3 class="text-warning fw-bold mb-1 counter" data-target="327">327</h3>
                                        <small class="text-white-50">Proyek Selesai</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mt-3 mt-md-0">
                                    <div class="stat-item text-center">
                                        <h3 class="text-warning fw-bold mb-1 counter" data-target="98">98</h3>
                                        <small class="text-white-50">% Kepuasan</small>
                                    </div>
                                </div>
                            </div>

                            <div class="action-buttons">
                                <button class="btn-custom-primary me-3" data-bs-toggle="modal"
                                    data-bs-target="#contactModal">
                                    <i class="fas fa-phone me-2"></i>Hubungi Kami
                                </button>
                                <a href="{{ asset('assets/pdf/DOKTER KONTEN INDONESIA COMPRO & PL.pdf') }}" 
                                   target="_blank" 
                                   class="btn-custom-outline text-decoration-none">
                                    <i class="fas fa-file-pdf me-2"></i>Lihat Portfolio
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Interactive Gallery Section -->
                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0" data-aos="fade-left">
                        <div class="interactive-gallery">
                            <!-- Main Display -->
                            <div class="main-gallery-item">
                                <div class="gallery-card active" data-index="0">
                                    <img src="assets/img/portfolio/kayu.jpg" alt="Success Story 1" class="img-fluid">
                                    <div class="gallery-overlay">
                                        <div class="gallery-content">
                                            <h5 class="text-white fw-bold">Furniture Premium</h5>
                                            <p class="text-white-75 mb-0">Produksi furniture berkualitas tinggi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-card" data-index="1">
                                    <img src="assets/img/portfolio/sawah.jpg" alt="Success Story 2" class="img-fluid">
                                    <div class="gallery-overlay">
                                        <div class="gallery-content">
                                            <h5 class="text-white fw-bold">Pertanian Modern</h5>
                                            <p class="text-white-75 mb-0">Solusi pertanian berkelanjutan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-card" data-index="2">
                                    <img src="assets/img/portfolio/kayu3.jpg" alt="Success Story 3" class="img-fluid">
                                    <div class="gallery-overlay">
                                        <div class="gallery-content">
                                            <h5 class="text-white fw-bold">Kerajinan Eksklusif</h5>
                                            <p class="text-white-75 mb-0">Desain unik dan berkualitas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Thumbnail Navigation -->
                            <div class="gallery-thumbnails mt-3">
                                <div class="thumbnail-item active" data-index="0">
                                    <img src="assets/img/portfolio/kayu.jpg" alt="Thumbnail 1">
                                </div>
                                <div class="thumbnail-item" data-index="1">
                                    <img src="assets/img/portfolio/sawah.jpg" alt="Thumbnail 2">
                                </div>
                                <div class="thumbnail-item" data-index="2">
                                    <img src="assets/img/portfolio/kayu3.jpg" alt="Thumbnail 3">
                                </div>
                            </div>

                            <!-- Progress Indicators -->
                            <div class="gallery-progress mt-3">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 33.33%"></div>
                                </div>
                                <span class="progress-text text-white-50">1 of 3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subsidiaries Section -->
        <section class="subsidiaries-section py-5 bg-gradient" id="subsidiaries">
            <div class="container">
                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="subtitle-animation mb-3">
                        <span class="badge bg-warning text-dark px-4 py-2 rounded-pill shadow-sm">
                            <i class="fas fa-building me-2"></i>Jaringan Bisnis
                        </span>
                    </div>
                    <h2 class="display-5 fw-bold mb-4 text-dark gradient-text">Anak Perusahaan Kami</h2>

                    <p class="lead text-muted mx-auto mb-4" style="max-width: 800px;">
                        Kami memiliki beberapa anak perusahaan yang beroperasi di berbagai bidang untuk
                        mendukung layanan kami.
                    </p>
                </div>

                <!-- Subsidiaries Cards Grid -->
                <div class="row g-4 justify-content-center" id="subsidiaries-container">
                    @forelse($anakPerusahaan as $index => $company)
                        <div class="col-lg-4 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                            <div class="subsidiary-card-new bg-white rounded-4 shadow-lg h-100 border-0 position-relative overflow-hidden">
                                <!-- Card Header with Large Logo -->
                                <div class="card-header-new text-center p-4 position-relative">
                                    <div class="company-logo-new-container mx-auto mb-3">
                                        @if($company->foto)
                                            <img src="{{ $company->foto_url }}" alt="{{ $company->nama_perusahaan }}"
                                                class="company-logo-new">
                                        @else
                                            <img src="assets/img/Mitra/placeholder.png" alt="{{ $company->nama_perusahaan }}"
                                                class="company-logo-new">
                                        @endif
                                        <div class="logo-overlay"></div>
                                    </div>
                                    
                                    @if($company->kategori)
                                        <span class="badge bg-gradient-primary text-white px-3 py-2 rounded-pill mb-2 category-badge">
                                            <i class="fas fa-tag me-1"></i>{{ $company->kategori->nama_kategori }}
                                        </span>
                                    @endif
                                    
                                    <h5 class="company-name-new mb-2 text-dark fw-bold">{{ $company->nama_perusahaan }}</h5>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body-new p-4 pt-0">
                                    <p class="company-description text-muted mb-4 line-clamp-3">
                                        {{ $company->deskripsi ?: 'Perusahaan yang bergerak dalam bidang ' . ($company->kategori ? $company->kategori->nama_kategori : 'bisnis') . ' dengan komitmen memberikan layanan terbaik.' }}
                                    </p>

                                    <!-- Company Info Grid -->
                                    <div class="company-info-grid">
                                        @if($company->alamat)
                                            <div class="info-item d-flex align-items-start mb-3">
                                                <div class="info-icon me-3">
                                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                                </div>
                                                <div class="info-content">
                                                    <small class="text-muted d-block">Lokasi</small>
                                                    <span class="fw-medium text-dark">{{ $company->alamat }}</span>
                                                </div>
                                            </div>
                                        @endif
                                        
                                        @if($company->berdiri_sejak)
                                            <div class="info-item d-flex align-items-start mb-3">
                                                <div class="info-icon me-3">
                                                    <i class="fas fa-calendar-alt text-primary"></i>
                                                </div>
                                                <div class="info-content">
                                                    <small class="text-muted d-block">Berdiri Sejak</small>
                                                    <span class="fw-medium text-dark">{{ $company->berdiri_sejak->format('Y') }}</span>
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Contact Info -->
                                        <div class="info-item d-flex align-items-start mb-3">
                                            <div class="info-icon me-3">
                                                <i class="fas fa-users text-primary"></i>
                                            </div>
                                            <div class="info-content">
                                                <small class="text-muted d-block">Status</small>
                                                <span class="fw-medium text-success">Anak Perusahaan Aktif</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Footer -->
                                <div class="card-footer-new p-4 pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="social-links">
                                            <a href="#" class="social-link" title="WhatsApp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <!-- Decorative Elements -->
                                <div class="card-decoration-1"></div>
                                <div class="card-decoration-2"></div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <div class="empty-state py-5">
                                <i class="fas fa-building fa-4x text-muted mb-3"></i>
                                <h5 class="text-muted mb-2">Belum Ada Data Anak Perusahaan</h5>
                                <p class="text-muted">Data anak perusahaan akan ditampilkan di sini ketika tersedia.</p>
                            </div>
                        </div>
                    @endforelse

                    <div class="company-stats d-flex justify-content-between align-items-center">
                        <div class="stat-item">

                        </div>
                        <div class="stat-item">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Digital Services Section -->
        <section class="digital-services-section" id="digital-services">
            <div class="container">
                <div class="row align-items-center min-vh-75">
                    <!-- Left Content -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="service-content-wrapper">
                            <!-- Badge -->
                            <div class="service-badge mb-4">
                                <span class="badge-text">
                                    <i class="fas fa-code me-2"></i>
                                    Digital Innovation
                                </span>
                                <div class="badge-glow"></div>
                            </div>
                            
                            <!-- Title -->
                            <h2 class="service-title mb-4">
                                <span class="gradient-text">Solusi Website</span><br>
                                & Aplikasi Modern
                            </h2>
                            
                            <!-- Description -->
                            <p class="service-description mb-4">
                                Transformasikan bisnis Anda dengan teknologi terdepan. Kami menghadirkan solusi digital yang inovatif, responsif, dan user-friendly untuk meningkatkan produktivitas dan jangkauan bisnis Anda.
                            </p>
                            
                            <!-- Features List -->
                            <div class="features-grid mb-5">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                                    <div class="feature-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6>Responsive Design</h6>
                                        <small>Tampil sempurna di semua perangkat</small>
                                    </div>
                                </div>
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="feature-icon">
                                        <i class="fas fa-rocket"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6>Performance Optimized</h6>
                                        <small>Loading cepat & SEO friendly</small>
                                    </div>
                                </div>
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                                    <div class="feature-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6>Security First</h6>
                                        <small>Keamanan data terjamin</small>
                                    </div>
                                </div>
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                                    <div class="feature-icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6>24/7 Support</h6>
                                        <small>Dukungan teknis berkelanjutan</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Action Buttons -->
                            <div class="action-buttons d-flex flex-wrap gap-3">
                                <a href="{{ route('digital.services') }}" class="btn-primary-custom">
                                    <span class="btn-text">Jelajahi Layanan</span>
                                    <span class="btn-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <div class="btn-ripple"></div>
                                </a>
                                <a href="{{ route('digital.services') }}" class="btn-outline-custom">
                                    <i class="fas fa-phone me-2"></i>
                                    Konsultasi Gratis
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Visual -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="service-visual-wrapper">
                            <!-- Main Visual Container -->
                            <div class="main-visual-container">
                                <!-- Floating Elements -->
                                <div class="floating-element element-1" data-speed="2">
                                    <div class="tech-card">
                                        <i class="fab fa-html5"></i>
                                        <span>HTML5</span>
                                    </div>
                                </div>
                                <div class="floating-element element-2" data-speed="3">
                                    <div class="tech-card">
                                        <i class="fab fa-css3-alt"></i>
                                        <span>CSS3</span>
                                    </div>
                                </div>
                                <div class="floating-element element-3" data-speed="1.5">
                                    <div class="tech-card">
                                        <i class="fab fa-js"></i>
                                        <span>JavaScript</span>
                                    </div>
                                </div>
                                <div class="floating-element element-4" data-speed="2.5">
                                    <div class="tech-card">
                                        <i class="fab fa-react"></i>
                                        <span>React</span>
                                    </div>
                                </div>
                                <div class="floating-element element-5" data-speed="1.8">
                                    <div class="tech-card">
                                        <i class="fab fa-php"></i>
                                        <span>PHP</span>
                                    </div>
                                </div>
                                <div class="floating-element element-6" data-speed="2.2">
                                    <div class="tech-card">
                                        <i class="fab fa-laravel"></i>
                                        <span>Laravel</span>
                                    </div>
                                </div>
                                
                                <!-- Central Device Mockup -->
                                <div class="device-mockup">
                                    <div class="laptop-mockup">
                                        <div class="screen">
                                            <div class="code-animation">
                                                <div class="code-line"><span class="tag">&lt;html&gt;</span></div>
                                                <div class="code-line"><span class="tag">&nbsp;&nbsp;&lt;head&gt;</span></div>
                                                <div class="code-line"><span class="tag">&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;</span>PT Abhiraja<span class="tag">&lt;/title&gt;</span></div>
                                                <div class="code-line"><span class="tag">&nbsp;&nbsp;&lt;/head&gt;</span></div>
                                                <div class="code-line"><span class="tag">&nbsp;&nbsp;&lt;body&gt;</span></div>
                                                <div class="code-line"><span class="tag">&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;</span>Innovation<span class="tag">&lt;/h1&gt;</span></div>
                                                <div class="code-line typing-animation">...</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mobile-mockup">
                                        <div class="mobile-screen">
                                            <div class="mobile-content">
                                                <div class="mobile-header"></div>
                                                <div class="mobile-body">
                                                    <div class="mobile-card active"></div>
                                                    <div class="mobile-card"></div>
                                                    <div class="mobile-card"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Background Effects -->
                                <div class="bg-effect effect-1"></div>
                                <div class="bg-effect effect-2"></div>
                                <div class="bg-effect effect-3"></div>
                                
                                <!-- Stats Counter -->
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Animated Background -->
            <div class="animated-bg">
                <div class="particle" style="--delay: 0s; --duration: 20s;"></div>
                <div class="particle" style="--delay: 2s; --duration: 25s;"></div>
                <div class="particle" style="--delay: 4s; --duration: 18s;"></div>
                <div class="particle" style="--delay: 6s; --duration: 22s;"></div>
                <div class="particle" style="--delay: 8s; --duration: 28s;"></div>
            </div>
        </section>

        <section class="products-section-enhanced" id="products">
            <div class="container">
                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="section-badge mb-3">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                            <i class="fas fa-star me-2"></i>Layanan Terbaik
                        </span>
                    </div>
                    <h2 class="display-5 fw-bold mb-4 text-dark">Solusi Bisnis Terpadu</h2>
                    <p class="lead text-muted mx-auto mb-5" style="max-width: 800px;">
                        Pilih layanan yang sesuai dengan kebutuhan bisnis Anda. Setiap paket dirancang khusus untuk
                        memberikan hasil maksimal.
                    </p>
                </div>

                <!-- Filter Buttons (Dynamic from Database) -->
                <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="filter-buttons">
                        <button class="filter-btn active" data-filter="all">
                            <i class="fas fa-th-large me-2"></i>Semua Layanan
                        </button>

                        @foreach($categories as $kategori)
                            <button class="filter-btn" data-filter="{{ \Str::slug($kategori->nama_kategori) }}">
                                {{-- Optional icon mapping --}}
                                @php
                                    $iconMap = [
                                        'Pendidikan' => 'fas fa-graduation-cap',
                                        'Bisnis' => 'fas fa-briefcase',
                                        'Kerajinan' => 'fas fa-hammer',
                                        'Pertanian' => 'fas fa-seedling',
                                    ];
                                    $iconClass = $iconMap[$kategori->nama_kategori] ?? 'fas fa-tags';
                                @endphp

                                <i class="{{ $iconClass }} me-2"></i>{{ $kategori->nama_kategori }}
                            </button>
                        @endforeach
                    </div>
                </div>


                <!-- Products Grid -->
                <div class="products-grid" id="productsGrid">
                    @forelse($produk as $index => $item)
                    <div class="product-item" data-category="{{ \Str::slug($item->anakPerusahaan->kategori->nama_kategori ?? 'other') }}" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 50) }}">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                @if($item->detailFotos->isNotEmpty())
                                    <img src="{{ $item->detailFotos->first()->foto_url }}" alt="{{ $item->nama_produk }}" class="product-image">
                                @else
                                    <img src="{{ $item->foto_url }}" alt="{{ $item->nama_produk }}" class="product-image">
                                @endif
                                <div class="product-overlay">
                                    <div class="product-icons">
                                        <button class="icon-btn" title="Tambah ke Favorit">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="icon-btn" title="Konsultasi">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                @if($index === 0)
                                <div class="product-badge popular">
                                    <i class="fas fa-fire me-1"></i>Populer
                                </div>
                                @endif
                                <div class="product-category-tag">{{ $item->anakPerusahaan->kategori->nama_kategori ?? 'Umum' }}</div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title">{{ $item->nama_produk }}</h4>
                                    <div class="product-rating">
                                        @php
                                            $rating = $item->rating;
                                            $fullStars = floor($rating);
                                            $halfStar = ($rating - $fullStars) >= 0.5;
                                            $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                        @endphp
                                        
                                        @for($i = 0; $i < $fullStars; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        
                                        @if($halfStar)
                                            <i class="fas fa-star-half-alt"></i>
                                        @endif
                                        
                                        @for($i = 0; $i < $emptyStars; $i++)
                                            <i class="far fa-star"></i>
                                        @endfor
                                        
                                        <span class="rating-text">({{ $item->rating }})</span>
                                    </div>
                                </div>
                                <p class="product-description">{{ \Str::limit($item->deskripsi_produk , 100 ) }}</p>
                                <div class="product-features">
                                    @foreach($item->benefits->take(3) as $benefit)
                                        <span class="feature-tag"><i class="fas fa-check me-1"></i>{{ $benefit->nama_benefit }}</span>
                                    @endforeach
                                </div>
                                <div class="product-footer">
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal"
                                        data-product-id="{{ $item->id_produk }}"
                                        data-product-name="{{ $item->nama_produk }}"
                                        data-product-category="{{ $item->anakPerusahaan->kategori->nama_kategori ?? 'Umum' }}"
                                        data-product-description="{{ $item->deskripsi_produk }}"
                                        @if($item->detailFotos->isNotEmpty())
                                            data-product-image="{{ $item->detailFotos->first()->foto_url }}"
                                        @else
                                            data-product-image="{{ $item->foto_url }}"
                                        @endif
                                        data-product-rating="{{ $item->rating }}">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @empty
                    <div class="col-12 text-center">
                        <p>Tidak ada produk tersedia saat ini.</p>
                    </div>
                    @endforelse
                </div>

                <!-- Call to Action -->
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="cta-section">
                        <h3 class="fw-bold mb-3">Tidak Menemukan Yang Anda Cari?</h3>
                        <p class="mb-4 ">Konsultasikan kebutuhan khusus Anda dengan tim ahli kami</p>
                        <button class="btn-cta-custom" data-bs-toggle="modal" data-bs-target="#contactModal">
                            <i class="fas fa-phone me-2"></i>Konsultasi Gratis
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="fw-bold mb-3">Hubungi Kami</h2>
                    <p class="text-white-50 mx-auto" style="max-width: 700px;">Jangan ragu untuk menghubungi kami jika
                        Anda memiliki pertanyaan atau ingin bekerja sama.</p>
                </div>

                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Alamat</h5>
                                    <p>Jl. Alamanda 7 No. 39 Jatinangor, Sumedang
                                        Jl. Raya Buahdua 2, Kec. Buahdua Sumedang</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Telepon</h5>
                                    <p>+62 889 7158 9438</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Email</h5>
                                    <p>Abhirajagiovannicompany@gmail.com</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Jam Kerja</h5>
                                    <p>Senin - Jumat: 08.00 - 17.00</p>
                                    <p>Sabtu: 09.00 - 14.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left">


                        {{-- Notifikasi Error --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap"
                                        value="{{ old('name') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="{{ old('email') }}">
                                </div>
                            </div>
                            <input type="text" name="subject" class="form-control mt-3" placeholder="Subjek"
                                value="{{ old('subject') }}">
                            <textarea name="message" class="form-control mt-3"
                                placeholder="Pesan">{{ old('message') }}</textarea>
                            <button type="submit" class="btn-contact mt-3">Kirim Pesan</button>
                        </form>
                    </div>





                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="footer-about">
                        <div class="footer-logo">
                            <img src="assets/img/logo/Logo.png" alt="Logo">
                        </div>
                        <p>PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk
                            memberikan layanan berkualitas tinggi di berbagai bidang.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                    <div class="footer-links">
                        <h5>Tautan Cepat</h5>
                        <ul>
                            <li><a href="#home">Beranda</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#services">Layanan</a></li>
                            <li><a href="#subsidiaries">Anak Perusahaan</a>
                            </li>
                            <li><a href="#products">Produk</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                    <div class="footer-links">
                        <h5>Layanan</h5>
                        <ul>
                            <li><a href="#">Pendidikan</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Wood Studio</a></li>
                            <li><a href="#">Agriculture</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-newsletter">
                        <h5>Berlangganan</h5>
                        <p>Berlangganan kami untuk mendapatkan informasi terbaru tentang produk dan layanan kami.</p>
                        <form class="newsletter-form">
                            <input type="email" class="form-control" placeholder="Email Anda">
                            <button type="submit" class="btn">Langganan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2023 PT Abhiraja Giovanni Tryamanda. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>


    <div class="modal fade" id="aboutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tentang Kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p> PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk
                        memberikan layanan
                        berkualitas tinggi di berbagai bidang, termasuk pendidikan, branding, keuangan, dan lebih banyak
                        lagi. Dengan berbagai
                        layanan yang kami sediakan, kami bertujuan membantu klien kami mencapai kesuksesan di berbagai
                        sektor usaha
                        mereka. Kami mengutamakan profesionalisme, inovasi, dan kepuasan klien sebagai pilar utama.</p>

                    <h5 class="mt-4">Visi</h5>
                    <p>Menjadi perusahaan multiservices
                        terkemuka di Indonesia yang dikenal
                        dengan kualitas layanan terbaik dan
                        inovasi yang berkelanjutan.</p>

                    <h5 class="mt-4">Misi</h5>
                    <ul>
                        <li>Memberikan solusi konsultasi yang inovatif dan
                            berorientasi pada hasil</li>
                        <li>Menyediakan layanan yang memenuhi standar
                            kualitas tinggi</li>
                        <li>Membangun hubungan jangka panjang dengan
                            klien melalui kepercayaan dan integritas.</li>
                        <li> Mendukung perkembangan bisnis klien dengan
                            layanan yang terintegrasi dan holistik</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-modal" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    @include('modals.contactModal')

    <div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content product-modal-content">
                <div class="modal-header product-modal-header">
                    <div class="d-flex align-items-center">
                        <div class="product-badge-modal me-3">
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <h5 class="modal-title fw-bold mb-0">Detail Produk Unggulan</h5>
                    </div>
                    <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body product-modal-body">
                    <div class="row g-4">
                        <!-- Product Image Gallery -->
                        <div class="col-lg-6">
                            <div class="product-gallery">
                                <div class="main-image-container">
                                    <div class="image-overlay"></div>
                                    <img src="assets/img/portfolio/jamur.jpg" alt="Product" class="main-product-image" id="mainProductImage">
                                    <div class="image-zoom-btn">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
                                <div class="thumbnail-gallery mt-3" id="productThumbnails">
                                    <!-- Thumbnails will be populated by JavaScript -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product Details -->
                        <div class="col-lg-6">
                            <div class="product-details-container">
                                <div class="product-header mb-4">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <span class="product-category-badge">
                                            <i class="fas fa-graduation-cap me-1"></i>
                                            Pendidikan
                                        </span>
                                        <div class="product-rating">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="ms-2 text-muted">(4.9)</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-description mb-4">
                                    <p>Program pendidikan komprehensif kami dirancang untuk membantu institusi pendidikan
                                        meningkatkan kualitas pembelajaran dan pengembangan siswa. Program ini mencakup
                                        kurikulum, pelatihan guru, dan sistem manajemen pendidikan yang terintegrasi.</p>
                                </div>

                                <!-- Interactive Tabs -->
                                <div class="product-tabs mb-4">
                                    <ul class="nav nav-pills product-nav-pills" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#features-tab">
                                                <i class="fas fa-list-check me-2"></i>benefit
                                            </button>
                                        </li>
                                    </ul>
                                    
                                    <div class="tab-content mt-3">
                                        <div class="tab-pane fade show active" id="features-tab">
                                            <div class="features-list" id="benefitsList">
                                                <!-- Benefits will be populated by JavaScript -->
                                            </div>
                                        </div>
                                    </div>

                                <!-- Action Buttons -->
                                <div class="product-actions">
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <button class="btn-product-primary w-100" data-action="contact">
                                                <i class="fas fa-phone me-2"></i>
                                                Hubungi Kami
                                            </button>
                                        </div>
                                    </div>
                                    <div class="social-share mt-3">
                                        <span class="share-label">Bagikan:</span>
                                        <button class="share-btn" data-platform="whatsapp">
                                            <i class="fab fa-whatsapp"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer product-modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="product-guarantee">
                            <i class="fas fa-shield-alt text-success me-2"></i>
                            <span class="small text-muted">100% Garansi Kepuasan</span>
                        </div>
                        <div class="footer-actions">
                            <button type="button" class="btn-modal-secondary me-2" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i>Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Detail Anak Perusahaan -->
    <div class="modal fade" id="subsidiariesModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Semua Anak Perusahaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        @forelse($anakPerusahaan as $company)
                            <div class="col-md-6">
                                <div class="subsidiary-detail-card p-4 border rounded-3">
                                    <div class="d-flex align-items-center mb-3">
                                        @if($company->foto)
                                            <img src="{{ $company->foto_url }}" alt="{{ $company->nama_perusahaan }}"
                                                class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <img src="assets/img/portfolio/placeholder.jpg"
                                                alt="{{ $company->nama_perusahaan }}" class="rounded me-3"
                                                style="width: 60px; height: 60px; object-fit: cover;">
                                        @endif
                                        <div>
                                            <h6 class="mb-1">{{ $company->nama_perusahaan }}</h6>
                                            <small class="text-muted">
                                                @if($company->kategori)
                                                    {{ $company->kategori->nama_kategori }}
                                                @endif
                                                �
                                                @if($company->berdiri_sejak)
                                                    Didirikan {{ $company->berdiri_sejak->format('Y') }}
                                                @endif
                                            </small>
                                        </div>
                                    </div>
                                    <p class="small text-muted mb-2">{{ $company->deskripsi }}</p>
                                    <div class="d-flex justify-content-between">
                                        @if($company->alamat)
                                            <small><i class="fas fa-location-dot me-1"></i>{{ $company->alamat }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p class="text-muted">Belum ada data anak perusahaan.</p>
                            </div>
                        @endforelse


    <!-- Scripts - Load in order for better performance -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <!-- Load non-critical scripts with defer -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>

    <!-- Custom scripts -->
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/interactions.js" defer></script>
    <script src="assets/js/swiper-config.js" defer></script>
    
    <!-- Product Modal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the product modal
            const productModal = document.getElementById('productModal');
            
            // Handle modal opening
            productModal.addEventListener('show.bs.modal', function (event) {
                // Get button that triggered the modal
                const button = event.relatedTarget;
                
                // Extract product data
                const productName = button.getAttribute('data-product-name');
                const productCategory = button.getAttribute('data-product-category');
                const productDescription = button.getAttribute('data-product-description');
                const productImage = button.getAttribute('data-product-image');
                const productRating = button.getAttribute('data-product-rating');
                const productId = button.getAttribute('data-product-id');
                
                // Update modal content
                const modalTitle = productModal.querySelector('.modal-title');
                modalTitle.textContent = 'Detail ' + productName;
                
                // Update product image
                const mainImage = productModal.querySelector('#mainProductImage');
                mainImage.src = productImage || 'assets/img/portfolio/default.jpg';
                mainImage.alt = productName;
                
                // Update product category
                const categoryBadge = productModal.querySelector('.product-category-badge');
                
                // Set icon based on category
                let iconClass = 'fas fa-tags';
                if (productCategory === 'Pendidikan') iconClass = 'fas fa-graduation-cap';
                else if (productCategory === 'Bisnis') iconClass = 'fas fa-briefcase';
                else if (productCategory === 'Kerajinan') iconClass = 'fas fa-hammer';
                else if (productCategory === 'Pertanian') iconClass = 'fas fa-seedling';
                
                categoryBadge.innerHTML = `<i class="${iconClass} me-1"></i> ${productCategory}`;
                
                // Update product description
                const description = productModal.querySelector('.product-description p');
                description.textContent = productDescription;
                
                // Create star rating
                const ratingContainer = productModal.querySelector('.product-rating');
                let ratingHTML = '';
                
                const rating = parseFloat(productRating);
                const fullStars = Math.floor(rating);
                const halfStar = (rating - fullStars) >= 0.5;
                const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
                
                for (let i = 0; i < fullStars; i++) {
                    ratingHTML += '<i class="fas fa-star text-warning"></i>';
                }
                
                if (halfStar) {
                    ratingHTML += '<i class="fas fa-star-half-alt text-warning"></i>';
                }
                
                for (let i = 0; i < emptyStars; i++) {
                    ratingHTML += '<i class="far fa-star text-warning"></i>';
                }
                
                ratingHTML += `<span class="ms-2 text-muted">(${rating})</span>`;
                ratingContainer.innerHTML = ratingHTML;

                // Fetch additional product data from API if needed
                if (productId) {
                    fetchProductDetails(productId);
                }
            });
        });

        function fetchProductDetails(productId) {
            // Fetch product details from API
            fetch(`/api/products/${productId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Update benefits list
                    const benefitsList = document.getElementById('benefitsList');
                    benefitsList.innerHTML = '';
                    
                    if (data.benefits && data.benefits.length) {
                        data.benefits.forEach((benefit, index) => {
                            const delay = 100 * (index + 1);
                            const benefitItem = document.createElement('div');
                            benefitItem.className = 'feature-item';
                            benefitItem.setAttribute('data-aos', 'fade-up');
                            benefitItem.setAttribute('data-aos-delay', delay);
                            benefitItem.innerHTML = `
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>${benefit.nama_benefit}</span>
                            `;
                            benefitsList.appendChild(benefitItem);
                        });
                    } else {
                        benefitsList.innerHTML = '<p class="text-muted">Tidak ada fitur khusus yang tersedia.</p>';
                    }
                    
                    // Update photo thumbnails
                    const thumbnailGallery = document.getElementById('productThumbnails');
                    thumbnailGallery.innerHTML = '';
                    
                    if (data.photos && data.photos.length) {
                        data.photos.forEach((photo, index) => {
                            const photoUrl = photo.foto_url;
                            const thumbnailItem = document.createElement('div');
                            thumbnailItem.className = index === 0 ? 'thumbnail-item active' : 'thumbnail-item';
                            thumbnailItem.setAttribute('data-image', photoUrl);
                            thumbnailItem.innerHTML = `<img src="${photoUrl}" alt="Thumbnail">`;
                            
                            // Add click handler to change main image
                            thumbnailItem.addEventListener('click', function() {
                                document.querySelectorAll('.thumbnail-item').forEach(el => el.classList.remove('active'));
                                this.classList.add('active');
                                document.getElementById('mainProductImage').src = this.getAttribute('data-image');
                            });
                            
                            thumbnailGallery.appendChild(thumbnailItem);
                        });
                    } else {
                        // Add default image if no photos
                        const defaultPhoto = document.getElementById('mainProductImage').src;
                        const thumbnailItem = document.createElement('div');
                        thumbnailItem.className = 'thumbnail-item active';
                        thumbnailItem.setAttribute('data-image', defaultPhoto);
                        thumbnailItem.innerHTML = `<img src="${defaultPhoto}" alt="Thumbnail">`;
                        thumbnailGallery.appendChild(thumbnailItem);
                    }
                })
                .catch(error => {
                    console.error('Error fetching product details:', error);
                });
        }
    </script>

    <!-- Interactive Gallery Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Image loading handler
            function handleImageLoading() {
                const images = document.querySelectorAll('.gallery-card img');
                images.forEach(img => {
                    if (img.complete) {
                        img.classList.add('loaded');
                    } else {
                        img.addEventListener('load', () => {
                            img.classList.add('loaded');
                        });
                    }
                });
            }

            // Gallery functionality
            const galleryCards = document.querySelectorAll('.gallery-card');
            const thumbnails = document.querySelectorAll('.thumbnail-item');
            const progressFill = document.querySelector('.progress-fill');
            const progressText = document.querySelector('.progress-text');
            let currentIndex = 0;
            let autoplayInterval;

            // Initialize gallery
            function initGallery() {
                showSlide(0);
                startAutoplay();
                handleImageLoading();
            }

            // Show specific slide
            function showSlide(index) {
                // Remove active class from all
                galleryCards.forEach(card => card.classList.remove('active'));
                thumbnails.forEach(thumb => thumb.classList.remove('active'));

                // Add active class to current
                galleryCards[index].classList.add('active');
                thumbnails[index].classList.add('active');

                // Update progress
                const progressWidth = ((index + 1) / galleryCards.length) * 100;
                progressFill.style.width = progressWidth + '%';
                progressText.textContent = `${index + 1} of ${galleryCards.length}`;

                currentIndex = index;
            }

            // Next slide
            function nextSlide() {
                const next = (currentIndex + 1) % galleryCards.length;
                showSlide(next);
            }

            // Previous slide
            function prevSlide() {
                const prev = (currentIndex - 1 + galleryCards.length) % galleryCards.length;
                showSlide(prev);
            }

            // Autoplay functionality
            function startAutoplay() {
                autoplayInterval = setInterval(nextSlide, 4000);
            }

            function stopAutoplay() {
                clearInterval(autoplayInterval);
            }

            // Thumbnail click handlers
            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener('click', () => {
                    showSlide(index);
                    stopAutoplay();
                    setTimeout(startAutoplay, 2000); // Restart autoplay after manual interaction
                });
            });

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    prevSlide();
                    stopAutoplay();
                    setTimeout(startAutoplay, 2000);
                } else if (e.key === 'ArrowRight') {
                    nextSlide();
                    stopAutoplay();
                    setTimeout(startAutoplay, 2000);
                }
            });

            // Pause autoplay on hover
            const gallery = document.querySelector('.interactive-gallery');
            if (gallery) {
                gallery.addEventListener('mouseenter', stopAutoplay);
                gallery.addEventListener('mouseleave', startAutoplay);
            }

            // Counter animation
            function animateCounters() {
                const counters = document.querySelectorAll('.counter');
                const options = {
                    threshold: 0.7
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counter = entry.target;
                            const target = parseInt(counter.getAttribute('data-target'));
                            const duration = 2000;
                            const step = target / (duration / 16);
                            let current = 0;

                            const updateCounter = () => {
                                current += step;
                                if (current < target) {
                                    counter.textContent = Math.floor(current);
                                    requestAnimationFrame(updateCounter);
                                } else {
                                    counter.textContent = target;
                                }
                            };

                            counter.classList.add('animate-counter');
                            updateCounter();
                            observer.unobserve(counter);
                        }
                    });
                }, options);

                counters.forEach(counter => observer.observe(counter));
            }

            // Initialize everything
            initGallery();
            animateCounters();

            // Touch/swipe support for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            gallery?.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            gallery?.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, { passive: true });

            function handleSwipe() {
                const swipeThreshold = 50;
                const diff = touchStartX - touchEndX;

                if (Math.abs(diff) > swipeThreshold) {
                    if (diff > 0) {
                        nextSlide(); // Swipe left, go to next
                    } else {
                        prevSlide(); // Swipe right, go to previous
                    }
                    stopAutoplay();
                    setTimeout(startAutoplay, 2000);
                }
            }

            // Add visual feedback for interactions
            function addVisualFeedback() {
                const interactiveElements = document.querySelectorAll('.btn-custom-primary, .btn-custom-outline, .thumbnail-item');

                interactiveElements.forEach(element => {
                    element.addEventListener('click', function (e) {
                        // Create ripple effect
                        const ripple = document.createElement('span');
                        const rect = this.getBoundingClientRect();
                        const size = Math.max(rect.width, rect.height);
                        const x = e.clientX - rect.left - size / 2;
                        const y = e.clientY - rect.top - size / 2;

                        ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        background: rgba(255, 213, 0, 0.3);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: ripple 0.6s ease-out;
                        pointer-events: none;
                    `;

                        this.style.position = 'relative';
                        this.style.overflow = 'hidden';
                        this.appendChild(ripple);

                        setTimeout(() => {
                            ripple.remove();
                        }, 600);
                    });
                });
            }

            // Add ripple animation CSS
            const style = document.createElement('style');
            style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
            document.head.appendChild(style);

            addVisualFeedback();
            
            // Digital Services Section Interactions
            initDigitalServicesSection();
            
            // Company Detail Modal Handler
            initCompanyDetailModal();
        });
        

        // Digital Services Section Functions
        function initDigitalServicesSection() {
            // Parallax effect for floating elements
            function handleParallax() {
                const floatingElements = document.querySelectorAll('.floating-element');
                const scrollY = window.pageYOffset;
                
                floatingElements.forEach(element => {
                    const speed = element.dataset.speed || 1;
                    const yPos = -(scrollY * speed / 10);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            }
            
            // Counter animation for stats
            function animateCounters() {
                const counters = document.querySelectorAll('.counter');
                const options = {
                    threshold: 0.7,
                    rootMargin: '0px 0px -100px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counter = entry.target;
                            const target = parseInt(counter.getAttribute('data-target'));
                            const duration = 2000;
                            const step = target / (duration / 16);
                            let current = 0;

                            const updateCounter = () => {
                                current += step;
                                if (current < target) {
                                    counter.textContent = Math.floor(current);
                                    requestAnimationFrame(updateCounter);
                                } else {
                                    counter.textContent = target;
                                }
                            };

                            updateCounter();
                            observer.unobserve(counter);
                        }
                    });
                }, options);

                counters.forEach(counter => observer.observe(counter));
            }
            
            // Tech card hover effects
            function initTechCards() {
                const techCards = document.querySelectorAll('.tech-card');
                
                techCards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'scale(1.15) rotateY(10deg)';
                        this.style.boxShadow = '0 15px 30px rgba(255, 215, 0, 0.3)';
                    });
                    
                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'scale(1) rotateY(0deg)';
                        this.style.boxShadow = 'none';
                    });
                    
                    // Add click animation
                    card.addEventListener('click', function() {
                        this.style.animation = 'none';
                        setTimeout(() => {
                            this.style.animation = '';
                        }, 10);
                        
                        // Create particle effect
                        createParticleEffect(this);
                    });
                });
            }
            
            // Particle effect for interactions
            function createParticleEffect(element) {
                const rect = element.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                
                for (let i = 0; i < 12; i++) {
                    const particle = document.createElement('div');
                    particle.style.cssText = `
                        position: fixed;
                        width: 4px;
                        height: 4px;
                        background: #6495ed;
                        border-radius: 50%;
                        pointer-events: none;
                        z-index: 9999;
                        left: ${centerX}px;
                        top: ${centerY}px;
                    `;
                    
                    document.body.appendChild(particle);
                    
                    const angle = (i / 12) * 2 * Math.PI;
                    const velocity = 100 + Math.random() * 50;
                    const vx = Math.cos(angle) * velocity;
                    const vy = Math.sin(angle) * velocity;
                    
                    particle.animate([
                        { transform: 'translate(0, 0) scale(1)', opacity: 1 },
                        { transform: `translate(${vx}px, ${vy}px) scale(0)`, opacity: 0 }
                    ], {
                        duration: 800,
                        easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
                    }).onfinish = () => {
                        particle.remove();
                    };
                }
            }
            
            // Code animation
            function startCodeAnimation() {
                const codeLines = document.querySelectorAll('.code-line');
                let delay = 500;
                
                codeLines.forEach((line, index) => {
                    setTimeout(() => {
                        line.style.opacity = '1';
                        line.style.transform = 'translateX(0)';
                    }, delay);
                    delay += 500;
                });
                
                // Restart animation every 10 seconds
                setTimeout(() => {
                    codeLines.forEach(line => {
                        line.style.opacity = '0';
                        line.style.transform = 'translateX(-10px)';
                    });
                    setTimeout(() => startCodeAnimation(), 1000);
                }, 10000);
            }
            
            // Button interactions
            function initButtonInteractions() {
                const exploreBtn = document.getElementById('exploreServicesBtn');
                
                if (exploreBtn) {
                    exploreBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        
                        // Create ripple effect
                        const ripple = this.querySelector('.btn-ripple');
                        ripple.style.width = '300px';
                        ripple.style.height = '300px';
                        
                        setTimeout(() => {
                            ripple.style.width = '0';
                            ripple.style.height = '0';
                        }, 600);
                        
                        // Simulate navigation to service profile page
                        setTimeout(() => {
                            alert('Navigasi ke halaman profile layanan digital - Dalam pengembangan');
                        }, 300);
                    });
                }
            }
            
            // Mobile card animation
            function animateMobileCards() {
                const cards = document.querySelectorAll('.mobile-card');
                let currentCard = 0;
                
                setInterval(() => {
                    cards.forEach(card => card.classList.remove('active'));
                    cards[currentCard].classList.add('active');
                    currentCard = (currentCard + 1) % cards.length;
                }, 2000);
            }
            
            // Initialize all functions
            animateCounters();
            initTechCards();
            initButtonInteractions();
            startCodeAnimation();
            animateMobileCards();
            
            // Add scroll listener for parallax
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        handleParallax();
                        ticking = false;
                    });
                    ticking = true;
                }
            });
            
            // Add intersection observer for section animations
            const digitalSection = document.querySelector('.digital-services-section');
            if (digitalSection) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            digitalSection.classList.add('active');
                            
                            // Trigger floating animations
                            const floatingElements = digitalSection.querySelectorAll('.floating-element');
                            floatingElements.forEach((element, index) => {
                                setTimeout(() => {
                                    element.style.opacity = '1';
                                    element.style.transform = 'translateY(0)';
                                }, index * 200);
                            });
                        }
                    });
                }, { threshold: 0.3 });
                
                observer.observe(digitalSection);
            }
        }

        
    </script>

    
</body>

</html>