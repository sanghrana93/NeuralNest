<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit ML & AI Integration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }
        
        ::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        }
        
        ::-webkit-scrollbar-thumb {
            background-color: #b5b5b5;
        }

        body {
            font-family: 'gorditamedium';
            font-size: 18px;
        }

        .hero-heading {
            font-size: 40px;
            font-weight: 700;
            color: #010d4c;
        }

        .hero-sub-heading {
            font-size: 20px;
            font-weight: 700;
            color: #010d4c;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5">
        <h1 class="mb-4 hero-heading">Edit Business Intelligence and Analytics</h1>
        
        <form action="<?= base_url('updateCloudComputing/' . $cloudComputingRecords[0]->id) ?>" method="POST">
            
            <div style="overflow-x: hidden; overflow-y: auto; max-height: 460px;">
                <!-- Banner Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="banner_title" class="form-label hero-sub-heading">Banner Title:</label>
                        <input type="text" id="banner_title" name="banner_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->banner_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="banner_content" class="form-label hero-sub-heading">Banner Content:</label>
                        <textarea id="banner_content" name="banner_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->banner_content) ?></textarea>
                    </div>
                </div>

                <!-- Banner Subtitle and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="b_sub_title" class="form-label hero-sub-heading">Banner Subtitle:</label>
                        <input type="text" id="b_sub_title" name="b_sub_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->b_sub_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="b_sub_content" class="form-label hero-sub-heading">Banner Sub Content:</label>
                        <textarea id="b_sub_content" name="b_sub_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->b_sub_content) ?></textarea>
                    </div>
                </div>

                <!-- Cards -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card1_title" class="form-label hero-sub-heading">Card 1 Title:</label>
                        <input type="text" id="card1_title" name="card1_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->card1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card1_content" class="form-label hero-sub-heading">Card 1 Content:</label>
                        <textarea id="card1_content" name="card1_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->card1_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card2_title" class="form-label hero-sub-heading">Card 2 Title:</label>
                        <input type="text" id="card2_title" name="card2_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->card2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card2_content" class="form-label hero-sub-heading">Card 2 Content:</label>
                        <textarea id="card2_content" name="card2_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->card2_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="card3_title" class="form-label hero-sub-heading">Card 3 Title:</label>
                        <input type="text" id="card3_title" name="card3_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->card3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="card3_content" class="form-label hero-sub-heading">Card 3 Content:</label>
                        <textarea id="card3_content" name="card3_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->card3_content) ?></textarea>
                    </div>
                </div>

                <!-- Services Heading -->

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s1_title" class="form-label hero-sub-heading">S1 Title:</label>
                        <input type="text" id="s1_title" name="s1_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->s1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s1_content" class="form-label hero-sub-heading">S1 Content:</label>
                        <textarea id="s1_content" name="s1_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->s1_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s2_title" class="form-label hero-sub-heading">S2 Title:</label>
                        <input type="text" id="s2_title" name="s2_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->s2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s2_content" class="form-label hero-sub-heading">S2 Content:</label>
                        <textarea id="s2_content" name="s2_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->s2_content) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s3_title" class="form-label hero-sub-heading">S3 Title:</label>
                        <input type="text" id="s3_title" name="s3_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->s3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s3_content" class="form-label hero-sub-heading">S3 Content:</label>
                        <textarea id="s3_content" name="s3_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->s3_content) ?></textarea>
                    </div>
                </div>

                <!-- Sub Heading -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="sub_heading_title" class="form-label hero-sub-heading">Sub Heading Title:</label>
                        <input type="text" id="sub_heading_title" name="sub_heading_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->sub_heading_title) ?>">
                    </div>
                </div>

                <!-- Work Process -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="workprocess_title" class="form-label hero-sub-heading">Work Process Title:</label>
                        <input type="text" id="workprocess_title" name="workprocess_title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->workprocess_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="workprocess_content" class="form-label hero-sub-heading">Work Process Content:</label>
                        <textarea id="workprocess_content" name="workprocess_content" class="form-control" rows="3"><?= htmlspecialchars($cloudComputingRecords[0]->workprocess_content) ?></textarea>
                    </div>
                </div>

                <!-- Inquiry Title -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Inquary_Title" class="form-label hero-sub-heading">Inquiry Title:</label>
                        <input type="text" id="Inquary_Title" name="Inquary_Title" class="form-control" value="<?= htmlspecialchars($cloudComputingRecords[0]->Inquary_Title) ?>">
                    </div>
                </div>

            </div>

            <div class="row py-4" style="display: flex;">
                <div class="col-md-11 text-end">
                    <button type="submit" class="btn btn-outline-success">Update</button>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url('cloudComputing') ?>" class="btn btn-outline-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
