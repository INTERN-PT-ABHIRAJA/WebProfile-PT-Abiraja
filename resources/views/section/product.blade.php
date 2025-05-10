@include('welcome')
@section('content')
<section class="products-section" id="products">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="fw-bold mb-3">Layanan Kami</h2>
                    <p class="text-muted mx-auto" style="max-width: 700px;">Kami menawarkan berbagai layanan berkualitas untuk memenuhi kebutuhan Anda.</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/lada.jpg" alt="Product">
                                <div class="product-badge">Populer</div>
                            </div>
                            <div class="product-info">
                                <h4>Program Pendidikan Komprehensif</h4>
                                <p>Solusi pendidikan lengkap untuk sekolah dan institusi pendidikan.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 5.000.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/jamur.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Paket Branding UMKM</h4>
                                <p>Tingkatkan citra bisnis Anda dengan paket branding lengkap.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 3.500.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/kayu.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Konsultasi Keuangan Bisnis</h4>
                                <p>Dapatkan saran keuangan profesional untuk mengembangkan bisnis Anda.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 2.000.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/kayu2.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Produk Kerajinan Kayu</h4>
                                <p>Kerajinan kayu berkualitas tinggi dengan desain eksklusif.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 1.500.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/sawah.jpg" alt="Product">
                                <div class="product-badge">Hemat</div>
                            </div>
                            <div class="product-info">
                                <h4>Konsultasi Pertanian</h4>
                                <p>Solusi pertanian modern untuk meningkatkan hasil panen Anda.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 1.200.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/lada.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>Jasa Boga Premium</h4>
                                <p>Layanan katering berkualitas untuk acara perusahaan dan pribadi.</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 8.000.000</div>
                                <button class="btn-custom" data-bs-toggle="modal" data-bs-target="#productModal">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection