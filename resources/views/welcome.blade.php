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

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    {{-- <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #007bff;
            color: white;
            text-align: center;
            border-radius: 50%;
            z-index: 1000;
        }
        .back-to-top:hover {
            background-color: #0056b3;
            color: white;
        }
        .hero {
            background-image: url('assets/img/cityscape.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center 0;
            height: 100vh;
            position: relative;
            overflow: hidden;
            transition: background-position 0.3s ease-out;
        }
        .hero-content h1, .hero-content p {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .kotak {
            opacity: 0;
            transform: translateX(-100%);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .kotak.slide-in {
            opacity: 1;
            transform: translateX(0);
        }
        @media (prefers-reduced-motion: no-preference) {
            .hero {
                background-position: center 0;
            }
            .hero.scrolled {
                background-position: center 20%;
            }
        }
    </style> --}}
</head>
<body>
    @include('partials.header-new')
    
    <main>
        @yield('content')
    </main>
    
    <footer class="footer">
        @include('partials.footer')
    </footer>

    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Show back-to-top button when scrolling down
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("backToTop").style.display = "block";
            } else {
                document.getElementById("backToTop").style.display = "none";
            }
        };
        
        // Smooth scroll to top when clicking back-to-top button
        document.getElementById("backToTop").addEventListener("click", function(e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    </script>
    
    @stack('scripts')
</body>
</html>

