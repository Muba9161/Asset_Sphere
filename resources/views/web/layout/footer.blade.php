</main>

<footer id="footer" class="footer dark-background">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">

                <!-- About Section -->
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset('../web/img/favicon.png') }}" alt="">
                        <span class="sitename">AssetSphere</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Lucknow</p>
                        <p>Uttar Pradesh, India</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+91 9161224477 | 7269084505</span></p>
                        {{-- <p class="mt-3"><strong>Phone:</strong> <span>+91 7269084505</span></p> --}}
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <!-- Useful Links Section -->
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <!-- Our Services Section -->
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <!-- Newsletter Section -->
                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form">
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <input type="submit" value="Subscribe">
                        </div>
                        <div class="loading">Loading...</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="copyright">
        <div class="container text-center">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">{{env('APP_NAME')}}</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a> -->
            </div>
        </div>
    </div>

</footer>

<!-- Scroll Top Button -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="fas fa-code"></i></a>

<!-- Preloader -->
{{-- <div id="preloader"></div> --}}

<!-- Vendor JS Files -->
<script src="{{ asset('../web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('../web/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('../web/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('../web/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('../web/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('../web/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('../web/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('../web/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- Main JS File -->
<script src="{{ asset('../web/js/main.js') }}"></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        render(); // Call render after the DOM is fully loaded and the hidden textareas are populated by Laravel
    });


    function copyCode(code) {
        // Use the modern clipboard API
        navigator.clipboard.writeText(code).then(() => {
            // Show custom alert
            const alertBox = document.getElementById('customAlert');

            // Remove the hidden class and add the show class
            alertBox.classList.remove('hidden');
            alertBox.classList.add('show');

            // Hide the alert after 2 seconds
            setTimeout(() => {
                alertBox.classList.remove('show');
                alertBox.classList.add('hidden');
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    }


    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    // Check if the user has a preferred theme in localStorage
    // Check if the theme is set to light and apply the background accordingly
    if (localStorage.getItem('theme') === 'dark-background') {
        body.classList.add('light-background');
        // Change the icon to sun when in light mode
        themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
    }

    // Toggle dark/light mode on click
    themeToggle.addEventListener('click', function(e) {
        e.preventDefault();

        body.classList.toggle('light-background');

        // Change the icon based on the current theme
        if (body.classList.contains('light-background')) {
            themeToggle.innerHTML = '<i class="fas fa-moon"></i>'; // Sun icon
            // Save the current theme to localStorage
            localStorage.setItem('theme', 'light-background');
        } else {
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>'; // Moon icon
            // Remove the theme from localStorage
            localStorage.removeItem('theme');
        }
    });
</script>

</body>

</html>
