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
            --forest-green: #2c6e49;
            --light-green: #4c956c;
            --cream: #fefee3;
            --light-gray: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
        }
        
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(248,249,250,0.95) 100%);
            overflow: hidden;
        }
        
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 30% 20%, var(--light-green) 0%, transparent 10%),
                radial-gradient(circle at 80% 70%, var(--light-green) 0%, transparent 8%),
                radial-gradient(circle at 10% 80%, var(--light-green) 0%, transparent 5%);
            opacity: 0.07;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem;
            max-width: 1200px;
        }
        
        .hero h1 {
            color: var(--forest-green);
            font-size: 2.8rem;
            letter-spacing: -0.5px;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .hero h1::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--forest-green);
            border-radius: 2px;
        }
        
        .hero p {
            color: var(--forest-green);
            font-size: 1.4rem;
            font-weight: 300;
            max-width: 800px;
            margin: 0 auto 3rem;
        }
        
        .service-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .service-grid-bottom {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .service-card {
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.04);
            display: flex;
            flex-direction: column;
            align-items: center;
            cursor: pointer;
            border: 1px solid rgba(44, 110, 73, 0.1);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(44, 110, 73, 0.1);
            border-color: var(--forest-green);
        }
        
        .service-card i {
            font-size: 2rem;
            color: var(--forest-green);
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        
        .service-card:hover i {
            transform: scale(1.2);
        }
        
        .service-card div {
            font-weight: 600;
            color: #333;
            font-size: 0.9rem;
        }
        
        @media (max-width: 992px) {
            .service-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .service-grid-bottom {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 576px) {
            .service-grid, .service-grid-bottom {
                grid-template-columns: 1fr;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero" id="home">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <p data-aos="fade-up" data-aos-delay="200">{{ App::isLocale('id') ? 'Mitra Strategis untuk Kesuksesan Anda' : 'Your Strategic Partner for Success' }}</p>
            
            <div class="service-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-university"></i>
                    <div>{{ App::isLocale('id') ? 'PENDIDIKAN' : 'EDUCATION' }}</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-user"></i>
                    <div>BRANDING</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <i class="fas fa-money-bill"></i>
                    <div>{{ App::isLocale('id') ? 'KEUANGAN' : 'FINANCE' }}</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                    <i class="fas fa-tasks"></i>
                    <div>{{ App::isLocale('id') ? 'MANAJEMEN' : 'MANAGEMENT' }}</div>
                </div>
            </div>
            
            <div class="service-grid-bottom">
                <div class="service-card" data-aos="fade-up" data-aos-delay="700">
                    <i class="fas fa-hammer"></i>
                    <div>{{ App::isLocale('id') ? 'STUDIO KAYU' : 'WOOD STUDIO' }}</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="800">
                    <i class="fas fa-tree"></i>
                    <div>{{ App::isLocale('id') ? 'PERTANIAN' : 'AGRICULTURE' }}</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="900">
                    <i class="fas fa-hamburger"></i>
                    <div>{{ App::isLocale('id') ? 'JASA BOGA' : 'CATERING' }}</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
</body>
</html>