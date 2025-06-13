<section class="products-section" id="products">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">{{ __('site.layanan_kami') }}</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">{{ App::isLocale('id') ? 'Kami menawarkan berbagai layanan berkualitas untuk memenuhi kebutuhan Anda.' : 'We offer various quality services to meet your needs.' }}</p>
        </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/lada.jpg" alt="Product">
                                <div class="product-badge">{{ __('site.popular') }}</div>
                            </div>
                            <div class="product-info">
                                <h4>{{ __('site.service_education_title') }}</h4>
                                <p>{{ __('site.service_education_desc') }}</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 5.000.000</div>
                                <div class="d-flex">
                                    <button class="btn-custom me-2" data-bs-toggle="modal" data-bs-target="#productModal">{{ __('site.details') }}</button>
                                    <button class="btn-custom btn-konsultasi" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal" 
                                            data-product-name="{{ __('site.service_education_title') }}" 
                                            data-product-code="PRD-001" 
                                            data-product-price="Rp 5.000.000">
                                        <i class="fas fa-comment me-1"></i> Konsultasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/jamur.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>{{ __('site.service_branding_title') }}</h4>
                                <p>{{ __('site.service_branding_desc') }}</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 3.500.000</div>
                                <div class="d-flex">
                                    <button class="btn-custom me-2" data-bs-toggle="modal" data-bs-target="#productModal">{{ __('site.details') }}</button>
                                    <button class="btn-custom btn-konsultasi" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal" 
                                            data-product-name="{{ __('site.service_branding_title') }}" 
                                            data-product-code="PRD-002" 
                                            data-product-price="Rp 3.500.000">
                                        <i class="fas fa-comment me-1"></i> Konsultasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/kayu.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>{{ __('site.service_finance_title') }}</h4>
                                <p>{{ __('site.service_finance_desc') }}</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 2.000.000</div>
                                <div class="d-flex">
                                    <button class="btn-custom me-2" data-bs-toggle="modal" data-bs-target="#productModal">{{ __('site.details') }}</button>
                                    <button class="btn-custom btn-konsultasi" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal" 
                                            data-product-name="{{ __('site.service_finance_title') }}" 
                                            data-product-code="PRD-003" 
                                            data-product-price="Rp 2.000.000">
                                        <i class="fas fa-comment me-1"></i> Konsultasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/kayu2.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>{{ __('site.service_woodcraft_title') }}</h4>
                                <p>{{ __('site.service_woodcraft_desc') }}</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 1.500.000</div>
                                <div class="d-flex">
                                    <button class="btn-custom me-2" data-bs-toggle="modal" data-bs-target="#productModal">{{ __('site.details') }}</button>
                                    <button class="btn-custom btn-konsultasi" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal" 
                                            data-product-name="{{ __('site.service_woodcraft_title') }}" 
                                            data-product-code="PRD-004" 
                                            data-product-price="Rp 1.500.000">
                                        <i class="fas fa-comment me-1"></i> Konsultasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/sawah.jpg" alt="Product">
                                <div class="product-badge">{{ __('site.discount') }}</div>
                            </div>
                            <div class="product-info">
                                <h4>{{ __('site.service_agriculture_title') }}</h4>
                                <p>{{ __('site.service_agriculture_desc') }}</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 1.200.000</div>
                                <div class="d-flex">
                                    <button class="btn-custom me-2" data-bs-toggle="modal" data-bs-target="#productModal">{{ __('site.details') }}</button>
                                    <button class="btn-custom btn-konsultasi" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal" 
                                            data-product-name="{{ __('site.service_agriculture_title') }}" 
                                            data-product-code="PRD-005" 
                                            data-product-price="Rp 1.200.000">
                                        <i class="fas fa-comment me-1"></i> Konsultasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/portfolio/lada.jpg" alt="Product">
                            </div>
                            <div class="product-info">
                                <h4>{{ __('site.service_catering_title') }}</h4>
                                <p>{{ __('site.service_catering_desc') }}</p>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">Rp 8.000.000</div>
                                <div class="d-flex">
                                    <button class="btn-custom me-2" data-bs-toggle="modal" data-bs-target="#productModal">{{ __('site.details') }}</button>
                                    <button class="btn-custom btn-konsultasi" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#contactModal" 
                                            data-product-name="{{ __('site.service_catering_title') }}" 
                                            data-product-code="PRD-006" 
                                            data-product-price="Rp 8.000.000">
                                        <i class="fas fa-comment me-1"></i> Konsultasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>