<div class="modal fade" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">            
            <div class="modal-header">
                <div>
                    <h5 class="modal-title">Service Inquiry</h5>
                    <small class="text-muted">Let's discuss your project</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>            <div class="modal-body">
                <div id="serviceInfo" class="mb-4">
                    <div class="card bg-light">
                        <div class="card-body text-center py-3">
                            <div class="service-icon mb-2">
                                <i class="fas fa-cogs text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h6 class="service-title mb-2">Service Name</h6>
                            <p class="service-description mb-0 text-muted small">Service description will appear here</p>
                        </div>
                    </div>
                </div>

                <form id="serviceForm" class="needs-validation" novalidate>
                    <!-- CSRF Token -->
                    @csrf
                    <!-- Hidden fields to store service info -->
                    <input type="hidden" id="serviceName" name="serviceName" value="">
                    <input type="hidden" id="serviceType" name="serviceType" value="">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">{{ __('site.full_name') }}</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="name" required 
                                   placeholder="Your full name">
                            <div class="invalid-feedback">
                                Please enter your full name
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="serviceEmail" class="form-label">{{ __('site.email') }}</label>
                            <input type="email" class="form-control form-control-sm" id="serviceEmail" name="email" required
                                   placeholder="your@email.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="servicePhone" class="form-label">{{ __('site.phone_number') }}</label>
                            <input type="tel" class="form-control form-control-sm" id="servicePhone" name="phone" required
                                   placeholder="08xx-xxxx-xxxx">
                            <div class="invalid-feedback">
                                Please enter your phone number
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="serviceCompany" class="form-label">Company</label>
                            <input type="text" class="form-control form-control-sm" id="serviceCompany" name="company"
                                   placeholder="Your company name">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="serviceMessage" class="form-label">Project Details</label>
                        <textarea class="form-control form-control-sm" id="serviceMessage" name="message" rows="3"
                                  placeholder="Tell us about your project requirements..."></textarea>
                    </div>

                    <div class="alert alert-success d-none" id="serviceSuccess">
                        <i class="fas fa-check-circle"></i>
                        <span>Thank you! We'll get back to you within 24 hours.</span>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-paper-plane me-2"></i>Send Inquiry
                        </button>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>
