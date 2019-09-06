<?php
/**
* Страница с кастомным шаблоном (page-s.php)
* @package WordPress
* @subpackage your-clean-template-3
* Template Name: Страница озывов
*/
get_header(); // подключаем header.php ?>

<!-- BREADCRUMBS AREA START -->
<div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="breadcrumbs">
<h2 class="breadcrumbs-title">Озывы</h2>
</div>
</div>
</div>
</div>
</div>
<!-- BREADCRUMBS AREA END -->

<section id="page-content" class="page-wrapper">

<!-- CONTACT AREA START -->
<div class="contact-area pt-115 pb-115">
<div class="container">
<div class="row">


<div class="col-md-8 col-sm-12">
<div class="section-title mb-30">
<h2 class="h1">Отзывы наших клиентов</h2>
</div>
<?php if( have_rows('otzvs') ): ?>
<?php while ( have_rows('otzvs') ) : the_row(); ?>

<div class="testimonial-item">
<div class="testimonial-brief">
<p><?php the_sub_field('otzvsa');?></p>
</div>
<h6><strong><?php the_sub_field('autors');?></strong></h6>
</div>
<hr />

<?php endwhile; ?>
<?php endif; ?>


</div>


<div class="col-sm-4 col-xs-12">
<div class="contact-messge contact-bg">
<!-- blog-details-reply -->
<div class="leave-review">
<h5>Напишите нам</h5>
<?php echo do_shortcode('[contact-form-7 id="71" title="Форма отзыв"]'); ?>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- CONTACT AREA END -->

<!-- GOOGLE MAP AREA START -->
<!-- <div class="google-map-area">
Карта
</div> -->
<!-- GOOGLE MAP AREA END -->


</section>
<!-- End page content -->

<?php get_footer(); // подключаем footer.php ?>
