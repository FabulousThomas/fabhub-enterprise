<!-- HEAD -->
<?php require_once APPROOT . '/views/admin/inc/head.php' ?>
<!-- Spinner Start -->
<?php require_once APPROOT . '/views/admin/inc/_spinner.php' ?>
<!-- Spinner End -->
<!-- Sidebar Start -->
<?php require_once APPROOT . '/views/admin/inc/_sidebar.php' ?>
<!-- Sidebar End -->
<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <?php require_once APPROOT . '/views/admin/inc/_navbar.php' ?>
    <!-- Navbar End -->
    <div class="container-fluid position-relative bg-white d-flex p-0">

        <!-- Form Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">


                <form method="POST">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Hero Section</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control shadow-none" name="heroTitle" id="heroTitle"
                                    value="<?= $data['getTitle'] ?>" placeholder="Hero Title" required>
                                <label for="heroTitle">Hero Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control shadow-none" name="heroSubtitle"
                                    id="heroSubtitle" value="<?= $data['getSubTitle'] ?>" placeholder="Hero Subtitle"
                                    required>
                                <label for="heroSubtitle">Hero Subtitle</label>
                            </div>

                            <div class="mt-4">
                                <button type="submit" name="btn-update-hero" class="btn btn-fabhub">Update</button>
                            </div>
                        </div>
                    </div>
                </form>



                <div class="col-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Add Projects</h6>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                        <label for="basic-url" class="form-label">Your vanity URL</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <div class="mt-4">
                            <button type="submit" name="btn-add-project" class="btn btn-fabhub">Add Project</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Form End -->

    </div>
    <!-- FOOTER -->
    <?php require_once APPROOT . '/views/admin/inc/footer.php' ?>
</div>