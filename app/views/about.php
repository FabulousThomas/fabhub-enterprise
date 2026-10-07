<?php include APPROOT . '/views/inc/head.php'; ?>



<body class="about-page">

   <?php include APPROOT . '/views/inc/navbar.php'; ?>

   <main>

      <section class="hero-section bg-light py-md-5 py-4">
         <div class="container hero-content">
            <h1 class="hero-title reveal">We Build <span style="color:var(--primary-red)">Digital</span> Foundations.
            </h1>
            <a href="#story" class="btn-fabhub reveal">Our Story</a>
         </div>
      </section>

      <section id="story" style="padding: 150px 0;">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 reveal">
                  <div class="section-label text-center">The Hub</div>
                  <h2 class="section-title mb-4">Pioneering Digital Excellence</h2>
                  <p class="lead" style="color: #666; font-size: 1.4rem; line-height: 1.8;">
                     At <?= SITENAME ?>, we deliver enterprise technology solutions that strengthen organizational
                     resilience, accelerate digital transformation, and create sustainable competitive advantage.
                  </p>
                  <p class="mt-4" style="color: #888;">
                     Professional IT services today require more than technical execution - they demand strategic
                     alignment, governance discipline, cybersecurity vigilance, and scalable architecture. Our firm
                     provides a comprehensive portfolio of technology services designed to optimize IT infrastructure,
                     enhance operational efficiency, mitigate risk, and support mission-critical performance across
                     complex business environments.
                  </p>
                  <p class="mt-4" style="color: #888;">
                     Our expertise spans enterprise software engineering, digital platforms, systems integration,
                     automation, and intelligent AI-driven solutions. Each engagement is approached with precision,
                     accountability, and measurable performance benchmarks.
                  </p>
                  <p class="mt-4" style="color: #888;">
                     We do not merely develop websites or applications. We design and engineer secure, scalable digital
                     ecosystems that drive growth, enhance stakeholder engagement, and deliver quantifiable business
                     outcomes.
                  </p>
                  <p class="mt-4" style="color: #888;">
                     Operating with a multinational outlook, we apply globally recognized standards in system
                     reliability, compliance, and risk management - ensuring our clients are equipped to compete
                     confidently in dynamic and regulated markets.
                  </p>
                  <p class="mt-4" style="color: #888;">
                     At <?= SITENAME ?>, technology is not viewed as a standalone function. It is treated as core
                     enterprise infrastructure - engineered to support innovation, operational excellence, and long-term
                     value creation.
                  </p>
               </div>
            </div>
         </div>
      </section>

      <?php include APPROOT . '/views/inc/partials/_values.php' ?>

      <?php include APPROOT . '/views/inc/partials/_stats.php' ?>

   </main>

   <?php include APPROOT . '/views/inc/footer.php'; ?>