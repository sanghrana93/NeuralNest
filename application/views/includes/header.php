<!DOCTYPE html>
<html>

<head>
    <?php include APPPATH . 'views/layouts/admin.main.php'; ?>
    <!-- Add SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Header file include -->
        <?php $this->load->view('layouts/admin.header.php'); ?>
        <!-- Left side column. contains the logo and sidebar -->       
       <?php $this->load->view('layouts/admin.sidebar.php'); ?>
