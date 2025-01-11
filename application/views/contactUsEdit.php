
<?php $this->load->view('layouts/link.php'); ?>

<body>
<div class="content-wrapper">
    <section class="content">


    <div class="container mt-5">
        <h3 class="mb-4 hero-heading">Edit Contact Us</h3>


        <form action="<?= base_url('updateContactUs/' . $contactUsRecords[0]->id) ?>" method="POST">

            <div style="overflow-x: hidden; overflow-y: auto; max-height: 460px;">
                <!-- Address Section -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="address_title" class="form-label hero-sub-heading">Address Title:</label>
                        <input type="text" id="address_title" name="address_title" class="form-control" value="<?=  htmlspecialchars($contactUsRecords[0]->address_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="address_content" class="form-label hero-sub-heading">Address Content:</label>
                        <textarea id="address_content" name="address_content" class="form-control" rows="3"><?= htmlspecialchars($contactUsRecords[0]->address_content) ?></textarea>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="contact_title" class="form-label hero-sub-heading">Contact Title:</label>
                        <input type="text" id="contact_title" name="contact_title" class="form-control" value="<?= htmlspecialchars($contactUsRecords[0]->contact_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="contact_content" class="form-label hero-sub-heading">Contact Content:</label>
                        <textarea id="contact_content" name="contact_content" class="form-control" rows="3"><?= htmlspecialchars($contactUsRecords[0]->contact_content) ?></textarea>
                    </div>
                </div>

                <!-- Support Section -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="support_title" class="form-label hero-sub-heading">Support Title:</label>
                        <textarea id="support_title" name="support_title" class="form-control" rows="3"><?= htmlspecialchars($contactUsRecords[0]->support_title) ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="support_content" class="form-label hero-sub-heading">Support Content:</label>
                        <input type="text" id="support_content" name="support_content" class="form-control" value="<?= htmlspecialchars($contactUsRecords[0]->support_content) ?>">
                    </div>
                </div>

                <!-- Message Section -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="message_title" class="form-label hero-sub-heading">Message Title:</label>
                        <input type="text" id="message_title" name="message_title" class="form-control" value="<?= htmlspecialchars($contactUsRecords[0]->message_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="message_content" class="form-label hero-sub-heading">Message Content:</label>
                        <textarea id="message_content" name="message_content" class="form-control" rows="3"><?= htmlspecialchars($contactUsRecords[0]->message_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="message_sub_title" class="form-label hero-sub-heading">Message Subtitle:</label>
                        <input type="text" id="message_sub_title" name="message_sub_title" class="form-control" value="<?= htmlspecialchars($contactUsRecords[0]->message_sub_title) ?>">
                    </div>
                </div>

                <!-- Inquiry Section -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Inquary_Title" class="form-label hero-sub-heading">Inquiry Title:</label>
                        <input type="text" id="Inquary_Title" name="Inquary_Title" class="form-control" value="<?= htmlspecialchars($contactUsRecords[0]->Inquary_Title) ?>">
                    </div>
                </div>
            </div>

            <div class="row py-4" style="display: flex;">
                <div class="col-md-11 text-end">
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url('contactUs') ?>" class="btn btn-outline-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>
</div>
</body>
