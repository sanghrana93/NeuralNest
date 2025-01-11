<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artificial Intelligence</title>
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
        <h1 class="mb-4 hero-headding"> Edit Artificial Intelligence</h1>
        <form action="<?= base_url('updateArtificialIntelligence/' . $artificialIntelligenceRecords[0]->id )?>" method="POST">
            
            <div style="overflow-x: hidden; overflow-y: auto; max-height: 460px;">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="banner_title" class="form-label hero-sub-headding">Banner Title:</label>
                        <input type="text" id="banner_title" name="banner_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->banner_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="banner_content" class="form-label hero-sub-headding">Banner Content:</label>
                        <textarea id="banner_content" name="banner_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->banner_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card1_title" class="form-label hero-sub-headding">Card1 Title:</label>
                        <input type="text" id="card1_title" name="card1_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->card1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card1_content" class="form-label hero-sub-headding">Card1 Content:</label>
                        <textarea id="card1_content" name="card1_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->card1_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card2_title" class="form-label hero-sub-headding">Card2 Title:</label>
                        <input type="text" id="card2_title" name="card2_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->card2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card2_content" class="form-label hero-sub-headding">Card2 Content:</label>
                        <textarea id="card2_content" name="card2_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->card2_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card3_title" class="form-label hero-sub-headding">Card3 Title:</label>
                        <input type="text" id="card3_title" name="card3_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->card3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card3_content" class="form-label hero-sub-headding">Card3 Content:</label>
                        <textarea id="card3_content" name="card3_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->card3_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="Service_title" class="form-label hero-sub-headding">Service Title:</label>
                        <input type="text" id="Service_title" name="Service_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->Services_title) ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="Service_card_title_1" class="form-label hero-sub-headding">Service Card Title 1:</label>
                        <input type="text" id="Service_card_title_1" name="Service_card_title_1" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->Service_card_title_1) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Service_card_content_1" class="form-label hero-sub-headding">Service Card Content 1:</label>
                        <textarea id="Service_card_content_1" name="Service_card_content_1" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->Service_card_content_1) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="Service_card_title_2" class="form-label hero-sub-headding">Service Card Title 2:</label>
                        <input type="text" id="Service_card_title_2" name="Service_card_title_2" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->Service_card_title_2) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Service_card_content_2" class="form-label hero-sub-headding">Service Card Content 2:</label>
                        <textarea id="Service_card_content_2" name="Service_card_content_2" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->Service_card_content_2) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="S1_title" class="form-label hero-sub-headding">S1 Title:</label>
                        <input type="text" id="S1_title" name="S1_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->S1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="S1_content" class="form-label hero-sub-headding">S1 Content:</label>
                        <textarea id="S1_content" name="S1_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->S1_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="S2_title" class="form-label hero-sub-headding">S2 Title:</label>
                        <input type="text" id="S2_title" name="S2_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->S2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="S2_content" class="form-label hero-sub-headding">S2 Content:</label>
                        <textarea id="S2_content" name="S2_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->S2_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="S3_title" class="form-label hero-sub-headding">S3 Title:</label>
                        <input type="text" id="S3_title" name="S3_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->S3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="S3_content" class="form-label hero-sub-headding">S3 Content:</label>
                        <textarea id="S3_content" name="S3_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->S3_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="workpress_title" class="form-label hero-sub-headding">Workpress Title:</label>
                        <input type="text" id="workpress_title" name="workpress_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->workpress_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="workpress_content" class="form-label hero-sub-headding">Workpress Content:</label>
                        <textarea id="workpress_content" name="workpress_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->workpress_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="solution_title" class="form-label hero-sub-headding">Solution Title:</label>
                        <input type="text" id="solution_title" name="solution_title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->solution_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="solution_content" class="form-label hero-sub-headding">Solution Content:</label>
                        <textarea id="solution_content" name="solution_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->solution_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="Inquary_Title" class="form-label hero-sub-headding">Inquary Title:</label>
                        <input type="text" id="Inquary_Title" name="Inquary_Title" class="form-control" value="<?= htmlspecialchars($artificialIntelligenceRecords[0]->Inquary_Title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Inquary_content" class="form-label hero-sub-headding">Inquary Content:</label>
                        <textarea id="Inquary_content" name="Inquary_content" class="form-control" rows="3"><?= htmlspecialchars($artificialIntelligenceRecords[0]->Inquary_content) ?></textarea>
                    </div>
                </div>
            </div>


            <div class="row" style="display: flex;">
                <div class="col-md-11 text-end py-4">
                    <button type="submit" class="btn btn btn-outline-success">Update</button>
                </div>
                <div class="col-md-1 text-start py-4">
                    <a href="<?php echo base_url(); ?>artificialIntelligence" class="btn btn-outline-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
