@extends('layouts.app')

@section('title', 'Produk & Layanan - PT Abhiraja Giovanni Tryamanda')

@section('content')
{{-- Dynamic Product Section with Database Integration --}}
<section class="products-section" id="dynamic-products">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">Produk & Layanan Kami</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Temukan berbagai produk dan layanan berkualitas yang sesuai dengan kebutuhan Anda.
            </p>
        </div>

        {{-- Dynamic Product Cards from Database --}}
        <div class="row" id="dynamic-products-container">
            @forelse($products as $index => $product)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{ $product->foto_utama_url ?? asset('assets/img/default-product.jpg') }}" 
                                 alt="{{ $product->nama_produk }}"
                                 loading="lazy">
                            
                            {{-- Dynamic Badge --}}
                            @if($product->created_at && $product->created_at->diffInDays(now()) <= 30)
                                <div class="product-badge bg-warning">New</div>
                            @elseif($product->stok !== null && $product->stok <= 5 && $product->stok > 0)
                                <div class="product-badge bg-danger">Stok Terbatas</div>
                            @elseif($index < 3)
                                <div class="product-badge">Popular</div>
                            @endif
                        </div>
                        
                        <div class="product-info">
                            <h4>{{ Str::limit($product->nama_produk, 50) }}</h4>
                            <p>{{ Str::limit($product->deskripsi_produk ?: 'Produk berkualitas dengan layanan terbaik untuk memenuhi kebutuhan Anda.', 80) }}</p>
                        </div>
                        
                        <div class="product-footer">
                            <div class="product-price">
                                @if($product->harga)
                                    Rp {{ number_format($product->harga, 0, ',', '.') }}
                                @else
                                    Hubungi Kami
                                @endif
                            </div>
                            
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                        data-product-id="{{ $product->id_produk }}">
                                    <i class="fas fa-info-circle me-1"></i> Detail Paket
                                </button>
                                <button class="btn btn-success btn-konsultasi" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#contactModal"
                                        data-product-name="{{ $product->nama_produk }}"
                                        data-product-id="{{ $product->id_produk }}">
                                    <i class="fas fa-comment me-1"></i> Konsultasi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                {{-- Empty State --}}
                <div class="col-12">
                    <div class="text-center py-5">
                        <div class="mb-4">
                            <i class="fas fa-box-open text-muted" style="font-size: 4rem;"></i>
                        </div>
                        <h4 class="text-muted mb-3">Belum Ada Produk</h4>
                        <p class="text-muted">Produk akan segera tersedia. Silakan hubungi kami untuk informasi lebih lanjut.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">
                            <i class="fas fa-phone me-2"></i> Hubungi Kami
                        </button>
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Load More Button (only show if there are more products) --}}
        @if($products->count() >= 12)
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="{{ ($products->count() + 1) * 100 }}">
                <button class="btn btn-outline-primary btn-lg" id="loadMoreProducts" data-offset="{{ $products->count() }}">
                    <i class="fas fa-plus me-2"></i> Lihat Produk Lainnya
                </button>
            </div>
        @endif
    </div>
</section>

{{-- Include Dynamic Product Modal --}}
@include('modals.dynamicProductModal')

{{-- Additional JavaScript for Load More Functionality --}}
<script>
$(document).ready(function() {
    
    let currentOffset = {{ $products->count() }};
    let isLoading = false;
    
    /**
     * Handle Load More Products button
     */
    $('#loadMoreProducts').on('click', function() {
        if (isLoading) return;
        
        const $button = $(this);
        const originalText = $button.html();
        
        isLoading = true;
        
        // Show loading state
        $button.prop('disabled', true)
               .html('<i class="fas fa-spinner fa-spin me-2"></i>Memuat produk...');
        
        // Load more products via AJAX
        $.ajax({
            url: '{{ route("products.load-more") }}',
            method: 'GET',
            data: {
                offset: currentOffset,
                limit: 6
            },
            dataType: 'json',
            
            success: function(response) {
                if (response.success && response.products.length > 0) {
                    // Append new products to container
                    appendProducts(response.products);
                    
                    // Update offset
                    currentOffset += response.products.length;
                    
                    // Hide load more button if no more products
                    if (!response.has_more) {
                        $button.fadeOut(300);
                    }
                    
                    // Initialize AOS for new elements
                    if (typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                } else {
                    // No more products
                    $button.fadeOut(300);
                    showNotification('Semua produk telah ditampilkan', 'info');
                }
            },
            
            error: function(xhr, status, error) {
                console.error('Error loading more products:', error);
                showNotification('Gagal memuat produk. Silakan coba lagi.', 'error');
            },
            
            complete: function() {
                isLoading = false;
                $button.prop('disabled', false).html(originalText);
            }
        });
    });
    
    /**
     * Append new products to the container
     * @param {array} products 
     */
    function appendProducts(products) {
        const container = $('#dynamic-products-container');
        
        products.forEach((product, index) => {
            const badgeHtml = product.badge ? 
                `<div class="product-badge ${product.badge.class || ''}">${product.badge.text}</div>` : '';
            
            const productHtml = `
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="${(index + 1) * 100}">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="${product.image}" 
                                 alt="${product.name}"
                                 loading="lazy">
                            ${badgeHtml}
                        </div>
                        
                        <div class="product-info">
                            <h4>${product.name.length > 50 ? product.name.substring(0, 50) + '...' : product.name}</h4>
                            <p>${product.description && product.description.length > 80 ? product.description.substring(0, 80) + '...' : (product.description || 'Produk berkualitas dengan layanan terbaik untuk memenuhi kebutuhan Anda.')}</p>
                        </div>
                        
                        <div class="product-footer">
                            <div class="product-price">${product.price}</div>
                            
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                        data-product-id="${product.id}">
                                    <i class="fas fa-info-circle me-1"></i> Detail Paket
                                </button>
                                <button class="btn btn-success btn-konsultasi" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#contactModal"
                                        data-product-name="${product.name}"
                                        data-product-id="${product.id}">
                                    <i class="fas fa-comment me-1"></i> Konsultasi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            container.append(productHtml);
        });
    }
    
    /**
     * Show notification (reuse from dynamic-product-modal.js)
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
});
</script>
@endsection

@section('styles')
<style>
/* Product Cards Styling */
.product-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
}

.product-img {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.product-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-img img {
    transform: scale(1.1);
}

.product-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    z-index: 2;
}

.product-badge.bg-warning {
    background: linear-gradient(135deg, #ffeaa7 0%, #fab1a0 100%);
    color: #2d3436;
}

.product-badge.bg-danger {
    background: linear-gradient(135deg, #fd79a8 0%, #e84393 100%);
    color: white;
}

.product-info {
    padding: 25px;
    flex-grow: 1;
}

.product-info h4 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2d3436;
    margin-bottom: 15px;
    line-height: 1.3;
}

.product-info p {
    color: #636e72;
    line-height: 1.6;
    margin-bottom: 0;
    font-size: 0.95rem;
}

.product-footer {
    padding: 20px 25px;
    border-top: 1px solid #f1f2f6;
    background: #fafbfc;
}

.product-price {
    font-size: 1.3rem;
    font-weight: 700;
    color: #00b894;
    margin-bottom: 15px;
    text-align: center;
}

.product-footer .btn {
    border-radius: 25px;
    font-weight: 600;
    padding: 10px 20px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.btn-detail-product {
    background: transparent;
    border: 2px solid #6c5ce7;
    color: #6c5ce7;
}

.btn-detail-product:hover {
    background: #6c5ce7;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(108, 92, 231, 0.3);
}

.btn-konsultasi {
    background: linear-gradient(135deg, #00b894 0%, #00a085 100%);
    border: none;
    color: white;
}

.btn-konsultasi:hover {
    background: linear-gradient(135deg, #00a085 0%, #008f72 100%);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 184, 148, 0.3);
}

#loadMoreProducts {
    border-radius: 30px;
    padding: 15px 40px;
    font-weight: 600;
    border: 2px solid #6c5ce7;
    color: #6c5ce7;
    background: transparent;
    transition: all 0.3s ease;
}

#loadMoreProducts:hover {
    background: #6c5ce7;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(108, 92, 231, 0.3);
}

/* Loading and Empty States */
.empty-state {
    padding: 60px 20px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .product-card {
        margin-bottom: 20px;
    }
    
    .product-img {
        height: 200px;
    }
    
    .product-info {
        padding: 20px;
    }
    
    .product-info h4 {
        font-size: 1.2rem;
    }
    
    .product-footer {
        padding: 15px 20px;
    }
    
    .product-footer .d-flex {
        flex-direction: column;
        gap: 10px;
    }
    
    .product-footer .btn {
        width: 100%;
    }
}
</style>
@endsection
