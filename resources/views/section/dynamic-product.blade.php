{{-- Dynamic Product Section with AJAX Modal --}}
<section class="products-section" id="dynamic-products">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">Produk & Layanan Kami</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Temukan berbagai produk dan layanan berkualitas yang sesuai dengan kebutuhan Anda.
            </p>
        </div>

        {{-- Dynamic Product Cards --}}
        <div class="row" id="dynamic-products-container">
            {{-- Products will be loaded here dynamically or from database --}}
            
            {{-- Example Product Card 1 --}}
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/img/portfolio/lada.jpg" alt="Paket Digital Marketing">
                        <div class="product-badge">Popular</div>
                    </div>
                    <div class="product-info">
                        <h4>Paket Digital Marketing Premium</h4>
                        <p>Solusi pemasaran digital lengkap untuk meningkatkan brand awareness dan penjualan online Anda.</p>
                    </div>
                    <div class="product-footer">
                        <div class="product-price">Rp 2.500.000</div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                    data-product-id="1">
                                <i class="fas fa-info-circle me-1"></i> Detail Paket
                            </button>
                            <button class="btn btn-success btn-konsultasi" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#contactModal">
                                <i class="fas fa-comment me-1"></i> Konsultasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Example Product Card 2 --}}
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/img/portfolio/jamur.jpg" alt="Paket Web Development">
                    </div>
                    <div class="product-info">
                        <h4>Paket Web Development Professional</h4>
                        <p>Pembuatan website modern dengan teknologi terkini, responsive design, dan performa optimal.</p>
                    </div>
                    <div class="product-footer">
                        <div class="product-price">Rp 5.000.000</div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                    data-product-id="2">
                                <i class="fas fa-info-circle me-1"></i> Detail Paket
                            </button>
                            <button class="btn btn-success btn-konsultasi" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#contactModal">
                                <i class="fas fa-comment me-1"></i> Konsultasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Example Product Card 3 --}}
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/img/portfolio/kayu.jpg" alt="Paket Branding">
                        <div class="product-badge bg-warning">New</div>
                    </div>
                    <div class="product-info">
                        <h4>Paket Branding & Identity</h4>
                        <p>Layanan lengkap pembuatan brand identity, logo design, dan guidelines untuk bisnis Anda.</p>
                    </div>
                    <div class="product-footer">
                        <div class="product-price">Rp 3.500.000</div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                    data-product-id="3">
                                <i class="fas fa-info-circle me-1"></i> Detail Paket
                            </button>
                            <button class="btn btn-success btn-konsultasi" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#contactModal">
                                <i class="fas fa-comment me-1"></i> Konsultasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Example Product Card 4 --}}
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/img/portfolio/kayu2.jpg" alt="Paket SEO">
                    </div>
                    <div class="product-info">
                        <h4>Paket SEO Optimization</h4>
                        <p>Optimasi mesin pencari untuk meningkatkan ranking website Anda di Google dan search engine lainnya.</p>
                    </div>
                    <div class="product-footer">
                        <div class="product-price">Rp 1.800.000</div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                    data-product-id="4">
                                <i class="fas fa-info-circle me-1"></i> Detail Paket
                            </button>
                            <button class="btn btn-success btn-konsultasi" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#contactModal">
                                <i class="fas fa-comment me-1"></i> Konsultasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Example Product Card 5 --}}
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/img/portfolio/sawah.jpg" alt="Paket Mobile App">
                        <div class="product-badge bg-danger">Hot</div>
                    </div>
                    <div class="product-info">
                        <h4>Paket Mobile App Development</h4>
                        <p>Pengembangan aplikasi mobile Android dan iOS dengan fitur lengkap dan user-friendly interface.</p>
                    </div>
                    <div class="product-footer">
                        <div class="product-price">Rp 8.500.000</div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                    data-product-id="5">
                                <i class="fas fa-info-circle me-1"></i> Detail Paket
                            </button>
                            <button class="btn btn-success btn-konsultasi" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#contactModal">
                                <i class="fas fa-comment me-1"></i> Konsultasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Example Product Card 6 --}}
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="product-card">
                    <div class="product-img">
                        <img src="assets/img/portfolio/lada.jpg" alt="Paket Maintenance">
                    </div>
                    <div class="product-info">
                        <h4>Paket Website Maintenance</h4>
                        <p>Layanan pemeliharaan website bulanan untuk menjaga performa, keamanan, dan update konten.</p>
                    </div>
                    <div class="product-footer">
                        <div class="product-price">Rp 650.000/bulan</div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-primary flex-fill btn-detail-product" 
                                    data-product-id="6">
                                <i class="fas fa-info-circle me-1"></i> Detail Paket
                            </button>
                            <button class="btn btn-success btn-konsultasi" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#contactModal">
                                <i class="fas fa-comment me-1"></i> Konsultasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Load More Button (Optional) --}}
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
            <button class="btn btn-outline-primary btn-lg" id="loadMoreProducts">
                <i class="fas fa-plus me-2"></i> Lihat Produk Lainnya
            </button>
        </div>
    </div>
</section>

{{-- CSS untuk Product Cards --}}
<style>
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
