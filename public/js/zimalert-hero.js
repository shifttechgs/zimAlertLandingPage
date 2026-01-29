/**
 * ZimAlert Hero Section Interactions
 * Smooth scrolling and enhanced user experience
 */

(function($) {
    'use strict';

    // Smooth scroll for CTA buttons
    $(document).ready(function() {
        // Smooth scroll to waitlist section
        $('a[href="#waitlist"]').on('click', function(e) {
            e.preventDefault();
            const target = $('#waitlist, .waitlist-section, [data-section="waitlist"]').first();

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800, 'swing');
            } else {
                // If waitlist section doesn't exist, scroll to footer or create inline form
                $('html, body').animate({
                    scrollTop: $('footer').offset().top - 100
                }, 800, 'swing');
            }
        });

        // Smooth scroll to beta testing section
        $('a[href="#beta-testing"]').on('click', function(e) {
            e.preventDefault();
            const target = $('#beta-testing, .beta-section, [data-section="beta"]').first();

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800, 'swing');
            } else {
                // If beta section doesn't exist, scroll to footer
                $('html, body').animate({
                    scrollTop: $('footer').offset().top - 100
                }, 800, 'swing');
            }
        });

        // Add dynamic avatar images to social proof
        const avatars = $('.proof-avatars .avatar');
        const gradients = [
            'linear-gradient(135deg, #006B3F 0%, #00944D 100%)',
            'linear-gradient(135deg, #FFC72C 0%, #FFD700 100%)',
            'linear-gradient(135deg, #DE2910 0%, #FF4136 100%)'
        ];

        avatars.each(function(index) {
            $(this).css('background', gradients[index % gradients.length]);
        });

        // Enhanced button hover effects with cursor
        $('.zimalert-btn-primary, .zimalert-btn-secondary').on('mouseenter', function() {
            $(this).addClass('hovered');
        }).on('mouseleave', function() {
            $(this).removeClass('hovered');
        });

        // Floating cards parallax effect on mouse move
        // Disable parallax on touch devices for better performance
        const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

        if ($(window).width() > 991 && !isTouchDevice) {
            let ticking = false;
            let lastKnownScrollPosition = 0;

            $('.zimalert-visual-wrapper').on('mousemove', function(e) {
                const wrapper = $(this);
                const mouseX = e.pageX - wrapper.offset().left;
                const mouseY = e.pageY - wrapper.offset().top;
                const centerX = wrapper.width() / 2;
                const centerY = wrapper.height() / 2;

                const percentX = (mouseX - centerX) / centerX;
                const percentY = (mouseY - centerY) / centerY;

                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        $('.floating-card.card-1').css({
                            'transform': `translate(${percentX * 15}px, ${percentY * 15}px)`
                        });
                        $('.floating-card.card-2').css({
                            'transform': `translate(${percentX * -20}px, ${percentY * 20}px)`
                        });
                        $('.floating-card.card-3').css({
                            'transform': `translate(${percentX * 18}px, ${percentY * -18}px)`
                        });

                        ticking = false;
                    });

                    ticking = true;
                }
            });

            // Reset on mouse leave
            $('.zimalert-visual-wrapper').on('mouseleave', function() {
                $('.floating-card').css('transform', 'translate(0, 0)');
            });
        }

        // Intersection Observer for scroll animations
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            // Observe hero elements
            document.querySelectorAll('.zimalert-badge, .zimalert-headline, .zimalert-subheadline, .trust-item, .zimalert-btn-primary, .zimalert-btn-secondary').forEach(function(el) {
                observer.observe(el);
            });
        }

        // Count up animation for social proof number
        const proofCount = $('.proof-text strong');
        if (proofCount.length) {
            let hasAnimated = false;
            $(window).on('scroll', function() {
                if (!hasAnimated && isElementInViewport(proofCount[0])) {
                    animateCount(500, 2000);
                    hasAnimated = true;
                }
            });
        }

        function animateCount(target, duration) {
            let start = 0;
            const increment = target / (duration / 16);

            function updateCount() {
                start += increment;
                if (start < target) {
                    $('.proof-text strong').text(Math.floor(start) + '+ Zimbabweans');
                    requestAnimationFrame(updateCount);
                } else {
                    $('.proof-text strong').text(target + '+ Zimbabweans');
                }
            }

            updateCount();
        }

        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Newsletter form enhancement (if exists in hero)
        $('#newslettersForm').on('submit', function(e) {
            e.preventDefault();
            const email = $(this).find('input[type="email"]').val();

            // Add your form submission logic here
            console.log('Newsletter signup:', email);

            // Show success message
            const submitBtn = $(this).find('button[type="submit"]');
            const originalContent = submitBtn.html();

            submitBtn.html('<i class="fa fa-check"></i>').prop('disabled', true);

            setTimeout(function() {
                submitBtn.html(originalContent).prop('disabled', false);
            }, 3000);
        });

        // Add loading animation class
        setTimeout(function() {
            $('.zimalert-hero').addClass('loaded');
        }, 100);

        // ============================================
        // WAITLIST MODAL FUNCTIONALITY
        // ============================================

        const $modal = $('#waitlistModal');
        const $form = $('#waitlistForm');
        const $successMessage = $('#successMessage');
        const $submitBtn = $('#submitWaitlist');
        const $emailInput = $('#waitlist_email');
        const $emailError = $('#email_error');

        // Open modal
        $('#openWaitlistModal, a[href="#waitlist"]').on('click', function(e) {
            e.preventDefault();
            openModal();
        });

        // Close modal
        $('#closeWaitlistModal, .zimalert-modal-overlay').on('click', function(e) {
            e.preventDefault();
            closeModal();
        });

        $('#closeSuccessModal').on('click', function(e) {
            e.preventDefault();
            closeModal();
            resetForm();
        });

        // Close on Escape key
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape' && $modal.hasClass('active')) {
                closeModal();
            }
        });

        // Form submission
        $form.on('submit', function(e) {
            e.preventDefault();

            // Clear previous errors
            $emailError.text('');
            $emailInput.removeClass('error');

            // Get form data
            const email = $emailInput.val().trim();
            const betaTesting = $('#beta_testing').is(':checked');

            // Basic validation
            if (!email || !isValidEmail(email)) {
                $emailError.text('Please enter a valid email address');
                $emailInput.addClass('error');
                return;
            }

            // Show loading state
            const originalText = $submitBtn.find('.btn-text').text();
            $submitBtn.find('.btn-text').text('Joining...');
            $submitBtn.addClass('loading').prop('disabled', true);

            // AJAX submission
            $.ajax({
                url: '/waitlist',
                method: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        $form.addClass('hidden');
                        $successMessage.addClass('active');

                        // Track conversion (optional)
                        if (typeof gtag !== 'undefined') {
                            gtag('event', 'conversion', {
                                'event_category': 'Waitlist',
                                'event_label': 'Signup Success'
                            });
                        }
                    } else {
                        showError(response.message || 'Something went wrong. Please try again.');
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'Something went wrong. Please try again.';

                    if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                        const errors = xhr.responseJSON.errors;
                        if (errors.email) {
                            errorMessage = errors.email[0];
                        }
                    } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }

                    showError(errorMessage);
                },
                complete: function() {
                    $submitBtn.removeClass('loading').prop('disabled', false);
                    $submitBtn.find('.btn-text').text(originalText);
                }
            });
        });

        // Helper functions
        function openModal() {
            $modal.addClass('active');
            $('body').css('overflow', 'hidden');

            // Focus on email input
            setTimeout(function() {
                $emailInput.focus();
            }, 300);
        }

        function closeModal() {
            $modal.removeClass('active');
            $('body').css('overflow', '');
        }

        function resetForm() {
            $form.removeClass('hidden');
            $successMessage.removeClass('active');
            $form[0].reset();
            $emailError.text('');
            $emailInput.removeClass('error');
        }

        function showError(message) {
            $emailError.text(message);
            $emailInput.addClass('error');
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });

    // Debounced resize handler for performance
    let resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Reset parallax on mobile
            if ($(window).width() <= 991) {
                $('.floating-card').css('transform', 'translate(0, 0)');
            }
        }, 250); // 250ms debounce
    });

})(jQuery);
