<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <!-- Document Title
	============================================= -->
    <title><?= !$this->uri->segment(1) ? '' : ucwords(str_replace('-', ' ', $this->uri->segment(1))) . ' |'; ?> <?= $web_title; ?></title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="<?= $web_title; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="<?= !$this->uri->segment(1) ? '' : ucwords(str_replace('-', ' ', $this->uri->segment(1))) . ' |'; ?> <?= $web_title; ?>">
    <meta property="og:description" content="<?= !$this->uri->segment(1) ? '' : ucwords(str_replace('-', ' ', $this->uri->segment(1))) . ' |'; ?> <?= $web_description; ?>">
    <meta property="og:url" content="<?= base_url(uri_string()) ?>">
    <meta property="og:image" content="<?= base_url(); ?>berkas/<?= $logo; ?>">

    <link rel="shortcut icon" href="<?= base_url(); ?>berkas/<?= $logo; ?>" type="image/x-icon">

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/image-uploader.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css?<?= time(); ?>" type="text/css" />

    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/image-uploader.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/8bf0a8f6ea.js" crossorigin="anonymous"></script>

</head>

<body class="stretched">
    <!-- alert -->
    <?php $this->load->view('template/alert'); ?>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">