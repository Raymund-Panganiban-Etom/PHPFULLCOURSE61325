 // DOM Elements
        const overlay = document.getElementById('overlay');
        const openPopupBtn = document.getElementById('openPopupBtn');
        const closePopupBtn = document.getElementById('closePopupBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const entryForm = document.getElementById('entryForm');
        const submitBtn = document.getElementById('submitBtn');
        const messageBox = document.getElementById('messageBox');

        // Open popup
        openPopupBtn.addEventListener('click', () => {
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scroll
            entryForm.reset(); // Clear form
            messageBox.className = 'message'; // Clear messages
            messageBox.textContent = '';
        });

        // Close popup functions
        function closePopup() {
            overlay.classList.remove('active');
            document.body.style.overflow = ''; // Restore scroll
        }

        closePopupBtn.addEventListener('click', closePopup);
        cancelBtn.addEventListener('click', closePopup);

        // Close on overlay click (outside popup)
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                closePopup();
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                closePopup();
            }
        });

        // Form submission
        entryForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Show loading state
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            messageBox.className = 'message';
            messageBox.textContent = '';

            // Collect form data
            const formData = new FormData(entryForm);

            try {
                const response = await fetch('try.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    // Show success message
                    messageBox.className = 'message success';
                    messageBox.textContent = result.message || 'Entry added successfully!';
                    
                    // Close popup after delay
                    setTimeout(() => {
                        closePopup();
                        entryForm.reset();
                        messageBox.className = 'message';
                        messageBox.textContent = '';
                    }, 2000);
                    
                } else {
                    // Show error message
                    messageBox.className = 'message error';
                    messageBox.textContent = result.message || 'An error occurred.';
                }
            } catch (error) {
                console.error('Error:', error);
                messageBox.className = 'message error';
                messageBox.textContent = 'Network error. Please try again.';
            } finally {
                // Remove loading state
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
            }
        });
