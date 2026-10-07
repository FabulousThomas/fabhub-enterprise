<!-- Vendor JS Files -->
<script src="<?= URLROOT ?>/assets/vendor/jquery/jquery3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<!-- <script src="<?= URLROOT ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="<?= URLROOT ?>/assets/vendor/php-email-form/validate.js"></script> -->
<script src="<?= URLROOT ?>/assets/vendor/aos/aos.js"></script>
<script src="<?= URLROOT ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= URLROOT ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= URLROOT ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?= URLROOT ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= URLROOT ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= URLROOT ?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>

<!-- Main JS File -->
<script src="<?= URLROOT ?>/assets/js/main.js"></script>

<script>
    // --- Reveal on Scroll Logic ---
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");

                // Trigger counter if it's a stat-number
                let num = reveals[i].querySelector('.stat-number');
                if (num && !num.classList.contains('done')) {
                    startCounter(num);
                }
            }
        }
    }

    function startCounter(el) {
        el.classList.add('done');
        const target = +el.getAttribute('data-target');
        const increment = target / 100;
        let count = 0;

        const updateCount = () => {
            if (count < target) {
                count += increment;
                el.innerText = Math.ceil(count) + (target > 5 ? '+' : '');
                setTimeout(updateCount, 20);
            } else {
                el.innerText = target + (target > 5 ? '+' : '');
            }
        };
        updateCount();
    }

    window.addEventListener("scroll", reveal);
    window.onload = reveal;
</script>