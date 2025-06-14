/**
 * Enhanced Responsive JavaScript
 * Handles mobile interactions, responsive behavior, and UI enhancements
 */

(function() {
    'use strict';

    // Configuration
    const config = {
        breakpoints: {
            sm: 576,
            md: 768,
            lg: 992,
            xl: 1200,
            xxl: 1400
        },
        navbarHeight: {
            mobile: 56,
            desktop: 64
        }
    };

    // Utility functions
    const utils = {
        debounce: function(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        },

        throttle: function(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        },

        getViewportWidth: function() {
            return Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
        },

        getViewportHeight: function() {
            return Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
        },

        isMobile: function() {
            return this.getViewportWidth() < config.breakpoints.md;
        },

        isTablet: function() {
            const width = this.getViewportWidth();
            return width >= config.breakpoints.md && width < config.breakpoints.lg;
        },

        isDesktop: function() {
            return this.getViewportWidth() >= config.breakpoints.lg;
        }
    };

    // Responsive Navigation Handler
    class ResponsiveNavigation {
        constructor() {
            this.navbar = document.querySelector('.navbar');
            this.navbarBrand = document.querySelector('.navbar-brand');
            this.offcanvas = document.querySelector('#offcanvasNavbar');
            this.navLinks = document.querySelectorAll('.nav-link');
            this.body = document.body;
            this.isScrolled = false;
            this.lastScrollTop = 0;
            
            this.init();
        }

        init() {
            this.setupScrollBehavior();
            this.setupNavLinkClicks();
            this.setupOffcanvasEvents();
            this.setupKeyboardNavigation();
            this.setupActiveNavLinks();
        }

        setupScrollBehavior() {
            const handleScroll = utils.throttle(() => {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                // Add/remove scrolled class
                if (scrollTop > 50 && !this.isScrolled) {
                    this.navbar.classList.add('navbar-scrolled');
                    this.isScrolled = true;
                } else if (scrollTop <= 50 && this.isScrolled) {
                    this.navbar.classList.remove('navbar-scrolled');
                    this.isScrolled = false;
                }

                // Hide/show navbar on mobile scroll
                if (utils.isMobile()) {
                    if (scrollTop > this.lastScrollTop && scrollTop > 100) {
                        this.navbar.style.transform = 'translateY(-100%)';
                    } else {
                        this.navbar.style.transform = 'translateY(0)';
                    }
                }

                this.lastScrollTop = scrollTop;
            }, 10);

            window.addEventListener('scroll', handleScroll, { passive: true });
        }

        setupNavLinkClicks() {
            this.navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    const href = link.getAttribute('href');
                    
                    if (href && href.startsWith('#')) {
                        e.preventDefault();
                        this.smoothScrollToSection(href);
                        
                        // Close offcanvas on mobile
                        if (utils.isMobile() && this.offcanvas) {
                            const bsOffcanvas = bootstrap.Offcanvas.getInstance(this.offcanvas);
                            if (bsOffcanvas) {
                                bsOffcanvas.hide();
                            }
                        }
                    }
                });
            });
        }

        smoothScrollToSection(targetId) {
            const target = document.querySelector(targetId);
            if (target) {
                const navbarHeight = utils.isMobile() ? 
                    config.navbarHeight.mobile : 
                    config.navbarHeight.desktop;
                
                const offsetTop = target.offsetTop - navbarHeight;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }

        setupOffcanvasEvents() {
            if (this.offcanvas) {
                this.offcanvas.addEventListener('show.bs.offcanvas', () => {
                    this.body.style.overflow = 'hidden';
                });

                this.offcanvas.addEventListener('hide.bs.offcanvas', () => {
                    this.body.style.overflow = '';
                });
            }
        }

        setupKeyboardNavigation() {
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.offcanvas) {
                    const bsOffcanvas = bootstrap.Offcanvas.getInstance(this.offcanvas);
                    if (bsOffcanvas) {
                        bsOffcanvas.hide();
                    }
                }
            });
        }

        setupActiveNavLinks() {
            const sections = document.querySelectorAll('section[id]');
            
            const handleActiveNav = utils.throttle(() => {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (pageYOffset >= sectionTop - 200) {
                        current = section.getAttribute('id');
                    }
                });

                this.navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            }, 100);

            window.addEventListener('scroll', handleActiveNav, { passive: true });
        }
    }

    // Touch and Gesture Handler
    class TouchHandler {
        constructor() {
            this.touchStartX = 0;
            this.touchStartY = 0;
            this.touchEndX = 0;
            this.touchEndY = 0;
            this.swipeThreshold = 50;
            
            this.init();
        }

        init() {
            this.setupSwipeGestures();
            this.setupTouchFeedback();
            this.setupDoubleTapPrevention();
        }

        setupSwipeGestures() {
            document.addEventListener('touchstart', (e) => {
                this.touchStartX = e.changedTouches[0].screenX;
                this.touchStartY = e.changedTouches[0].screenY;
            }, { passive: true });

            document.addEventListener('touchend', (e) => {
                this.touchEndX = e.changedTouches[0].screenX;
                this.touchEndY = e.changedTouches[0].screenY;
                this.handleSwipe();
            }, { passive: true });
        }

        handleSwipe() {
            const deltaX = this.touchEndX - this.touchStartX;
            const deltaY = this.touchEndY - this.touchStartY;
            
            // Check if it's a horizontal swipe
            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > this.swipeThreshold) {
                if (deltaX > 0) {
                    this.onSwipeRight();
                } else {
                    this.onSwipeLeft();
                }
            }
        }

        onSwipeRight() {
            // Open offcanvas on right swipe from left edge
            if (this.touchStartX < 30 && utils.isMobile()) {
                const offcanvas = document.querySelector('#offcanvasNavbar');
                if (offcanvas) {
                    const bsOffcanvas = new bootstrap.Offcanvas(offcanvas);
                    bsOffcanvas.show();
                }
            }
        }

        onSwipeLeft() {
            // Close offcanvas on left swipe
            const offcanvas = document.querySelector('#offcanvasNavbar');
            if (offcanvas) {
                const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
                if (bsOffcanvas) {
                    bsOffcanvas.hide();
                }
            }
        }

        setupTouchFeedback() {
            const interactiveElements = document.querySelectorAll(
                '.btn, .nav-link, .card, .kotak, .cta-button, .filter-btn'
            );

            interactiveElements.forEach(element => {
                element.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.95)';
                    this.style.transition = 'transform 0.1s ease';
                }, { passive: true });

                element.addEventListener('touchend', function() {
                    this.style.transform = '';
                    this.style.transition = '';
                }, { passive: true });

                element.addEventListener('touchcancel', function() {
                    this.style.transform = '';
                    this.style.transition = '';
                }, { passive: true });
            });
        }

        setupDoubleTapPrevention() {
            let lastTouchEnd = 0;
            document.addEventListener('touchend', function(event) {
                const now = (new Date()).getTime();
                if (now - lastTouchEnd <= 300) {
                    event.preventDefault();
                }
                lastTouchEnd = now;
            }, false);
        }
    }

    // Responsive Image Handler
    class ResponsiveImages {
        constructor() {
            this.images = document.querySelectorAll('img[data-src], img[loading="lazy"]');
            this.init();
        }

        init() {
            this.setupLazyLoading();
            this.setupImageOptimization();
        }

        setupLazyLoading() {
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.removeAttribute('data-src');
                            }
                            img.classList.add('loaded');
                            observer.unobserve(img);
                        }
                    });
                });

                this.images.forEach(img => imageObserver.observe(img));
            }
        }

        setupImageOptimization() {
            this.images.forEach(img => {
                img.addEventListener('load', () => {
                    img.classList.add('img-loaded');
                });

                img.addEventListener('error', () => {
                    img.classList.add('img-error');
                    // Fallback image
                    if (img.dataset.fallback) {
                        img.src = img.dataset.fallback;
                    }
                });
            });
        }
    }

    // Performance Monitor
    class PerformanceMonitor {
        constructor() {
            this.init();
        }

        init() {
            this.monitorFPS();
            this.optimizeAnimations();
            this.setupReducedMotion();
        }

        monitorFPS() {
            let lastTime = performance.now();
            let frameCount = 0;
            
            const updateFPS = (currentTime) => {
                frameCount++;
                
                if (currentTime >= lastTime + 1000) {
                    const fps = Math.round((frameCount * 1000) / (currentTime - lastTime));
                    
                    // Reduce animations if FPS is low
                    if (fps < 30) {
                        document.body.classList.add('reduce-animations');
                    } else {
                        document.body.classList.remove('reduce-animations');
                    }
                    
                    frameCount = 0;
                    lastTime = currentTime;
                }
                
                requestAnimationFrame(updateFPS);
            };
            
            requestAnimationFrame(updateFPS);
        }

        optimizeAnimations() {
            // Pause animations when page is not visible
            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    document.body.classList.add('paused-animations');
                } else {
                    document.body.classList.remove('paused-animations');
                }
            });
        }

        setupReducedMotion() {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                document.body.classList.add('reduce-animations');
            }
        }
    }

    // Responsive Layout Manager
    class ResponsiveLayoutManager {
        constructor() {
            this.currentBreakpoint = this.getCurrentBreakpoint();
            this.init();
        }

        init() {
            this.setupResizeHandler();
            this.setupOrientationHandler();
            this.setupViewportHeight();
        }

        getCurrentBreakpoint() {
            const width = utils.getViewportWidth();
            if (width >= config.breakpoints.xxl) return 'xxl';
            if (width >= config.breakpoints.xl) return 'xl';
            if (width >= config.breakpoints.lg) return 'lg';
            if (width >= config.breakpoints.md) return 'md';
            if (width >= config.breakpoints.sm) return 'sm';
            return 'xs';
        }

        setupResizeHandler() {
            const handleResize = utils.debounce(() => {
                const newBreakpoint = this.getCurrentBreakpoint();
                
                if (newBreakpoint !== this.currentBreakpoint) {
                    document.body.classList.remove(`breakpoint-${this.currentBreakpoint}`);
                    document.body.classList.add(`breakpoint-${newBreakpoint}`);
                    
                    // Dispatch custom event
                    window.dispatchEvent(new CustomEvent('breakpointChange', {
                        detail: { 
                            from: this.currentBreakpoint, 
                            to: newBreakpoint 
                        }
                    }));
                    
                    this.currentBreakpoint = newBreakpoint;
                }
                
                this.adjustLayoutForBreakpoint();
            }, 250);

            window.addEventListener('resize', handleResize);
            
            // Initial setup
            document.body.classList.add(`breakpoint-${this.currentBreakpoint}`);
            this.adjustLayoutForBreakpoint();
        }

        setupOrientationHandler() {
            const handleOrientationChange = () => {
                // Update viewport height after orientation change
                setTimeout(() => {
                    this.setupViewportHeight();
                }, 100);
            };

            window.addEventListener('orientationchange', handleOrientationChange);
        }

        setupViewportHeight() {
            // Set CSS custom property for viewport height (mobile safe)
            const vh = utils.getViewportHeight() * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }

        adjustLayoutForBreakpoint() {
            const containers = document.querySelectorAll('.container-kotak');
            
            containers.forEach(container => {
                switch (this.currentBreakpoint) {
                    case 'xs':
                        container.style.gridTemplateColumns = 'repeat(2, 1fr)';
                        break;
                    case 'sm':
                        container.style.gridTemplateColumns = 'repeat(3, 1fr)';
                        break;
                    case 'md':
                        container.style.gridTemplateColumns = 'repeat(4, 1fr)';
                        break;
                    case 'lg':
                    case 'xl':
                    case 'xxl':
                        container.style.gridTemplateColumns = 'repeat(7, 1fr)';
                        break;
                }
            });
        }
    }

    // Form Enhancement
    class FormEnhancement {
        constructor() {
            this.forms = document.querySelectorAll('form');
            this.init();
        }

        init() {
            this.setupFormValidation();
            this.setupFloatingLabels();
            this.setupSubmitHandlers();
        }

        setupFormValidation() {
            this.forms.forEach(form => {
                const inputs = form.querySelectorAll('input, textarea, select');
                
                inputs.forEach(input => {
                    input.addEventListener('blur', () => {
                        this.validateInput(input);
                    });
                    
                    input.addEventListener('input', () => {
                        if (input.classList.contains('is-invalid')) {
                            this.validateInput(input);
                        }
                    });
                });
            });
        }

        validateInput(input) {
            const isValid = input.checkValidity();
            
            input.classList.toggle('is-valid', isValid);
            input.classList.toggle('is-invalid', !isValid);
            
            return isValid;
        }

        setupFloatingLabels() {
            const floatingInputs = document.querySelectorAll('.form-floating input, .form-floating textarea');
            
            floatingInputs.forEach(input => {
                const updateFloatingLabel = () => {
                    const label = input.nextElementSibling;
                    if (label && label.tagName === 'LABEL') {
                        if (input.value || input === document.activeElement) {
                            label.classList.add('floating-active');
                        } else {
                            label.classList.remove('floating-active');
                        }
                    }
                };

                input.addEventListener('focus', updateFloatingLabel);
                input.addEventListener('blur', updateFloatingLabel);
                input.addEventListener('input', updateFloatingLabel);
                
                // Initial check
                updateFloatingLabel();
            });
        }

        setupSubmitHandlers() {
            this.forms.forEach(form => {
                form.addEventListener('submit', (e) => {
                    let isValid = true;
                    const inputs = form.querySelectorAll('input, textarea, select');
                    
                    inputs.forEach(input => {
                        if (!this.validateInput(input)) {
                            isValid = false;
                        }
                    });
                    
                    if (!isValid) {
                        e.preventDefault();
                        const firstInvalid = form.querySelector('.is-invalid');
                        if (firstInvalid) {
                            firstInvalid.focus();
                        }
                    }
                });
            });
        }
    }

    // Initialize all modules when DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize core modules
        new ResponsiveNavigation();
        new ResponsiveLayoutManager();
        new ResponsiveImages();
        new PerformanceMonitor();
        new FormEnhancement();
        
        // Initialize touch handler only on touch devices
        if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
            new TouchHandler();
        }
        
        // Add loaded class to body
        document.body.classList.add('js-loaded');
        
        // Trigger initial animations
        setTimeout(() => {
            document.body.classList.add('animations-ready');
        }, 100);
    });

    // CSS for performance optimizations
    const style = document.createElement('style');
    style.textContent = `
        .reduce-animations * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
        
        .paused-animations * {
            animation-play-state: paused !important;
        }
        
        .navbar {
            transition: transform 0.3s ease-in-out;
        }
        
        .navbar-scrolled {
            background-color: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }
        
        .img-loaded {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }
        
        .img-error {
            opacity: 0.5;
            filter: grayscale(100%);
        }
        
        img[data-src], img[loading="lazy"] {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        
        .form-floating label.floating-active {
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
            opacity: 0.65;
        }
        
        .is-valid {
            border-color: #28a745 !important;
        }
        
        .is-invalid {
            border-color: #dc3545 !important;
        }
        
        @media (max-width: 991.98px) {
            .hero-section-new {
                min-height: calc(var(--vh, 1vh) * 100);
            }
        }
    `;
    document.head.appendChild(style);

})();
