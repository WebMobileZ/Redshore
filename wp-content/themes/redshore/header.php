<!DOCTYPE html>
<!-- saved from url=(0059) index-4.html -->
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style><style>iframe[id*="google_ads_iframe_"] { display: none !important; } </style>

	<!-- Basic Page Needs
	================================================== -->
	
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/font-awesome-4.5.0/css/font-awesome.css">
	<!-- Animation -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/preset3.css" media="screen" rel="stylesheet" type="text/css">
<?php if ( is_front_page() && is_home() ) { ?>
<script type="text/javascript" charset="UTF-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common.js"></script>
	<script type="text/javascript" charset="UTF-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/map.js"></script>
	<script type="text/javascript" charset="UTF-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/util.js"></script>
	<script type="text/javascript" charset="UTF-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/geocoder.js"></script>
	<script type="text/javascript" charset="UTF-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/onion.js"></script>
	<script type="text/javascript" charset="UTF-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/stats.js"></script>
	<script type="text/javascript" charset="UTF-8" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/controls.js"></script>

<?php } ?>

</head>


	<div class="body-inner">
	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header4" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand">
					    <a href=" index.html">
					    	<?php the_custom_logo(); ?>   </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => 'primary-menu' ) ); ?>
			
					
					
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
			<?php wp_head(); ?>
	</header><!--/ Header end -->