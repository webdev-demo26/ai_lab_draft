<!-- FOOTER -->
<footer class="site-footer">
    <div class="container">

        <div class="row g-5">

            <div class="col-lg-5">
                <!-- <a href="home" class="brand footer-brand">
                    <span class="brand-icon">
                        <i class="fa-solid fa-atom"></i>
                    </span>
                    <span>
                        AI and Lab Automation
                        <small>CONFERENCE 2027</small>
                    </span>
                </a>

                <p class="footer-description">
                    An international scientific meeting exploring artificial
                    intelligence, intelligent laboratory systems, laboratory
                    robotics, next-generation therapeutics, and advanced
                    biological manufacturing.
                </p> -->

                <div class="footer-brand">
                    <!-- Company Logo -->
                    <a href="https://www.scientificprism.com/" class="footer-logo">
                        <img src="assets/img/prism_logo_footer.png" alt="Prism" class="img-fluid">
                    </a>



                    <p class="footer-description">
                        PRISM takes pride to connect the empirical and systematic minds
                        of both the budding researchers and the experience scientists
                        help promote change in the world for a better human welfare.
                    </p>



                    <div class="footer-detail">
                        <i class="fa-solid fa-location-dot"></i>
                        <span> 302/480 Collins Street, Melbourne, VIC 3000 </span>
                    </div>

                    <div class="footer-detail">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+61 416 000 202"> +61 416 000 202 </a>
                    </div>

                    <div class="footer-detail">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:writeus@scientificprism.com">
                            writeus@scientificprism.com
                        </a>
                    </div>

                    <!-- Social Links -->
                    <div class="footer-social-links">
                        <a href="" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>

                        <!-- <a href="#" aria-label="Facebook">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="#" aria-label="X">
                  <i class="fa-brands fa-x-twitter"></i>
                </a>

                <a href="#" aria-label="Instagram">
                  <i class="fa-brands fa-instagram"></i>
                </a> -->
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#welcome">About the Conference</a></li>
                    <li><a href="#why-attend">Why Attend</a></li>
                    <li><a href="#audience">Who Should Attend</a></li>
                    <li><a href="#applications">Application Areas</a></li>
                    <li><a href="#registration">Registration</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-4">
                <h3 class="footer-heading">Conference Details</h3>

                <div class="footer-detail">
                    <i class="fa-regular fa-calendar-check"></i>
                    <span>October 6-8, 2027</span>
                </div>

                <div class="footer-detail">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Japan</span>
                </div>

                <div class="footer-detail">
                    <i class="fa-solid fa-globe"></i>
                    <span>International Scientific Conference</span>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <span>
                &copy; 2027 AI and Lab Automation Conference. All rights reserved.
            </span>
            <span>Advancing Intelligent Science and Laboratory Innovation</span>
        </div>

    </div>
</footer>

<!-- BACK TO TOP -->
<button type="button" class="back-to-top" id="backToTop"
    aria-label="Back to top">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Close mobile navigation after selecting a section
        document.querySelectorAll("#mainNavigation .nav-link, #mainNavigation .nav-register")
            .forEach(function(link) {
                link.addEventListener("click", function() {
                    const navigation = document.getElementById("mainNavigation");

                    if (navigation.classList.contains("show")) {
                        bootstrap.Collapse.getOrCreateInstance(navigation).hide();
                    }
                });
            });

        // Back-to-top button
        const backToTop = document.getElementById("backToTop");

        function updateBackToTop() {
            backToTop.classList.toggle("visible", window.scrollY > 450);
        }

        window.addEventListener("scroll", updateBackToTop, {
            passive: true
        });
        updateBackToTop();

        backToTop.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: window.matchMedia("(prefers-reduced-motion: reduce)").matches ?
                    "auto" : "smooth"
            });
        });

        // Pause video when the browser tab is hidden
        const heroVideo = document.querySelector(".hero-video");

        if (heroVideo) {
            document.addEventListener("visibilitychange", function() {
                if (document.hidden) {
                    heroVideo.pause();
                } else if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
                    heroVideo.play().catch(function() {
                        // Autoplay can be blocked by browser settings.
                    });
                }
            });
        }
    });
</script>

</body>

</html>