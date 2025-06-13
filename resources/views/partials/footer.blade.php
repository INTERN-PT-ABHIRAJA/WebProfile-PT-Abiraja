<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="footer-about">
                <div class="footer-logo">
                    <img src="assets/img/logo/Logo.png" alt="Logo">
                </div>
                <p>{{ App::isLocale('id') ? 'PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk memberikan layanan berkualitas tinggi di berbagai bidang.' : 'PT Abhiraja Giovanni Tryamanda is a multiservices company committed to providing high-quality services in various fields.' }}</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
            <div class="footer-links">
                <h5>{{ __('site.tautan_cepat') }}</h5>
                <ul>
                    <li><a href="#home">{{ __('site.beranda') }}</a></li>
                    <li><a href="#about">{{ __('site.tentang_kami') }}</a></li>
                    <li><a href="#services">{{ __('site.layanan_kami') }}</a></li>
                    <li><a href="#team">{{ __('site.mitra') }}</a></li>
                    <li><a href="#products">{{ App::isLocale('id') ? 'Produk' : 'Products' }}</a></li>
                    <li><a href="#contact">{{ __('site.kontak') }}</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
            <div class="footer-links">
                <h5>{{ __('site.layanan_kami') }}</h5>
                <ul>
                    <li><a href="#">{{ App::isLocale('id') ? 'Pendidikan' : 'Education' }}</a></li>
                    <li><a href="#">{{ App::isLocale('id') ? 'Branding' : 'Branding' }}</a></li>
                    <li><a href="#">{{ App::isLocale('id') ? 'Keuangan' : 'Finance' }}</a></li>
                    <li><a href="#">{{ App::isLocale('id') ? 'Manajemen' : 'Management' }}</a></li>
                    <li><a href="#">{{ App::isLocale('id') ? 'Studio Kayu' : 'Wood Studio' }}</a></li>
                    <li><a href="#">{{ App::isLocale('id') ? 'Pertanian' : 'Agriculture' }}</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="footer-newsletter">
                <h5>{{ App::isLocale('id') ? 'Berlangganan' : 'Subscribe' }}</h5>
                <p>{{ App::isLocale('id') ? 'Berlangganan kami untuk mendapatkan informasi terbaru tentang produk dan layanan kami.' : 'Subscribe to get the latest information about our products and services.' }}</p>
                <form class="newsletter-form">
                    <input type="email" class="form-control" placeholder="{{ App::isLocale('id') ? 'Email Anda' : 'Your Email' }}">
                    <button type="submit" class="btn">{{ App::isLocale('id') ? 'Langganan' : 'Subscribe' }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <p>&copy; 2025 PT Abhiraja Giovanni Tryamanda. {{ __('site.rights_reserved') }}</p>
    </div>
</div>