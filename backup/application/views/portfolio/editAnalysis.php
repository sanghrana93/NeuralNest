<?php $this->load->view('layouts/link.php'); ?>

<body>
    <div class="container mt-4">
        <h3 class="mb-4 text-center">User Analysis</h3>
        
        <form role="form" action="" method="post" id="editAnalysis" role="form">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="b_title" class="form-label">Banner Title</label>   
                    <input type="text" name="b_title" id="b_title" class="form-control" value="<?php echo $user_analysis['b_title']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="b_content" class="form-label">Banner Content</label>
                    <textarea name="b_content" id="b_content" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="serv_title" class="form-label">Services Title</label>
                    <input type="text" name="serv_title" id="serv_title" class="form-control" value="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="serv_content" class="form-label">Services Content</label>
                    <textarea name="serv_content" id="serv_content" class="form-control"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                <a href="<?= base_url('/1') ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
