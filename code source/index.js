       function handleSubmit(event) {
            event.preventDefault();
            alert('Thank you for your message! I will get back to you soon.');
            event.target.reset();
        }

        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
