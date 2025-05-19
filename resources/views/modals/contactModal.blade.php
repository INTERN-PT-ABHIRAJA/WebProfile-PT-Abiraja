<div class="modal fade" id="contactModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">            <div class="modal-header">
                <h5 class="modal-title">{{ __('site.hubungi_kami') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('site.full_name') }}</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('site.email') }}</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('site.phone_number') }}</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{ __('site.message') }}</label>
                        <textarea class="form-control" id="message" rows="4"></textarea>
                    </div>
                </form>
            </div>            <div class="modal-footer">                <button type="button" class="btn-modal" data-bs-dismiss="modal">{{ __('site.cancel') }}</button>
                <button type="button" class="btn-modal">{{ __('site.send') }}</button>
            </div>
        </div>
    </div>
</div>