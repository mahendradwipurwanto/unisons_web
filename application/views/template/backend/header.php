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

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/components/bs-filestyle.css" type="text/css" />
	<!-- Plugins css -->
	<link href="<?= base_url(); ?>assets/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@5.0.0/minified/introjs.min.css">

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/intro-js-modern.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css?<?= time(); ?>" type="text/css" />

	<!-- Tagsinput -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" integrity="sha512-uKwYJOyykD83YchxJbUxxbn8UcKAQBu+1hcLDRKZ9VtWfpMb1iYfJ74/UIjXQXWASwSzulZEC1SFGj+cslZh7Q==" crossorigin="anonymous" />


	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/components/bs-switches.css" type="text/css" />

	<!-- Radio Checkbox Plugin -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/components/radio-checkbox.css" type="text/css" />

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/components/bs-datatable.css" type="text/css" />
	<!-- JavaScripts
	============================================= -->
	<script src="<?= base_url(); ?>assets/js/jquery.js"></script>
	<script src="https://kit.fontawesome.com/8bf0a8f6ea.js" crossorigin="anonymous"></script>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>

	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/tinymce/jquery.tinymce.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/tinymce-textarea.js"></script>
	<!-- Plugins js -->
	<script src="<?= base_url(); ?>assets/dropzone/min/dropzone.min.js"></script>

	<!-- Tagsinput -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js" integrity="sha512-wTIaZJCW/mkalkyQnuSiBodnM5SRT8tXJ3LkIUA/3vBJ01vWe5Ene7Fynicupjt4xqxZKXA97VgNBHvIf5WTvg==" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="stretched side-header">
	<!-- alert -->
	<?php $this->load->view('template/alert'); ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix p-5">