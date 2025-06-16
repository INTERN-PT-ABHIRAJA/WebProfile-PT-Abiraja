<!-- Dynamic Product Detail Modal -->
<div class="modal fade" id="dynamicProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content product-modal-content">
            <!-- Modal Header -->
            <div class="modal-header product-modal-header">
                <div class="d-flex align-items-center">
                    <div class="product-badge-modal me-3">
                        <i class="fas fa-box-open text-white"></i>
                    </div>
                    <div>
                        <h5 class="modal-title text-white mb-0" id="productModalTitle">Detail Produk</h5>
                        <small class="text-white-50" id="productModalCode">Kode: Loading...</small>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-0">
                <div class="row g-0">
                    <!-- Product Image -->
                    <div class="col-md-5">
                        <div class="product-gallery p-4">
                            <div class="main-image-container">
                                <img id="productModalImage" 
                                     src="assets/img/default-product.jpg" 
                                     alt="Product Image" 
                                     class="main-product-image">
                                <div class="image-overlay"></div>
                                <button class="image-zoom-btn btn btn-dark rounded-pill">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="col-md-7">
                        <div class="product-details-container p-4">
                            <!-- Category Badge -->
                            <div class="mb-3">
                                <span class="product-category-badge" id="productModalCategory">Loading...</span>
                            </div>

                            <!-- Product Title -->
                            <h3 class="product-title mb-3" id="productModalName">Loading...</h3>

                            <!-- Product Price -->
                            <div class="product-price-container mb-4">
                                <div class="product-price" id="productModalPrice">Loading...</div>
                                <div class="stock-status mt-2">
                                    <span class="badge" id="productModalStock">Loading...</span>
                                </div>
                            </div>

                            <!-- Product Description -->
                            <div class="product-description-container mb-4">
                                <h6 class="fw-bold mb-2">Deskripsi Produk</h6>
                                <p class="product-description" id="productModalDescription">Loading...</p>
                            </div>

                            <!-- Product Specifications -->
                            <div class="product-specs-container mb-4" id="productSpecsContainer" style="display: none;">
                                <h6 class="fw-bold mb-2">Spesifikasi</h6>
                                <ul class="list-unstyled" id="productModalSpecs">
                                    <!-- Specifications will be loaded here -->
                                </ul>
                            </div>

                            <!-- Product Benefits -->
                            <div class="product-benefits-container mb-4" id="productBenefitsContainer" style="display: none;">
                                <h6 class="fw-bold mb-2">Keunggulan</h6>
                                <ul class="list-unstyled" id="productModalBenefits">
                                    <!-- Benefits will be loaded here -->
                                </ul>
                            </div>

                            <!-- Company Info -->
                            <div class="company-info mb-4">
                                <h6 class="fw-bold mb-2">Perusahaan</h6>
                                <p class="mb-0" id="productModalCompany">Loading...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer border-0 bg-light">
                <div class="d-flex w-100 gap-3">
                    <button type="button" class="btn btn-outline-secondary flex-fill" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Tutup
                    </button>
                    <a href="#" 
                       id="whatsappContactBtn" 
                       target="_blank" 
                       class="btn btn-success flex-fill">
                        <i class="fab fa-whatsapp me-2"></i>Hubungi via WhatsApp
                    </a>
                </div>
            </div>

            <!-- Loading Overlay -->
            <div class="modal-loading-overlay" id="modalLoadingOverlay">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <div class="spinner-border text-primary mb-3" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-muted">Memuat detail produk...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Modal Loading Overlay */
.modal-loading-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.95);
    z-index: 1050;
    border-radius: 20px;
    display: none;
}

.modal-loading-overlay.show {
    display: flex !important;
}

/* Product Modal Enhancements */
.product-price-container .product-price {
    font-size: 2rem;
    font-weight: 700;
    color: #28a745;
    text-shadow: 0 2px 4px rgba(40, 167, 69, 0.2);
}

.stock-status .badge {
    font-size: 0.75rem;
    padding: 0.5rem 1rem;
}

.product-specs-container ul li,
.product-benefits-container ul li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f0f0f0;
    display: flex;
    justify-content: space-between;
}

.product-specs-container ul li:last-child,
.product-benefits-container ul li:last-child {
    border-bottom: none;
}

.product-specs-container .spec-label {
    font-weight: 600;
    color: #6c757d;
}

.product-benefits-container ul li {
    position: relative;
    padding-left: 2rem;
}

.product-benefits-container ul li::before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 0.5rem;
    color: #28a745;
    font-weight: bold;
}

.company-info p {
    color: #6c757d;
    font-style: italic;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .modal-lg {
        max-width: 95%;
    }
    
    .product-price-container .product-price {
        font-size: 1.5rem;
    }
}
</style>
