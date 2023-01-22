<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Document</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">
<!-- Bootstrap CSS-->
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/js/jquery.dataTables.min.css') ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Font Awesome CSS-->
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
<!-- Fontastic Custom icon font-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/fontastic.css') ?>">
<!-- Google fonts - Roboto -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<!-- jQuery Circle-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>">
<!-- Custom Scrollbar-->
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>">
<!-- theme stylesheet-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css" id="theme-stylesheet') ?>">
<!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
<!-- Favicon-->
<link rel="<?php echo base_url('assets/shortcut icon" href="img/favicon.ico') ?>">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?php ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
<!-- iCheck -->
<link rel="stylesheet" href="<?php ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<!-- JQVMap -->
<link rel="stylesheet" href="<?php ('plugins/jqvmap/jqvmap.min.css') ?> ">
<!-- Theme style -->
<link rel="stylesheet" href="<?php ('dist/css/adminlte.min.css') ?>">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?php ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php ('plugins/daterangepicker/daterangepicker.css') ?>">
<!-- summernote -->
<link rel="stylesheet" href="<?php ('plugins/summernote/summernote-bs4.min.css') ?> ">
<style>
    .footer {
        position: relative;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: dimgray;
        color: white;
        text-align: center;
    }

    .left {
        text-align: left;
    }

    .right {
        text-align: right;
    }

    .center {
        text-align: center;
    }

    .justify {
        text-align: justify;
    }

    .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a,
    .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover,
    .dropdown-btn:hover {
        color: #f1f1f1;
    }

    /* Main content */
    .main {
        margin-left: 200px;
        /* Same as the width of the sidenav */
        font-size: 20px;
        /* Increased text to enable scrolling */
        padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    .active {
        background-color: green;
        color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
        display: none;
        background-color: #262626;
        padding-left: 8px;
    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
        float: right;
        padding-right: 8px;
    }
</style>