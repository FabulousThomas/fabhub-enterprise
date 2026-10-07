<section id="hero" class="hero section d-none">

    <div class="container">
        <div class="row gy-4">
            <div class="col-12 order-2 order-lg-1 text-center d-flex flex-column justify-content-center">
                <h1 class="text-uppercase text-center" data-aos="fade-up">AI-driven solutions for growing your business
                </h1>
                <p class="pt-4 text-center text-md-start" data-aos="fade-up" data-aos-delay="100">
                    We deliver enterprise technology solutions that strengthen organizational
                    resilience, accelerate digital transformation, and create sustainable competitive advantage.
                </p>
                <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#getQuote" class="btn-get-started">
                        Get Quote
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <!-- <a href="<?= URLROOT ?>/about"
                        class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0 cta-button">
                        <i class="bi bi-info fs-3 text-white"></i>
                        <span>Learn More</span>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img d-none d-none" data-aos="zoom-out">
                <img src="<?= URLROOT ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>

<section class="hero-section bg-light pt-md-5 pb-md-2 py-4">
    <div class="container hero-content">
        <h1 class="hero-title reveal">
            <!-- We Build<br /> -->
            <span style="color:var(--primary-red)"><?= $data['hero_title'] ?></span> <?= $data['hero_subtitle'] ?>
        </h1>

        <a type="button" data-bs-toggle="modal" data-bs-target="#getQuote" class="btn-fabhub reveal">
            Get Quote
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</section>

<!-- AI-Driven Solutions -->