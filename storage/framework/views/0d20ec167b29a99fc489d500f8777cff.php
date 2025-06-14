<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="PT Abhiraja Giovanni Tryamanda - Mitra strategis untuk kesuksesan bisnis Anda dalam pendidikan, branding, keuangan, dan manajemen.">
    <meta name="keywords" content="Abhiraja, Giovanni, Tryamanda, pendidikan, branding, keuangan, manajemen, UMKM, konsultasi bisnis">
    <meta name="author" content="PT Abhiraja Giovanni Tryamanda">
    
    <title>PT ABHIRAJA GIOVANNI TRYAMANDA - Mitra Strategis Kesuksesan Anda</title>
    <link rel="icon" href="assets/img/logo/Logo.png" type="image/png">

    <!-- Preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" as="style">
    <link rel="preload" href="assets/css/enhanced-responsive.css" as="style">

    <!-- Critical CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="assets/css/enhanced-responsive.css" rel="stylesheet">

    <!-- Non-critical CSS - load async for better performance -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://unpkg.com/swiper/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/animations.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/subsidiaries.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="assets/css/product-modal.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Fallback for non-JS browsers -->
    <noscript>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/css/animations.css" rel="stylesheet">
        <link href="assets/css/subsidiaries.css" rel="stylesheet">
        <link href="assets/css/product-modal.css" rel="stylesheet">
    </noscript>
</head>

<body>
    <!-- Enhanced Navigation -->
    <header role="banner">
        <nav class="navbar navbar-expand-lg" aria-label="Main navigation">
            <div class="container">
                <a class="navbar-brand" href="#home" aria-label="PT Abhiraja Giovanni Tryamanda - Homepage">
                    <img src="assets/img/logo/Logo.png" alt="PT Abhiraja Giovanni Tryamanda Logo">
                </a>
                
                <!-- Company name - responsive display -->
                <div class="d-none d-md-block head">
                    <h6 class="fw-bold m-0 p-0" aria-hidden="true">PT ABHIRAJA GIOVANNI TRYAMANDA</h6>
                </div>
                <div class="d-block d-md-none head">
                    <h6 class="fw-bold m-0 p-0" aria-hidden="true">PT ABHIRAJA GIOVANNI T</h6>
                </div>

                <!-- Mobile menu toggle -->
                <button class="navbar-toggler d-lg-none" 
                        type="button" 
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" 
                        aria-controls="offcanvasNavbar"
                        aria-expanded="false"
                        aria-label="Toggle navigation menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation menu -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Navigasi</h5>
                        <button type="button" 
                                class="btn-close" 
                                data-bs-dismiss="offcanvas" 
                                aria-label="Tutup menu navigasi"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home" aria-current="page">
                                    <i class="fas fa-home me-2 d-lg-none" aria-hidden="true"></i>
                                    BERANDA
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">
                                    <i class="fas fa-info-circle me-2 d-lg-none" aria-hidden="true"></i>
                                    TENTANG KAMI
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">
                                    <i class="fas fa-cogs me-2 d-lg-none" aria-hidden="true"></i>
                                    LAYANAN
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#subsidiaries">
                                    <i class="fas fa-building me-2 d-lg-none" aria-hidden="true"></i>
                                    ANAK PERUSAHAAN
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#products">
                                    <i class="fas fa-box me-2 d-lg-none" aria-hidden="true"></i>
                                    PRODUK KAMI
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">
                                    <i class="fas fa-envelope me-2 d-lg-none" aria-hidden="true"></i>
                                    KONTAK
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
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
                            style="background-image: url('<?php echo e(asset('assets/img/barista.jpg')); ?>');"></div>
                        <div class="slide-overlay"></div>
                        <div class="slide-content main-slide">
                            <h1 class="mt-4 fw-bold pb-3 pt-5 text-center">PT ABHIRAJA GIOVANNI TRYAMANDA</h1>
                            <p class="fs-5 kuning text-center mb-4">Mitra Strategis untuk Kesuksesan Anda</p>
                            <div class="container-kotak pt-2">
                                <div class="kotak" data-aos="fade-up" data-aos-delay="100">
                                    <i class="fas fa-university kuning" aria-hidden="true"></i>
                                    <div>PENDIDIKAN</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="200">
                                    <i class="fas fa-user kuning" aria-hidden="true"></i>
                                    <div>BRANDING</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="300">
                                    <i class="fas fa-money-bill kuning" aria-hidden="true"></i>
                                    <div>FINANCE</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="400">
                                    <i class="fas fa-tasks kuning" aria-hidden="true"></i>
                                    <div>MANAGEMENT</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="500">
                                    <i class="fas fa-hammer kuning" aria-hidden="true"></i>
                                    <div>WOOD STUDIO</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="600">
                                    <i class="fas fa-tree kuning" aria-hidden="true"></i>
                                    <div>AGRICULTURE</div>
                                </div>
                                <div class="kotak" data-aos="fade-up" data-aos-delay="700">
                                    <i class="fas fa-hamburger kuning" aria-hidden="true"></i>
                                    <div>JASA BOGA</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Branding & Digital -->
                    <div class="swiper-slide">
                        <div class="slide-background"
                            style="background-image: url('<?php echo e(asset('assets/img/hero/slide-2.jpg')); ?>');"></div>
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
                            style="background-image: url('<?php echo e(asset('assets/img/hero/slide-3.jpg')); ?>');"></div>
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
                            style="background-image: url('<?php echo e(asset('assets/img/hero/slide-4.jpg')); ?>');"></div>
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
                            style="background-image: url('<?php echo e(asset('assets/img/hero/slide-5.jpg')); ?>');"></div>
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
                <div class="d-grid-responsive align-items-center bg-white rounded-modern shadow-soft p-4 p-lg-5">
                    <div class="deskripsi-PT" data-aos="fade-right">
                        <h2 class="fw-bold mb-4 text-gradient-primary">PT ABHIRAJA GIOVANNI TRYAMANDA</h2>
                        <p class="text-responsive mb-3">PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk
                            memberikan layanan
                            berkualitas tinggi di berbagai bidang, termasuk pendidikan, branding, keuangan, dan lebih
                            banyak lagi.</p>
                        <p class="text-responsive mb-4">Kami memahami bahwa setiap bisnis memiliki kebutuhan unik, itulah sebabnya kami menawarkan
                            solusi yang disesuaikan untuk membantu Anda mencapai tujuan Anda. Dengan tim ahli yang
                            berpengalaman, kami siap menjadi mitra strategis untuk kesuksesan Anda.</p>
                        <button class="btn-custom btn-modern mt-3" data-bs-toggle="modal"
                            data-bs-target="#aboutModal">Selengkapnya</button>
                    </div>
                    <div class="text-center logo" data-aos="fade-left">
                        <img src="assets/img/logo/LogoCut.png" class="img-responsive shadow-soft rounded-modern" alt="Logo PT Abhiraja Giovanni Tryamanda">
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhanced Services Section -->
        <section class="page-section-33 py-responsive" id="services" role="main">
            <div class="container">
                <div class="d-grid-responsive align-items-center">
                    <!-- Content Section -->
                    <div class="services-content" data-aos="fade-right">
                        <div class="section-badge mb-3">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill shadow-accent">
                                <i class="fas fa-handshake me-2" aria-hidden="true"></i>Success Stories
                            </span>
                        </div>
                        <h1 class="text-white fw-bold mb-4 display-5 text-center-mobile">
                            Ikuti sukses mitra kami menuju kesuksesan.
                        </h1>
                        <p class="text-white-75 mb-4 lead text-center-mobile">
                            Konsultasikan permasalahan UMKM atau masalah pendidikan Anda pada kami. 
                            Dapatkan konsultasi terbaik dari ahlinya untuk membantu bisnis Anda berkembang.
                        </p>

                        <!-- Enhanced Statistics -->
                        <div class="stats-grid mb-4">
                            <div class="stat-item text-center backdrop-blur-sm rounded-modern">
                                <h3 class="text-warning fw-bold mb-1 counter" data-target="491">491</h3>
                                <small class="text-white-50">Klien Puas</small>
                            </div>
                            <div class="stat-item text-center backdrop-blur-sm rounded-modern">
                                <h3 class="text-warning fw-bold mb-1 counter" data-target="327">327</h3>
                                <small class="text-white-50">Proyek Selesai</small>
                            </div>
                            <div class="stat-item text-center backdrop-blur-sm rounded-modern">
                                <h3 class="text-warning fw-bold mb-1 counter" data-target="98">98</h3>
                                <small class="text-white-50">% Kepuasan</small>
                            </div>
                        </div>

                        <div class="action-buttons d-flex flex-column flex-sm-row gap-3 align-items-center">
                            <button class="btn-custom-primary btn-modern flex-grow-1 flex-sm-grow-0" 
                                    data-bs-toggle="modal"
                                    data-bs-target="#contactModal"
                                    aria-label="Hubungi kami untuk konsultasi">
                                <i class="fas fa-phone me-2" aria-hidden="true"></i>Hubungi Kami
                            </button>
                            <a href="<?php echo e(asset('assets/pdf/DOKTER KONTEN INDONESIA COMPRO & PL.pdf')); ?>" 
                               target="_blank" 
                               class="btn-custom-outline btn-modern text-decoration-none flex-grow-1 flex-sm-grow-0"
                               aria-label="Lihat portfolio perusahaan (PDF)">
                                <i class="fas fa-file-pdf me-2" aria-hidden="true"></i>Lihat Portfolio
                            </a>
                        </div>
                    </div>

                    <!-- Interactive Gallery Section -->
                    <div class="interactive-gallery mt-5 mt-lg-0" data-aos="fade-left">
                        <!-- Main Display -->
                        <div class="main-gallery-item shadow-strong rounded-modern-lg">
                            <div class="gallery-card active" data-index="0">
                                <img src="assets/img/portfolio/kayu.jpg" alt="Success Story 1" class="img-responsive">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h5 class="text-white fw-bold">Furniture Premium</h5>
                                        <p class="text-white-75 mb-0">Produksi furniture berkualitas tinggi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-card" data-index="1">
                                <img src="assets/img/portfolio/sawah.jpg" alt="Success Story 2" class="img-responsive">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h5 class="text-white fw-bold">Pertanian Modern</h5>
                                        <p class="text-white-75 mb-0">Solusi pertanian berkelanjutan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-card" data-index="2">
                                <img src="assets/img/portfolio/kayu3.jpg" alt="Success Story 3" class="img-responsive">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h5 class="text-white fw-bold">Kerajinan Eksklusif</h5>
                                        <p class="text-white-75 mb-0">Desain unik dan berkualitas</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thumbnail Navigation -->
                        <div class="gallery-thumbnails mt-3 justify-content-center">
                            <div class="thumbnail-item active rounded-modern" data-index="0">
                                <img src="assets/img/portfolio/kayu.jpg" alt="Thumbnail 1" class="img-responsive">
                            </div>
                            <div class="thumbnail-item rounded-modern" data-index="1">
                                <img src="assets/img/portfolio/sawah.jpg" alt="Thumbnail 2" class="img-responsive">
                            </div>
                            <div class="thumbnail-item rounded-modern" data-index="2">
                                <img src="assets/img/portfolio/kayu3.jpg" alt="Thumbnail 3" class="img-responsive">
                            </div>
                        </div>

                        <!-- Progress Indicators -->
                        <div class="gallery-progress mt-3 justify-content-center">
                            <div class="progress-bar rounded-modern">
                                <div class="progress-fill rounded-modern" style="width: 33.33%"></div>
                            </div>
                            <span class="progress-text text-white-50 ms-3">1 of 3</span>
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
                    <?php $__empty_1 = true; $__currentLoopData = $anakPerusahaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?php echo e(100 + ($index * 100)); ?>">
                            <div
                                class="subsidiary-card-modern bg-white rounded-4 shadow-lg p-4 h-100 border-0 position-relative overflow-hidden">
                                <div class="card-header-modern d-flex align-items-center mb-3">
                                    <div class="company-logo-container me-3">
                                        <?php if($company->foto): ?>
                                            <img src="<?php echo e(Storage::url($company->foto)); ?>" alt="<?php echo e($company->nama_perusahaan); ?>"
                                                class="company-logo">
                                        <?php else: ?>
                                            <img src="assets/img/Mitra/placeholder.png" alt="<?php echo e($company->nama_perusahaan); ?>"
                                                class="company-logo">
                                        <?php endif; ?>
                                    </div>
                                    <div class="company-info flex-grow-1">
                                        <h5 class="company-name mb-1 text-primary fw-bold"><?php echo e($company->nama_perusahaan); ?>

                                        </h5>
                                        <?php if($company->kategori): ?>
                                            <p class="company-tagline mb-0 text-muted small">
                                                <?php echo e($company->kategori->nama_kategori); ?>

                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="company-details">
                                    <h6 class="text-dark fw-semibold mb-2"><?php echo e($company->nama_perusahaan); ?></h6>
                                    <p class="text-muted small mb-3"><?php echo e($company->deskripsi); ?></p>

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
                                            <?php if($company->alamat): ?>
                                                <small class="text-muted">
                                                    <i class="fas fa-location-dot me-1 text-primary"></i><?php echo e($company->alamat); ?>

                                                </small>
                                            <?php endif; ?>
                                        </div>
                                        <div class="stat-item">
                                            <?php if($company->berdiri_sejak): ?>
                                                <small class="text-muted">
                                                    <i class="fas fa-calendar me-1 text-primary"></i>Est.
                                                    <?php echo e($company->berdiri_sejak->format('Y')); ?>

                                                </small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-12 text-center">
                            <p class="text-muted">Belum ada data anak perusahaan.</p>
                        </div>
                    <?php endif; ?>

                    <div class="company-stats d-flex justify-content-between align-items-center">
                        <div class="stat-item">

                        </div>
                        <div class="stat-item">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="products-section-enhanced py-5 bg-light" id="products">
            <div class="container">
                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="section-badge mb-3">
                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill shadow-soft">
                            <i class="fas fa-star me-2"></i>Layanan Terbaik
                        </span>
                    </div>
                    <h2 class="display-5 fw-bold mb-4 text-gradient-primary">Solusi Bisnis Terpadu</h2>
                    <p class="lead text-muted mx-auto mb-5 text-responsive" style="max-width: 800px;">
                        Pilih layanan yang sesuai dengan kebutuhan bisnis Anda. Setiap paket dirancang khusus untuk
                        memberikan hasil maksimal.
                    </p>
                </div>

                <!-- Filter Buttons (Dynamic from Database) -->
                <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="d-flex flex-wrap justify-content-center gap-2 filter-buttons">
                        <button class="filter-btn btn-modern active" data-filter="all">
                            <i class="fas fa-th-large me-2"></i>Semua Layanan
                        </button>

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="filter-btn btn-modern" data-filter="<?php echo e(\Str::slug($kategori->nama_kategori)); ?>">
                                
                                <?php
                                    $iconMap = [
                                        'Pendidikan' => 'fas fa-graduation-cap',
                                        'Bisnis' => 'fas fa-briefcase',
                                        'Kerajinan' => 'fas fa-hammer',
                                        'Pertanian' => 'fas fa-seedling',
                                    ];
                                    $iconClass = $iconMap[$kategori->nama_kategori] ?? 'fas fa-tags';
                                ?>

                                <i class="<?php echo e($iconClass); ?> me-2"></i><?php echo e($kategori->nama_kategori); ?>

                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="product-gallery-grid gap-responsive" id="productsGrid">
                    <?php $__empty_1 = true; $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="product-item" data-category="<?php echo e(\Str::slug($item->anakPerusahaan->kategori->nama_kategori ?? 'other')); ?>" data-aos="fade-up" data-aos-delay="<?php echo e(100 + ($index * 50)); ?>">
                        <div class="product-card-enhanced">
                            <div class="product-image-container">
                                <?php if($item->detailFotos->isNotEmpty()): ?>
                                    <img src="<?php echo e(asset('storage/'.$item->detailFotos->first()->foto)); ?>" alt="<?php echo e($item->nama_produk); ?>" class="product-image">
                                <?php elseif($item->foto): ?>
                                    <img src="<?php echo e(asset('storage/'.$item->foto)); ?>" alt="<?php echo e($item->nama_produk); ?>" class="product-image">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/img/portfolio/default.jpg')); ?>" alt="<?php echo e($item->nama_produk); ?>" class="product-image">
                                <?php endif; ?>
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
                                <?php if($index === 0): ?>
                                <div class="product-badge popular">
                                    <i class="fas fa-fire me-1"></i>Populer
                                </div>
                                <?php endif; ?>
                                <div class="product-category-tag"><?php echo e($item->anakPerusahaan->kategori->nama_kategori ?? 'Umum'); ?></div>
                            </div>
                            <div class="product-content">
                                <div class="product-header">
                                    <h4 class="product-title"><?php echo e($item->nama_produk); ?></h4>
                                    <div class="product-rating">
                                        <?php
                                            $rating = $item->rating;
                                            $fullStars = floor($rating);
                                            $halfStar = ($rating - $fullStars) >= 0.5;
                                            $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                        ?>
                                        
                                        <?php for($i = 0; $i < $fullStars; $i++): ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                        
                                        <?php if($halfStar): ?>
                                            <i class="fas fa-star-half-alt"></i>
                                        <?php endif; ?>
                                        
                                        <?php for($i = 0; $i < $emptyStars; $i++): ?>
                                            <i class="far fa-star"></i>
                                        <?php endfor; ?>
                                        
                                        <span class="rating-text">(<?php echo e($item->rating); ?>)</span>
                                    </div>
                                </div>
                                <p class="product-description"><?php echo e(\Str::limit($item->deskripsi_produk, 100)); ?></p>
                                <div class="product-features">
                                    <?php $__currentLoopData = $item->benefits->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="feature-tag"><i class="fas fa-check me-1"></i><?php echo e($benefit->nama_benefit); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="product-footer">
                                    <button class="btn-product-detail" data-bs-toggle="modal"
                                        data-bs-target="#productModal"
                                        data-product-id="<?php echo e($item->id_produk); ?>"
                                        data-product-name="<?php echo e($item->nama_produk); ?>"
                                        data-product-category="<?php echo e($item->anakPerusahaan->kategori->nama_kategori ?? 'Umum'); ?>"
                                        data-product-description="<?php echo e($item->deskripsi_produk); ?>"
                                        <?php if($item->detailFotos->isNotEmpty()): ?>
                                            data-product-image="<?php echo e(asset('storage/'.$item->detailFotos->first()->foto)); ?>"
                                        <?php elseif($item->foto): ?>
                                            data-product-image="<?php echo e(asset('storage/'.$item->foto)); ?>"
                                        <?php else: ?>
                                            data-product-image="<?php echo e(asset('assets/img/portfolio/default.jpg')); ?>"
                                        <?php endif; ?>
                                        data-product-rating="<?php echo e($item->rating); ?>">
                                        <span>Detail Paket</span>
                                        <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 text-center">
                        <p>Tidak ada produk tersedia saat ini.</p>
                    </div>
                    <?php endif; ?>

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


                        
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($err); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('contact.send')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap"
                                        value="<?php echo e(old('name')); ?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        value="<?php echo e(old('email')); ?>">
                                </div>
                            </div>
                            <input type="text" name="subject" class="form-control mt-3" placeholder="Subjek"
                                value="<?php echo e(old('subject')); ?>">
                            <textarea name="message" class="form-control mt-3"
                                placeholder="Pesan"><?php echo e(old('message')); ?></textarea>
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


    <?php echo $__env->make('modals.contactModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                            <button type="button" class="btn-modal-primary" data-action="subscribe">
                                <i class="fas fa-shopping-cart me-1"></i>Berlangganan Sekarang
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
                        <?php $__empty_1 = true; $__currentLoopData = $anakPerusahaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-6">
                                <div class="subsidiary-detail-card p-4 border rounded-3">
                                    <div class="d-flex align-items-center mb-3">
                                        <?php if($company->foto): ?>
                                            <img src="<?php echo e(Storage::url($company->foto)); ?>" alt="<?php echo e($company->nama_perusahaan); ?>"
                                                class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                        <?php else: ?>
                                            <img src="assets/img/portfolio/placeholder.jpg"
                                                alt="<?php echo e($company->nama_perusahaan); ?>" class="rounded me-3"
                                                style="width: 60px; height: 60px; object-fit: cover;">
                                        <?php endif; ?>
                                        <div>
                                            <h6 class="mb-1"><?php echo e($company->nama_perusahaan); ?></h6>
                                            <small class="text-muted">
                                                <?php if($company->kategori): ?>
                                                    <?php echo e($company->kategori->nama_kategori); ?>

                                                <?php endif; ?>
                                                �
                                                <?php if($company->berdiri_sejak): ?>
                                                    Didirikan <?php echo e($company->berdiri_sejak->format('Y')); ?>

                                                <?php endif; ?>
                                            </small>
                                        </div>
                                    </div>
                                    <p class="small text-muted mb-2"><?php echo e($company->deskripsi); ?></p>
                                    <div class="d-flex justify-content-between">
                                        <?php if($company->alamat): ?>
                                            <small><i class="fas fa-location-dot me-1"></i><?php echo e($company->alamat); ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="col-12 text-center">
                                <p class="text-muted">Belum ada data anak perusahaan.</p>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <div class="subsidiary-detail-card p-4 border rounded-3">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="assets/img/portfolio/kayu.jpg" alt="Tryamanda Wood Works"
                                        class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">Tryamanda Wood Works</h6>
                                        <small class="text-muted">Manufaktur � Didirikan 2019</small>
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
                                        <small class="text-muted">Pertanian � Didirikan 2022</small>
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
                                        <small class="text-muted">Keuangan � Didirikan 2020</small>
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
                                        <small class="text-muted">Jasa Boga � Didirikan 2023</small>
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
                            const photoUrl = `/storage/${photo.foto}`;
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
        });

        
    </script>

    <!-- Enhanced Responsive JavaScript -->
    <script src="assets/js/enhanced-responsive.js" defer></script>
    
</body>

</html><?php /**PATH D:\laragon\www\webAbhiraja\resources\views/welcome.blade.php ENDPATH**/ ?>