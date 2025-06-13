// Swiper Configuration and Particle Effects
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Swiper only if element exists
    const swiperContainer = document.querySelector('.swiper-container');
    if (!swiperContainer) return;

    const swiper = new Swiper('.swiper-container', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        a11y: {
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
        },
        on: {
            slideChangeTransitionStart: function () {
                this.slides.forEach((slide) => {
                    const slideContent = slide.querySelector('.slide-content');
                    if (slideContent) {
                        slideContent.classList.remove('animate-in');
                        slideContent.style.opacity = '0';
                        slideContent.style.transform = 'translateY(50px)';
                        
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
                if (this.slides[this.activeIndex]) {
                    const activeSlideContent = this.slides[this.activeIndex].querySelector('.slide-content');
                    if (activeSlideContent) {
                        setTimeout(() => {
                            activeSlideContent.classList.add('animate-in');
                            activeSlideContent.style.opacity = '1';
                            activeSlideContent.style.transform = 'translateY(0)';
                        }, 100);
                    }
                }
            },
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

    // Lightweight particle effect
    function createParticles() {
        const heroSection = document.querySelector('.hero-section-new');
        if (!heroSection) return;

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
        
        // Create fewer particles for better performance
        for (let i = 0; i < 10; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.cssText = `
                position: absolute;
                width: 4px;
                height: 4px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                animation: float ${8 + Math.random() * 8}s linear infinite;
                left: ${Math.random() * 100}%;
                animation-delay: ${Math.random() * 5}s;
            `;
            particleContainer.appendChild(particle);
        }
        
        heroSection.appendChild(particleContainer);
    }

    // Initialize particles with delay to prevent blocking
    setTimeout(createParticles, 1000);

    // Handle main slide content visibility
    const mainSlideContent = document.querySelector('.slide-content.main-slide');
    if (mainSlideContent) {
        mainSlideContent.style.opacity = '1';
        mainSlideContent.style.transform = 'translateY(0)';
    }
});
