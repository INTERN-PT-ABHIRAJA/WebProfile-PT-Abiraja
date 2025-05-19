<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo/Logo.png" alt="Logo" class="img-fluid">
            </a>
            <div class="d-none d-lg-block d-md-block head">
                <h6 class="text-black fw-bold m-0 p-0">PT ABHIRAJA GIOVANNI TRYAMANDA</h6>
            </div>
            <div class="d-sm-block d-md-none d-lg-none head">
                <h6 class="text-black fw-bold m-0 p-0">PT ABHIRAJA GIOVANNI T</h6>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#home">{{ __('site.beranda') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#about">{{ __('site.tentang_kami') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#team">{{ __('site.mitra') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#products">{{ __('site.layanan_kami') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#contact">{{ __('site.kontak') }}</a>
                        </li>
                        <li class="nav-item d-flex align-items-center ms-2">
                            <div class="language-switch-container">
                                <a class="language-switch-link {{ App::getLocale() == 'id' ? 'active' : '' }}" href="{{ route('language.switch', 'id') }}">ID</a>
                                <span class="language-divider">|</span>
                                <a class="language-switch-link {{ App::getLocale() == 'en' ? 'active' : '' }}" href="{{ route('language.switch', 'en') }}">EN</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
