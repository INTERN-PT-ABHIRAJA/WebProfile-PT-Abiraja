<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ABHIRAJA GIOVANNI TRYAMANDA</title>
    <link rel="icon" href="assets/img/logo/Logo.png">

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  
        <style>

</style>
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
                
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
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
                                <a class="nav-link text-black fw-bold" href="#team">TIM KAMI</a>
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
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/1cityscape.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content main-slide">
                    <h1 class="fw-bold pb-3">PT ABHIRAJA GIOVANNI TRYAMANDA</h1>
                    <p class="fs-5 kuning mb-5">Mitra Strategis untuk Kesuksesan Anda</p>
                    <div class="container-kotak pt-4 d-flex">
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
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-2.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide2_h1'); ?></h1>
                    <p><?php echo __('site.slide2_sub'); ?></p>
                    <a href="#kontak" class="cta-button"><?php echo __('site.slide2_cta'); ?></a>
                </div>
            </div>

            <!-- Slide 3: Finance & Tax -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-3.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide3_h1'); ?></h1>
                    <p><?php echo __('site.slide3_sub'); ?></p>
                    <a href="#kontak" class="cta-button"><?php echo __('site.slide3_cta'); ?></a>
                </div>
            </div>

            <!-- Slide 4: KOL Management -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-4.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide4_h1'); ?></h1>
                    <p><?php echo __('site.slide4_sub'); ?></p>
                    <a href="#kontak" class="cta-button"><?php echo __('site.slide4_cta'); ?></a>
                </div>
            </div>
            
            <!-- Slide 5: Produk Unggulan Abhiraja -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-5.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide5_h1'); ?></h1>
                    <p><?php echo __('site.slide5_sub'); ?></p>
                    <a href="#layanan" class="cta-button"><?php echo __('site.slide5_cta'); ?></a>
                </div>
            </div>
        </div>
        
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
    

            <!-- Slide 2: Branding & Digital -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-2.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide2_h1'); ?></h1>
                    <p><?php echo __('site.slide2_sub'); ?></p>
                    <a href="#kontak" class="cta-button"><?php echo __('site.slide2_cta'); ?></a>
                </div>
            </div>

            <!-- Slide 3: Finance & Tax -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-3.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide3_h1'); ?></h1>
                    <p><?php echo __('site.slide3_sub'); ?></p>
                    <a href="#kontak" class="cta-button"><?php echo __('site.slide3_cta'); ?></a>
                </div>
            </div>

            <!-- Slide 4: KOL Management -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-4.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide4_h1'); ?></h1>
                    <p><?php echo __('site.slide4_sub'); ?></p>
                    <a href="#kontak" class="cta-button"><?php echo __('site.slide4_cta'); ?></a>
                </div>
            </div>
            
            <!-- Slide 5: Produk Unggulan Abhiraja -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-5.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide5_h1'); ?></h1>
                    <p><?php echo __('site.slide5_sub'); ?></p>
                    <a href="#layanan" class="cta-button"><?php echo __('site.slide5_cta'); ?></a>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
    </div>
</section>

        
        <section class="page-section-2" id="about">
            <div class="container">
                <div class="row align-items-center bg-white">
                    <div class="col-md-6 deskripsi-PT" data-aos="fade-right">
                        <h2 class="fw-bold mb-4">PT ABHIRAJA GIOVANNI TRYARMANDA</h2>
                        <p>PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk memberikan layanan
                            berkualitas tinggi di berbagai bidang, termasuk pendidikan, branding, keuangan, dan lebih banyak lagi.</p>
                        <p>Kami memahami bahwa setiap bisnis memiliki kebutuhan unik, itulah sebabnya kami menawarkan solusi yang disesuaikan untuk membantu Anda mencapai tujuan Anda. Dengan tim ahli yang berpengalaman, kami siap menjadi mitra strategis untuk kesuksesan Anda.</p>
                        <button class="btn-custom mt-3" data-bs-toggle="modal" data-bs-target="#aboutModal">Selengkapnya</button>
                    </div>
                    <div class="col-md-6 text-center logo" data-aos="fade-left">
                        <img src="assets/img/logo/LogoCut.png" class="img-fluid" alt="Logo">
                    </div>
                </div>
            </div>
        </section>
      
        <section class="page-section-33" id="services">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="text-left text-story" data-aos="fade-right">
                    <h1 class="text-white fw-bold mb-4">Ikuti sukses mitra kami menuju kesuksesan.</h1>
                    <div class="deskripsi-section3">
                        <p class="text-white">Konsultasikan permasalahan UMKM atau masalah pendidikan Anda pada kami. Dapatkan konsultasi terbaik dari ahlinya untuk membantu bisnis Anda berkembang.</p>
                        <button class="btn-custom mt-3" data-bs-toggle="modal" data-bs-target="#contactModal">Hubungi Kami</button>
                    </div>
                </div>
                <div class="carousel-container w-50" data-aos="fade-left">
                    <div id="successCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/portfolio/kayu.jpg" alt="Success Story 1">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/portfolio/sawah.jpg" alt="Success Story 2">
                       
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/portfolio/kayu3.jpg" alt="Success Story 3">
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="team-section" id="team">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="fw-bold mb-3">Tim Kami</h2>
                    <p class="text-muted mx-auto" style="max-width: 700px;">Kami memiliki tim profesional yang berdedikasi untuk memberikan layanan terbaik bagi klien kami.</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="10">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/Tim/Raja.png" alt="Team Member">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>RAJA FAKHRUROZI SAFIRA, S.M</h4>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/Tim/Heru.png" alt="Team Member">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Heru Fibriansyah</h4>
                                <p>--------</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/Tim/Desi.png" alt="Team Member">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Desi Putri, S.M</h4>
                                <p>--------</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="assets/img/Tim/Dini.png" alt="Team Member">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Dini Rosyani, S.H</h4>
                                <p>---------</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
      
        <section class="products-section" id="products">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="fw-bold mb-3">Layanan Kami</h2>
                    <p class="text-muted mx-auto" style="max-width: 700px;">Kami menawarkan berbagai layanan berkualitas untuk memenuhi kebutuhan Anda.</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/lada.jpg" alt="Product">
                                <div class="product-badge">Populer</div>
                            </div>
                            <div class="product-info">
                                <h4>Program Pendidikan Komprehensif</h4>
                                <p>Solusi pendidikan lengkap untuk sekolah dan institusi pendidikan.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 5.000.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/jamur.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Paket Branding UMKM</h4>
                                <p>Tingkatkan citra bisnis Anda dengan paket branding lengkap.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 3.500.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/kayu.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Konsultasi Keuangan Bisnis</h4>
                                <p>Dapatkan saran keuangan profesional untuk mengembangkan bisnis Anda.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 2.000.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/kayu2.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Produk Kerajinan Kayu</h4>
                                <p>Kerajinan kayu berkualitas tinggi dengan desain eksklusif.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 1.500.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/sawah.jpg" alt="Product">
                                <div class="product-badge">Hemat</div>
                            </div>
                            <div class="product-info">
                                <h4>Konsultasi Pertanian</h4>
                                <p>Solusi pertanian modern untuk meningkatkan hasil panen Anda.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 1.200.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/lada.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Jasa Boga Premium</h4>
                                <p>Layanan katering berkualitas untuk acara perusahaan dan pribadi.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 8.000.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="fw-bold mb-3">Hubungi Kami</h2>
                    <p class="text-white-50 mx-auto" style="max-width: 700px;">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin bekerja sama.</p>
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
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Subjek">
                            <textarea class="form-control" placeholder="Pesan"></textarea>
                            <button type="submit" class="btn-contact">Kirim Pesan</button>
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
                        <p>PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk memberikan layanan berkualitas tinggi di berbagai bidang.</p>
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
                            <li><a href="#team">Tim Kami</a></li>
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
                    <p> PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk memberikan layanan
                        berkualitas tinggi di berbagai bidang, termasuk pendidikan, branding, keuangan, dan lebih banyak lagi. Dengan berbagai
                        layanan yang kami sediakan, kami bertujuan membantu klien kami mencapai kesuksesan di berbagai sektor usaha
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
                            <p>Program pendidikan komprehensif kami dirancang untuk membantu institusi pendidikan meningkatkan kualitas pembelajaran dan pengembangan siswa. Program ini mencakup kurikulum, pelatihan guru, dan sistem manajemen pendidikan.</p>
                            
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    
</body>
</html>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            // Optional parameters
            loop: true,
            effect: 'fade', // 'fade', 'cube', 'coverflow', 'flip', 'creative'
            fadeEffect: {
                crossFade: true // Recommended for fade effect to prevent visual glitches
            },
            creativeEffect: { // Example for creative effect (if chosen)
                prev: {
                    shadow: true,
                    translate: [0, 0, -400],
                },
                next: {
                    translate: ['100%', 0, 0],
                },
            },
            autoplay: {
                delay: 10000, // 10 seconds delay
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Accessibility
            a11y: {
                prevSlideMessage: 'Previous slide',
                nextSlideMessage: 'Next slide',
            },
            
            // Animate content on slide change
            on: {
                slideChangeTransitionStart: function () {
                    // Reset all slides' content to initial hidden state
                    this.slides.forEach((slide) => {
                        const slideContent = slide.querySelector('.slide-content');
                        if (slideContent) {
                            slideContent.classList.remove('animate-in');
                            slideContent.style.opacity = '0';
                            slideContent.style.transform = 'translateY(50px)';
                            
                            // Reset individual elements
                            const h1 = slideContent.querySelector('h1');
                            const p = slideContent.querySelector('p');
                            const button = slideContent.querySelector('.cta-button');
                            
                            if (h1) h1.style.opacity = '0';
                            if (p) p.style.opacity = '0';
                            if (button) button.style.opacity = '0';
                        }
                    });
                },
                slideChangeTransitionEnd: function () {
                    // Animate current active slide's content in with staggered effect
                    if (this.slides[this.activeIndex]) {
                        const activeSlideContent = this.slides[this.activeIndex].querySelector('.slide-content');
                        if (activeSlideContent) {
                            // Add animate-in class for staggered animations
                            setTimeout(() => {
                                activeSlideContent.classList.add('animate-in');
                                activeSlideContent.style.opacity = '1';
                                activeSlideContent.style.transform = 'translateY(0)';
                            }, 100);
                        }
                    }
                },
                // Initial animation for the first slide
                init: function () {
                    if (this.slides[this.activeIndex]) {
                        const activeSlideContent = this.slides[this.activeIndex].querySelector('.slide-content');
                        if (activeSlideContent) {
                            setTimeout(() => {
                                activeSlideContent.classList.add('animate-in');
                                activeSlideContent.style.opacity = '1';
                                activeSlideContent.style.transform = 'translateY(0)';
                            }, 200);
                        }
                    }
                }
            }
        });

        // Add particle effect (optional lightweight version)
        function createParticles() {
            const heroSection = document.querySelector('.hero-section-new');
            const particleContainer = document.createElement('div');
            particleContainer.className = 'particle-container';
            particleContainer.style.cssText = `
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
                overflow: hidden;
            `;
            
            // Create 15 particles
            for (let i = 0; i < 15; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.cssText = `
                    position: absolute;
                    width: 4px;
                    height: 4px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    animation: float ${8 + Math.random() * 12}s linear infinite;
                    left: ${Math.random() * 100}%;
                    animation-delay: ${Math.random() * 8}s;
                `;
                particleContainer.appendChild(particle);
            }
            
            heroSection.appendChild(particleContainer);
        }

        // Add CSS for particle animation
        const particleStyle = document.createElement('style');
        particleStyle.textContent = `
            @keyframes float {
                0% {
                    transform: translateY(100vh) translateX(0);
                    opacity: 0;
                }
                10% {
                    opacity: 0.3;
                }
                90% {
                    opacity: 0.3;
                }
                100% {
                    transform: translateY(-100px) translateX(${Math.random() * 200 - 100}px);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(particleStyle);
        
        // Initialize particles
        createParticles();
    });
</script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            // Optional parameters
            loop: true,
            effect: 'fade', // 'fade', 'cube', 'coverflow', 'flip', 'creative'
            fadeEffect: {
                crossFade: true // Recommended for fade effect to prevent visual glitches
            },
            creativeEffect: { // Example for creative effect (if chosen)
                prev: {
                    shadow: true,
                    translate: [0, 0, -400],
                },
                next: {
                    translate: ['100%', 0, 0],
                },
            },
            autoplay: {
                delay: 10000, // 10 seconds delay
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Accessibility
            a11y: {
                prevSlideMessage: 'Previous slide',
                nextSlideMessage: 'Next slide',
            },
            
            // Animate content on slide change
            on: {
                slideChangeTransitionStart: function () {
                    // Reset all slides' content to initial hidden state
                    this.slides.forEach((slide) => {
                        const slideContent = slide.querySelector('.slide-content');
                        if (slideContent) {
                            slideContent.classList.remove('animate-in');
                            slideContent.style.opacity = '0';
                            slideContent.style.transform = 'translateY(50px)';
                            
                            // Reset individual elements
                            const h1 = slideContent.querySelector('h1');
                            const p = slideContent.querySelector('p');
                            const button = slideContent.querySelector('.cta-button');
                            
                            if (h1) h1.style.opacity = '0';
                            if (p) p.style.opacity = '0';
                            if (button) button.style.opacity = '0';
                        }
                    });
                },
                slideChangeTransitionEnd: function () {
                    // Animate current active slide's content in with staggered effect
                    if (this.slides[this.activeIndex]) {
                        const activeSlideContent = this.slides[this.activeIndex].querySelector('.slide-content');
                        if (activeSlideContent) {
                            // Add animate-in class for staggered animations
                            setTimeout(() => {
                                activeSlideContent.classList.add('animate-in');
                                activeSlideContent.style.opacity = '1';
                                activeSlideContent.style.transform = 'translateY(0)';
                            }, 100);
                        }
                    }
                },
                // Initial animation for the first slide
                init: function () {
                    if (this.slides[this.activeIndex]) {
                        const activeSlideContent = this.slides[this.activeIndex].querySelector('.slide-content');
                        if (activeSlideContent) {
                            setTimeout(() => {
                                activeSlideContent.classList.add('animate-in');
                                activeSlideContent.style.opacity = '1';
                                activeSlideContent.style.transform = 'translateY(0)';
                            }, 200);
                        }
                    }
                }
            }
        });

        // Add particle effect (optional lightweight version)
        function createParticles() {
            const heroSection = document.querySelector('.hero-section-new');
            const particleContainer = document.createElement('div');
            particleContainer.className = 'particle-container';
            particleContainer.style.cssText = `
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
                pointer-events: none;
                overflow: hidden;
            `;
            
            // Create 15 particles
            for (let i = 0; i < 15; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.cssText = `
                    position: absolute;
                    width: 4px;
                    height: 4px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    animation: float ${8 + Math.random() * 12}s linear infinite;
                    left: ${Math.random() * 100}%;
                    animation-delay: ${Math.random() * 8}s;
                `;
                particleContainer.appendChild(particle);
            }
            
            heroSection.appendChild(particleContainer);
        }

        // Add CSS for particle animation
        const particleStyle = document.createElement('style');
        particleStyle.textContent = `
            @keyframes float {
                0% {
                    transform: translateY(100vh) translateX(0);
                    opacity: 0;
                }
                10% {
                    opacity: 0.3;
                }
                90% {
                    opacity: 0.3;
                }
                100% {
                    transform: translateY(-100px) translateX(${Math.random() * 200 - 100}px);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(particleStyle);
        
        // Initialize particles
        createParticles();
    });
</script>

<script>
// Custom script to handle the main slide with icon grid
document.addEventListener('DOMContentLoaded', function () {
    // Make sure the main slide's content is always visible
    const mainSlideContent = document.querySelector('.slide-content.main-slide');
    if (mainSlideContent) {
        mainSlideContent.style.opacity = '1';
        mainSlideContent.style.transform = 'translateY(0)';
    }
});
</script>

