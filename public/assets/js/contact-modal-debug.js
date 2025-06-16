// Debug script untuk Contact Modal
console.log('Contact Modal Debug Script Loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log('=== CONTACT MODAL DEBUG ===');
    
    // Check if elements exist
    const contactModal = document.getElementById('contactModal');
    const contactForm = document.getElementById('contactForm');
    const submitButton = document.getElementById('submitContactForm');
    
    console.log('Contact Modal:', contactModal ? 'FOUND' : 'NOT FOUND');
    console.log('Contact Form:', contactForm ? 'FOUND' : 'NOT FOUND');
    console.log('Submit Button:', submitButton ? 'FOUND' : 'NOT FOUND');
    
    if (submitButton) {
        console.log('Submit button element:', submitButton);
        console.log('Submit button classes:', submitButton.className);
        console.log('Submit button ID:', submitButton.id);
        
        // Remove any existing event listeners and add new one
        const newButton = submitButton.cloneNode(true);
        submitButton.parentNode.replaceChild(newButton, submitButton);
        
        newButton.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('=== SUBMIT BUTTON CLICKED ===');
            alert('Tombol submit diklik! Event listener berfungsi.');
            
            if (!contactForm) {
                console.error('Contact form tidak ditemukan!');
                return;
            }
            
            // Basic form validation
            const nameInput = contactForm.querySelector('#name');
            const emailInput = contactForm.querySelector('#email');
            const phoneInput = contactForm.querySelector('#phone');
            
            console.log('Name value:', nameInput?.value);
            console.log('Email value:', emailInput?.value);
            console.log('Phone value:', phoneInput?.value);
            
            if (!nameInput?.value.trim()) {
                alert('Nama harus diisi!');
                nameInput?.focus();
                return;
            }
            
            if (!emailInput?.value.trim()) {
                alert('Email harus diisi!');
                emailInput?.focus();
                return;
            }
            
            if (!phoneInput?.value.trim()) {
                alert('Nomor telepon harus diisi!');
                phoneInput?.focus();
                return;
            }
            
            // Show loading state
            const originalText = newButton.innerHTML;
            newButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
            newButton.disabled = true;
            
            // Simulate form submission
            setTimeout(function() {
                alert('Form berhasil dikirim! (simulasi)');
                
                // Reset button
                newButton.innerHTML = originalText;
                newButton.disabled = false;
                
                // Close modal
                const bsModal = bootstrap.Modal.getInstance(contactModal);
                if (bsModal) {
                    bsModal.hide();
                }
                
                // Reset form
                contactForm.reset();
            }, 2000);
        });
        
        console.log('Event listener berhasil ditambahkan ke tombol submit');
    }
    
    // Test button click programmatically
    if (submitButton) {
        console.log('Testing button click programmatically...');
        setTimeout(() => {
            console.log('Simulating button click...');
            // Don't actually click, just log
            console.log('Button click simulation complete');
        }, 1000);
    }
});
