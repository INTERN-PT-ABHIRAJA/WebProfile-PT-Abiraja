<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ABHIRAJA GIOVANNI TRYAMANDA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --forest-green: #2c6e49; /* Warna utama perusahaan */
            --light-green: #4c956c; /* Warna aksen */
            --cream:rgb(255, 255, 255);       /* Warna latar belakang lembut */
            --dark-text: #333333;   /* Warna teks utama */
            --light-gray: #f8f9fa;  /* Warna abu-abu terang */
            --secondary-accent: #FFB74D; /* Warna aksen sekunder baru - Oranye Lembut */
            --secondary-accent-dark: #E69500; /* Oranye lebih gelap untuk hover */
            --bs-primary: var(--forest-green); /* Override Bootstrap primary */
            --bs-secondary: var(--light-green); /* Override Bootstrap secondary */
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Poppins lebih modern */
            background-color: #ffffff;
            color: var(--dark-text);
        }   
        
        .hero-multiservice {
            position: relative;
            min-height: 90vh; /* Sedikit lebih pendek dari 100vh agar tidak selalu full screen */
            display: flex;
            align-items: center;
            padding: 6rem 0; /* Padding atas bawah */
            background-color: var(--white); /* Latar belakang section diubah menjadi abu-abu muda */
            overflow: hidden;
        }
        
        /* Hapus ::before yang lama jika ada, atau sesuaikan */
        .hero-multiservice::before {
            content: "";
            position: absolute;
            top: -50%; 
            left: -50%;
            width: 200%;
            height: 200%;
            background-image: 
                radial-gradient(circle at 15% 25%, var(--light-green, #4c956c) 0%, transparent 8%),
                radial-gradient(circle at 85% 75%, var(--secondary-accent, #FFB74D) 0%, transparent 10%); /* Menggunakan warna aksen sekunder */
            opacity: 0.1;
            animation: subtleShine 20s infinite linear;
            z-index: 0;
        }

        @keyframes subtleShine {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .hero-multiservice .container {
            position: relative;
            z-index: 2;
            /* background-color: #fff; */ /* Latar belakang kontainer konten menjadi putih */
            /* padding: 2.5rem; */ /* Tambahkan padding di dalam kontainer */
            /* border-radius: 12px; */ /* Sudut yang membulat untuk kontainer */
            /* box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08); */ /* Shadow yang halus untuk efek kedalaman */
        }
        
        .hero-multiservice-title {
            font-size: 2.8rem; /* Ukuran headline */
            font-weight: 700; /* Lebih tebal */
            color: var(--forest-green);
            margin-bottom: 1.5rem;
            line-height: 1.3;
            display: flex; /* Untuk ikon di samping judul */
            align-items: center; /* Untuk ikon di samping judul */
        }

        .hero-multiservice-title .title-icon { /* Gaya untuk ikon judul */
            margin-right: 10px; /* Jarak ikon dari teks */
            font-size: 0.8em; /* Ukuran ikon relatif terhadap judul */
            color: var(--secondary-accent); /* Warna ikon */
        }
        
        .hero-multiservice-subtitle {
            font-size: 1.15rem; /* Ukuran subheadline */
            color: #555;
            margin-bottom: 2.5rem; /* Jarak ke CTA */
            line-height: 1.7;
            max-width: 550px; /* Batasi lebar agar mudah dibaca */
        }

        .hero-multiservice-subtitle em { /* Gaya untuk teks yang ditandai <em> */
            font-style: italic;
            color: var(--secondary-accent-dark); /* Warna berbeda untuk penekanan */
        }
        
        .hero-multiservice .btn-primary {
            background-color: var(--secondary-accent);
            border-color: var(--secondary-accent);
            color: white;
            padding: 0.9rem 2.2rem; /* Padding tombol diperbesar */
            font-weight: 600;
            font-size: 1.1rem; /* Ukuran font tombol diperbesar */
            transition: all 0.3s ease-in-out; /* Transisi sudah ada, pastikan durasi dan easing sesuai */
            box-shadow: 0 4px 15px rgba(255, 183, 77, 0.3); /* Shadow disesuaikan dengan warna baru */
        }
        
        .hero-multiservice .btn-primary:hover {
            background-color: var(--secondary-accent-dark);
            border-color: var(--secondary-accent-dark);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 183, 77, 0.4); /* Shadow disesuaikan */
        }

        .hero-multiservice .btn-primary .btn-icon { /* Gaya untuk ikon tombol */
            margin-right: 8px;
        }
        
        .hero-multiservice .btn-outline-secondary {
            color: var(--secondary-accent);
            border-color: var(--secondary-accent);
            padding: 0.75rem 1.8rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .hero-multiservice .btn-outline-secondary:hover {
            background-color: var(--secondary-accent);
            color: white;
            transform: translateY(-3px);
        }

        .service-carousel .carousel-item {
            transition: transform 0.8s ease-in-out, opacity 0.8s ease; /* Transisi lebih halus */
        }

        .service-carousel .carousel-item img {
            max-height: 450px; /* Kontrol tinggi gambar carousel */
            width: auto;
            margin: auto; /* Pusatkan gambar jika lebih kecil dari container */
            object-fit: contain; /* Pastikan gambar tidak terpotong */
            border-radius: 15px; /* Sudut membulat untuk gambar */
        }
        
        /* Styling untuk indikator carousel (opsional, jika ingin custom) */
        .service-carousel .carousel-indicators [data-bs-target] {
            background-color: var(--secondary-accent); /* Menggunakan warna aksen sekunder */
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
            opacity: 0.7;
        }
        .service-carousel .carousel-indicators .active {
            background-color: var(--forest-green); /* Warna utama untuk indikator aktif */
            opacity: 1;
        }

        /* Hapus styling .hero lama jika tidak terpakai lagi */
        /* .hero { ... } */
        /* .hero-content { ... } */
        /* .hero h1 { ... } */
        /* .hero p { ... } */
        /* .service-grid { ... } */

        @media (max-width: 991.98px) {
            .hero-multiservice {
                padding: 4rem 0; /* Kurangi padding di layar kecil */
                min-height: auto; /* Hapus min-height agar lebih fleksibel */
            }
            .hero-multiservice-title {
                font-size: 2.4rem; /* Sesuaikan ukuran judul */
            }
            .hero-multiservice-subtitle {
                font-size: 1.05rem; /* Sesuaikan ukuran subjudul */
                max-width: none; /* Hapus batasan lebar */
            }
            .hero-multiservice .text-content {
                text-align: center; /* Pusatkan teks di layar kecil */
                margin-bottom: 2rem; /* Beri jarak ke carousel */
            }
            .service-carousel .carousel-item img {
                max-height: 350px; 
            }
        }
        @media (max-width: 767.98px) {
            .hero-multiservice-title {
                font-size: 2rem;
            }
            .hero-multiservice .btn-primary, .hero-multiservice .btn-outline-secondary {
                padding: 0.7rem 1.5rem; /* Sesuaikan padding tombol */
                font-size: 0.95rem; /* Sesuaikan font tombol */
                width: 100%; /* Tombol memenuhi lebar */
                margin-bottom: 0.5rem; /* Jarak antar tombol jika bertumpuk */
            }
            .hero-multiservice .btn-outline-secondary {
                margin-bottom: 0;
            }
            .service-carousel .carousel-item img {
                max-height: 300px; 
            }
        }

    </style>
</head>
<body>
    <!-- New Hero Section -->
    <div class="hero-multiservice" id="home-new">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-content" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-multiservice-title">
                         <i class="fas fa-star title-icon"></i> {{ __('site.hero_multiservice_title') }}<!-- Ikon ditambahkan di sini -->
                    </h1>
                    <p class="hero-multiservice-subtitle">
                        {!! __('site.hero_multiservice_subtitle') !!} 
                    </p>
                    <div class="cta-buttons">
                        <a href="#contact" class="btn btn-primary me-2 mb-2">
                            <i class="fas fa-phone btn-icon"></i> <!-- Ikon ditambahkan di sini -->
                            {{ __('site.hero_cta_contact_now') }}
                        </a>
                        <a href="#services" class="btn btn-outline-secondary mb-2">
                            {{ __('site.hero_cta_see_services') }}
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 carousel-content" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div id="serviceCarousel" class="carousel slide service-carousel" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            {{-- Tambahkan lebih banyak indikator jika ada lebih banyak item --}}
                            {{-- Tambahkan indikator lain jika ada lebih banyak item --}}
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/hero/konsultan-pendidikan-illustration.svg') }}" class="d-block w-100" alt="{{ __('site.service_education_alt') }}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/hero/branding-illustration.svg') }}" class="d-block w-100" alt="{{ __('site.service_branding_alt') }}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/hero/keuangan-pajak-illustration.svg') }}" class="d-block w-100" alt="{{ __('site.service_finance_alt') }}">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/hero/kol-management-illustration.svg') }}" class="d-block w-100" alt="{{ __('site.service_kol_alt') }}">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> {{-- Pastikan Bootstrap JS ada --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true, // Animasi hanya berjalan sekali
                duration: 800, // Durasi animasi default
            });

            // Inisialisasi Carousel Bootstrap jika belum otomatis
            var serviceCarousel = document.getElementById('serviceCarousel');
            if (serviceCarousel) {
                new bootstrap.Carousel(serviceCarousel, {
                    interval: 3500, // Interval sedikit lebih lama
                    wrap: true // Carousel akan berputar terus
                });
            }
        });
    </script>
</body>
</html>