<div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">            
            <div class="modal-header">
                <div>
                    <h5 class="modal-title">{{ __('site.hubungi_kami') }}</h5>
                    <small class="text-muted">WhatsApp: +62 889 7158 9438</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="contactProductInfo" class="mb-4 d-none">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h6 class="product-title mb-2">Nama Produk</h6>
                            <p class="product-code mb-1 text-muted small">Kode: PRD-001</p>
                            <p class="product-price mb-0 fw-bold">Harga: Rp 0</p>
                        </div>
                    </div>
                </div>

                <form id="contactForm" class="needs-validation" novalidate>
                    <!-- CSRF Token -->
                    @csrf
                    <!-- Hidden fields to store product info -->
                    <input type="hidden" id="productName" name="productName" value="">
                    <input type="hidden" id="productCode" name="productCode" value="">
                    <input type="hidden" id="productPrice" name="productPrice" value="">

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('site.full_name') }}</label>
                        <input type="text" class="form-control" id="name" name="name" required 
                               placeholder="Masukkan nama lengkap Anda">
                        <div class="invalid-feedback">
                            Silahkan masukkan nama lengkap Anda
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('site.email') }}</label>
                        <input type="email" class="form-control" id="email" name="email" required
                               placeholder="contoh@email.com">
                        <div class="invalid-feedback">
                            Silahkan masukkan alamat email yang valid
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('site.phone_number') }}</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required
                               placeholder="08xx-xxxx-xxxx">
                        <div class="invalid-feedback">
                            Silahkan masukkan nomor telepon Anda
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{ __('site.message') }}</label>
                        <textarea class="form-control" id="message" name="message" rows="4"
                                  placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."></textarea>
                    </div>

                    <div class="alert alert-success d-none" id="contactSuccess">
                        <i class="fas fa-check-circle me-2"></i>
                        Pesan berhasil dikirim! Anda akan segera diarahkan ke WhatsApp.
                    </div>
                    <div class="alert alert-danger d-none" id="contactError">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <span>Terjadi kesalahan. Silahkan coba lagi.</span>
                    </div>
                </form>
            </div>            
            <div class="modal-footer">                
                <button type="button" class="btn-modal" data-bs-dismiss="modal">{{ __('site.cancel') }}</button>
                <button type="button" class="btn-modal btn-whatsapp" id="submitContactForm">
                    <i class="fab fa-whatsapp me-2"></i>{{ __('site.send') }}
                </button>
            </div>
        </div>
    </div>
</div>