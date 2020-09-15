<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="<?php echo get_template_directory_uri(); ?>/image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="<?php echo get_template_directory_uri(); ?>/image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
	<?php wp_head(); ?>
	<style>
	.singersurl iframe{
		height: 315px !important;
	}
	</style>

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="row">

            <div class="s-header__logo">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Homepage">
                </a>
            </div>

            <nav class="s-header__nav">
                <ul>
                    <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
                    <li><a class="smoothscroll" href="#services">Services</a></li>
                    <li><a class="smoothscroll" href="#portfolio">Portfolio</a></li>
                    <li><a class="smoothscroll" href="#songs">Songs</a></li>
                    <li><a class="smoothscroll" href="#about">About Us</a></li>
                    <li><a class="smoothscroll" href="#contact">Contact</a></li>
                </ul>
            </nav>

            <a class="s-header__menu-toggle" href="#0" title="Menu">
                <span class="s-header__menu-icon"></span>
            </a>

        </div> <!-- end row -->
    </header> <!-- end s-header -->