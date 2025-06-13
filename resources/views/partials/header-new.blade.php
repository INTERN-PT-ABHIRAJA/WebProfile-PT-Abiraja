<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent to Solid Navbar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --forest-green: #2c6e49;
            --light-green: #4c956c;
        }
        
        body {
            padding-top: 80px; /* Add padding to prevent content from hiding behind fixed navbar */
        }
        
        /* Navbar styling */
        .navbar {
            transition: all 0.3s ease;
            padding: 15px 0;
        }
        
        /* Transparent navbar when at the top */
        .navbar-transparent {
            background-color: transparent !important;
            box-shadow: none;
        }
        
        /* Solid navbar when scrolled */
        .navbar-scrolled {
            background-color: #fff !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }
        
        .navbar-brand img {
            height: 40px;
            transition: all 0.3s ease;
        }
        
        .navbar-scrolled .navbar-brand img {
            height: 35px;
        }
        
        .nav-link {
            position: relative;
            margin: 0 5px;
            padding: 5px 0 !important;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--forest-green) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--forest-green);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Language switcher styling */
        .language-switch-container {
            display: flex;
            align-items: center;
        }
        
        .language-switch-link {
            color: #212529;
            text-decoration: none;
            font-weight: bold;
            padding: 0 5px;
            transition: color 0.3s ease;
        }
        
        .language-switch-link:hover {
            color: var(--forest-green);
        }
        
        .language-switch-link.active {
            color: var(--forest-green);
        }
        
        .language-divider {
            color: #aaa;
            margin: 0 2px;
        }
        
        /* Offcanvas menu styling */
        .offcanvas {
            max-width: 300px;
        }
        
        .offcanvas-title {
            color: var(--forest-green);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light navbar-transparent">
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
                                <a class="nav-link text-black fw-bold" href="#home">{{ __('site.beranda') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#about">{{ __('site.tentang_kami') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#team">{{ __('site.mitra') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#products">{{ __('site.layanan_kami') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#contact">{{ __('site.kontak') }}</a>
                            </li>
                            <li class="nav-item d-flex align-items-center ms-2">
                                <div class="language-switch-container">
                                    <a class="language-switch-link {{ App::getLocale() == 'id' ? 'active' : '' }}" href="{{ route('language.switch', 'id') }}">ID</a>
                                    <span class="language-divider">|</span>
                                    <a class="language-switch-link {{ App::getLocale() == 'en' ? 'active' : '' }}" href="{{ route('language.switch', 'en') }}">EN</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- JavaScript for the scroll effect -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            
            // Function to handle navbar transparency on scroll
            function handleNavbarTransparency() {
                if (window.scrollY > 50) {
                    navbar.classList.remove('navbar-transparent');
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.add('navbar-transparent');
                    navbar.classList.remove('navbar-scrolled');
                }
            }
            
            // Initial call to set correct state based on scroll position
            handleNavbarTransparency();
            
            // Add scroll event listener
            window.addEventListener('scroll', handleNavbarTransparency);
        });
    </script>
</body>
</html>