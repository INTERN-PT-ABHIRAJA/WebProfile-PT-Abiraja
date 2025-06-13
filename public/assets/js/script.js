// Core functionality - optimized for performance
document.addEventListener('DOMContentLoaded', function() {
    
    // Back to top button with throttled scroll
    const backToTopButton = document.getElementById('backToTop');
    let ticking = false;
    
    function updateBackToTop() {
        if (window.pageYOffset > 300) {
            backToTopButton?.classList.add('active');
        } else {
            backToTopButton?.classList.remove('active');
        }
        ticking = false;
    }
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateBackToTop);
            ticking = true;
        }
    });
    
    backToTopButton?.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Close offcanvas if open
                const offcanvas = document.querySelector('.offcanvas.show');
                if (offcanvas) {
                    const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
                    bsOffcanvas?.hide();
                }
            }
        });
    });
    
    // Active navigation with throttled scroll
    let navTicking = false;
    
    function updateActiveNav() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
        
        let current = '';
        const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (window.pageYOffset >= sectionTop - navbarHeight - 100) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
        
        navTicking = false;
    }
    
    window.addEventListener('scroll', () => {
        if (!navTicking) {
            requestAnimationFrame(updateActiveNav);
            navTicking = true;
        }
    });
    
    // Initialize Bootstrap components only if they exist
    const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipElements.forEach(el => new bootstrap.Tooltip(el));
    
    const popoverElements = document.querySelectorAll('[data-bs-toggle="popover"]');
    popoverElements.forEach(el => new bootstrap.Popover(el));
    
    // Form validation and submission
    const forms = document.querySelectorAll('.contact-form, .newsletter-form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn?.innerHTML;
            
            // Show loading state
            if (submitBtn) {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
                submitBtn.disabled = true;
            }
            
            // Basic validation
            let valid = true;
            const inputs = form.querySelectorAll('input[required], textarea[required]');
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            // Simulate form submission
            setTimeout(() => {
                if (valid) {
                    alert('Pesan Anda telah terkirim. Terima kasih!');
                    form.reset();
                } else {
                    alert('Mohon lengkapi semua field yang diperlukan.');
                }
                
                // Restore button state
                if (submitBtn && originalText) {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }
            }, 1500);
        });
    });
});

// Enhanced Products Section Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Products filtering system
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');
    
    // Initialize filter functionality
    function initProductFilters() {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter products with animation
                filterProducts(filter);
            });
        });
    }
    
    // Filter products function
    function filterProducts(category) {
        productItems.forEach((item, index) => {
            const itemCategory = item.getAttribute('data-category');
            const shouldShow = category === 'all' || itemCategory === category;
            
            // Add filtering class for smooth transition
            item.classList.add('filtering');
            
            setTimeout(() => {
                if (shouldShow) {
                    item.style.display = 'block';
                    item.classList.remove('hidden', 'filtering');
                    
                    // Staggered animation
                    setTimeout(() => {
                        item.style.transform = 'translateY(0)';
                        item.style.opacity = '1';
                    }, index * 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    item.classList.add('hidden');
                    
                    setTimeout(() => {
                        item.style.display = 'none';
                        item.classList.remove('filtering');
                    }, 300);
                }
            }, 100);
        });
        
        // Update grid layout after filtering
        setTimeout(() => {
            updateGridLayout();
        }, 500);
    }
    
    // Update grid layout for responsive design
    function updateGridLayout() {
        const grid = document.querySelector('.products-grid');
        if (grid) {
            const visibleItems = grid.querySelectorAll('.product-item:not(.hidden)');
            
            // Add animation class to visible items
            visibleItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
                item.classList.add('animate-in');
            });
        }
    }
    
    // Product card interactions
    function initProductInteractions() {
        const productCards = document.querySelectorAll('.product-card-enhanced');
        
        productCards.forEach(card => {
            // Add ripple effect on click
            card.addEventListener('click', function(e) {
                if (e.target.closest('.icon-btn') || e.target.closest('.btn-product-detail')) {
                    return; // Don't trigger on button clicks
                }
                
                createRippleEffect(this, e);
            });
            
            // Enhanced hover effects
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
                
                // Animate product image
                const image = this.querySelector('.product-image');
                if (image) {
                    image.style.transform = 'scale(1.1)';
                }
                
                // Animate feature tags
                const featureTags = this.querySelectorAll('.feature-tag');
                featureTags.forEach((tag, index) => {
                    setTimeout(() => {
                        tag.style.transform = 'translateX(5px)';
                    }, index * 50);
                });
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                
                const image = this.querySelector('.product-image');
                if (image) {
                    image.style.transform = 'scale(1)';
                }
                
                const featureTags = this.querySelectorAll('.feature-tag');
                featureTags.forEach(tag => {
                    tag.style.transform = 'translateX(0)';
                });
            });
        });
    }
    
    // Create ripple effect
    function createRippleEffect(element, event) {
        const ripple = document.createElement('div');
        const rect = element.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;
        
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            background: radial-gradient(circle, rgba(255, 213, 0, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s ease-out;
            pointer-events: none;
            z-index: 1;
        `;
        
        element.style.position = 'relative';
        element.style.overflow = 'hidden';
        element.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }
    
    // Icon button interactions
    function initIconButtons() {
        const iconButtons = document.querySelectorAll('.icon-btn');
        
        iconButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                
                const icon = this.querySelector('i');
                const originalClass = icon.className;
                
                // Button feedback animation
                this.style.transform = 'scale(0.9)';
                
                setTimeout(() => {
                    this.style.transform = 'scale(1.1)';
                }, 100);
                
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
                
                // Handle different button types
                const title = this.getAttribute('title');
                if (title.includes('Favorit')) {
                    // Toggle favorite
                    if (icon.classList.contains('fas')) {
                        icon.className = 'far fa-heart';
                        this.style.background = 'white';
                    } else {
                        icon.className = 'fas fa-heart';
                        this.style.background = '#ff6b6b';
                        this.style.color = 'white';
                    }
                } else if (title.includes('Detail')) {
                    // Trigger modal or detailed view
                    showProductDetails(this.closest('.product-card-enhanced'));
                } else if (title.includes('Konsultasi')) {
                    // Open consultation modal
                    openConsultationModal();
                }
            });
        });
    }
    
    // Show product details (can be expanded to show in modal)
    function showProductDetails(productCard) {
        const title = productCard.querySelector('.product-title').textContent;
        const description = productCard.querySelector('.product-description').textContent;
        const price = productCard.querySelector('.product-price').textContent;
        
        // You can implement a detailed modal here
        console.log('Showing details for:', { title, description, price });
        
        // For now, trigger the existing product modal
        const productModal = document.querySelector('#productModal');
        if (productModal) {
            const modal = new bootstrap.Modal(productModal);
            modal.show();
        }
    }
    
    // Open consultation modal
    function openConsultationModal() {
        const contactModal = document.querySelector('#contactModal');
        if (contactModal) {
            const modal = new bootstrap.Modal(contactModal);
            modal.show();
        }
    }
    
    // Lazy loading for product images
    function initLazyLoading() {
        const images = document.querySelectorAll('.product-image');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.style.opacity = '1';
                    observer.unobserve(img);
                }
            });
        }, {
            threshold: 0.1
        });
        
        images.forEach(img => {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
            imageObserver.observe(img);
        });
    }
    
    // Search functionality (bonus feature)
    function initProductSearch() {
        const searchInput = document.createElement('input');
        searchInput.type = 'text';
        searchInput.placeholder = 'Cari layanan...';
        searchInput.className = 'form-control product-search';
        searchInput.style.cssText = `
            margin: 0 auto 2rem auto;
            max-width: 400px;
            display: block;
            border-radius: 25px;
            padding: 12px 20px;
            border: 2px solid #0d4e49;
        `;
        
        const filterContainer = document.querySelector('.filter-buttons').parentElement;
        filterContainer.insertBefore(searchInput, filterContainer.lastElementChild);
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            productItems.forEach(item => {
                const title = item.querySelector('.product-title').textContent.toLowerCase();
                const description = item.querySelector('.product-description').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    item.style.display = 'block';
                    item.classList.remove('hidden');
                } else {
                    item.style.display = 'none';
                    item.classList.add('hidden');
                }
            });
        });
    }
    
    // Keyboard navigation
    function initKeyboardNavigation() {
        document.addEventListener('keydown', function(e) {
            if (e.target.closest('.products-section-enhanced')) {
                const focusableElements = document.querySelectorAll(
                    '.filter-btn, .icon-btn, .btn-product-detail, .btn-cta-custom'
                );
                const focusedIndex = Array.from(focusableElements).indexOf(document.activeElement);
                
                if (e.key === 'ArrowRight' && focusedIndex < focusableElements.length - 1) {
                    e.preventDefault();
                    focusableElements[focusedIndex + 1].focus();
                } else if (e.key === 'ArrowLeft' && focusedIndex > 0) {
                    e.preventDefault();
                    focusableElements[focusedIndex - 1].focus();
                }
            }
        });
    }
    
    // Performance monitoring
    function monitorPerformance() {
        if ('PerformanceObserver' in window) {
            const observer = new PerformanceObserver((list) => {
                list.getEntries().forEach((entry) => {
                    if (entry.entryType === 'paint' && entry.name === 'first-contentful-paint') {
                        console.log('Products section FCP:', entry.startTime);
                    }
                });
            });
            
            observer.observe({ entryTypes: ['paint'] });
        }
    }
    
    // Initialize all functionality
    function initEnhancedProducts() {
        initProductFilters();
        initProductInteractions();
        initIconButtons();
        initLazyLoading();
        initProductSearch();
        initKeyboardNavigation();
        monitorPerformance();
        
        // Set default filter to 'all'
        setTimeout(() => {
            updateGridLayout();
        }, 100);
    }
    
    // Start everything when DOM is ready
    if (document.querySelector('.products-section-enhanced')) {
        initEnhancedProducts();
    }
    
    // Add CSS animation keyframes dynamically
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
        
        @keyframes animate-in {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-in {
            animation: animate-in 0.6s ease forwards;
        }
        
        .product-search:focus {
            outline: none;
            border-color: #ffd500;
            box-shadow: 0 0 0 3px rgba(255, 213, 0, 0.2);
        }
    `;
    document.head.appendChild(style);
});