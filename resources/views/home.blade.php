@extends('layouts.app')

@section('content')
    @include('section.hero-new')
    @include('section.about')
    @include('section.subsidiaries')
    @include('section.product')
    @include('section.services')
    
    <!-- Include modals -->
    @include('modals.aboutModal')
    @include('modals.contactModal')
    @include('modals.dummy1')
@endsection

@push('scripts')
    <script src="assets/js/script.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
        
        // Back to top button functionality
        document.addEventListener('DOMContentLoaded', function() {
            let backToTopBtn = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTopBtn.classList.add('show');
                } else {
                    backToTopBtn.classList.remove('show');
                }
            });
            
            backToTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });
    </script>
@endpush

@push('scripts')
    <script src="assets/js/script.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
        
        // Back to top button functionality
        document.addEventListener('DOMContentLoaded', function() {
            let backToTopBtn = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTopBtn.classList.add('show');
                } else {
                    backToTopBtn.classList.remove('show');
                }
            });
            
            backToTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });
    </script>
@endpush
