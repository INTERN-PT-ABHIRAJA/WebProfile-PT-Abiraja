// digital-profile.js
// Advanced animations & interactivity for digital services profile page

document.addEventListener('DOMContentLoaded', function() {
    // Navbar scroll transparency with smooth transitions
    const navbar = document.querySelector('.navbar') || document.querySelector('.digital-navbar');
    let lastScrollTop = 0;
    let ticking = false;
    
    function handleNavbarTransparency() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (navbar) {
            if (scrollTop > 50) {
                // Make navbar more transparent when scrolled
                navbar.style.background = 'rgba(26, 26, 46, 0.2)'; // More transparent
                navbar.style.backdropFilter = 'blur(15px)';
                navbar.style.webkitBackdropFilter = 'blur(15px)';
                navbar.style.borderBottom = '1px solid rgba(0, 245, 255, 0.2)';
                navbar.style.boxShadow = '0 8px 32px rgba(0, 245, 255, 0.1)';
                navbar.classList.add('scrolled');
                
                // Add subtle glow effect when scrolled
                navbar.style.setProperty('--navbar-glow', '0 0 20px rgba(0, 245, 255, 0.1)');
            } else {
                // Reset to less transparent when at top
                navbar.style.background = 'rgba(26, 26, 46, 0.95)';
                navbar.style.backdropFilter = 'blur(20px)';
                navbar.style.webkitBackdropFilter = 'blur(20px)';
                navbar.style.borderBottom = '1px solid rgba(255, 255, 255, 0.1)';
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.3)';
                navbar.classList.remove('scrolled');
                navbar.style.setProperty('--navbar-glow', 'none');
            }
        }
        
        lastScrollTop = scrollTop;
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(handleNavbarTransparency);
            ticking = true;
        }
    }
    
    // Optimized scroll listener using requestAnimationFrame
    window.addEventListener('scroll', requestTick, { passive: true });
    window.addEventListener('resize', handleNavbarTransparency);
    
    // Initial call to set correct state
    handleNavbarTransparency();

    // Advanced loading screen animation with better error handling
    const loadingScreen = document.getElementById('loading-screen');
    const progressBar = document.querySelector('.progress-bar');
    const progressText = document.querySelector('.progress-text');
    
    // Failsafe: Hide loading screen after maximum time
    const failsafeTimeout = setTimeout(() => {
        hideLoadingScreen();
    }, 3000); // Maximum 3 seconds
    
    let progress = 0;
    const loadingInterval = setInterval(() => {
        progress += Math.random() * 15 + 10; // Faster loading
        if (progress > 100) progress = 100;
        
        if (progressBar) {
            progressBar.style.width = progress + '%';
            progressBar.style.background = `linear-gradient(90deg, 
                #00f5ff ${progress * 0.3}%, 
                #4ecdc4 ${progress * 0.6}%, 
                #45b7d1 ${progress}%
            )`;
        }
        if (progressText) progressText.textContent = Math.floor(progress) + '%';
        
        if (progress >= 100) {
            clearInterval(loadingInterval);
            clearTimeout(failsafeTimeout);
            setTimeout(() => {
                hideLoadingScreen();
            }, 300); // Reduced delay
        }
    }, 60); // Faster intervals
    
    function hideLoadingScreen() {
        if (loadingScreen) {
            // Remove loading class from body
            document.body.classList.remove('loading');
            
            loadingScreen.style.opacity = '0';
            loadingScreen.style.transform = 'scale(1.1)';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
                loadingScreen.remove(); // Completely remove from DOM
                initializeAnimations();
            }, 400);
        }
    }

    // Advanced particles.js configuration
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            particles: {
                number: { value: 120, density: { enable: true, value_area: 800 } },
                color: { value: ['#00f5ff', '#ff6b6b', '#4ecdc4', '#9b59b6'] },
                shape: { 
                    type: ['circle', 'triangle', 'polygon'],
                    polygon: { nb_sides: 6 }
                },
                opacity: { 
                    value: 0.6, 
                    random: true,
                    anim: { enable: true, speed: 1, opacity_min: 0.1 }
                },
                size: { 
                    value: 4, 
                    random: true,
                    anim: { enable: true, speed: 2, size_min: 0.1 }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#00f5ff',
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 3,
                    direction: 'none',
                    random: true,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                    attract: { enable: true, rotateX: 600, rotateY: 1200 }
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: { enable: true, mode: 'bubble' },
                    onclick: { enable: true, mode: 'repulse' },
                    resize: true
                },
                modes: {
                    bubble: { distance: 200, size: 8, duration: 2, opacity: 1, speed: 3 },
                    repulse: { distance: 300, duration: 0.4 },
                    push: { particles_nb: 4 },
                    remove: { particles_nb: 2 }
                }
            },
            retina_detect: true
        });
    }

    function initializeAnimations() {
        // Enhanced navbar scroll effect with color changes
        const navbar = document.querySelector('.digital-navbar');
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const scrollPercent = scrollTop / (document.documentElement.scrollHeight - window.innerHeight);
            
            if (navbar) {
                if (scrollTop > 100) {
                    navbar.classList.add('scrolled');
                    // Change navbar color based on scroll position
                    const hue = Math.floor(scrollPercent * 360);
                    navbar.style.background = `hsla(${hue}, 70%, 20%, 0.95)`;
                } else {
                    navbar.classList.remove('scrolled');
                    navbar.style.background = 'rgba(15, 15, 35, 0.95)';
                }
            }
            
            lastScrollTop = scrollTop;
        });

        // Advanced typing animation for hero text
        const typingText = document.querySelector('.typing-text');
        if (typingText) {
            const text = typingText.textContent;
            typingText.textContent = '';
            
            // Create gradient cursor
            const cursor = document.createElement('span');
            cursor.textContent = '|';
            cursor.style.cssText = `
                background: linear-gradient(45deg, #00f5ff, #ff6b6b);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                animation: blink 1s infinite;
            `;
            
            let i = 0;
            const typeWriter = () => {
                if (i < text.length) {
                    typingText.textContent += text.charAt(i);
                    // Add rainbow effect to each character
                    const chars = typingText.textContent.split('');
                    typingText.innerHTML = chars.map((char, index) => {
                        const hue = (index * 30) % 360;
                        return `<span style="color: hsl(${hue}, 70%, 60%)">${char}</span>`;
                    }).join('');
                    
                    i++;
                    setTimeout(typeWriter, 150);
                } else {
                    // Remove cursor after typing
                    setTimeout(() => {
                        // Add final glow effect
                        typingText.style.filter = 'drop-shadow(0 0 20px rgba(0, 245, 255, 0.8))';
                    }, 1000);
                }
            };
            
            setTimeout(typeWriter, 1500);
        }

        // Enhanced counter animation with easing and color changes
        const animateCounters = () => {
            document.querySelectorAll('[data-counter]').forEach((counter, index) => {
                const target = parseInt(counter.getAttribute('data-counter'));
                const duration = 2500;
                const start = performance.now();
                
                const animate = (currentTime) => {
                    const elapsed = currentTime - start;
                    const progress = Math.min(elapsed / duration, 1);
                    const easeOutElastic = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress) * Math.sin((progress * 10 - 0.75) * (2 * Math.PI) / 3);
                    const current = Math.floor(easeOutElastic * target);
                    
                    counter.textContent = current;
                    
                    // Change color based on progress
                    const hue = progress * 120; // From red to green
                    counter.style.color = `hsl(${180 + hue}, 70%, 60%)`;
                    
                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    } else {
                        // Final pulse effect
                        counter.style.animation = 'pulse 2s infinite';
                    }
                };
                
                // Stagger the start time
                setTimeout(() => requestAnimationFrame(animate), index * 200);
            });
        };

        // Advanced scroll reveal animations with intersection observer
        const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('active');
                        
                        // Add ripple effect on reveal
                        const ripple = document.createElement('div');
                        ripple.style.cssText = `
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            width: 10px;
                            height: 10px;
                            background: radial-gradient(circle, rgba(0,245,255,0.6) 0%, transparent 70%);
                            border-radius: 50%;
                            transform: translate(-50%, -50%) scale(0);
                            animation: rippleExpand 1s ease-out;
                            pointer-events: none;
                            z-index: 1000;
                        `;
                        
                        entry.target.style.position = 'relative';
                        entry.target.appendChild(ripple);
                        
                        setTimeout(() => ripple.remove(), 1000);
                        
                        // Trigger counter animation when stats section is revealed
                        if (entry.target.querySelector('[data-counter]')) {
                            animateCounters();
                        }
                    }, index * 100);
                }
            });
        }, observerOptions);
        
        revealElements.forEach(el => revealObserver.observe(el));

        // Enhanced card interactions with 3D effects
        document.querySelectorAll('.service-card, .portfolio-card, .team-card').forEach((card, index) => {
            // Mouse move 3D effect
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / centerY * -15;
                const rotateY = (x - centerX) / centerX * 15;
                
                this.style.transform = `
                    translateY(-15px) 
                    rotateX(${rotateX}deg) 
                    rotateY(${rotateY}deg) 
                    scale(1.05)
                `;
                
                // Add dynamic gradient based on mouse position
                const gradientX = (x / rect.width) * 100;
                const gradientY = (y / rect.height) * 100;
                this.style.background = `
                    radial-gradient(circle at ${gradientX}% ${gradientY}%, 
                        rgba(0, 245, 255, 0.1) 0%, 
                        var(--card-bg) 50%
                    )
                `;
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0) rotateY(0) scale(1)';
                this.style.background = 'var(--card-bg)';
            });
            
            // Click animation with burst effect
            card.addEventListener('click', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                // Create burst effect
                for (let i = 0; i < 6; i++) {
                    const particle = document.createElement('div');
                    const angle = (i / 6) * Math.PI * 2;
                    const velocity = 100;
                    
                    particle.style.cssText = `
                        position: absolute;
                        left: ${x}px;
                        top: ${y}px;
                        width: 4px;
                        height: 4px;
                        background: hsl(${Math.random() * 360}, 70%, 60%);
                        border-radius: 50%;
                        pointer-events: none;
                        z-index: 1000;
                    `;
                    
                    this.appendChild(particle);
                    
                    // Animate particle
                    particle.animate([
                        { transform: 'translate(0, 0) scale(1)', opacity: 1 },
                        { 
                            transform: `translate(${Math.cos(angle) * velocity}px, ${Math.sin(angle) * velocity}px) scale(0)`, 
                            opacity: 0 
                        }
                    ], {
                        duration: 800,
                        easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
                    }).onfinish = () => particle.remove();
                }
            });
        });

        // Advanced smooth scrolling with easing
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    // Custom smooth scroll with easing
                    const startPosition = window.pageYOffset;
                    const distance = offsetPosition - startPosition;
                    const duration = 1000;
                    let start = null;
                    
                    function animation(currentTime) {
                        if (start === null) start = currentTime;
                        const timeElapsed = currentTime - start;
                        const progress = Math.min(timeElapsed / duration, 1);
                        
                        // Ease-in-out cubic easing
                        const ease = progress < 0.5 
                            ? 4 * progress * progress * progress 
                            : (progress - 1) * (2 * progress - 2) * (2 * progress - 2) + 1;
                        
                        window.scrollTo(0, startPosition + distance * ease);
                        
                        if (timeElapsed < duration) {
                            requestAnimationFrame(animation);
                        }
                    }
                    
                    requestAnimationFrame(animation);
                }
            });
        });

        // Parallax effect for background elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.hero-section::before');
            
            parallaxElements.forEach(el => {
                el.style.transform = `translateY(${scrolled * 0.5}px)`;
            });
        });

        // Dynamic cursor trail effect
        const cursorTrail = [];
        const trailLength = 20;
        
        document.addEventListener('mousemove', (e) => {
            cursorTrail.push({ x: e.clientX, y: e.clientY, time: Date.now() });
            
            if (cursorTrail.length > trailLength) {
                cursorTrail.shift();
            }
            
            // Clean up old trail elements
            document.querySelectorAll('.cursor-trail').forEach(el => {
                if (Date.now() - parseInt(el.dataset.time) > 1000) {
                    el.remove();
                }
            });
            
            // Add new trail element
            const trail = document.createElement('div');
            trail.className = 'cursor-trail';
            trail.dataset.time = Date.now();
            trail.style.cssText = `
                position: fixed;
                left: ${e.clientX}px;
                top: ${e.clientY}px;
                width: 6px;
                height: 6px;
                background: radial-gradient(circle, rgba(0,245,255,0.8) 0%, transparent 70%);
                border-radius: 50%;
                pointer-events: none;
                z-index: 9999;
                animation: fadeTrail 1s ease-out forwards;
            `;
            
            document.body.appendChild(trail);
        });
    }

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes rippleExpand {
            to {
                transform: translate(-50%, -50%) scale(20);
                opacity: 0;
            }
        }
        
        @keyframes fadeTrail {
            to {
                opacity: 0;
                transform: scale(0);
            }
        }
        
        @keyframes floatParticle {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.6;
            }
            100% {
                transform: translateY(-20px) scale(0.8);
                opacity: 0;
            }
        }
        
        @keyframes glitchText {
            0% { text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2); }
            20% { text-shadow: -1px -1px 0 rgba(255, 255, 255, 0.2); }
            40% { text-shadow: 1px -1px 0 rgba(255, 255, 255, 0.2); }
            60% { text-shadow: -1px 1px 0 rgba(255, 255, 255, 0.2); }
            80% { text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2); }
            100% { text-shadow: -1px -1px 0 rgba(255, 255, 255, 0.2); }
        }
    `;
    document.head.appendChild(style);

    // Initialize AOS with custom settings
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1200,
            once: false,
            offset: 100,
            easing: 'ease-out-cubic',
            mirror: true
        });
    }

    // Scroll-triggered object animations
    const createFloatingObjects = () => {
        const objects = ['✦', '◆', '●', '▲', '★', '♦', '▼', '■'];
        const container = document.body;
        
        for (let i = 0; i < 15; i++) {
            const obj = document.createElement('div');
            obj.className = 'floating-object';
            obj.textContent = objects[Math.floor(Math.random() * objects.length)];
            obj.style.cssText = `
                position: fixed;
                font-size: ${Math.random() * 20 + 10}px;
                color: rgba(0, 245, 255, ${Math.random() * 0.5 + 0.2});
                left: ${Math.random() * 100}vw;
                top: ${Math.random() * 100}vh;
                pointer-events: none;
                z-index: 0;
                transition: all 2s cubic-bezier(0.25, 0.8, 0.25, 1);
                animation: floatObject ${Math.random() * 10 + 5}s linear infinite;
            `;
            container.appendChild(obj);
        }
    };

    // Add floating objects CSS animation
    const floatingStyle = document.createElement('style');
    floatingStyle.textContent = `
        @keyframes floatObject {
            0% {
                transform: translateY(0px) rotateZ(0deg);
                opacity: 0.3;
            }
            50% {
                transform: translateY(-100px) rotateZ(180deg);
                opacity: 0.8;
            }
            100% {
                transform: translateY(-200px) rotateZ(360deg);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(floatingStyle);

    // Create floating objects
    createFloatingObjects();

    // Enhanced parallax scrolling for objects
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.floating-object');
        
        parallaxElements.forEach((element, index) => {
            const speed = (index % 3 + 1) * 0.5;
            const yPos = -(scrolled * speed);
            const xPos = Math.sin(scrolled * 0.001 + index) * 50;
            element.style.transform = `translateY(${yPos}px) translateX(${xPos}px) rotateZ(${scrolled * 0.1}deg)`;
        });
    });

    // Enhanced service card interactions
    document.querySelectorAll('.service-card').forEach((card, index) => {
        // Initialize card animations on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animate service features list
                    const features = entry.target.querySelectorAll('.service-features li');
                    features.forEach((feature, i) => {
                        setTimeout(() => {
                            feature.style.opacity = '1';
                            feature.style.transform = 'translateX(0)';
                        }, i * 200);
                    });

                    // Animate tech badges
                    const badges = entry.target.querySelectorAll('.tech-badge');
                    badges.forEach((badge, i) => {
                        setTimeout(() => {
                            badge.style.opacity = '1';
                            badge.style.transform = 'translateY(0) scale(1)';
                        }, i * 150 + 500);
                    });

                    // Animate progress bar
                    const progressBar = entry.target.querySelector('.progress-bar');
                    if (progressBar) {
                        const skill = progressBar.getAttribute('data-skill');
                        setTimeout(() => {
                            progressBar.style.width = skill + '%';
                        }, 800);
                    }

                    // Start service-specific animations
                    const serviceType = entry.target.getAttribute('data-service');
                    startServiceAnimation(serviceType, entry.target);
                }
            });
        }, { threshold: 0.3 });

        observer.observe(card);

        // Enhanced hover effects
        card.addEventListener('mouseenter', function() {
            // Pause other animations and focus on this card
            document.querySelectorAll('.service-card').forEach(otherCard => {
                if (otherCard !== this) {
                    otherCard.style.opacity = '0.7';
                    otherCard.style.transform = 'scale(0.95)';
                }
            });

            // Enhanced glow effect
            this.style.boxShadow = `
                0 25px 80px rgba(0, 245, 255, 0.4),
                0 0 0 2px rgba(0, 245, 255, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1)
            `;

            // Animate particles
            const particles = this.querySelectorAll('.floating-particles');
            particles.forEach(particle => {
                createDynamicParticles(particle);
            });
        });

        card.addEventListener('mouseleave', function() {
            // Reset all cards
            document.querySelectorAll('.service-card').forEach(otherCard => {
                otherCard.style.opacity = '1';
                otherCard.style.transform = 'scale(1)';
            });
        });
    });

    // Service-specific animation functions
    function startServiceAnimation(serviceType, card) {
        switch(serviceType) {
            case 'web':
                animateWebDevelopment(card);
                break;
            case 'mobile':
                animateMobileApp(card);
                break;
            case 'design':
                animateUIUXDesign(card);
                break;
        }
    }

    function animateWebDevelopment(card) {
        const codeLines = card.querySelectorAll('.code-line');
        const elements = card.querySelectorAll('.element');
        
        // Animate code typing
        codeLines.forEach((line, i) => {
            setTimeout(() => {
                line.style.animation = 'typeCode 2s ease-in-out infinite';
            }, i * 500);
        });

        // Animate floating elements
        elements.forEach((element, i) => {
            setTimeout(() => {
                element.style.animation = 'floatElements 3s ease-in-out infinite';
            }, i * 800);
        });
    }

    function animateMobileApp(card) {
        const appIcons = card.querySelectorAll('.app-icon');
        const particles = card.querySelectorAll('.particle');
        const navDots = card.querySelectorAll('.nav-dot');
        
        // Simulate app interaction
        setInterval(() => {
            appIcons.forEach((icon, i) => {
                icon.classList.remove('active');
                setTimeout(() => {
                    if (Math.random() > 0.7) {
                        icon.classList.add('active');
                    }
                }, i * 200);
            });
        }, 3000);

        // Animate navigation dots
        setInterval(() => {
            navDots.forEach(dot => dot.classList.remove('active'));
            const randomDot = navDots[Math.floor(Math.random() * navDots.length)];
            if (randomDot) randomDot.classList.add('active');
        }, 2500);
    }

    function animateUIUXDesign(card) {
        const designElements = card.querySelectorAll('.design-element');
        const tools = card.querySelectorAll('.tool');
        const cursor = card.querySelector('.design-cursor');
        
        // Simulate design process
        setInterval(() => {
            tools.forEach((tool, i) => {
                setTimeout(() => {
                    tool.style.transform = 'scale(1.3)';
                    tool.style.boxShadow = '0 0 10px currentColor';
                    setTimeout(() => {
                        tool.style.transform = 'scale(1)';
                        tool.style.boxShadow = 'none';
                    }, 300);
                }, i * 400);
            });
        }, 4000);

        // Animate design elements creation
        designElements.forEach((element, i) => {
            setTimeout(() => {
                element.style.animation = 'designAnimate 3s ease-in-out infinite';
            }, i * 600);
        });
    }

    function createDynamicParticles(container) {
        for (let i = 0; i < 6; i++) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: absolute;
                width: 4px;
                height: 4px;
                background: radial-gradient(circle, #00f5ff, transparent);
                border-radius: 50%;
                pointer-events: none;
                animation: dynamicParticle 2s ease-out forwards;
            `;
            
            const x = Math.random() * 100;
            const y = Math.random() * 100;
            particle.style.left = x + '%';
            particle.style.top = y + '%';
            
            container.appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 2000);
        }
    }

    // Add dynamic particle animation
    const dynamicParticleStyle = document.createElement('style');
    dynamicParticleStyle.textContent = `
        @keyframes dynamicParticle {
            0% {
                opacity: 0;
                transform: scale(0) translateY(0);
            }
            50% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
            100% {
                opacity: 0;
                transform: scale(0) translateY(-40px);
            }
        }
    `;
    document.head.appendChild(dynamicParticleStyle);

    // Enhanced Services Grid Interactions
    function initServiceCards() {
        const serviceCards = document.querySelectorAll('.service-card.modern-card');
        
        serviceCards.forEach(card => {
            // Enhanced hover effects
            card.addEventListener('mouseenter', function() {
                // Pause animations temporarily for better hover experience
                const animations = this.querySelectorAll('[class*="animation"], [class*="pulse"], [class*="float"]');
                animations.forEach(el => {
                    el.style.animationPlayState = 'paused';
                });
                
                // Add enhanced glow effect
                this.style.boxShadow = `
                    0 30px 60px rgba(102, 126, 234, 0.4),
                    0 20px 40px rgba(118, 75, 162, 0.3),
                    inset 0 1px 0 rgba(255,255,255,0.3)
                `;
            });
            
            card.addEventListener('mouseleave', function() {
                // Resume animations
                const animations = this.querySelectorAll('[class*="animation"], [class*="pulse"], [class*="float"]');
                animations.forEach(el => {
                    el.style.animationPlayState = 'running';
                });
                
                // Reset glow effect
                this.style.boxShadow = '';
            });
            
            // Enhanced click interaction
            card.addEventListener('click', function(e) {
                if (!e.target.closest('.btn-explore')) {
                    // Add ripple effect
                    createRippleEffect(this, e);
                    
                    // Animate card content
                    const content = this.querySelector('.service-content');
                    content.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        content.style.transform = 'scale(1)';
                    }, 150);
                }
            });
        });
    }

    // Create ripple effect on click
    function createRippleEffect(element, event) {
        const rect = element.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;
        
        const ripple = document.createElement('div');
        ripple.style.cssText = `
            position: absolute;
            width: 20px;
            height: 20px;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.6) 0%, transparent 70%);
            border-radius: 50%;
            left: ${x - 10}px;
            top: ${y - 10}px;
            transform: scale(0);
            animation: rippleEffect 0.6s ease-out;
            pointer-events: none;
            z-index: 10;
        `;
        
        element.style.position = 'relative';
        element.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }

    // Add ripple animation keyframes
    if (!document.querySelector('#ripple-styles')) {
        const style = document.createElement('style');
        style.id = 'ripple-styles';
        style.textContent = `
            @keyframes rippleEffect {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }

    // Enhanced Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number[data-counter]');
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-counter'));
                    animateCounter(counter, target);
                    counterObserver.unobserve(counter);
                }
            });
        }, observerOptions);
        
        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    }

    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 60; // 60 frames for smooth animation
        const duration = 2000; // 2 seconds
        const stepTime = duration / 60;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, stepTime);
    }

    // Enhanced Progress Bar Animation
    function animateProgressBars() {
        const progressBars = document.querySelectorAll('.progress-bar[data-skill]');
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const progressObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBar = entry.target;
                    const skill = progressBar.getAttribute('data-skill');
                    animateProgressBar(progressBar, skill);
                    progressObserver.unobserve(progressBar);
                }
            });
        }, observerOptions);
        
        progressBars.forEach(bar => {
            progressObserver.observe(bar);
        });
    }

    function animateProgressBar(element, targetWidth) {
        let width = 0;
        const target = parseInt(targetWidth);
        const increment = target / 60;
        
        element.style.width = '0%';
        
        const timer = setInterval(() => {
            width += increment;
            if (width >= target) {
                width = target;
                clearInterval(timer);
            }
            element.style.width = width + '%';
        }, 33); // ~60fps
    }

    // Enhanced Feature List Animation
    function animateFeatureList() {
        const featureLists = document.querySelectorAll('.animated-list');
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const listObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const list = entry.target;
                    const items = list.querySelectorAll('li[data-delay]');
                    
                    items.forEach(item => {
                        const delay = parseFloat(item.getAttribute('data-delay')) * 1000;
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateX(0)';
                        }, delay);
                    });
                    
                    listObserver.unobserve(list);
                }
            });
        }, observerOptions);
        
        featureLists.forEach(list => {
            // Initially hide items
            const items = list.querySelectorAll('li[data-delay]');
            items.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                item.style.transition = 'all 0.5s ease';
            });
            
            listObserver.observe(list);
        });
    }

    // Enhanced Tech Badge Animation
    function animateTechBadges() {
        const techStacks = document.querySelectorAll('.tech-stack');
        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const badgeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const stack = entry.target;
                    const badges = stack.querySelectorAll('.animated-badge[data-delay]');
                    
                    badges.forEach(badge => {
                        const delay = parseFloat(badge.getAttribute('data-delay')) * 1000;
                        setTimeout(() => {
                            badge.style.opacity = '1';
                            badge.style.transform = 'translateY(0) scale(1)';
                        }, delay);
                    });
                    
                    badgeObserver.unobserve(stack);
                }
            });
        }, observerOptions);
        
        techStacks.forEach(stack => {
            // Initially hide badges
            const badges = stack.querySelectorAll('.animated-badge[data-delay]');
            badges.forEach(badge => {
                badge.style.opacity = '0';
                badge.style.transform = 'translateY(20px) scale(0.8)';
                badge.style.transition = 'all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            });
            
            badgeObserver.observe(stack);
        });
    }

    // Enhanced Explore Button Interactions
    function initExploreButtons() {
        const exploreButtons = document.querySelectorAll('.btn-explore');
        
        exploreButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Add click animation
                this.style.transform = 'translateY(-2px) scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-2px) scale(1)';
                }, 150);
                
                // Get service type
                const serviceCard = this.closest('.service-card');
                const serviceType = serviceCard.getAttribute('data-service');
                
                // Show service details (you can customize this)
                showServiceDetails(serviceType);
            });
            
            // Enhanced hover effect
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
                this.style.boxShadow = '0 15px 35px rgba(102, 126, 234, 0.5)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 10px 25px rgba(102, 126, 234, 0.4)';
            });
        });
    }

    // Show service details function (customizable)
    function showServiceDetails(serviceType) {
        // You can implement a modal or navigate to a detailed page
        console.log(`Exploring ${serviceType} service...`);
        
        // Example: Create a notification
        showNotification(`Loading ${serviceType} service details...`);
    }

    // Notification system
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
            z-index: 10000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            font-size: 14px;
            font-weight: 500;
        `;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Auto remove
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
    }

    // Particle System for Enhanced Visual Effects
    function initParticleSystem() {
        const serviceCards = document.querySelectorAll('.service-card.modern-card');
        
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                createMouseParticles(this);
            });
        });
    }

    function createMouseParticles(element) {
        const particleCount = 5;
        
        for (let i = 0; i < particleCount; i++) {
            setTimeout(() => {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: absolute;
                    width: 4px;
                    height: 4px;
                    background: radial-gradient(circle, #667eea, #764ba2);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 15;
                    animation: mouseParticle 1s ease-out forwards;
                `;
                
                // Random position within card
                const rect = element.getBoundingClientRect();
                const x = Math.random() * rect.width;
                const y = Math.random() * rect.height;
                
                particle.style.left = x + 'px';
                particle.style.top = y + 'px';
                
                element.appendChild(particle);
                
                setTimeout(() => {
                    particle.remove();
                }, 1000);
            }, i * 100);
        }
    }

    // Add mouse particle animation
    if (!document.querySelector('#mouse-particle-styles')) {
        const style = document.createElement('style');
        style.id = 'mouse-particle-styles';
        style.textContent = `
            @keyframes mouseParticle {
                0% {
                    opacity: 1;
                    transform: scale(0) translateY(0);
                }
                100% {
                    opacity: 0;
                    transform: scale(1) translateY(-50px);
                }
            }
        `;
        document.head.appendChild(style);
    }

    // Services CTA Button Enhancement
    function initServicesCTAButton() {
        const ctaButton = document.querySelector('.btn-services-explore');
        
        if (ctaButton) {
            // Add click ripple effect
            ctaButton.addEventListener('click', function(e) {
                const ripple = document.createElement('div');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: rippleEffect 0.6s ease-out;
                    pointer-events: none;
                    z-index: 3;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
                
                // Scroll to portfolio section
                const portfolioSection = document.getElementById('portfolio');
                if (portfolioSection) {
                    portfolioSection.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
            
            // Add hover magnetic effect
            ctaButton.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const deltaX = (e.clientX - centerX) * 0.1;
                const deltaY = (e.clientY - centerY) * 0.1;
                
                this.style.transform = `translateY(-8px) scale(1.05) translate(${deltaX}px, ${deltaY}px)`;
            });
            
            ctaButton.addEventListener('mouseleave', function() {
                this.style.transform = '';
            });
            
            // Add particle explosion on hover
            ctaButton.addEventListener('mouseenter', function() {
                createButtonParticles(this);
            });
        }
    }
    
    // Create particle explosion for button
    function createButtonParticles(button) {
        const particleCount = 12;
        const rect = button.getBoundingClientRect();
        
        for (let i = 0; i < particleCount; i++) {
            setTimeout(() => {
                const particle = document.createElement('div');
                const angle = (360 / particleCount) * i;
                const velocity = 50 + Math.random() * 30;
                
                particle.style.cssText = `
                    position: fixed;
                    width: 4px;
                    height: 4px;
                    background: linear-gradient(45deg, var(--accent-primary), var(--accent-tertiary));
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 1000;
                    left: ${rect.left + rect.width / 2}px;
                    top: ${rect.top + rect.height / 2}px;
                    animation: buttonParticleExplosion 1.5s ease-out forwards;
                `;
                
                particle.style.setProperty('--angle', angle + 'deg');
                particle.style.setProperty('--velocity', velocity + 'px');
                
                document.body.appendChild(particle);
                
                setTimeout(() => {
                    particle.remove();
                }, 1500);
            }, i * 50);
        }
    }
    
    // Add ripple and particle animations
    if (!document.querySelector('#cta-button-styles')) {
        const style = document.createElement('style');
        style.id = 'cta-button-styles';
        style.textContent = `
            @keyframes rippleEffect {
                0% {
                    transform: scale(0);
                    opacity: 1;
                }
                100% {
                    transform: scale(1);
                    opacity: 0;
                }
            }
            
            @keyframes buttonParticleExplosion {
                0% {
                    transform: translate(0, 0) scale(1);
                    opacity: 1;
                }
                100% {
                    transform: translate(
                        calc(cos(var(--angle)) * var(--velocity)),
                        calc(sin(var(--angle)) * var(--velocity))
                    ) scale(0);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }

    // Initialize all enhanced features (updated)
    function initEnhancedServicesGrid() {
        initServiceCards();
        animateCounters();
        animateProgressBars();
        animateFeatureList();
        animateTechBadges();
        initExploreButtons();
        initParticleSystem();
        initServicesCTAButton(); // Add new CTA button initialization
    }

    // Call initialization when DOM is ready
    document.addEventListener('DOMContentLoaded', initEnhancedServicesGrid);

    // Also initialize on page load to ensure all elements are ready
    window.addEventListener('load', initEnhancedServicesGrid);
});
