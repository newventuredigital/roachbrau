<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php wp_title(''); ?>
	</title>
	<!-- STYLESHEETS -->
	<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/foundation.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wp-helpers.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">-->

    <!-- MODERNIZER -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.min.js"></script>

	<!-- GOOGLE WEB FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic,600italic|Germania+One' rel='stylesheet' type='text/css'>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
	<header>
		<div class="row">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/roachbrau-logo.svg" alt="Roachbrau Logo" width="300" height="150"></a>
			</div>
		</div>

	</header>

<div class="nav-wrapper">
	<div class="row">
		<nav class="primary-navigation hide-for-small">
			<?php wp_nav_menu(array('menu' => 'Primary', 'depth' => 1 )); ?>
			</nav>
	</div>
</div>

    <a class="left-off-canvas-toggle show-for-small-only" href="#" ><i class="fa fa-bars"></i> Menu</a>
    <!-- Off Canvas Menu -->
    <aside class="left-off-canvas-menu">
        <nav>
		<?php wp_nav_menu(array('menu' => 'Primary' )); ?>
		</nav>
    </aside>

  <!-- close the off-canvas menu -->
  <a class="exit-off-canvas"></a>

