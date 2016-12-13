<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php the_excerpt(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animations.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/burger-icon.css" rel="stylesheet">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- this allows transitions between pages 
<div class="m-scene" id="main">
-->

<header role="main">
  <hgroup>
    <h1><a href="/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
  </hgroup>
  <button class="navicon-button x burger">
    <span class="navicon"></span>
  </button>
  <div id="overlay" class="sidebar">
    <?php wp_nav_menu( array('container' => 'nav') ); ?>
    <?php echo do_shortcode('[ULWPQSF id=128]'); ?>
  </div>
  </nav>
</header>
<div class="menu-overlay"></div>

<?php if( !is_home() || !is_front_page() ) : ?>
  <div class="breadcrumbs wrapper" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display')) { bcn_display(); }?>
  </div>
<?php endif; ?>