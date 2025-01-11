<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Science</title>
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

        .hero-headding {
            font-size: 40px;
            font-weight: 700;
            color: #010d4c;
        }

        .hero-sub-headding {
            font-size: 20px;
            font-weight: 700;
            color: #010d4c;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 hero-headding"> Edit Data Science</h1>
        <form action="<?= base_url('updateDataScience/' . $machineLearningRecords[0]->id )?>" method="POST">
            
            <div style="overflow-x: hidden; overflow-y: auto; max-height: 460px;">
                <!-- Banner Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="banner_title" class="form-label hero-sub-headding">Banner Title:</label>
                        <input type="text" id="banner_title" name="banner_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->banner_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="banner_content" class="form-label hero-sub-headding">Banner Content:</label>
                        <textarea id="banner_content" name="banner_content" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->banner_content) ?></textarea>
                    </div>
                </div>

                <!-- Services Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="services_title" class="form-label hero-sub-headding">Services Title:</label>
                        <input type="text" id="services_title" name="services_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->services_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="services_content" class="form-label hero-sub-headding">Services Content:</label>
                        <textarea id="services_content" name="services_content" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->services_content) ?></textarea>
                    </div>
                </div>

                <!-- S1 Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s1_title" class="form-label hero-sub-headding">S1 Title:</label>
                        <input type="text" id="s1_title" name="s1_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->s1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s1_content" class="form-label hero-sub-headding">S1 Content:</label>
                        <textarea id="s1_content" name="s1_content" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->s1_content) ?></textarea>
                    </div>
                </div>

                <!-- S2 Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s2_title" class="form-label hero-sub-headding">S2 Title:</label>
                        <input type="text" id="s2_title" name="s2_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->s2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s2_content" class="form-label hero-sub-headding">S2 Content:</label>
                        <textarea id="s2_content" name="s2_content" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->s2_content) ?></textarea>
                    </div>
                </div>

                <!-- S3 Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s3_title" class="form-label hero-sub-headding">S3 Title:</label>
                        <input type="text" id="s3_title" name="s3_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->s3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s3_content" class="form-label hero-sub-headding">S3 Content:</label>
                        <input type="text" id="s3_content" name="s3_content" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->s3_content) ?>">
                    </div>
                </div>

                <!-- S4 Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s4_title" class="form-label hero-sub-headding">S4 Title:</label>
                        <input type="text" id="s4_title" name="s4_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->s4_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s4_content" class="form-label hero-sub-headding">S4 Content:</label>
                        <textarea id="s4_content" name="s4_content" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->s4_content) ?></textarea>
                    </div>
                </div>

                <!-- Solution Title and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="solution_title" class="form-label hero-sub-headding">Solution Title:</label>
                        <input type="text" id="solution_title" name="solution_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->solution_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="solution_content" class="form-label hero-sub-headding">Solution Content:</label>
                        <textarea id="solution_content" name="solution_content" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->solution_content) ?></textarea>
                    </div>
                </div>

                <!-- Approach Card Titles -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="approach_card_title_1" class="form-label hero-sub-headding">Approach Card Title 1:</label>
                        <input type="text" id="approach_card_title_1" name="approach_card_title_1" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->approach_card_title_1) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="approach_card_title_2" class="form-label hero-sub-headding">Approach Card Title 2:</label>
                        <input type="text" id="approach_card_title_2" name="approach_card_title_2" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->approach_card_title_2) ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="approach_card_title_3" class="form-label hero-sub-headding">Approach Card Title 3:</label>
                        <input type="text" id="approach_card_title_3" name="approach_card_title_3" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->approach_card_title_3) ?>">
                    </div>
                </div>

                <!-- Work Skills -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="workingskills_title" class="form-label hero-sub-headding">Work Skills Title:</label>
                        <input type="text" id="workingskills_title" name="workingskills_title" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->workingskills_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="workingskills_content" class="form-label hero-sub-headding">Work Skills Content:</label>
                        <textarea id="workingskills_content" name="workingskills_content" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->workingskills_content) ?></textarea>
                    </div>
                </div>

                <!-- Progress Titles and Content -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="progress_title_1" class="form-label hero-sub-headding">Progress Title 1:</label>
                        <input type="text" id="progress_title_1" name="progress_title_1" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->progress_title_1) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="progress_content_1" class="form-label hero-sub-headding">Progress Content 1:</label>
                        <textarea id="progress_content_1" name="progress_content_1" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->progress_content_1) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="progress_title_2" class="form-label hero-sub-headding">Progress Title 2:</label>
                        <input type="text" id="progress_title_2" name="progress_title_2" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->progress_title_2) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="progress_content_2" class="form-label hero-sub-headding">Progress Content 2:</label>
                        <textarea id="progress_content_2" name="progress_content_2" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->progress_content_2) ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="progress_title_3" class="form-label hero-sub-headding">Progress Title 3:</label>
                        <input type="text" id="progress_title_3" name="progress_title_3" class="form-control" value="<?= htmlspecialchars($machineLearningRecords[0]->progress_title_3) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="progress_content_3" class="form-label hero-sub-headding">Progress Content 3:</label>
                        <textarea id="progress_content_3" name="progress_content_3" class="form-control" rows="3"><?= htmlspecialchars($machineLearningRecords[0]->progress_content_3) ?></textarea>
                    </div>
                </div>

            </div>

            <div class="row" style="display: flex;">
                <div class="col-md-11 text-end py-4">
                    <button type="submit" class="btn btn btn-outline-success">Update</button>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url('DataScience') ?>" class="btn btn-outline-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
