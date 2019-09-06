<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
<!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
<title><?php // Генерируем тайтл в зависимости от контента с разделителем " | "
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'shpud-theme' ), max( $paged, $page ) );
?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="https://myviethome.com/wp-content/themes/Shpud-Theme/images/logo2.png">

<!-- All css files are included here. -->
<!-- Bootstrap fremwork main css -->
<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/bootstrap.min.css"> -->
<!-- nivo slider CSS -->
<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/nivo-slider.css"/> -->
<!-- This core.css file contents all plugings css file. -->
<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/core.css"> -->
<!-- Theme shortcodes/elements style -->
<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/shortcodes.css"> -->

<!-- Responsive css -->
<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/responsive.css"> -->
<!-- User style -->
<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/custom.css"> -->

<!-- Style customizer (Remove these two lines please) -->
<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/style-customizer.css"> -->

<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/css/styles.css"> -->

<!-- <link rel="stylesheet"  href="https://myviethome.com/wp-content/themes/Shpud-Theme/lightbox2/src/css/lightbox.css"> -->

<!-- Theme main style -->
<!-- <link rel="stylesheet"  href="<?php //echo get_stylesheet_uri() ?>" /> -->

<!-- Modernizr JS -->
<!-- <script src="https://myviethome.com/wp-content/themes/Shpud-Theme/js/modernizr-2.8.3.min.js"></script> -->

<?php wp_head(); // необходимо для работы плагинов и функционала ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142446321-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142446321-1');
</script>


</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Facebook Like buttons widget -->
<!-- <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.3&appId=197640133933909&autoLogAppEvents=1"></script> -->

<!-- Body main wrapper start -->
<div class="wrapper">

<!-- HEADER AREA START -->
<header class="header-area header-wrapper">
<div class="header-top-bar bg-white">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="logo">
<a href="/">
<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/logo.png" alt="myviethome.com">
</a>
</div>
</div>
<div class="col-md-6 hidden-sm hidden-xs">
<div class="company-info clearfix">
<div class="company-info-item">
<div class="header-icon">
	<!-- <img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/phone.png" alt="myviethome.com"> -->
	<div class="icos ico-phone"></div>
</div>
<div class="header-info">
<h6>+84 32 704 79 30</h6>
<p>Режим работы с 9 - до 23</p>
</div>
</div>
<div class="company-info-item">
<div class="header-icon">
	<!-- <img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/mail-open.png" alt="myviethome.com"> -->
	<div class="icos ico-mail"></div>
</div>
<div class="header-info">
<h6><a href="mailto:mvhestate@gmail.com">mvhestate@gmail.com</a></h6>
<p>Вы можете отправить нам письмо</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="header-search clearfix">
<form method="get">
<!-- <button class="search-icon" type="submit"> -->
	<!-- <img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/search.png" alt="myviethome.com"> -->
	<!-- <div class="icos ico-search"></div> -->
<!-- </button> -->
<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
<?php // get_search_form(); ?>
</form>
</div>
</div>
</div>
</div>
</div>
<div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
<div class="container">
<div class="full-width-mega-drop-menu">
<div class="row">
<div class="col-md-12">

<div class="sticky-logo">
	<a href="/">
		<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/logo.png" alt="myviethome.com">
	</a>
</div>

	<nav id="primary-menu">


<?php

		wp_nav_menu( array(
			'theme_location'  => '',
			'menu'            => 'main-menu', 
			'container'       => '', 
			'container_class' => '', 
			'container_id'    => '',
			'menu_class'      => 'main-menu text-center', 
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		) );

?>	

	</nav>

</div>
</div>
</div>
</div>
</div>
</header>
<!-- HEADER AREA END -->

<!-- MOBILE MENU AREA START -->
<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
<div class="container">
<div class="row">
<div class="col-xs-12">

<div class="mobile-menu">

	<nav id="dropdown">

<?php

		wp_nav_menu( array(
			'theme_location'  => '',
			'menu'            => 'main-menu', 
			'container'       => '', 
			'container_class' => '', 
			'container_id'    => '',
			'menu_class'      => '', 
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		) );

?>	

	</nav>

</div>

</div>
</div>
</div>
</div>
<!-- MOBILE MENU AREA END -->





