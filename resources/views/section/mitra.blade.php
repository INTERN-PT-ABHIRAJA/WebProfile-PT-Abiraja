<section class="team-section" id="team">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">{{ App::isLocale('id') ? 'Mitra Kami' : 'Our Partners' }}</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">{{ App::isLocale('id') ? 'Kami berkolaborasi dengan berbagai mitra strategis untuk memberikan solusi terbaik bagi klien kami.' : 'We collaborate with various strategic partners to provide the best solutions for our clients.' }}</p>
        </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="10">
                <div class="team-card">
                    <div class="team-img">
                    <img src="assets/img/Mitra/WoodStudio.png" alt="Partner">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    </div>
                    <div class="team-info"> 
                    <h4>Art Wood Studio</h4>
                    <p>{{ App::isLocale('id') ? 'Studio Furnitur Kayu' : 'Wood Furniture Studio' }}</p>
                    </div>
                </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card">
                    <div class="team-img">
                    <img src="assets/img/Mitra/DrKonten.png" alt="Partner">
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    </div>
                    <div class="team-info">
                    <h4>Dr Konten</h4>
                    <p>{{ App::isLocale('id') ? 'Layanan Branding Digital' : 'Digital Branding Services' }}</p>
                    </div>
                </div>
                </div>

                <!-- You can add more partners here if needed -->

            </div>
            </div>
        </section>