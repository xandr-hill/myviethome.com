<!-- Start page content -->
<section id="page-content" class="page-wrapper">

<div class="find-home-area bg-blue call-to-bg plr-140 pt-60 pb-20">
<div class="container-fluid">
<div class="row">
<div class="col-md-3 col-xs-12">
<div class="section-title text-white">
<h3>ВОСПОЛЬЗУЙТЕСЬ</h3>
<h2 class="h1">ФИЛЬТРОМ</h2>
</div>
</div>
<div class="col-md-9 col-xs-12">
<div class="find-homes">
<div class="row">
<div class="col-sm-4 col-xs-12">
<div class="find-home-item custom-select">
<?php echo do_shortcode('[facetwp facet="Vid"]'); ?>
</div>
</div>
<div class="col-sm-4 col-xs-12">                 
<?php echo do_shortcode('[facetwp facet="Rayon"]'); ?>
</div>
<div class="col-sm-4 col-xs-12">
<?php echo do_shortcode('[facetwp facet="Type"]'); ?>
</div>
<div class="col-sm-4 col-xs-12">
<?php echo do_shortcode('[facetwp facet="Count_comnat"]'); ?>
</div>
<div class="col-sm-4 col-xs-12">
<?php echo do_shortcode('[facetwp facet="sroc"]'); ?> 
</div>
<div class="col-sm-4 col-xs-12">
<?php echo do_shortcode('[facetwp facet="price"]'); ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- FEATURED FLAT AREA START -->
<div class="featured-flat-area pt-115 pb-60">
<div class="container">
<div class="row">
<div class="col-md-8">

<div class="featured-flat">
<div class="row">                  
<?php while ( have_posts() ) : the_post(); ?>
<div>
<?php
$id=get_the_ID();//Получаем уд записи
$thumb_id = get_post_thumbnail_id($id);//Получаем ID миниатюры
$thumb_url = wp_get_attachment_image_src($thumb_id, array(265,265));//Получаем адресс миниатюры
$urli=get_permalink($id);//Ссылка на запись
$price = get_field( "price" );
$aport = get_field( "count_komnat" );
$post_ID = $id;
$cat = get_the_category($post_ID);
$cat_ID = $cat[0]->cat_ID ;
if($cat_ID==12){}else{				// !!!!!!!!!!!!!!!!!!!!! X !!!!!!!!!!!!!! X !!!!!!!!!!!!!!!! X !!!!!!!!!
?>
<div class="col-sm-6 col-xs-12">
<div class="flat-item">
<div class="flat-item-image">
<a href="<?php the_permalink(); ?>"><img data-src="<?php echo $thumb_url[0]; ?>" src="https://dummyimage.com/265x265/000/fff" alt=""></a>
<div class="flat-link">
<a href="<?php the_permalink(); ?>">Подробнее</a>
</div>
<ul class="flat-desc">
<li>
<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/wallet.png" alt="">
<span><?php echo $price; ?> $</span>
</li>
<li>
<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/5.png" alt="">
<span><?php echo $aport; ?></span>
</li>
</ul>
</div>
<div class="flat-item-info">
<div class="flat-title-price">
<h5><a href="properties-details.html"><?php the_title(); ?></a></h5>
</div>
</div>
</div>
</div>
<?php } ?>
</div>

<?php endwhile; ?>

<?php echo do_shortcode('[facetwp pager="true"]'); ?>
</div>                          
</div>
</div>

<?php get_sidebar(); // подключаем sidebar.php ?>
</div>
</div>
</div>
<!-- FEATURED FLAT AREA END -->


</section>