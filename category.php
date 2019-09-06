<?php get_header(); ?>

<div class="breadcrumbs-area bg-2 bg-opacity-black-70">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="breadcrumbs">
<h1 class="breadcrumbs-title"><?php wp_title(''); // Заголовок категории ?></h1>
</div>
</div>
</div>
</div>
</div>
<!-- BREADCRUMBS AREA END -->

<?php

$category = get_queried_object();

if( $category->term_id==12 or $category->term_id==13 or in_category('vajno-znat') or in_category('zhilie') or in_category('pokupki') or in_category('prikljuchenija') or in_category('eda-i-restorani') ) {
	include_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/Shpud-Theme/blog.php';
};
// } else {
// 	include_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/Shpud-Theme/arenda.php';
// };

?>


<?php get_footer(); // подключаем footer.php ?>