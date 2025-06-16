/**
 * Dynamic Product Modal with AJAX - jQuery Implementation
 * Enhanced version with better error handling and user experience
 */

$(document).ready(function() {
    
    // Configuration
    const CONFIG = {
        WHATSAPP_NUMBER: '6285156209325', // Replace with your actual WhatsApp number
        API_ENDPOINT: '/api/product-template',
        TIMEOUT: 15000, // 15 seconds timeout
        LOADING_TEXTS: {
            DEFAULT: 'Detail Paket',
            LOADING: '<i class="fas fa-spinner fa-spin me-2"></i>Loading...'
        }
    };
    
    /**
     * Handle product detail button clicks
     */
    $(document).on('click', '.btn-detail-product', function(e) {
        e.preventDefault();
        
        // Get product ID from data attribute
        const productId = $(this).data('product-id');
        const $button = $(this);
        
        if (!productId) {
            showNotification('ID produk tidak valid', 'error');
            return;
        }
        
        // Show loading state
        showLoadingModal();
        setButtonLoading($button, true);
        
        // Make AJAX request to get product details
        loadProductDetails(productId, $button);
    });
    
    /**
     * Load product details via AJAX
     * @param {number} productId 
     * @param {jQuery} $button 
     */
    function loadProductDetails(productId, $button) {
        $.ajax({
            url: `${CONFIG.API_ENDPOINT}/${productId}`,
            method: 'GET',
            dataType: 'json',
            timeout: CONFIG.TIMEOUT,
            cache: false, // Disable caching for fresh data
            
            success: function(response) {
                console.log('API Response:', response);
                
                if (response.success && response.data) {
                    populateProductModal(response.data);
                    hideLoadingModal();
                    $('#dynamicProductModal').modal('show');
                    
                    // Track successful load
                    trackEvent('product_detail_loaded', {
                        product_id: productId,
                        product_name: response.data.name
                    });
                } else {
                    hideLoadingModal();
                    showNotification(response.message || 'Gagal memuat detail produk', 'error');
                }
            },
            
            error: function(xhr, status, error) {
                hideLoadingModal();
                
                let errorMessage = 'Terjadi kesalahan saat memuat detail produk';
                
                // Handle different error types
                switch(xhr.status) {
                    case 404:
                        errorMessage = 'Produk tidak ditemukan';
                        break;
                    case 500:
                        errorMessage = 'Kesalahan server. Silakan coba lagi nanti';
                        break;
                    case 403:
                        errorMessage = 'Akses ditolak';
                        break;
                    default:
                        if (status === 'timeout') {
                            errorMessage = 'Waktu permintaan habis. Silakan coba lagi';
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                }
                
                showNotification(errorMessage, 'error');
                console.error('AJAX Error:', { xhr, status, error, productId });
                
                // Track error
                trackEvent('product_detail_error', {
                    product_id: productId,
                    error_status: xhr.status,
                    error_message: errorMessage
                });
            },
            
            complete: function() {
                // Reset button state
                setButtonLoading($button, false);
            }
        });
    }
    
    /**
     * Populate modal with product data
     * @param {object} product 
     */
    function populateProductModal(product) {
        try {
            // Basic product information
            $('#productModalTitle').text(product.name || 'Produk');
            $('#productModalCode').text(`Kode: ${product.code || 'N/A'}`);
            $('#productModalName').text(product.name || 'Nama produk tidak tersedia');
            $('#productModalPrice').text(product.price || 'Harga tidak tersedia');
            $('#productModalDescription').text(product.description || 'Deskripsi tidak tersedia');
            $('#productModalCompany').text(product.company || 'PT Abhiraja Giovanni Tryamanda');
            
            // Product image with error handling
            if (product.image) {
                $('#productModalImage')
                    .attr('src', product.image)
                    .attr('alt', product.name)
                    .on('error', function() {
                        $(this).attr('src', 'assets/img/default-product.jpg');
                    });
            } else {
                $('#productModalImage').attr('src', 'assets/img/default-product.jpg');
            }
            
            // Stock status with appropriate styling
            const stockBadge = $('#productModalStock');
            if (product.stock_status) {
                stockBadge.text(product.stock_status);
                
                // Add appropriate badge class based on stock status
                stockBadge.removeClass('bg-success bg-warning bg-danger bg-info');
                const status = product.stock_status.toLowerCase();
                
                if (status.includes('tersedia')) {
                    stockBadge.addClass('bg-success');
                } else if (status.includes('hubungi')) {
                    stockBadge.addClass('bg-warning text-dark');
                } else if (status.includes('habis')) {
                    stockBadge.addClass('bg-danger');
                } else {
                    stockBadge.addClass('bg-info');
                }
            }
            
            // Specifications
            populateSpecifications(product.specifications);
            
            // Benefits
            populateBenefits(product.benefits);
            
            // WhatsApp link
            setupWhatsAppLink(product.whatsapp_template, product);
            
            // Add fade-in effect
            $('.modal-body').hide().fadeIn(300);
            
        } catch (error) {
            console.error('Error populating modal:', error);
            showNotification('Terjadi kesalahan saat menampilkan detail produk', 'error');
        }
    }
    
    /**
     * Populate specifications section
     * @param {array} specifications 
     */
    function populateSpecifications(specifications) {
        const specsContainer = $('#productSpecsContainer');
        const specsList = $('#productModalSpecs');
        
        if (specifications && specifications.length > 0) {
            specsList.empty();
            specifications.forEach(spec => {
                const specItem = $(`
                    <li>
                        <span class="spec-label">${escapeHtml(spec.label)}:</span>
                        <span class="spec-value">${escapeHtml(spec.value)}</span>
                    </li>
                `);
                specsList.append(specItem);
            });
            specsContainer.slideDown(300);
        } else {
            specsContainer.slideUp(300);
        }
    }
    
    /**
     * Populate benefits section
     * @param {array} benefits 
     */
    function populateBenefits(benefits) {
        const benefitsContainer = $('#productBenefitsContainer');
        const benefitsList = $('#productModalBenefits');
        
        if (benefits && benefits.length > 0) {
            benefitsList.empty();
            benefits.forEach(benefit => {
                const benefitItem = $(`<li>${escapeHtml(benefit)}</li>`);
                benefitsList.append(benefitItem);
            });
            benefitsContainer.slideDown(300);
        } else {
            benefitsContainer.slideUp(300);
        }
    }
    
    /**
     * Setup WhatsApp contact link
     * @param {string} template 
     * @param {object} product 
     */
    function setupWhatsAppLink(template, product) {
        if (template) {
            // URL encode the template message
            const encodedMessage = encodeURIComponent(template);
            
            // Create WhatsApp URL
            const whatsappUrl = `https://wa.me/${CONFIG.WHATSAPP_NUMBER}?text=${encodedMessage}`;
            
            // Set the link
            $('#whatsappContactBtn').attr('href', whatsappUrl);
            
            // Add click tracking
            $('#whatsappContactBtn').off('click.tracking').on('click.tracking', function() {
                // Track WhatsApp click event
                trackEvent('whatsapp_contact', {
                    product_id: product.id,
                    product_name: product.name,
                    source: 'product_modal'
                });
                
                console.log('WhatsApp contact initiated for product:', product.name);
            });
        } else {
            // Fallback if no template available
            const fallbackMessage = encodeURIComponent('Halo, saya tertarik dengan produk Anda. Mohon informasinya.');
            $('#whatsappContactBtn').attr('href', `https://wa.me/${CONFIG.WHATSAPP_NUMBER}?text=${fallbackMessage}`);
        }
    }
    
    /**
     * Set button loading state
     * @param {jQuery} $button 
     * @param {boolean} isLoading 
     */
    function setButtonLoading($button, isLoading) {
        if (isLoading) {
            $button.prop('disabled', true)
                   .data('original-text', $button.html())
                   .html(CONFIG.LOADING_TEXTS.LOADING);
        } else {
            const originalText = $button.data('original-text') || CONFIG.LOADING_TEXTS.DEFAULT;
            $button.prop('disabled', false)
                   .html(originalText);
        }
    }
    
    /**
     * Show loading modal
     */
    function showLoadingModal() {
        $('#modalLoadingOverlay').addClass('show');
        $('#dynamicProductModal').modal('show');
    }
    
    /**
     * Hide loading modal
     */
    function hideLoadingModal() {
        $('#modalLoadingOverlay').removeClass('show');
    }
    
    /**
     * Show notification message
     * @param {string} message 
     * @param {string} type 
     */
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        $('.alert-notification').remove();
        
        // Determine alert class
        let alertClass = 'alert-info';
        let iconClass = 'fas fa-info-circle';
        
        switch(type) {
            case 'success':
                alertClass = 'alert-success';
                iconClass = 'fas fa-check-circle';
                break;
            case 'error':
                alertClass = 'alert-danger';
                iconClass = 'fas fa-exclamation-triangle';
                break;
            case 'warning':
                alertClass = 'alert-warning';
                iconClass = 'fas fa-exclamation-circle';
                break;
        }
        
        // Create notification
        const alertHtml = `
            <div class="alert ${alertClass} alert-dismissible fade show alert-notification" 
                 role="alert" 
                 style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 350px; max-width: 500px;">
                <i class="${iconClass} me-2"></i>
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        
        // Add notification
        $('body').append(alertHtml);
        
        // Auto-remove after 5 seconds
        setTimeout(() => {
            $('.alert-notification').fadeOut(300, function() {
                $(this).remove();
            });
        }, 5000);
    }
    
    /**
     * Track events (integrate with your analytics)
     * @param {string} eventName 
     * @param {object} properties 
     */
    function trackEvent(eventName, properties = {}) {
        // Google Analytics 4
        if (typeof gtag !== 'undefined') {
            gtag('event', eventName, properties);
        }
        
        // Facebook Pixel
        if (typeof fbq !== 'undefined') {
            fbq('track', eventName, properties);
        }
        
        // Console log for debugging
        console.log('Event tracked:', eventName, properties);
    }
    
    /**
     * Escape HTML to prevent XSS
     * @param {string} text 
     * @returns {string}
     */
    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }
    
    /**
     * Handle modal hidden event
     */
    $('#dynamicProductModal').on('hidden.bs.modal', function() {
        // Reset modal content to prevent showing old data
        resetModalContent();
    });
    
    /**
     * Reset modal content to loading state
     */
    function resetModalContent() {
        $('#productModalTitle').text('Detail Produk');
        $('#productModalCode').text('Kode: Loading...');
        $('#productModalName').text('Loading...');
        $('#productModalPrice').text('Loading...');
        $('#productModalDescription').text('Loading...');
        $('#productModalCategory').text('Loading...');
        $('#productModalCompany').text('Loading...');
        $('#productModalStock').text('Loading...');
        $('#productModalImage').attr('src', 'assets/img/default-product.jpg');
        $('#productSpecsContainer').hide();
        $('#productBenefitsContainer').hide();
        $('#whatsappContactBtn').attr('href', '#');
    }
    
    /**
     * Handle image zoom functionality
     */
    $(document).on('click', '.image-zoom-btn', function(e) {
        e.preventDefault();
        
        const imageSrc = $('#productModalImage').attr('src');
        const imageAlt = $('#productModalImage').attr('alt');
        
        // Create image zoom modal
        const zoomModalHtml = `
            <div class="modal fade" id="imageZoomModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content bg-transparent border-0">
                        <div class="modal-body p-0 text-center">
                            <img src="${imageSrc}" alt="${imageAlt}" class="img-fluid" style="max-height: 90vh;">
                            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" 
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        // Remove existing zoom modal and add new one
        $('#imageZoomModal').remove();
        $('body').append(zoomModalHtml);
        
        // Show zoom modal
        $('#imageZoomModal').modal('show');
        
        // Remove modal from DOM when hidden
        $('#imageZoomModal').on('hidden.bs.modal', function() {
            $(this).remove();
        });
    });
    
    /**
     * Store original button text for restoration
     */
    $('.btn-detail-product').each(function() {
        $(this).data('original-text', $(this).html());
    });
    
    // Add smooth transitions to buttons
    $('.btn-detail-product').hover(
        function() {
            $(this).addClass('btn-hover-effect');
        },
        function() {
            $(this).removeClass('btn-hover-effect');
        }
    );
});

// CSS for button hover effects
const additionalCSS = `
<style>
.btn-hover-effect {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.btn-detail-product {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-detail-product:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

/* Loading spinner animation */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.fa-spin {
    animation: spin 1s linear infinite;
}

/* Alert animations */
.alert {
    animation: slideInRight 0.3s ease-out;
}

@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
</style>
`;

// Append additional CSS
$('head').append(additionalCSS);
