<!doctype html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8">
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
	<div class="icos ico-phone"></div>
</div>
<div class="header-info">
<h6>+84 32 704 79 30</h6>
<p>Режим работы с 9 - до 23</p>
</div>
</div>
<div class="company-info-item">
<div class="header-icon">
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
<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
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
