<?php require_once APPROOT . '/views/admin/inc/head.php'; ?>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border" style="width: 3rem; height: 3rem; color:var(--primary-red)" role="status">
                <span class="sr-only"></span>
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
                            <h3 style="color:var(--primary-red)">Login</h3>
                        </div>
                        <form action="<?= URLROOT; ?>/users/login" method="POST" enctype="multipart/form-data">
                            <?php csrf_input(); ?>
                            <div class="form-floating mb-3">
                                <input type="email" name="email"
                                    class="form-control shadow-none border-0 border-bottom border-danger"
                                    id="floatingInput" placeholder="user@email.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password"
                                    class="form-control shadow-none border-0 border-bottom border-danger"
                                    id="floatingPassword" placeholder="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input shadow-none text-danger"
                                        id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" name="btnLogin"
                                style="background-color:var(--primary-red); padding: 10px 20px; border: none; border-radius: 10px; width: 100%; color: white; font-size: 16px; font-weight: 600;">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    

    <?php require_once APPROOT . '/views/admin/inc/footer.php' ?>