<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<style>
    :root {
        --primary-green: #1E6043;
        --accent-yellow: #F9A825;
        --neutral-white: #FFFFFF;
        --neutral-off-white: #F8F9FA;
        --neutral-medium-grey: #6C757D;
        --neutral-charcoal: #343A40;
        --font-heading: 'Poppins', sans-serif;
        --font-body: 'Lato', sans-serif;
    }

    .hero-section-new {
        width: 100%;
        height: 90vh;
        position: relative;
        overflow: hidden;
        font-family: var(--font-body);
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden; /* For Ken Burns effect */
    }    .slide-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #1E6043; /* Fallback color if image doesn't load */
        animation: kenBurns 20s infinite alternate;
        z-index: 0;
    }    /* Enhanced Ken Burns Effect - More subtle and varied */
    @keyframes kenBurns {
        0% {
            transform: scale(1) translate(0, 0);
        }
        25% {
            transform: scale(1.02) translate(-1%, 1%);
        }
        50% {
            transform: scale(1.05) translate(1%, -0.5%);
        }
        75% {
            transform: scale(1.03) translate(-0.5%, 1.5%);
        }
        100% {
            transform: scale(1.08) translate(-1.5%, 1%);
        }
    }.slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, 
            rgba(0, 0, 0, 0.4) 0%, 
            rgba(0, 0, 0, 0.5) 30%, 
            rgba(30, 96, 67, 0.7) 70%, 
            rgba(30, 96, 67, 0.9) 100%
        );
        z-index: 1;
    }    .slide-content {
        position: relative;
        z-index: 2;
        color: var(--neutral-white);
        max-width: 800px;
        padding: 20px;
        opacity: 0; /* Initial state for JS control */
        transform: translateY(50px); /* Initial state for JS control */
        transition: opacity 0.7s ease-out 0.3s, transform 0.7s ease-out 0.3s;
    }

    /* Staggered Text Animation Classes */
    .slide-content.animate-in h1 {
        animation: fadeInUp 0.8s ease-out 0.2s forwards;
    }

    .slide-content.animate-in p {
        animation: fadeInUp 0.8s ease-out 0.5s forwards;
    }

    .slide-content.animate-in .cta-button {
        animation: fadeInUp 0.8s ease-out 0.8s forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .slide-content h1 {
        font-family: var(--font-heading);
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        line-height: 1.3;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); /* Enhanced text depth */
        opacity: 0; /* Initial state for staggered animation */
    }

    .slide-content p {
        font-size: 1.25rem;
        margin-bottom: 1.5rem;
        line-height: 1.6;
        font-weight: 300;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4); /* Subtle text depth */
        opacity: 0; /* Initial state for staggered animation */
    }    .slide-content .cta-button {
        font-family: var(--font-heading);
        background: linear-gradient(135deg, var(--accent-yellow), #FFD54F);
        color: var(--neutral-charcoal);
        padding: 14px 32px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        box-shadow: 0 4px 15px rgba(249, 168, 37, 0.3);
        position: relative;
        overflow: hidden;
        opacity: 0; /* Initial state for staggered animation */
    }    .slide-content .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -20%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s ease;
        z-index: -1; /* Ensure it stays behind the button */
    }

    .slide-content .cta-button:hover::before {
        left: 20%;
    }

    .slide-content .cta-button:hover {
        background: linear-gradient(135deg, #FFD54F, var(--accent-yellow));
        color: var(--neutral-charcoal);
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 8px 25px rgba(249, 168, 37, 0.5);
    }

    .slide-content .cta-button:active {
        transform: translateY(-2px) scale(1.01);
        transition: all 0.1s ease;
    }    /* Enhanced Custom Swiper Navigation */
    .swiper-button-next,
    .swiper-button-prev {
        color: var(--neutral-white);
        background: rgba(52, 58, 64, 0.7);
        border-radius: 50%;
        width: 60px;
        height: 60px;
        margin-top: -30px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: rgba(52, 58, 64, 0.9);
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(249, 168, 37, 0.6);
        border-color: var(--accent-yellow);
    }

    .swiper-button-next:active,
    .swiper-button-prev:active {
        transform: scale(1.05);
        transition: transform 0.1s ease;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 1.4rem;
        font-weight: 600;
        color: var(--neutral-white);
    }

    /* Position adjustments for better visual balance */
    .swiper-button-next {
        right: 30px;
    }

    .swiper-button-prev {
        left: 30px;
    }    /* Enhanced Swiper Pagination - Custom Line/Bar Style */
    .swiper-pagination {
        bottom: 30px !important;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet {
        background-color: rgba(255, 255, 255, 0.4);
        opacity: 1;
        width: 40px;
        height: 4px;
        border-radius: 2px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        margin: 0 4px !important;
        cursor: pointer;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet:hover {
        background-color: rgba(255, 255, 255, 0.6);
        height: 5px;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet-active {
        background: linear-gradient(135deg, var(--accent-yellow), #FFD54F);
        width: 60px;
        height: 6px;
        box-shadow: 0 2px 8px rgba(249, 168, 37, 0.4);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .slide-content h1 {
            font-size: 2.8rem;
        }
        .slide-content p {
            font-size: 1.1rem;
        }
        .slide-content .cta-button {
            padding: 10px 25px;
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .hero-section-new {
            height: auto; /* Adjust height for smaller screens */
            min-height: 80vh;
        }
        .slide-content h1 {
            font-size: 2.2rem;
        }
        .slide-content p {
            font-size: 1rem;
        }
        .swiper-button-next,
        .swiper-button-prev {
            width: 40px;
            height: 40px;
        }
        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 576px) {
        .slide-content h1 {
            font-size: 1.8rem;
        }
        .slide-content p {
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        .slide-content .cta-button {
            padding: 8px 20px;
            font-size: 0.9rem;
        }
        .swiper-pagination-bullets .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
        }
        .swiper-pagination-bullets .swiper-pagination-bullet-active {
            width: 12px;
            height: 12px;
        }
    }
</style>

<section class="hero-section-new">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">            <!-- Slide 1: Pendidikan -->
            <div class="swiper-slide">
                <div class="slide-background" style="background-image: url('{{ asset('assets/img/hero/slide-1.jpg') }}');"></div>
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h1><?php echo __('site.slide1_h1'); ?></h1>
                    <p><?php echo __('site.slide1_sub'); ?></p>
                    <a href="#kontak" class="cta-button"><?php echo __('site.slide1_cta'); ?></a>
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
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

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
                delay: 3000, // 3 seconds delay
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
