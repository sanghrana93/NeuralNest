<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Science</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ::-webkit-scrollbar-track
        {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
        }
        
        ::-webkit-scrollbar
        {
        width: 6px;
        background-color: #F5F5F5;
        }
        
        ::-webkit-scrollbar-thumb
        {
        background-color: #b5b5b5;
        }

        body{
            font-family: 'gorditamedium';
            font-size: 18px;
        }

        .hero-headding{
            font-size: 40px;
            font-weight: 700;
            color: #010d4c;
        }
        .hero-sub-headding{
            font-size: 20px;
            font-weight: 700;
            color: #010d4c;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 hero-headding"> Edit Data Science</h1>
        <form action="<?= base_url('updateDataScience/' . $dataScienceRecords[0]->id )?>" method="POST">
            
            <div style="overflow-x: hidden; overflow-y: auto; max-height: 460px;">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="banner_title" class="form-label hero-sub-headding">Banner Title:</label>
                        <input type="text" id="banner_title" name="banner_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->banner_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="banner_content" class="form-label hero-sub-headding">Banner Content:</label>
                        <textarea id="banner_content" name="banner_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->banner_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="services_title" class="form-label hero-sub-headding">Services Title:</label>
                        <input type="text" id="services_title" name="services_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->services_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="services_content" class="form-label hero-sub-headding">Services Content:</label>
                        <textarea id="services_content" name="services_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->services_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s1_title" class="form-label hero-sub-headding">S1 Title:</label>
                        <input type="text" id="s1_title" name="s1_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->s1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s1_content" class="form-label hero-sub-headding">S1 Content:</label>
                        <textarea id="s1_content" name="s1_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->s1_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s2_title" class="form-label hero-sub-headding">S2 Title :</label>
                        <input type="text" id="s2_title" name="s2_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->s2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s2_content" class="form-label hero-sub-headding">S2 Content:</label>
                        <textarea id="s2_content" name="s2_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->s2_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s3_title" class="form-label hero-sub-headding">S3 Title:</label>
                        <input type="text" id="s3_title" name="s3_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->s3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s3_content" class="form-label hero-sub-headding">S3 Content:</label>
                        <input type="text" id="s3_content" name="s3_content" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->s3_content) ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s4_title" class="form-label hero-sub-headding">S4 Title:</label>
                        <input type="text" id="s4_title" name="s4_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->s4_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s4_content" class="form-label hero-sub-headding">S4 Content:</label>
                        <textarea id="s4_content" name="s4_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->s4_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="conent_title" class="form-label hero-sub-headding">Content Title:</label>
                        <input type="text" id="conent_title" name="conent_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->conent_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="content_content" class="form-label hero-sub-headding">Content Content:</label>
                        <textarea id="content_content" name="content_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->content_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card1_title" class="form-label hero-sub-headding">Card1 Title:</label>
                        <input type="text" id="card1_title" name="card1_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->card1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card1_content" class="form-label hero-sub-headding">Card1 Content:</label>
                        <textarea id="card1_content" name="card1_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->card1_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card2_title" class="form-label hero-sub-headding">Card2 Title:</label>
                        <input type="text" id="card2_title" name="card2_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->card2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card2_content" class="form-label hero-sub-headding">Card2 Content:</label>
                        <textarea id="card2_content" name="card2_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->card2_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card3_title" class="form-label hero-sub-headding">Card3 Title:</label>
                        <input type="text" id="card3_title" name="card3_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->card3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card3_content" class="form-label hero-sub-headding">Card3 Content:</label>
                        <textarea id="card3_content" name="card3_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->card3_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="workprocess_title" class="form-label hero-sub-headding">Workprocess Title:</label>
                        <input type="text" id="workprocess_title" name="workprocess_title" class="form-control" value="<?= htmlspecialchars($dataScienceRecords[0]->workprocess_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="workprocess_content" class="form-label hero-sub-headding">Workprocess Content:</label>
                        <textarea id="workprocess_content" name="workprocess_content" class="form-control" rows="3"><?= htmlspecialchars($dataScienceRecords[0]->workprocess_content) ?></textarea>
                    </div>
                </div>
            </div>


            <div class="row" style="display: flex;">
                <div class="col-md-11 text-end py-4">
                    <button type="submit" class="btn btn btn-outline-success">Update</button>
                </div>
                <div class="col-md-1 text-start py-4">
                    <a href="<?php echo base_url(); ?>dataScience" class="btn btn-outline-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
