/**
 * Swift Marketing Theme JavaScript
 * Enhanced functionality for modern user experience
 */

(function($) {
    'use strict';
    
    // Document ready
    $(document).ready(function() {
        
        // Smooth scrolling for anchor links
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                    return false;
                }
            }
        });
        
        // Header scroll effect
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });
        
        // Fade in elements on scroll
        function fadeInOnScroll() {
            $('.fade-in').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('slide-up');
                }
            });
        }
        
        // Trigger fade in on scroll
        $(window).scroll(fadeInOnScroll);
        fadeInOnScroll(); // Initial check
        
        // Contact form handling
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var $submitBtn = $form.find('button[type="submit"]');
            var $submitText = $submitBtn.find('#submit-text');
            
            // Show loading state
            $submitText.text('Sending...');
            $submitBtn.prop('disabled', true);
            
            // Prepare form data
            var formData = new FormData(this);
            formData.append('action', 'contact_form');
            
            // AJAX request
            $.ajax({
                url: swift_ajax.ajax_url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        showNotification(response.data.message, 'success');
                        $form[0].reset();
                    } else {
                        showNotification(response.data.message, 'error');
                    }
                },
                error: function() {
                    showNotification('Failed to send message. Please try again.', 'error');
                },
                complete: function() {
                    // Reset button state
                    $submitText.text('Send Message');
                    $submitBtn.prop('disabled', false);
                }
            });
        });
        
        // Newsletter form handling
        $('#newsletter-form').on('submit', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var email = $form.find('input[name="newsletter_email"]').val();
            
            if (!email || !isValidEmail(email)) {
                showNotification('Please enter a valid email address.', 'error');
                return;
            }
            
            // AJAX request
            $.ajax({
                url: swift_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'newsletter',
                    email: email,
                    nonce: swift_ajax.nonce
                },
                success: function(response) {
                    if (response.success) {
                        showNotification(response.data.message, 'success');
                        $form[0].reset();
                    } else {
                        showNotification(response.data.message, 'error');
                    }
                },
                error: function() {
                    showNotification('Failed to subscribe. Please try again.', 'error');
                }
            });
        });
        
        // Notification system
        function showNotification(message, type) {
            var $notification = $('<div class="notification notification-' + type + '">' + message + '</div>');
            
            $('body').append($notification);
            
            setTimeout(function() {
                $notification.addClass('show');
            }, 100);
            
            setTimeout(function() {
                $notification.removeClass('show');
                setTimeout(function() {
                    $notification.remove();
                }, 300);
            }, 4000);
        }
        
        // Email validation helper
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
        
        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
        
        // Service card hover effects
        $('.service-card').hover(
            function() {
                $(this).find('.card-content').addClass('hover-effect');
            },
            function() {
                $(this).find('.card-content').removeClass('hover-effect');
            }
        );
        
        // Statistics counter animation
        function animateCounters() {
            $('.counter').each(function() {
                var $this = $(this);
                var countTo = $this.attr('data-count');
                
                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'linear',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
        }
        
        // Trigger counter animation when in viewport
        $(window).scroll(function() {
            $('.counter').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom && !$(this).hasClass('animated')) {
                    $(this).addClass('animated');
                    animateCounters();
                }
            });
        });
        
    });
    
    // Page load optimizations
    $(window).on('load', function() {
        // Remove loading states
        $('body').addClass('loaded');
        
        // Initialize any additional functionality after full page load
        console.log('Swift Marketing theme loaded successfully');
    });
    
})(jQuery);

// Add notification styles dynamically
const notificationStyles = `
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 16px 24px;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        transform: translateX(400px);
        transition: transform 0.3s ease;
        z-index: 9999;
        max-width: 400px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
    
    .notification.show {
        transform: translateX(0);
    }
    
    .notification-success {
        background: linear-gradient(135deg, #10b981, #059669);
    }
    
    .notification-error {
        background: linear-gradient(135deg, #ef4444, #dc2626);
    }
    
    @media (max-width: 480px) {
        .notification {
            right: 10px;
            left: 10px;
            max-width: none;
            transform: translateY(-100px);
        }
        
        .notification.show {
            transform: translateY(0);
        }
    }
`;

// Inject styles
if (!document.getElementById('swift-notification-styles')) {
    const styleSheet = document.createElement('style');
    styleSheet.id = 'swift-notification-styles';
    styleSheet.textContent = notificationStyles;
    document.head.appendChild(styleSheet);
}