 AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                    
                    const offcanvas = document.querySelector('.offcanvas');
                    if (offcanvas && offcanvas.classList.contains('show')) {
                        const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
                        bsOffcanvas.hide();
                    }
                }
            });
        });
        
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section, .hero');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                
                if (window.pageYOffset >= sectionTop - navbarHeight - 100) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
        
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
 
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
   
        const forms = document.querySelectorAll('.contact-form, .newsletter-form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
               
                let valid = true;
                const inputs = form.querySelectorAll('input, textarea');
                
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        valid = false;
                        input.classList.add('is-invalid');
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                
                if (valid) {
                    alert('Pesan Anda telah terkirim. Terima kasih!');
                    form.reset();
                }
            });
        });