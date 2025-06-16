<div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">            
            <div class="modal-header">
                <div>
                    <h5 class="modal-title">{{ __('site.hubungi_kami') }}</h5>
                    <small class="text-muted">WhatsApp: +62 851-5620-9325</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="contactProductInfo" class="mb-4 d-none">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h6 class="product-title mb-2">Nama Produk</h6>
                            <p class="product-code mb-0 text-muted small">Kode: PRD-001</p>
                        </div>
                    </div>
                </div>

                <form id="contactForm" class="needs-validation" novalidate>
                    <!-- CSRF Token -->
                    @csrf
                    <!-- Hidden fields to store product info -->
                    <input type="hidden" id="productName" name="productName" value="">
                    <input type="hidden" id="productCode" name="productCode" value="">

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('site.full_name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" required 
                               placeholder="Masukkan nama lengkap Anda">
                        <div class="invalid-feedback">
                            Silahkan masukkan nama lengkap Anda
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('site.email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" required
                               placeholder="contoh@email.com">
                        <div class="invalid-feedback">
                            Silahkan masukkan alamat email yang valid
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('site.phone_number') }}</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required
                               placeholder="08xx-xxxx-xxxx">
                        <div class="invalid-feedback">
                            Silahkan masukkan nomor telepon Anda
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{ __('site.message') }}</label>
                        <textarea class="form-control" id="message" name="message" rows="4"
                                  placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."></textarea>
                    </div>

                    <div class="alert alert-success d-none" id="contactSuccess">
                        <i class="fas fa-check-circle me-2"></i>
                        Pesan berhasil dikirim! Anda akan segera diarahkan ke WhatsApp.
                    </div>
                    <div class="alert alert-danger d-none" id="contactError">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <span>Terjadi kesalahan. Silahkan coba lagi.</span>
                    </div>
                </form>
            </div>            
            <div class="modal-footer">                
                <button type="button" class="btn-modal" data-bs-dismiss="modal">{{ __('site.cancel') }}</button>
                <button type="button" class="btn-modal btn-whatsapp" id="submitContactForm" onclick="handleContactSubmit(event)">
                    <i class="fab fa-whatsapp me-2"></i>{{ __('site.send') }}
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function handleContactSubmit(event) {
    event.preventDefault();
    console.log('Contact form submit clicked!');
    
    const form = document.getElementById('contactForm');
    const button = event.target;
    
    if (!form) {
        console.error('Form not found!');
        return;
    }
    
    // Basic validation
    const name = form.querySelector('#name')?.value?.trim();
    const email = form.querySelector('#email')?.value?.trim();
    const phone = form.querySelector('#phone')?.value?.trim();
    
    if (!name) {
        alert('Nama harus diisi!');
        form.querySelector('#name')?.focus();
        return;
    }
    
    if (!email) {
        alert('Email harus diisi!');
        form.querySelector('#email')?.focus();
        return;
    }
    
    if (!phone) {
        alert('Nomor telepon harus diisi!');
        form.querySelector('#phone')?.focus();
        return;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Format email tidak valid!');
        form.querySelector('#email')?.focus();
        return;
    }
    
    // Show loading
    const originalText = button.innerHTML;
    button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
    button.disabled = true;
    
    // Prepare form data
    const formData = new FormData(form);
    
    // Get CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
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
        
        if (!response.ok) {
            throw new Error(`HTTP ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log('Success response:', data);
        console.log('WhatsApp Link type:', typeof data.whatsappLink);
        console.log('WhatsApp Link value:', data.whatsappLink);
        
        if (data.success) {
            // Show success message
            const successEl = document.getElementById('contactSuccess');
            if (successEl) {
                successEl.classList.remove('d-none');
            }
            
            // Hide error message
            const errorEl = document.getElementById('contactError');
            if (errorEl) {
                errorEl.classList.add('d-none');
            }
            
            // Open WhatsApp if link available
            if (data.whatsappLink) {
                console.log('WhatsApp Link:', data.whatsappLink);
                
                // Check if the link is valid URL
                try {
                    const url = new URL(data.whatsappLink);
                    console.log('URL is valid:', url.href);
                    
                    // Try different methods to open WhatsApp
                    setTimeout(() => {
                        // First try to open the link directly
                        const opened = window.open(data.whatsappLink, '_blank');
                        
                        // If popup was blocked, show fallback
                        if (!opened || opened.closed || typeof opened.closed == 'undefined') {
                            console.log('Popup blocked, showing link to user');
                            
                            // Create a temporary link for user to click
                            const linkDiv = document.createElement('div');
                            linkDiv.innerHTML = `
                                <div class="alert alert-info mt-3">
                                    <strong>Klik link berikut untuk melanjutkan ke WhatsApp:</strong><br>
                                    <a href="${data.whatsappLink}" target="_blank" class="btn btn-success btn-sm mt-2">
                                        <i class="fab fa-whatsapp me-2"></i>Buka WhatsApp
                                    </a>
                                </div>
                            `;
                            
                            // Add to success message area
                            const successEl = document.getElementById('contactSuccess');
                            if (successEl) {
                                successEl.appendChild(linkDiv);
                            }
                        }
                    }, 1000);
                } catch (e) {
                    console.error('Invalid URL:', data.whatsappLink);
                    console.error('URL Error:', e);
                    
                    // Show error message for invalid URL
                    const errorEl = document.getElementById('contactError');
                    if (errorEl) {
                        const errorSpan = errorEl.querySelector('span');
                        if (errorSpan) {
                            errorSpan.textContent = 'Link WhatsApp tidak valid. Silakan hubungi +62 851-5620-9325 secara manual.';
                        }
                        errorEl.classList.remove('d-none');
                    }
                }
            }
            
            // Close modal and reset form
            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById('contactModal'));
                if (modal) {
                    modal.hide();
                }
                form.reset();
            }, 2000);
            
        } else {
            throw new Error(data.message || 'Terjadi kesalahan');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        
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
        button.innerHTML = originalText;
        button.disabled = false;
    });
}
</script>