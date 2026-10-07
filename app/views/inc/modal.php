<!-- Quote Modal -->
<div class="modal fade" id="getQuote" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered shadow-none modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body py-4">
                <h2 class="text-center">Let's Collaborate</h2>
                <p class="text-center text-capitalize mb-3">Consult us Today for Personalized Guidance and Solutions</p>
                <form method="POST" class="">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="fname">Company Name <sup>*</sup></label>
                            <input type="text" name="name" class="form-control shadow-none" placeholder="e.g. Fabhub Enterprise" required>
                        </div>
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="email">Company Email <sup>*</sup></label>
                            <input type="email" name="email" class="form-control shadow-none" placeholder="e.g. info@fabhub.com" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="name">Phone <sup>*</sup></label>
                            <input type="number" name="phone" class="form-control shadow-none" placeholder="e.g. +234 904 3006 201" required>
                        </div>
                        <div class="col-lg-6 col-md-12 form-group mb-3">
                            <label for="category">Project Category <sup>*</sup></label>
                            <select class="form-select form-control shadow-none" name="category" id="" required>
                                <option value="Null" selected disabled>Choose an option</option>
                                <option value="Web Development and Designs">Web Development & Designs</option>
                                <option value="Mobile Application and Designs">Mobile Application & Designs</option>
                                <option value="Graphics Design">Graphics Design</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group mb-3">
                            <label for="message">Message <sup>*</sup></label>
                            <textarea name="message" rows="4" class="form-control shadow-none" placeholder="Tell us about your project" required></textarea>
                        </div>
                    </div>

                    <div class="form-group m-0">
                        <button type="submit" name="sendEnquiry" class=" btn btn-sm btn-custom">Proceed</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>