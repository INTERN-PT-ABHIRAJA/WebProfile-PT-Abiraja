<section class="contact-section" id="contact">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">{{ __('site.hubungi_kami') }}</h2>
            <p class="text-white-50 mx-auto" style="max-width: 700px;">{{ App::isLocale('id') ? 'Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin bekerja sama.' : 'Do not hesitate to contact us if you have questions or want to collaborate.' }}</p>
        </div>
                
                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>{{ App::isLocale('id') ? 'Alamat' : 'Address' }}</h5>
                                    <p>Jl. Alamanda 7 No. 39 Jatinangor, Sumedang
                                        Jl. Raya Buahdua 2, Kec. Buahdua Sumedang</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>{{ App::isLocale('id') ? 'Telepon' : 'Phone' }}</h5>
                                    <p>+62 889 7158 9438</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Email</h5>
                                    <p>Abhirajagiovannicompany@gmail.com</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>{{ __('site.working_hours') }}</h5>
                                    <p>{{ __('site.monday_friday') }}</p>
                                    <p>{{ __('site.saturday') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-7" data-aos="fade-left">
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="{{ __('site.full_name') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="{{ __('site.email') }}">
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="{{ __('site.subject') }}">
                            <textarea class="form-control" placeholder="{{ __('site.message') }}"></textarea>
                            <button type="submit" class="btn-contact">{{ __('site.send_message') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>