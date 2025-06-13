// Core functionality - optimized for performance
document.addEventListener('DOMContentLoaded', function() {
    
    // Navbar scroll behavior variables
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;
    let scrollTimer = null;
    
    // Back to top button with throttled scroll
    const backToTopButton = document.getElementById('backToTop');
    let ticking = false;
    
    function updateScrollEffects() {
        const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Back to top button logic
        if (currentScrollTop > 300) {
            backToTopButton?.classList.add('active');
        } else {
            backToTopButton?.classList.remove('active');
        }
        
        // Navbar hide/show logic
        if (navbar) {
            if (currentScrollTop > lastScrollTop && currentScrollTop > 100) {
                // Scrolling down - hide navbar
                navbar.classList.add('navbar-hidden');
                navbar.classList.remove('navbar-visible');
            } else {
                // Scrolling up - show navbar
                navbar.classList.remove('navbar-hidden');
                navbar.classList.add('navbar-visible');
            }
            
            // Clear any existing timer
            if (scrollTimer) {
                clearTimeout(scrollTimer);
            }
            
            // Show navbar after user stops scrolling
            scrollTimer = setTimeout(() => {
                navbar.classList.remove('navbar-hidden');
                navbar.classList.add('navbar-visible');
            }, 150);
        }
        
        lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
        ticking = false;
    }
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateScrollEffects);
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
    
    // Email validation helper function
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
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
                    // Get the product card to extract information
                    const productCard = this.closest('.product-card-enhanced');
                    if (productCard) {
                        const productTitle = productCard.querySelector('.product-title')?.textContent;
                        const productPrice = productCard.querySelector('.product-price')?.textContent;
                        const randomCode = 'PRD-' + Math.floor(1000 + Math.random() * 9000);
                        
                        // Open consultation modal with product info
                        openConsultationModal({
                            title: productTitle || 'Produk Konsultasi',
                            code: randomCode,
                            price: productPrice || 'Hubungi Kami'
                        });
                    } else {
                        // Fallback if product card not found
                        openConsultationModal();
                    }
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
    function openConsultationModal(productData = null) {
        const contactModal = document.querySelector('#contactModal');
        if (!contactModal) return;
        
        const modal = new bootstrap.Modal(contactModal);
        
        // If product data is provided, fill in the product info
        if (productData) {
            const productInfoDiv = document.getElementById('contactProductInfo');
            const productTitle = productInfoDiv?.querySelector('.product-title');
            const productCode = productInfoDiv?.querySelector('.product-code'); 
            const productPrice = productInfoDiv?.querySelector('.product-price');
            const inputProductName = document.getElementById('productName');
            const inputProductCode = document.getElementById('productCode');
            const inputProductPrice = document.getElementById('productPrice');
            
            if (productInfoDiv) productInfoDiv.classList.remove('d-none');
            
            if (productTitle) productTitle.textContent = productData.title;
            if (productCode) productCode.textContent = 'Kode: ' + (productData.code || 'PRD-000');
            if (productPrice) productPrice.textContent = 'Harga: ' + (productData.price || 'Hubungi Kami');
            
            if (inputProductName) inputProductName.value = productData.title;
            if (inputProductCode) inputProductCode.value = productData.code || 'PRD-000';
            if (inputProductPrice) inputProductPrice.value = productData.price || 'Hubungi Kami';
        }
        
        modal.show();
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
    
    // Add event listeners for btn-konsultasi buttons (for direct konsultasi buttons in product cards)
    document.addEventListener('DOMContentLoaded', function() {
        const konsultasiButtons = document.querySelectorAll('.btn-konsultasi');
        
        konsultasiButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get data attributes from button
                const productName = this.getAttribute('data-product-name');
                const productCode = this.getAttribute('data-product-code');
                const productPrice = this.getAttribute('data-product-price');
                
                // Open consultation modal with product information
                openConsultationModal({
                    title: productName || 'Produk Konsultasi',
                    code: productCode || 'PRD-000',
                    price: productPrice || 'Hubungi Kami'
                });
            });
        });
    });
    
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
    
    // Product Consultation Modal Integration
    const contactModal = document.getElementById('contactModal');
    if (contactModal) {
        console.log('Contact modal found');
        const contactForm = document.getElementById('contactForm');
        const productInfoDiv = document.getElementById('contactProductInfo');
        const productTitle = productInfoDiv?.querySelector('.product-title');
        const productCode = productInfoDiv?.querySelector('.product-code');
        const productPrice = productInfoDiv?.querySelector('.product-price');
        
        // Hidden input fields
        const inputProductName = document.getElementById('productName');
        const inputProductCode = document.getElementById('productCode');
        const inputProductPrice = document.getElementById('productPrice');
        
        console.log('Contact form:', contactForm);
        console.log('Product info div:', productInfoDiv);
        
        // Add real-time validation feedback
        if (contactForm) {
            const inputs = contactForm.querySelectorAll('input[required], textarea[required]');
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.value.trim()) {
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                    } else {
                        this.classList.remove('is-valid');
                        this.classList.add('is-invalid');
                    }
                });
                
                input.addEventListener('input', function() {
                    if (this.classList.contains('is-invalid') && this.value.trim()) {
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                    }
                });
            });
        }
        
        // Success and error messages
        const successMessage = document.getElementById('contactSuccess');
        const errorMessage = document.getElementById('contactError');
        
        // Set up event listener for all konsultasi buttons
        document.querySelectorAll('.btn-konsultasi').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product-name');
                const productCodeVal = this.getAttribute('data-product-code');
                const productPriceVal = this.getAttribute('data-product-price');
                
                // Update the product info display
                if (productName && productInfoDiv) {
                    productTitle.textContent = productName;
                    productCode.textContent = 'Kode: ' + productCodeVal;
                    productPrice.textContent = 'Harga: ' + productPriceVal;
                    productInfoDiv.classList.remove('d-none');
                    
                    // Update hidden form fields
                    if (inputProductName) inputProductName.value = productName;
                    if (inputProductCode) inputProductCode.value = productCodeVal;
                    if (inputProductPrice) inputProductPrice.value = productPriceVal;
                }
                
                // Reset form and messages
                if (contactForm) contactForm.reset();
                if (successMessage) successMessage.classList.add('d-none');
                if (errorMessage) errorMessage.classList.add('d-none');
            });
        });
        
        // Handle when the modal is opened directly (without product)
        contactModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            
            // Only hide product info if no data attribute is found on the button
            if (button && !button.classList.contains('btn-konsultasi')) {
                if (productInfoDiv) productInfoDiv.classList.add('d-none');
                if (inputProductName) inputProductName.value = '';
                if (inputProductCode) inputProductCode.value = '';
                if (inputProductPrice) inputProductPrice.value = '';
            }
            
            // Reset form and messages
            if (contactForm) contactForm.reset();
            if (successMessage) successMessage.classList.add('d-none');
            if (errorMessage) errorMessage.classList.add('d-none');
        });
        
        // Handle form submission
        const submitButton = document.getElementById('submitContactForm');
        console.log('Submit button:', submitButton);
        
        if (submitButton && contactForm) {
            console.log('Adding event listener to submit button');
            submitButton.addEventListener('click', function() {
                console.log('Submit button clicked');
                
                // Check form validity
                if (!contactForm.checkValidity()) {
                    console.log('Form validation failed');
                    // Add was-validated class to show Bootstrap validation feedback
                    contactForm.classList.add('was-validated');
                    contactForm.reportValidity();
                    return;
                }
                
                console.log('Form validation passed');
                
                // Additional custom validation
                const nameInput = contactForm.querySelector('#name');
                const emailInput = contactForm.querySelector('#email');
                const phoneInput = contactForm.querySelector('#phone');
                
                if (!nameInput.value.trim()) {
                    nameInput.setCustomValidity('Nama lengkap wajib diisi');
                    contactForm.classList.add('was-validated');
                    return;
                } else {
                    nameInput.setCustomValidity('');
                }
                
                if (!emailInput.value.trim() || !isValidEmail(emailInput.value)) {
                    emailInput.setCustomValidity('Email yang valid wajib diisi');
                    contactForm.classList.add('was-validated');
                    return;
                } else {
                    emailInput.setCustomValidity('');
                }
                
                if (!phoneInput.value.trim()) {
                    phoneInput.setCustomValidity('Nomor telepon wajib diisi');
                    contactForm.classList.add('was-validated');
                    return;
                } else {
                    phoneInput.setCustomValidity('');
                }
                
                // Remove any previous validation classes
                contactForm.classList.remove('was-validated');
                
                // Disable button and show loading state
                submitButton.disabled = true;
                const originalButtonText = submitButton.innerHTML;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
                
                // Collect form data
                const formData = new FormData(contactForm);
                
                // Show loading indicator
                if (successMessage) {
                    successMessage.textContent = 'Mengirim pesan...';
                    successMessage.classList.remove('d-none');
                }
                
                // Hide any previous error messages
                if (errorMessage) {
                    errorMessage.classList.add('d-none');
                }
                
                // Send AJAX request using FormData (not JSON)
                fetch('/contact/send', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: formData
                })
                .then(response => {
                    // Check if response is ok
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Store form data in session storage for template use
                        if (data.formData) {
                            sessionStorage.setItem('contactFormData', JSON.stringify(data.formData));
                            console.log('Form data saved to session:', data.formData);
                        }
                        
                        // Show success message
                        if (successMessage) {
                            successMessage.textContent = 'Pesan berhasil dikirim! Anda akan segera diarahkan ke WhatsApp.';
                            successMessage.classList.remove('d-none');
                        }
                        
                        // Log the WhatsApp link for debugging
                        console.log('WhatsApp link data:', data.whatsappLink);
                        console.log('Form template data:', data.formData);
                        
                        // Handle different WhatsApp link types
                        let whatsappLink = data.whatsappLink;
                        let isDesktopMode = false;
                        
                        // Check if it's a desktop response with multiple options
                        try {
                            const linkData = JSON.parse(whatsappLink);
                            if (linkData.type === 'desktop') {
                                isDesktopMode = true;
                                // Pass form data to desktop handler
                                tryOpenDesktopWhatsApp(linkData, data.formData);
                                return;
                            }
                        } catch (e) {
                            // Not JSON, treat as regular link
                        }
                        
                        // Regular mobile/fallback handling
                        tryOpenWhatsApp(whatsappLink, data.formData);
                        
                        // Close the modal after opening WhatsApp
                        setTimeout(() => {
                            const bsModal = bootstrap.Modal.getInstance(contactModal);
                            if (bsModal) {
                                bsModal.hide();
                            }
                            // Reset button
                            submitButton.disabled = false;
                            submitButton.innerHTML = originalButtonText;
                        }, 1000);
                    } else {
                        // Show error message
                        if (errorMessage) {
                            const errorSpan = errorMessage.querySelector('span');
                            if (errorSpan) {
                                errorSpan.textContent = data.message || 'Terjadi kesalahan. Silakan coba lagi.';
                            } else {
                                errorMessage.textContent = data.message || 'Terjadi kesalahan. Silakan coba lagi.';
                            }
                            errorMessage.classList.remove('d-none');
                        }
                        if (successMessage) {
                            successMessage.classList.add('d-none');
                        }
                        // Reset button
                        submitButton.disabled = false;
                        submitButton.innerHTML = originalButtonText;
                    }
                })
                .catch(error => {
                    console.error('Fetch Error:', error);
                    if (successMessage) {
                        successMessage.classList.add('d-none');
                    }
                    if (errorMessage) {
                        const errorSpan = errorMessage.querySelector('span');
                        if (errorSpan) {
                            errorSpan.textContent = `Terjadi kesalahan: ${error.message}. Silakan coba lagi.`;
                        } else {
                            errorMessage.textContent = `Terjadi kesalahan: ${error.message}. Silakan coba lagi.`;
                        }
                        errorMessage.classList.remove('d-none');
                    }
                    // Reset button
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonText;
                });
            });
        }
        
        // Function to get saved template data
        window.getContactTemplate = function() {
            const savedData = sessionStorage.getItem('contactFormData');
            if (savedData) {
                try {
                    return JSON.parse(savedData);
                } catch (e) {
                    console.error('Error parsing saved form data:', e);
                    return null;
                }
            }
            return null;
        };
        
        // Function to clear template data
        window.clearContactTemplate = function() {
            sessionStorage.removeItem('contactFormData');
            console.log('Contact template data cleared');
        };
        
        // Function to show template data (for debugging)
        window.showContactTemplate = function() {
            const template = getContactTemplate();
            if (template) {
                console.log('Current contact template:', template);
                alert(`Template Data:\n\nNama: ${template.name}\nEmail: ${template.email}\nTelepon: ${template.phone}\nProduk: ${template.productName || 'Tidak ada'}\nPesan: ${template.message || 'Tidak ada'}`);
            } else {
                console.log('No template data found');
                alert('Tidak ada data template yang tersimpan');
            }
        };
        
        // Helper function to try opening desktop WhatsApp
        function tryOpenDesktopWhatsApp(linkData, formData = null) {
            console.log('Trying desktop WhatsApp options:', linkData);
            console.log('Using form data:', formData);
            
            // Store template data in localStorage for cross-tab access
            if (formData) {
                const templateData = {
                    ...formData,
                    timestamp: Date.now(),
                    phone: linkData.phone || '6288971589438'
                };
                localStorage.setItem('whatsapp_template', JSON.stringify(templateData));
                console.log('Template stored in localStorage for cross-tab access');
            }
            
            // Show multiple options immediately for better UX
            if (successMessage) {
                successMessage.innerHTML = `
                    <div class="mb-3">
                        <i class="fas fa-check-circle me-2"></i>
                        Pesan berhasil dikirim! Pilih cara untuk membuka WhatsApp:
                    </div>
                    <div class="template-info mb-3 p-2 bg-light rounded">
                        <small class="text-muted">
                            <strong>Template tersimpan untuk PC:</strong><br>
                            ${formData ? `
                            • Nama: ${formData.name}<br>
                            • Email: ${formData.email}<br>
                            • Telepon: ${formData.phone}<br>
                            ${formData.productName ? `• Produk: ${formData.productName}<br>` : ''}
                            ${formData.message ? `• Pesan: ${formData.message.substring(0, 50)}...` : ''}
                            ` : 'Data form tersedia'}
                        </small>
                    </div>
                    <div class="d-grid gap-2">
                        <button onclick="tryDesktopApp('${linkData.desktop_app}')" class="btn btn-success btn-sm">
                            <i class="fab fa-whatsapp me-1"></i>WhatsApp Desktop App
                        </button>
                        <button onclick="openWhatsAppWeb('${linkData.web_whatsapp}', '${linkData.template_data || ''}')" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-globe me-1"></i>WhatsApp Web (dengan Template)
                        </button>
                        <a href="${linkData.wa_me}" target="_blank" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-external-link-alt me-1"></i>Browser WhatsApp
                        </a>
                        <button onclick="copyTemplateToClipboard()" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-copy me-1"></i>Copy Template Text
                        </button>
                    </div>
                    <div class="mt-2">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Template akan otomatis terisi untuk WhatsApp Web, atau copy manual untuk Desktop App.
                        </small>
                    </div>
                `;
            }
        }
        
        // Global function to open WhatsApp Web with template data
        window.openWhatsAppWeb = function(webLink, templateData) {
            // Open WhatsApp Web
            const whatsappWindow = window.open(webLink, '_blank');
            
            // Show instructions for manual template use if needed
            setTimeout(() => {
                if (templateData) {
                    const decoded = JSON.parse(atob(templateData));
                    showTemplateInstructions(decoded);
                }
            }, 2000);
        };
        
        // Function to copy template to clipboard
        window.copyTemplateToClipboard = function() {
            const template = getContactTemplate();
            if (template) {
                let templateText = `Halo, saya tertarik untuk berkonsultasi`;
                
                if (template.productName) {
                    templateText += ` tentang produk: ${template.productName}`;
                    if (template.productCode) {
                        templateText += ` (Kode: ${template.productCode})`;
                    }
                }
                
                templateText += `\n\nNama: ${template.name}`;
                templateText += `\nEmail: ${template.email}`;
                templateText += `\nTelepon: ${template.phone}`;
                
                if (template.message) {
                    templateText += `\n\nPesan tambahan:\n${template.message}`;
                }
                
                // Copy to clipboard
                navigator.clipboard.writeText(templateText).then(() => {
                    // Show success feedback
                    const copyButton = event.target;
                    const originalText = copyButton.innerHTML;
                    copyButton.innerHTML = '<i class="fas fa-check me-1"></i>Tersalin!';
                    copyButton.classList.add('btn-success');
                    copyButton.classList.remove('btn-outline-secondary');
                    
                    setTimeout(() => {
                        copyButton.innerHTML = originalText;
                        copyButton.classList.remove('btn-success');
                        copyButton.classList.add('btn-outline-secondary');
                    }, 2000);
                    
                    // Show toast notification
                    showToastNotification('Template berhasil disalin ke clipboard! Paste di WhatsApp Desktop.');
                }).catch(err => {
                    console.error('Could not copy text: ', err);
                    // Fallback: show text in alert
                    alert(`Copy text ini ke WhatsApp:\n\n${templateText}`);
                });
            }
        };
        
        // Function to show template instructions
        function showTemplateInstructions(templateData) {
            const instructionDiv = document.createElement('div');
            instructionDiv.className = 'alert alert-info alert-dismissible fade show position-fixed';
            instructionDiv.style.cssText = 'top: 20px; right: 20px; z-index: 9999; max-width: 400px;';
            instructionDiv.innerHTML = `
                <h6><i class="fas fa-info-circle me-2"></i>Template WhatsApp Web</h6>
                <small>Jika pesan tidak otomatis terisi, copy template berikut ke chat WhatsApp:</small>
                <div class="mt-2 p-2 bg-light rounded" style="font-size: 0.8rem;">
                    <strong>Template:</strong><br>
                    Nama: ${templateData.name}<br>
                    Email: ${templateData.email}<br>
                    Phone: ${templateData.phone}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(instructionDiv);
            
            // Auto remove after 10 seconds
            setTimeout(() => {
                if (instructionDiv.parentNode) {
                    instructionDiv.remove();
                }
            }, 10000);
        }
        
        // Function to show toast notification
        function showToastNotification(message) {
            const toast = document.createElement('div');
            toast.className = 'toast align-items-center text-white bg-success border-0 position-fixed';
            toast.style.cssText = 'top: 20px; left: 50%; transform: translateX(-50%); z-index: 9999;';
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fas fa-check-circle me-2"></i>${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;
            
            document.body.appendChild(toast);
            
            // Show and auto-hide toast
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
            
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.remove();
                }
            }, 5000);
        }
        
        // Global function to try desktop app
        window.tryDesktopApp = function(desktopLink) {
            // Try to open desktop app
            const link = document.createElement('a');
            link.href = desktopLink;
            link.target = '_self';
            link.click();
            
            // Show feedback
            setTimeout(() => {
                const feedbackDiv = document.createElement('div');
                feedbackDiv.className = 'alert alert-info alert-dismissible fade show mt-2';
                feedbackDiv.innerHTML = `
                    <i class="fas fa-info-circle me-2"></i>
                    Jika WhatsApp Desktop tidak terbuka, aplikasi mungkin belum terinstall. 
                    Gunakan WhatsApp Web sebagai alternatif.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                
                const successElement = document.getElementById('contactSuccess');
                if (successElement && successElement.parentNode) {
                    successElement.parentNode.insertBefore(feedbackDiv, successElement.nextSibling);
                }
            }, 2000);
        };
        
        // Helper function for regular WhatsApp link opening
        function tryOpenWhatsApp(whatsappLink, formData = null) {
            console.log('Opening WhatsApp with template data:', formData);
            
            try {
                const whatsappWindow = window.open(whatsappLink, '_blank');
                
                // Check if popup was blocked
                if (!whatsappWindow || whatsappWindow.closed || typeof whatsappWindow.closed == 'undefined') {
                    showWhatsAppFallback(whatsappLink, formData);
                }
            } catch (e) {
                console.error('Error opening WhatsApp:', e);
                showWhatsAppFallback(whatsappLink, formData);
            }
        }
        
        // Helper function to show fallback link
        function showWhatsAppFallback(whatsappLink, formData = null) {
            if (successMessage) {
                successMessage.innerHTML = `
                    <div class="mb-2">
                        <i class="fas fa-check-circle me-2"></i>
                        Pesan berhasil dikirim!
                    </div>
                    ${formData ? `
                    <div class="template-info mb-3 p-2 bg-light rounded">
                        <small class="text-muted">
                            <strong>Template tersimpan:</strong><br>
                            • Nama: ${formData.name}<br>
                            • Email: ${formData.email}<br>
                            • Telepon: ${formData.phone}<br>
                            ${formData.productName ? `• Produk: ${formData.productName}<br>` : ''}
                            ${formData.message ? `• Pesan: ${formData.message.substring(0, 50)}...` : ''}
                        </small>
                    </div>
                    ` : ''}
                    <a href="${whatsappLink}" target="_blank" class="btn btn-success btn-sm">
                        <i class="fab fa-whatsapp me-1"></i>Buka WhatsApp dengan Template
                    </a>
                `;
            }
        }
    }
});