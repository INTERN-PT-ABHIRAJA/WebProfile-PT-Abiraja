// Enhanced button interactions
document.addEventListener('DOMContentLoaded', function() {
    // Debug: Check if buttons exist
    console.log('Digital Services JS loaded');
    
    // Use event delegation for more reliable event handling
    document.addEventListener('click', function(e) {
        const button = e.target.closest('.btn-primary-custom, .btn-outline-custom');
        if (button) {
            console.log('Button clicked via delegation:', button.href);
            
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: rippleEffect 0.6s linear;
                pointer-events: none;
                z-index: 1;
            `;
            
            button.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
            
            // Let the default link behavior work
        }
    });
    
    // Direct button selection for hover effects
    const buttons = document.querySelectorAll('.btn-primary-custom, .btn-outline-custom');
    console.log('Found buttons:', buttons.length);
    
    buttons.forEach((button, index) => {
        console.log(`Button ${index}:`, button.href, button.textContent.trim());
        
        // Enhanced hover animations
        button.addEventListener('mouseenter', function() {
            console.log('Button hover:', this.textContent.trim());
            this.style.transform = 'translateY(-5px) scale(1.05)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Add ripple animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes rippleEffect {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
});
