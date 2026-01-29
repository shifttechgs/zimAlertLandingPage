/**
 * Waitlist Form AJAX submission
 * Handles form validation and AJAX submission without page reload
 */

document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.waitlist-form');

    forms.forEach(form => {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            const submitButton = form.querySelector('button[type="submit"]');
            const buttonText = submitButton.querySelector('.button-text');
            const loadingSpinner = submitButton.querySelector('.loading-spinner');
            const emailInput = form.querySelector('input[name="email"]');
            const successMessage = form.querySelector('.success-message');
            const errorMessage = form.querySelector('.error-message');

            // Clear previous messages
            if (successMessage) {
                successMessage.classList.add('hidden');
            }
            if (errorMessage) {
                errorMessage.classList.add('hidden');
            }

            // Client-side email validation
            const email = emailInput.value.trim();
            if (!email || !isValidEmail(email)) {
                showError(errorMessage, 'Please enter a valid email address.');
                return;
            }

            // Disable submit button and show loading state
            submitButton.disabled = true;
            if (buttonText) buttonText.classList.add('hidden');
            if (loadingSpinner) loadingSpinner.classList.remove('hidden');

            try {
                // Get form data
                const formData = new FormData(form);

                // Send AJAX request
                const response = await fetch(form.action || '/waitlist', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    },
                    body: formData
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    // Success
                    showSuccess(successMessage, data.message);
                    form.reset();
                } else {
                    // Error
                    showError(errorMessage, data.message || 'An error occurred. Please try again.');
                }
            } catch (error) {
                console.error('Form submission error:', error);
                showError(errorMessage, 'An error occurred. Please try again.');
            } finally {
                // Re-enable submit button
                submitButton.disabled = false;
                if (buttonText) buttonText.classList.remove('hidden');
                if (loadingSpinner) loadingSpinner.classList.add('hidden');
            }
        });
    });

    /**
     * Validate email format
     */
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    /**
     * Show success message
     */
    function showSuccess(element, message) {
        if (!element) return;
        const messageText = element.querySelector('p');
        if (messageText) {
            messageText.textContent = message;
        }
        element.classList.remove('hidden');
    }

    /**
     * Show error message
     */
    function showError(element, message) {
        if (!element) return;
        const messageText = element.querySelector('p');
        if (messageText) {
            messageText.textContent = message;
        }
        element.classList.remove('hidden');
    }
});
