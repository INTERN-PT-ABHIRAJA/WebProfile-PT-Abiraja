// Fixed Contact Modal Handler
document.addEventListener('DOMContentLoaded', function() {
    console.log('=== CONTACT MODAL FIXED HANDLER ===');
    
    // Tunggu sampai semua script lain selesai loading
    setTimeout(function() {
        const contactModal = document.getElementById('contactModal');
        const contactForm = document.getElementById('contactForm');
        const submitButton = document.getElementById('submitContactForm');
        
        console.log('Elements check:');
        console.log('- Modal:', !!contactModal);
        console.log('- Form:', !!contactForm);
        console.log('- Button:', !!submitButton);
        
        if (submitButton && contactForm) {
            // Remove semua event listener yang ada
            submitButton.removeEventListener('click', handleSubmit);
            
            // Add event listener baru
            submitButton.addEventListener('click', handleSubmit, true);
            
            console.log('✅ Event listener telah ditambahkan');
            
            function handleSubmit(e) {
                e.preventDefault();
                e.stopPropagation();
                
                console.log('🚀 Submit button clicked!');
                
                // Validasi form
                const nameInput = contactForm.querySelector('#name');
                const emailInput = contactForm.querySelector('#email');
                const phoneInput = contactForm.querySelector('#phone');
                const messageInput = contactForm.querySelector('#message');
                
                // Reset validation states
                contactForm.classList.remove('was-validated');
                
                let isValid = true;
                
                if (!nameInput?.value.trim()) {
                    nameInput?.classList.add('is-invalid');
                    isValid = false;
                } else {
                    nameInput?.classList.remove('is-invalid');
                    nameInput?.classList.add('is-valid');
                }
                
                if (!emailInput?.value.trim() || !isValidEmail(emailInput.value)) {
                    emailInput?.classList.add('is-invalid');
                    isValid = false;
                } else {
                    emailInput?.classList.remove('is-invalid');
                    emailInput?.classList.add('is-valid');
                }
                
                if (!phoneInput?.value.trim()) {
                    phoneInput?.classList.add('is-invalid');
                    isValid = false;
                } else {
                    phoneInput?.classList.remove('is-invalid');
                    phoneInput?.classList.add('is-valid');
                }
                
                if (!isValid) {
                    console.log('❌ Form validation failed');
                    contactForm.classList.add('was-validated');
                    return;
                }
                
                console.log('✅ Form validation passed');
                
                // Disable button dan show loading
                const originalText = submitButton.innerHTML;
                submitButton.disabled = true;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
                
                // Collect form data
                const formData = new FormData(contactForm);
                
                // Get CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                
                console.log('📤 Sending request to /contact/send');
                
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
                    console.log('📥 Response received:', response.status);
                    
                    if (!response.ok) {
                        throw new Error(`HTTP ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('✅ Success:', data);
                    
                    if (data.success) {
                        // Show success message
                        const successEl = document.getElementById('contactSuccess');
                        if (successEl) {
                            successEl.textContent = 'Pesan berhasil dikirim! Anda akan segera diarahkan ke WhatsApp.';
                            successEl.classList.remove('d-none');
                        }
                        
                        // Hide error message
                        const errorEl = document.getElementById('contactError');
                        if (errorEl) {
                            errorEl.classList.add('d-none');
                        }
                        
                        // Redirect to WhatsApp if available
                        if (data.whatsappLink) {
                            setTimeout(() => {
                                window.open(data.whatsappLink, '_blank');
                            }, 1000);
                        }
                        
                        // Close modal after delay
                        setTimeout(() => {
                            const bsModal = bootstrap.Modal.getInstance(contactModal);
                            if (bsModal) {
                                bsModal.hide();
                            }
                            contactForm.reset();
                        }, 2000);
                        
                    } else {
                        throw new Error(data.message || 'Terjadi kesalahan');
                    }
                })
                .catch(error => {
                    console.error('❌ Error:', error);
                    
                    // Show error message
                    const errorEl = document.getElementById('contactError');
                    if (errorEl) {
                        const errorSpan = errorEl.querySelector('span');
                        if (errorSpan) {
                            errorSpan.textContent = error.message || 'Terjadi kesalahan. Silakan coba lagi.';
                        }
                        errorEl.classList.remove('d-none');
                    }
                    
                    // Hide success message
                    const successEl = document.getElementById('contactSuccess');
                    if (successEl) {
                        successEl.classList.add('d-none');
                    }
                })
                .finally(() => {
                    // Reset button
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalText;
                });
            }
            
            // Email validation function
            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
            
        } else {
            console.error('❌ Required elements not found');
            console.error('Submit button:', submitButton);
            console.error('Contact form:', contactForm);
        }
    }, 500); // Delay 500ms untuk memastikan semua element sudah loaded
});

console.log('📝 Contact modal fixed script loaded');
