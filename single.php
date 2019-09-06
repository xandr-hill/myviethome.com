<?php
/**
* Шаблон отдельной записи (single.php)
* @package WordPress
* @subpackage your-clean-template-3
*/
get_header(); // подключаем header.php ?>


<!-- BREADCRUMBS AREA START -->
<div class="breadcrumbs-area bg-2 bg-opacity-black-70">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="breadcrumbs">
<h2 class="breadcrumbs-title"><?php the_title(); // заголовок поста ?></h2>
<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
</div>
</div>
</div>
</div>
</div>

<?php
if(get_field( "nedvij" )[0]=='red'){
include_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/Shpud-Theme/arenda_single.php';
}
else{
include_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/Shpud-Theme/blog_single.php';
}
?>

<!-- <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script> -->

<?php get_footer(); // подключаем footer.php ?>
