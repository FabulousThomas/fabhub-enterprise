<?php require_once APPROOT . '/views/admin/inc/head.php'; ?>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="<?= URLROOT ?>">
                                <h3 class="text-primary"></i><?= SITELOGO ?></h3>
                            </a>
                            <h3>Login</h3>
                        </div>
                        <form action="<?= URLROOT ?>/login" method="POST">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control shadow-none" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <!-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div> -->
                            <button type="submit" name="btnLogin" class="btn-get-started">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= URLROOT ?>/admin.lib/lib/chart/chart.min.js"></script>
    <script src="<?= URLROOT ?>/admin.lib/lib/easing/easing.min.js"></script>
    <script src="<?= URLROOT ?>/admin.lib/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= URLROOT ?>/admin.lib/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= URLROOT ?>/admin.lib/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= URLROOT ?>/admin.lib/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= URLROOT ?>/admin.lib/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= URLROOT ?>/admin.lib/js/main.js"></script>
</body>

</html>