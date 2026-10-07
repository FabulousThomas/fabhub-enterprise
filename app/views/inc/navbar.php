  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="<?= URLROOT ?>" class="logo d-flex align-items-center me-auto">
              <?= SITELOGO ?>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  <li><a href="<?= URLROOT ?>/#hero" class="active">Home<br></a></li>
                  <li><a href="<?= URLROOT ?>/about">About</a></li>
                  <li><a href="<?= URLROOT ?>/#services">Services</a></li>
                  <li><a href="<?= URLROOT ?>/#portfolio">Portfolio</a></li>
                  <!-- <li><a href="<?= URLROOT ?>/#team">Team</a></li> -->
                  <!-- <li><a href="<?= URLROOT ?>/blog">Blog</a></li> -->

                  <li class="listing-dropdown d-none"><a href="#"><span>Listing Dropdown</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li>
                              <a href="#">Column 1 link 1</a>
                              <a href="#">Column 1 link 2</a>
                              <a href="#">Column 1 link 3</a>
                          </li>
                          <li>
                              <a href="#">Column 2 link 1</a>
                              <a href="#">Column 2 link 2</a>
                              <a href="#">Column 3 link 3</a>
                          </li>
                          <li>
                              <a href="#">Column 3 link 1</a>
                              <a href="#">Column 3 link 2</a>
                              <a href="#">Column 3 link 3</a>
                          </li>
                          <li>
                              <a href="#">Column 4 link 1</a>
                              <a href="#">Column 4 link 2</a>
                              <a href="#">Column 4 link 3</a>
                          </li>
                          <li>
                              <a href="#">Column 5 link 1</a>
                              <a href="#">Column 5 link 2</a>
                              <a href="#">Column 5 link 3</a>
                          </li>
                      </ul>
                  </li>
                  <li><a href="<?= URLROOT ?>/#contact">Contact</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <a class="btn-getstarted flex-md-shrink-0" type="button" data-bs-toggle="modal" data-bs-target="#getQuote">Get Quote</a>

      </div>
  </header>