<div class="modal fade" id="aboutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">            <div class="modal-header">
                <h5 class="modal-title">{{ __('site.about_modal_title') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ App::isLocale('id') ? 'PT Abhiraja Giovanni Tryamanda adalah perusahaan jasa multiservices yang berkomitmen untuk memberikan layanan
                    berkualitas tinggi di berbagai bidang, termasuk pendidikan, branding, keuangan, dan lebih banyak lagi. Dengan berbagai
                    layanan yang kami sediakan, kami bertujuan membantu klien kami mencapai kesuksesan di berbagai sektor usaha
                    mereka. Kami mengutamakan profesionalisme, inovasi, dan kepuasan klien sebagai pilar utama.' : 
                    'PT Abhiraja Giovanni Tryamanda is a multiservices company committed to providing high-quality services in various fields, including education, branding, finance, and more. With the various services we provide, we aim to help our clients achieve success in their various business sectors. We prioritize professionalism, innovation, and client satisfaction as our main pillars.' }}</p>
                
                <h5 class="mt-4">{{ App::isLocale('id') ? 'Visi' : 'Vision' }}</h5>
                <p>{{ App::isLocale('id') ? 'Menjadi perusahaan multiservices
                    terkemuka di Indonesia yang dikenal
                    dengan kualitas layanan terbaik dan
                    inovasi yang berkelanjutan.' : 
                    'To become a leading multiservices company in Indonesia known for the best service quality and sustainable innovation.' }}</p>
                
                <h5 class="mt-4">{{ App::isLocale('id') ? 'Misi' : 'Mission' }}</h5>                <ul>
                    <li>{{ App::isLocale('id') ? 'Memberikan solusi konsultasi yang inovatif dan berorientasi pada hasil' : 'Provide innovative and results-oriented consulting solutions' }}</li>
                    <li>{{ App::isLocale('id') ? 'Menyediakan layanan yang memenuhi standar kualitas tinggi' : 'Provide services that meet high quality standards' }}</li>
                    <li>{{ App::isLocale('id') ? 'Membangun hubungan jangka panjang dengan klien melalui kepercayaan dan integritas.' : 'Build long-term relationships with clients through trust and integrity.' }}</li>
                    <li>{{ App::isLocale('id') ? 'Mendukung perkembangan bisnis klien dengan layanan yang terintegrasi dan holistik' : 'Support client business development with integrated and holistic services' }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-modal" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>