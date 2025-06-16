// Core functionality - optimized for performance
document.addEventListener('DOMContentLoaded', function() {
    
    // Email validation helper function
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
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
      // Form validation and submission for general forms
    const forms = document.querySelectorAll('.contact-form');
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
    });    // WhatsApp contact form handler (supports both old and new forms)
    const whatsappForm = document.querySelector('.whatsapp-contact-form');
    const whatsappFormModern = document.querySelector('.whatsapp-contact-form-modern');
    
    function handleWhatsAppForm(form, isModern = false) {
        if (!form) return;
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nameInput = document.getElementById('footerName');
            const messageInput = document.getElementById('footerMessage');
            const submitBtn = this.querySelector('button[type="submit"]');
            
            // Validation
            let valid = true;
            const inputs = [nameInput, messageInput];
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.classList.add('is-invalid');
                    
                    // Add visual feedback for modern form
                    if (isModern) {
                        const highlight = input.nextElementSibling;
                        if (highlight && highlight.classList.contains('input-highlight')) {
                            highlight.style.background = 'linear-gradient(90deg, #e74c3c 0%, #c0392b 100%)';
                            highlight.style.width = '100%';
                            setTimeout(() => {
                                highlight.style.background = 'linear-gradient(90deg, #25d366 0%, #7dd3fc 100%)';
                                highlight.style.width = '0';
                            }, 1500);
                        }
                    }
                } else {
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid');
                }
            });
            
            if (!valid) {
                // Custom alert for modern form
                if (isModern) {
                    showModernAlert('Mohon lengkapi nama dan pesan Anda untuk melanjutkan.', 'warning');
                } else {
                    alert('Mohon lengkapi nama dan pesan Anda.');
                }
                return;
            }
            
            // Show loading state
            const originalText = submitBtn.innerHTML;
            if (isModern) {
                submitBtn.innerHTML = `
                    <span class="btn-icon">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                    <span class="btn-text">Menghubungkan...</span>
                    <div class="btn-glow"></div>
                `;
            } else {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Menghubungkan...';
            }
            submitBtn.disabled = true;
            
            // Prepare WhatsApp message
            const name = nameInput.value.trim();
            const message = messageInput.value.trim();
            const whatsappMessage = `Halo! Saya ${name}.\n\n${message}\n\nTerima kasih!\n\n---\nPesan dikirim melalui website PT Abhiraja Giovanni Tryamanda`;
            const whatsappNumber = '6285156209325';
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
            
            // Open WhatsApp after a short delay
            setTimeout(() => {
                window.open(whatsappUrl, '_blank');
                
                // Reset form
                form.reset();
                
                // Show success message
                if (isModern) {
                    showModernAlert('Anda akan diarahkan ke WhatsApp. Pastikan aplikasi WhatsApp sudah terinstall.', 'success');
                } else {
                    alert('Anda akan diarahkan ke WhatsApp. Pastikan aplikasi WhatsApp sudah terinstall.');
                }
                
                // Restore button state
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Remove validation classes
                inputs.forEach(input => {
                    input.classList.remove('is-invalid', 'is-valid');
                });
                
            }, 1000);
        });
    }
    
    // Initialize both forms
    handleWhatsAppForm(whatsappForm, false);
    handleWhatsAppForm(whatsappFormModern, true);
    
    // Modern alert function for better UX
    function showModernAlert(message, type = 'info') {
        // Remove existing alerts
        const existingAlerts = document.querySelectorAll('.modern-alert');
        existingAlerts.forEach(alert => alert.remove());
        
        const alertDiv = document.createElement('div');
        alertDiv.className = `modern-alert alert-${type}`;
        alertDiv.innerHTML = `
            <div class="alert-content">
                <div class="alert-icon">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'warning' ? 'exclamation-triangle' : 'info-circle'}"></i>
                </div>
                <div class="alert-message">${message}</div>
                <button class="alert-close" onclick="this.parentElement.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        
        // Add styles if not already present
        if (!document.querySelector('#modern-alert-styles')) {
            const styles = document.createElement('style');
            styles.id = 'modern-alert-styles';
            styles.textContent = `
                .modern-alert {
                    position: fixed;
                    top: 100px;
                    right: 20px;
                    z-index: 9999;
                    max-width: 400px;
                    background: rgba(0, 0, 0, 0.9);
                    backdrop-filter: blur(10px);
                    border-radius: 12px;
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    animation: slideInRight 0.3s ease;
                }
                
                .alert-content {
                    display: flex;
                    align-items: center;
                    padding: 1rem;
                    gap: 1rem;
                }
                
                .alert-icon {
                    font-size: 1.5rem;
                }
                
                .alert-success .alert-icon { color: #25d366; }
                .alert-warning .alert-icon { color: #ff9500; }
                .alert-info .alert-icon { color: #7dd3fc; }
                
                .alert-message {
                    flex: 1;
                    color: white;
                    font-size: 0.9rem;
                    line-height: 1.4;
                }
                
                .alert-close {
                    background: none;
                    border: none;
                    color: rgba(255, 255, 255, 0.7);
                    cursor: pointer;
                    padding: 0.5rem;
                    border-radius: 6px;
                    transition: all 0.3s ease;
                }
                
                .alert-close:hover {
                    background: rgba(255, 255, 255, 0.1);
                    color: white;
                }
                
                @keyframes slideInRight {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                
                @media (max-width: 768px) {
                    .modern-alert {
                        right: 10px;
                        left: 10px;
                        max-width: none;
                    }
                }
            `;
            document.head.appendChild(styles);
        }
        
        document.body.appendChild(alertDiv);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            if (alertDiv.parentElement) {
                alertDiv.style.animation = 'slideInRight 0.3s ease reverse';
                setTimeout(() => alertDiv.remove(), 300);
            }
        }, 5000);
    }

    // ==================== CONTACT MODAL INTEGRATION ====================
    const contactModal = document.getElementById('contactModal');
    
    if (contactModal) {
        console.log('Contact modal found');
        const contactForm = document.getElementById('contactForm');        const productInfoDiv = document.getElementById('contactProductInfo');
        const productTitle = productInfoDiv?.querySelector('.product-title');
        const productCode = productInfoDiv?.querySelector('.product-code');
        
        // Hidden input fields
        const inputProductName = document.getElementById('productName');
        const inputProductCode = document.getElementById('productCode');
        
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
        const konsultasiButtons = document.querySelectorAll('.btn-konsultasi');
        konsultasiButtons.forEach(button => {            button.addEventListener('click', function() {
                const productName = this.getAttribute('data-product-name');
                const productCodeVal = this.getAttribute('data-product-code');
                
                // Update the product info display
                if (productName && productInfoDiv) {
                    if (productTitle) productTitle.textContent = productName;
                    if (productCode) productCode.textContent = 'Kode: ' + (productCodeVal || 'PRD-000');
                    productInfoDiv.classList.remove('d-none');
                    
                    // Update hidden form fields
                    if (inputProductName) inputProductName.value = productName;
                    if (inputProductCode) inputProductCode.value = productCodeVal || 'PRD-000';
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
            }
            
            // Reset form and messages
            if (contactForm) contactForm.reset();
            if (successMessage) successMessage.classList.add('d-none');
            if (errorMessage) errorMessage.classList.add('d-none');
        });
        
        // ==================== CRITICAL FORM SUBMISSION HANDLER ====================
        const submitButton = document.getElementById('submitContactForm');
        console.log('Submit button found:', !!submitButton);
        console.log('Contact form found:', !!contactForm);
        
        if (submitButton && contactForm) {
            console.log('Adding event listener to submit button');
            
            submitButton.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent any default behavior
                console.log('Submit button clicked!');
                
                // Check form validity
                if (!contactForm.checkValidity()) {
                    console.log('Form validation failed');
                    contactForm.classList.add('was-validated');
                    contactForm.reportValidity();
                    return;
                }
                
                console.log('Form validation passed');
                
                // Additional custom validation
                const nameInput = contactForm.querySelector('#name');
                const emailInput = contactForm.querySelector('#email');
                const phoneInput = contactForm.querySelector('#phone');
                
                if (!nameInput || !nameInput.value.trim()) {
                    console.log('Name validation failed');
                    if (nameInput) nameInput.setCustomValidity('Nama lengkap wajib diisi');
                    contactForm.classList.add('was-validated');
                    return;
                } else {
                    nameInput.setCustomValidity('');
                }
                
                if (!emailInput || !emailInput.value.trim() || !isValidEmail(emailInput.value)) {
                    console.log('Email validation failed');
                    if (emailInput) emailInput.setCustomValidity('Email yang valid wajib diisi');
                    contactForm.classList.add('was-validated');
                    return;
                } else {
                    emailInput.setCustomValidity('');
                }
                
                if (!phoneInput || !phoneInput.value.trim()) {
                    console.log('Phone validation failed');
                    if (phoneInput) phoneInput.setCustomValidity('Nomor telepon wajib diisi');
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
                
                console.log('Sending AJAX request...');
                
                // Collect form data
                const formData = new FormData(contactForm);
                
                // Log form data for debugging
                for (let [key, value] of formData.entries()) {
                    console.log(key, value);
                }
                
                // Show loading indicator
                if (successMessage) {
                    successMessage.textContent = 'Mengirim pesan...';
                    successMessage.classList.remove('d-none');
                }
                
                // Hide any previous error messages
                if (errorMessage) {
                    errorMessage.classList.add('d-none');
                }
                
                // Get CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                console.log('CSRF Token:', csrfToken);
                
                // Send AJAX request
                fetch('/contact/send', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken || '',
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: formData
                })
                .then(response => {
                    console.log('Response status:', response.status);
                    console.log('Response headers:', response.headers);
                    
                    if (!response.ok) {
                        return response.text().then(text => {
                            throw new Error(`HTTP ${response.status}: ${text}`);
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Success response:', data);
                    
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
                        
                        // Handle WhatsApp redirect
                        if (data.whatsappLink) {
                            console.log('Opening WhatsApp:', data.whatsappLink);
                            
                            // Try to open WhatsApp
                            setTimeout(() => {
                                window.open(data.whatsappLink, '_blank');
                            }, 1000);
                        }
                        
                        // Close the modal after a delay
                        setTimeout(() => {
                            const bsModal = bootstrap.Modal.getInstance(contactModal);
                            if (bsModal) {
                                bsModal.hide();
                            }
                            // Reset button
                            submitButton.disabled = false;
                            submitButton.innerHTML = originalButtonText;
                        }, 2000);
                    } else {
                        // Show error message
                        console.log('Server returned error:', data.message);
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
        } else {
            console.error('Submit button or contact form not found!');
            console.error('Submit button element:', submitButton);
            console.error('Contact form element:', contactForm);
        }
    } else {
        console.log('Contact modal not found on this page');
    }

    // Products functionality (if needed)
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Filter products
                productItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    const shouldShow = filter === 'all' || itemCategory === filter;
                    
                    if (shouldShow) {
                        item.style.display = 'block';
                        item.classList.remove('hidden');
                    } else {
                        item.style.display = 'none';
                        item.classList.add('hidden');
                    }
                });
            });
        });
    }

    // Add CSS styles
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

    console.log('All JavaScript initialized successfully');
});
