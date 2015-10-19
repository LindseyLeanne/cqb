<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Creative Quarterback</title>

    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>/css/site.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>/css/mobile_styles.css">

	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- 	<link rel="image_src" href="<?=get_stylesheet_directory_uri();?>/img/nextech-splash.jpg" />
	<meta property="og:image" content="<?=get_stylesheet_directory_uri();?>/img/nextech-splash.jpg"  /> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/wow.init.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/cycle2.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/cycle2.carousel.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/imagesloaded.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/equalize-height.js"></script>
		<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri(); ?>/js/jquery.stellar.init.min.js"></script>
	<!--THESE NEED TO BE ENQUED BEFORE LAUNCH-->
	
	<!--[if lt IE 10]>
	<script src="<?=get_stylesheet_directory_uri();?>/js/html5.polyfill.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/selectivizr.polyfill.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	<script src="<?=get_stylesheet_directory_uri();?>/js/rem.min.js"></script>
	<![endif]-->

</head>

<body class="full-height <?=current_page()?>">
	<aside id="number" class="wrapper"></aside>
	<section id="section__nav" class="wrapper js-sliding-nav">
		<nav id="section__nav--nav">
			<?php 
				wp_nav_menu(
				array(
				'menu' => 'main-menu',
				'container' => false,
				'menu_id' => 'section__nav--nav'
				)
				);
			?>
		</nav>
	</section>

	<section id="section__page" class="js-sliding-nav full-height">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logomark" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" alt="Creative Quarterback Logo"><img src="<?php echo get_bloginfo('template_directory');?>/img/creativequarterback-logo.png" id="logo" alt="Creative Quarterback Logo"/></a>
		<header id="section__header"> 
			<section id="section__header--main" class="wrapper">
				<nav id="section__header--main-nav">
				
					<?php 
						wp_nav_menu(
						array(
						'menu' => 'main-menu',
						'container' => false,
						'menu_id' => 'section__main-nav--nav'
						)
						);
					?>
				<span id="section__nav--icon-bars"><i class="fa fa-bars green"></i></span>
				</nav>
			</section>
		</header>