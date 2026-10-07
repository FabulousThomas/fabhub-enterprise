<!-- Modal REPLY -->
<div class="modal fade" id="md-reply" tabindex="-1" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered shadow-none modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header border-0 py-1 d-flex">
                <div></div>
                <a type="button" class="close shadow-none border-0" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fs-4" title="Close" style="color: black !important;">X</span>
                </a>
            </div>
            <div class="modal-body py-4">
                <div class="header"></div>
                <h2 class="text-center">Send a Reply E-mail</h2>
                <p class="text-center text-capitalize mb-3">Quickly Reply to E-mails</p>
                <form method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="fname">Company Name <sup>*</sup></label>
                            <input type="text" name="name" class="form-control shadow-none"
                                placeholder="e.g. Fabhub Enterprise" required>
                        </div>
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="email">Company Email <sup>*</sup></label>
                            <input type="email" name="email" class="form-control shadow-none"
                                placeholder="e.g. info@fabhub.com" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="name">Invoice ID <sup>*</sup></label>
                            <input type="text" name="invoice" class="form-control shadow-none"
                                placeholder="e.g. FE28405" required>
                        </div>
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="category">Project Category <sup>*</sup></label>
                            <input type="text" name="category" class="form-control shadow-none"
                                placeholder="e.g. Web Dev" required>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="message">Message <sup>*</sup></label>
                            <textarea name="message" rows="4" class="form-control shadow-none"
                                placeholder="Tell us about your project" required></textarea>
                        </div>
                    </div>

                    <div class="form-group m-0">
                        <button type="submit" name="send_message" class="btn rounded-0 btn-primary text-uppercase">Proceed</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>