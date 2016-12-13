<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lte IE 8]><script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie9.css"><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie8.css"><![endif]-->
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="ygd8Sy_jiB91XtdQXt-XjYH1ogg2aRSwvZcjxzqvXOs">
</head>
<body>
<div id="wrapper">
<!-- Header -->
    <header id="header">
        <div class="inner">
            <!-- Logo -->
            <a href="/" class="logo">
                <img class="title" src="<?php echo get_stylesheet_directory_uri(); ?>/images/domus-logo.svg" alt="">
            </a>
            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>
        </div>
    </header>

<!-- Menu -->
    <nav id="menu">
        <h2>Menu</h2>
        <?php wp_nav_menu( array('container' => '') ); ?>
    </nav>