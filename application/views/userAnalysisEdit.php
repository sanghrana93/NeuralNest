<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Analysis</title>
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
        <h1 class="mb-4 hero-headding">Edit User Analysis</h1>
        <form action="<?= base_url('updateUserAnalysis/' . $userAnalysisRecords[0]->id )?>" method="POST">
            <div style="overflow-x: hidden; overflow-y: auto; max-height: 460px;">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="b_title" class="form-label hero-sub-headding">Banner Title:</label>
                        <input type="text" id="b_title" name="b_title" class="form-control" value="<?= htmlspecialchars($userAnalysisRecords[0]->b_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="b_content" class="form-label hero-sub-headding">Banner Content:</label>
                        <textarea id="b_content" name="b_content" class="form-control" rows="3"><?= htmlspecialchars($userAnalysisRecords[0]->b_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="Serv_title" class="form-label hero-sub-headding">Service Title:</label>
                        <input type="text" id="Serv_title" name="Serv_title" class="form-control" value="<?= htmlspecialchars($userAnalysisRecords[0]->Serv_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Serv_content" class="form-label hero-sub-headding">Service Content:</label>
                        <textarea id="Serv_content" name="Serv_content" class="form-control" rows="3"><?= htmlspecialchars($userAnalysisRecords[0]->Serv_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s1_title" class="form-label hero-sub-headding">Section 1 Title:</label>
                        <input type="text" id="s1_title" name="s1_title" class="form-control" value="<?= htmlspecialchars($userAnalysisRecords[0]->s1_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s1_content" class="form-label hero-sub-headding">Section 1 Content:</label>
                        <textarea id="s1_content" name="s1_content" class="form-control" rows="3"><?= htmlspecialchars($userAnalysisRecords[0]->s1_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s2_title" class="form-label hero-sub-headding">Section 2 Title:</label>
                        <input type="text" id="s2_title" name="s2_title" class="form-control" value="<?= htmlspecialchars($userAnalysisRecords[0]->s2_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s2_content" class="form-label hero-sub-headding">Section 2 Content:</label>
                        <textarea id="s2_content" name="s2_content" class="form-control" rows="3"><?= htmlspecialchars($userAnalysisRecords[0]->s2_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="s3_title" class="form-label hero-sub-headding">Section 3 Title:</label>
                        <input type="text" id="s3_title" name="s3_title" class="form-control" value="<?= htmlspecialchars($userAnalysisRecords[0]->s3_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="s3_content" class="form-label hero-sub-headding">Section 3 Content:</label>
                        <textarea id="s3_content" name="s3_content" class="form-control" rows="3"><?= htmlspecialchars($userAnalysisRecords[0]->s3_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="target_title" class="form-label hero-sub-headding">Target Title:</label>
                        <input type="text" id="target_title" name="target_title" class="form-control" value="<?= htmlspecialchars($userAnalysisRecords[0]->target_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="target_content" class="form-label hero-sub-headding">Target Content:</label>
                        <textarea id="target_content" name="target_content" class="form-control" rows="3"><?= htmlspecialchars($userAnalysisRecords[0]->target_content) ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="workprocess_title" class="form-label hero-sub-headding">Work Process Title:</label>
                        <input type="text" id="workprocess_title" name="workprocess_title" class="form-control" value="<?= htmlspecialchars($userAnalysisRecords[0]->workprocess_title) ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="workprocess_content" class="form-label hero-sub-headding">Work Process Content:</label>
                        <textarea id="workprocess_content" name="workprocess_content" class="form-control" rows="3"><?= htmlspecialchars($userAnalysisRecords[0]->workprocess_content) ?></textarea>
                    </div>
                </div>
            </div>


            <div class="row" style="display: flex;">
                <div class="col-md-11 text-end py-4">
                    <button type="submit" class="btn btn btn-outline-success">Update</button>
                </div>
                <div class="col-md-1 text-start py-4">
                    <a href="<?php echo base_url(); ?>userAnalysis" class="btn btn-outline-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
