<div class="hero-section py-5" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-content" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4">{{ __('site.hero_title') }}</h1>
                <p class="lead mb-5">{{ __('site.hero_subtitle') }}</p>
                <div class="cta-buttons">
                    <a href="#kontak" class="btn btn-primary btn-lg me-3">{{ __('site.hero_cta_contact') }}</a>
                    <a href="#layanan" class="btn btn-outline-secondary btn-lg">{{ __('site.hero_cta_services') }}</a>
                </div>
            </div>
            <div class="col-lg-6 image-content" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('assets/img/hero-illustration.png') }}" alt="{{ __('site.hero_image_alt') }}" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</div>

{{-- Placeholder for Jasa Boga and other specific service icons if needed later --}}
{{-- <div class="container-kotak pt-4 d-flex justify-content-center">
    <div class="kotak" data-aos="fade-up" data-aos-delay="100">
        <i class="fas fa-utensils kuning"></i>
        <div>JASA BOGA</div>
    </div>
    Add more service icons here if necessary
</div> --}}