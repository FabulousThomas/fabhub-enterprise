<footer id="footer" class="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form method="POST" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email">
              <input type="submit" name="subscribe" value="Subscribe">
            </div>
            <!-- <div class="loading">Loading</div> -->
            <!-- <div class="error-message"></div> -->
            <!-- <div class="sent-message">Your subscription request has been sent. Thank you!</div> -->
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="<?= URLROOT ?>" class="d-flex align-items-center">
          <?= SITELOGO ?>
        </a>
        <div class="footer-contact pt-3">
          <p>Jakande Estate,</p>
          <p>Oshodi-Isolo, Lagos 1000102</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+234 904 300 6201</span></p>
          <p><strong>Email:</strong> <span>info@fabhub.com</span></p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="<?= URLROOT ?>/#about">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="<?= URLROOT ?>/#services">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="<?= URLROOT ?>/#terms">Terms of service</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12">
        <h4>Follow Us</h4>
        <p>
          Reach out to us on social media platforms
        </p>
        <div class="social-links d-flex">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright <?= date("Y"); ?></span>
      <strong class="px-1 sitename"><?= SITENAME ?></strong>
      <span> | All Rights Reserved</span>
    </p>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<?php require_once APPROOT . "/views/inc/scripts.php" ?>

<?php include 'modal.php' ?>

</body>

</html>