<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ABHIRAJA GIOVANNI TRYAMANDA</title>
    <link rel="icon" href="assets/img/logo/Logo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
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
    </style>
</head>
<body>
    

    <script>
        document.addEventListener('scroll', function() {
            const hero = document.querySelector('.hero');
            const scrollPosition = window.scrollY;
            if (scrollPosition > 50) {
                hero.classList.add('scrolled');
            } else {
                hero.classList.remove('scrolled');
            }
        });

        const kotaks = document.querySelectorAll('.kotak');
        kotaks.forEach(kotak => {
            setTimeout(() => {
                kotak.classList.add('slide-in');
            }, parseInt(kotak.getAttribute('data-aos-delay')));
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>