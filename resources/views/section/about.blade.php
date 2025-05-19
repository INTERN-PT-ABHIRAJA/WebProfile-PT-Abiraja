<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern About Section</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --forest-green: #2c6e49;
            --light-green: #4c956c;
            --accent-blue: #4d61e3;
            --light-blue: #7b89f4;
            --orange: #ff7a00;
            --background: #f8f9ff;
            --dark-text: #222;
            --gray-text: #555;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background);
        }
        
        /* Modern About Section Styling */
        .about-section {
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .about-container {
            position: relative;
            z-index: 5;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
            background: white;
        }
        
        .about-content {
            padding: 60px 40px;
        }
        
        .about-image-container {
            position: relative;
            height: 100%;
        }
        
        .about-image {
            height: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(44, 110, 73, 0.05) 0%, rgba(77, 97, 227, 0.05) 100%);
        }
        
        .about-image img {
            max-width: 80%;
            position: relative;
            z-index: 2;
            transition: transform 0.6s ease;
        }
        
        .about-image:hover img {
            transform: scale(1.05);
        }
        
        .about-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            color: var(--dark-text);
        }
        
        .about-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            height: 4px;
            width: 60px;
            background: var(--forest-green);
            border-radius: 2px;
        }
        
        .about-text {
            color: var(--gray-text);
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        
        .about-btn {
            background-color: var(--forest-green);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .about-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s ease;
            z-index: -1;
        }
        
        .about-btn:hover {
            background-color: #245a3b;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(44, 110, 73, 0.2);
        }
        
        .about-btn:hover::before {
            left: 100%;
        }
        
        /* Decorative elements */
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            z-index: 1;
        }
        
        .shape-1 {
            width: 120px;
            height: 120px;
            background-color: rgba(44, 110, 73, 0.05);
            top: -60px;
            left: 10%;
        }
        
        .shape-2 {
            width: 80px;
            height: 80px;
            background-color: rgba(77, 97, 227, 0.05);
            bottom: -40px;
            right: 15%;
        }
        
        .pattern-dots {
            position: absolute;
            width: 150px;
            height: 150px;
            background-image: radial-gradient(var(--forest-green) 1px, transparent 1px);
            background-size: 10px 10px;
            opacity: 0.1;
            z-index: 1;
        }
        
        .dots-1 {
            top: 50px;
            right: 10%;
        }
        
        .dots-2 {
            bottom: 70px;
            left: 5%;
        }
        
        /* Features row with stats */
        .features-row {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
        }
        
        .feature-item {
            flex: 1;
            min-width: 120px;
            margin-right: 30px;
            margin-bottom: 20px;
        }
        
        .feature-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--forest-green);
            margin-bottom: 5px;
            display: flex;
            align-items: baseline;
        }
        
        .feature-number span {
            font-size: 1rem;
            margin-left: 5px;
            color: var(--gray-text);
        }
        
        .feature-text {
            color: var(--gray-text);
            font-size: 0.9rem;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .about-section {
                padding: 80px 0;
            }
            
            .about-content {
                padding: 50px 30px;
            }
            
            .about-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .about-image {
                padding: 50px 0;
            }
            
            .about-content {
                order: 2;
            }
            
            .about-image-container {
                order: 1;
            }
            
            .feature-item {
                min-width: 140px;
            }
        }
        
        @media (max-width: 576px) {
            .about-section {
                padding: 60px 0;
            }
            
            .about-content {
                padding: 40px 20px;
            }
            
            .about-title {
                font-size: 1.8rem;
            }
            
            .about-text {
                font-size: 1rem;
            }
            
            .features-row {
                flex-direction: column;
            }
            
            .feature-item {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="about-section" id="about">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="pattern-dots dots-1"></div>
        <div class="pattern-dots dots-2"></div>
        
        <div class="container">
            <div class="about-container">
                <div class="row g-0">
                    <div class="col-lg-6 about-content" data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="about-title">PT ABHIRAJA GIOVANNI TRYAMANDA</h2>
                        
                        <p class="about-text">
                            {{ App::isLocale('id') ? 'PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk memberikan layanan berkualitas tinggi di berbagai bidang, termasuk pendidikan, branding, keuangan, dan lebih banyak lagi.' : 'PT Abhiraja Giovanni Tryamanda is a multiservices company committed to providing high-quality services in various fields, including education, branding, finance, and more.' }}
                        </p>
                        
                        <p class="about-text">
                            {{ App::isLocale('id') ? 'Kami memahami bahwa setiap bisnis memiliki kebutuhan unik, itulah sebabnya kami menawarkan solusi yang disesuaikan untuk membantu Anda mencapai tujuan Anda. Dengan tim ahli yang berpengalaman, kami siap menjadi mitra strategis untuk kesuksesan Anda.' : 'We understand that every business has unique needs, which is why we offer customized solutions to help you achieve your goals. With an experienced team of experts, we are ready to be your strategic partner for success.' }}
                        </p>
                        
                        <div class="features-row">
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-number">7<span>+</span></div>
                                <div class="feature-text">{{ App::isLocale('id') ? 'Bidang Layanan' : 'Service Areas' }}</div>
                            </div>
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-number">50<span>+</span></div>
                                <div class="feature-text">{{ App::isLocale('id') ? 'Klien Puas' : 'Happy Clients' }}</div>
                            </div>
                            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-number">10<span>+</span></div>
                                <div class="feature-text">{{ App::isLocale('id') ? 'Tahun Pengalaman' : 'Years Experience' }}</div>
                            </div>
                        </div>
                        
                        <button class="about-btn mt-4" data-bs-toggle="modal" data-bs-target="#aboutModal">
                            {{ App::isLocale('id') ? 'Selengkapnya' : 'Read More' }}
                        </button>
                    </div>
                    
                    <div class="col-lg-6 about-image-container" data-aos="fade-left" data-aos-duration="1000">
                        <div class="about-image">
                            <img src="assets/img/logo/LogoCut.png" alt="PT ABHIRAJA GIOVANNI TRYAMANDA" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap and AOS Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true
            });
        });
    </script>
</body>
</html>