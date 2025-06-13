<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <!-- Fallback for non-JS browsers -->
    <noscript>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/css/animations.css" rel="stylesheet">
        <link href="assets/css/subsidiaries.css" rel="stylesheet">
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
                            <h1>Branding & Digital</h1>
                            <p>Kami membantu membangun citra digital dan branding bisnis Anda agar lebih dikenal dan
                                dipercaya.</p>
                            <a href="#contact" class="cta-button">Hubungi Kami</a>
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


        >>>>>>> a48e470ec080d93b8f49e41f7f99dba1e1fff29c
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
                                        <h3 class="text-warning fw-bold mb-1 counter" data-target="500">500</h3>
                                        <small class="text-white-50">Klien Puas</small>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="stat-item text-center">
                                        <h3 class="text-warning fw-bold mb-1 counter" data-target="150">150</h3>
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
                                <button class="btn-custom-outline" data-bs-toggle="modal"
                                    data-bs-target="#portfolioModal">
                                    <i class="fas fa-eye me-2"></i>Lihat Portfolio
                                </button>
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
                <div class="row g-4" id="subsidiaries-container">
                    @forelse($anakPerusahaan as $index => $company)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                            <div
                                class="subsidiary-card-modern bg-white rounded-4 shadow-lg p-4 h-100 border-0 position-relative overflow-hidden">
                                <div class="card-header-modern d-flex align-items-center mb-3">
                                    <div class="company-logo-container me-3">
                                        @if($company->foto)
                                            <img src="{{ Storage::url($company->foto) }}" alt="{{ $company->nama_perusahaan }}"
                                                class="company-logo">
                                        @else
                                            <img src="assets/img/Mitra/placeholder.png" alt="{{ $company->nama_perusahaan }}"
                                                class="company-logo">
                                        @endif
                                    </div>
                                    <div class="company-info flex-grow-1">
                                        <h5 class="company-name mb-1 text-primary fw-bold">{{ $company->nama_perusahaan }}
                                        </h5>
                                        @if($company->kategori)
                                            <p class="company-tagline mb-0 text-muted small">
                                                {{ $company->kategori->nama_kategori }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <div class="company-details">
                                    <h6 class="text-dark fw-semibold mb-2">{{ $company->nama_perusahaan }}</h6>
                                    <p class="text-muted small mb-3">{{ $company->deskripsi }}</p>

                                    <div class="social-media-section mb-3">
                                        <div class="social-icons d-flex gap-2">
                                            <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>

                                    <div class="company-stats d-flex justify-content-between align-items-center">
                                        <div class="stat-item">
                                            @if($company->alamat)
                                                <small class="text-muted">
                                                    <i class="fas fa-location-dot me-1 text-primary"></i>{{ $company->alamat }}
                                                </small>
                                            @endif
                                        </div>
                                        <div class="stat-item">
                                            @if($company->berdiri_sejak)
                                                <small class="text-muted">
                                                    <i class="fas fa-calendar me-1 text-primary"></i>Est.
                                                    {{ $company->berdiri_sejak->format('Y') }}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">Belum ada data anak perusahaan.</p>
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

                <!-- Filter Buttons -->
                <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="filter-buttons">
                        <button class="filter-btn active" data-filter="all">
                            <i class="fas fa-th-large me-2"></i>Semua Layanan
                        </button>
                        <button class="filter-btn" data-filter="education">
                            <i class="fas fa-graduation-cap me-2"></i>Pendidikan
                        </button>
                        <button class="filter-btn" data-filter="business">
                            <i class="fas fa-briefcase me-2"></i>Bisnis
                        </button>
                        <button class="filter-btn" data-filter="craft">
                            <i class="fas fa-hammer me-2"></i>Kerajinan
                        </button>
                        <button class="filter-btn" data-filter="agriculture">
                            <i class="fas fa-seedling me-2"></i>Pertanian
                        </button>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="products-grid" id="productsGrid">
                    <!-- Education Services -->
                    <div class="product-item" data-category="education" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                <img src="assets/img/portfolio/lada.jpg" alt="Program Pendidikan" class="product-image">
                                <div class="product-overlay">
                                    <div class="product-icons">
                                        <button class="icon-btn" title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="icon-btn" title="Tambah ke Favorit">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="icon-btn" title="Konsultasi">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-badge popular">
                                    <i class="fas fa-fire me-1"></i>Populer
                                </div>
                                <div class="product-category-tag">Pendidikan</div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title">Program Pendidikan Komprehensif</h4>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="rating-text">(4.9)</span>
                                    </div>
                                </div>
                                <p class="product-description">Solusi pendidikan lengkap untuk sekolah dan institusi
                                    pendidikan dengan kurikulum terdepan.</p>
                                <div class="product-features">
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Kurikulum Modern</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Sertifikasi</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Konsultasi</span>
                                </div>
                                <div class="product-footer">
                                    <div class="price-section">
                                        <span class="price-label">Mulai dari</span>
                                        <span class="product-price">Rp 5.000.000</span>
                                    </div>
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Services -->
                    <div class="product-item" data-category="business" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                <img src="assets/img/portfolio/jamur.jpg" alt="Branding UMKM" class="product-image">
                                <div class="product-overlay">
                                    <div class="product-icons">
                                        <button class="icon-btn" title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="icon-btn" title="Tambah ke Favorit">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="icon-btn" title="Konsultasi">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-category-tag">Bisnis</div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title">Paket Branding UMKM</h4>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="rating-text">(4.7)</span>
                                    </div>
                                </div>
                                <p class="product-description">Tingkatkan citra bisnis Anda dengan paket branding
                                    lengkap yang profesional dan modern.</p>
                                <div class="product-features">
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Logo Design</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Digital Marketing</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Website</span>
                                </div>
                                <div class="product-footer">
                                    <div class="price-section">
                                        <span class="price-label">Mulai dari</span>
                                        <span class="product-price">Rp 3.500.000</span>
                                    </div>
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-item" data-category="business" data-aos="fade-up" data-aos-delay="250">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                <img src="assets/img/portfolio/kayu.jpg" alt="Konsultasi Keuangan"
                                    class="product-image">
                                <div class="product-overlay">
                                    <div class="product-icons">
                                        <button class="icon-btn" title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="icon-btn" title="Tambah ke Favorit">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="icon-btn" title="Konsultasi">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-category-tag">Bisnis</div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title">Konsultasi Keuangan Bisnis</h4>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="rating-text">(5.0)</span>
                                    </div>
                                </div>
                                <p class="product-description">Dapatkan saran keuangan profesional untuk mengembangkan
                                    dan mengelola keuangan bisnis Anda.</p>
                                <div class="product-features">
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Analisis Keuangan</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Perencanaan</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Laporan</span>
                                </div>
                                <div class="product-footer">
                                    <div class="price-section">
                                        <span class="price-label">Mulai dari</span>
                                        <span class="product-price">Rp 2.000.000</span>
                                    </div>
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Craft Services -->
                    <div class="product-item" data-category="craft" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                <img src="assets/img/portfolio/kayu2.jpg" alt="Kerajinan Kayu" class="product-image">
                                <div class="product-overlay">
                                    <div class="product-icons">
                                        <button class="icon-btn" title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="icon-btn" title="Tambah ke Favorit">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="icon-btn" title="Konsultasi">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-badge custom">
                                    <i class="fas fa-palette me-1"></i>Custom
                                </div>
                                <div class="product-category-tag">Kerajinan</div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title">Produk Kerajinan Kayu</h4>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span class="rating-text">(4.8)</span>
                                    </div>
                                </div>
                                <p class="product-description">Kerajinan kayu berkualitas tinggi dengan desain eksklusif
                                    dan finishing premium.</p>
                                <div class="product-features">
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Desain Custom</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Kayu Premium</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Garansi</span>
                                </div>
                                <div class="product-footer">
                                    <div class="price-section">
                                        <span class="price-label">Mulai dari</span>
                                        <span class="product-price">Rp 1.500.000</span>
                                    </div>
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Agriculture Services -->
                    <div class="product-item" data-category="agriculture" data-aos="fade-up" data-aos-delay="350">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                <img src="assets/img/portfolio/sawah.jpg" alt="Konsultasi Pertanian"
                                    class="product-image">
                                <div class="product-overlay">
                                    <div class="product-icons">
                                        <button class="icon-btn" title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="icon-btn" title="Tambah ke Favorit">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="icon-btn" title="Konsultasi">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-badge eco">
                                    <i class="fas fa-leaf me-1"></i>Eco
                                </div>
                                <div class="product-category-tag">Pertanian</div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title">Konsultasi Pertanian Modern</h4>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="rating-text">(4.9)</span>
                                    </div>
                                </div>
                                <p class="product-description">Solusi pertanian modern dan berkelanjutan untuk
                                    meningkatkan hasil panen Anda.</p>
                                <div class="product-features">
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Teknologi Modern</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Organic</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Monitoring</span>
                                </div>
                                <div class="product-footer">
                                    <div class="price-section">
                                        <span class="price-label">Mulai dari</span>
                                        <span class="product-price">Rp 1.200.000</span>
                                    </div>
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Services - Catering -->
                    <div class="product-item" data-category="business" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                <img src="assets/img/portfolio/lada.jpg" alt="Jasa Boga Premium" class="product-image">
                                <div class="product-overlay">
                                    <div class="product-icons">
                                        <button class="icon-btn" title="Lihat Detail">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="icon-btn" title="Tambah ke Favorit">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <button class="icon-btn" title="Konsultasi">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-badge premium">
                                    <i class="fas fa-crown me-1"></i>Premium
                                </div>
                                <div class="product-category-tag">Bisnis</div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title">Jasa Boga Premium</h4>
                                    <div class="product-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="rating-text">(5.0)</span>
                                    </div>
                                </div>
                                <p class="product-description">Layanan katering berkualitas premium untuk acara
                                    perusahaan dan pribadi yang berkesan.</p>
                                <div class="product-features">
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Menu Eksklusif</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Setup Lengkap</span>
                                    <span class="feature-tag"><i class="fas fa-check me-1"></i>Professional</span>
                                </div>
                                <div class="product-footer">
                                    <div class="price-section">
                                        <span class="price-label">Mulai dari</span>
                                        <span class="product-price">Rp 8.000.000</span>
                                    </div>
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="cta-section">
                        <h3 class="fw-bold mb-3">Tidak Menemukan Yang Anda Cari?</h3>
                        <p class="text-muted mb-4">Konsultasikan kebutuhan khusus Anda dengan tim ahli kami</p>
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
                            <li><a href="#subsidiaries">Anak Perusahaan</a></li>
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


    <div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hubungi Kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="4"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-modal" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn-modal">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/portfolio/jamur.jpg" alt="Product" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <h4>Program Pendidikan Komprehensif</h4>
                            <p class="text-muted">Kode: PRD-001</p>
                            <h5 class="mt-3 mb-3">Rp 5.000.000</h5>
                            <p>Program pendidikan komprehensif kami dirancang untuk membantu institusi pendidikan
                                meningkatkan kualitas pembelajaran dan pengembangan siswa. Program ini mencakup
                                kurikulum, pelatihan guru, dan sistem manajemen pendidikan.</p>

                            <h6 class="mt-4">Fitur:</h6>
                            <ul>
                                <li>Kurikulum yang disesuaikan dengan kebutuhan</li>
                                <li>Pelatihan guru dan staf</li>
                                <li>Sistem manajemen pendidikan</li>
                                <li>Evaluasi dan penilaian</li>
                                <li>Dukungan teknis</li>
                            </ul>

                            <div class="d-flex mt-4">

                                <button class="btn-modal">Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-modal" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn-modal">Berlangganan Sekarang</button>
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
                                            <img src="{{ Storage::url($company->foto) }}" alt="{{ $company->nama_perusahaan }}"
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
                                                •
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
                        <div class="col-md-6">
                            <div class="subsidiary-detail-card p-4 border rounded-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/img/portfolio/kayu.jpg" alt="Tryamanda Wood Works"
                                        class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">Tryamanda Wood Works</h6>
                                        <small class="text-muted">Manufaktur • Didirikan 2019</small>
                                    </div>
                                </div>
                                <p class="small text-muted mb-2">Produsen furniture dan kerajinan kayu berkualitas
                                    tinggi dengan desain eksklusif dan modern.</p>
                                <div class="d-flex justify-content-between">

                                    <small><i class="fas fa-location-dot me-1"></i>Jepara</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="subsidiary-detail-card p-4 border rounded-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/img/portfolio/sawah.jpg" alt="Abhiraja Agri Solutions"
                                        class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">Abhiraja Agri Solutions</h6>
                                        <small class="text-muted">Pertanian • Didirikan 2022</small>
                                    </div>
                                </div>
                                <p class="small text-muted mb-2">Solusi pertanian modern dan berkelanjutan untuk
                                    meningkatkan produktivitas hasil pertanian.</p>
                                <div class="d-flex justify-content-between">

                                    <small><i class="fas fa-location-dot me-1"></i>Bogor</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="subsidiary-detail-card p-4 border rounded-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/img/portfolio/kayu2.jpg" alt="Giovanni Finance Consulting"
                                        class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">Giovanni Finance Consulting</h6>
                                        <small class="text-muted">Keuangan • Didirikan 2020</small>
                                    </div>
                                </div>
                                <p class="small text-muted mb-2">Konsultasi keuangan dan manajemen bisnis untuk
                                    pertumbuhan yang berkelanjutan.</p>
                                <div class="d-flex justify-content-between">

                                    <small><i class="fas fa-location-dot me-1"></i>Jakarta</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="subsidiary-detail-card p-4 border rounded-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/img/portfolio/kayu3.jpg" alt="Tryamanda Catering Services"
                                        class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">Tryamanda Catering Services</h6>
                                        <small class="text-muted">Jasa Boga • Didirikan 2023</small>
                                    </div>
                                </div>
                                <p class="small text-muted mb-2">Layanan katering premium untuk acara korporat dan
                                    pribadi dengan cita rasa istimewa.</p>
                                <div class="d-flex justify-content-between">

                                    <small><i class="fas fa-location-dot me-1"></i>Sumedang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Hubungi Tim Partnership</button>
                </div>
            </div>
        </div>
    </div>

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
        });
    </script>

</body>

</html>