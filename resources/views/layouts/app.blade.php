<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/language-switcher.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>    @include('partials.header-new')
      @if(session('locale_changed'))
    <div class="language-notification alert alert-dark alert-dismissible fade show m-0" style="border-radius:0; position: relative; z-index: 1030; background-color: rgba(0,0,0,0.8); color: white;">
        <div class="container">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <i class="fas fa-check-circle me-2"></i>
            {{ App::isLocale('id') ? 'Bahasa: Indonesia' : 'Language: English' }}
        </div>
    </div>
    @endif
    
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
