<?php get_header(); // подключаем header.php ?>





<!-- Start page content -->
<section id="page-content" class="page-wrapper">

<!-- PROPERTIES DETAILS AREA START -->
<div class="properties-details-area pt-60 pb-60">
<div class="container">
<div class="row">
<div class="col-md-8">
<!-- pro-details-image -->
<div class="pro-details-image mb-60">
<div class="pro-details-big-image">
<div class="tab-content">

<?php

// check if the repeater field has rows of data
if( have_rows('photo_obekt') ):

	$i = 1;

 	// loop through the rows of data
    while ( have_rows('photo_obekt') ) : the_row();

?>

<div role="tabpanel" class="tab-pane fade in <?php if($i==1){echo 'active';} ?> " id="pro-<?php echo $i; ?>">

	<a href="<?php the_sub_field('img');?>" data-lightbox="lbx-image" data-title="<?php echo the_title(); ?> - <?php echo $i; ?>">
		<img src="<?php the_sub_field('img'); ?>" alt="Квартира в Нячанге" />
	</a>
</div>

<?php
	
	$i++;

    endwhile;

else :

    // no rows found

    echo 'Фотографии не найдены.';

endif;


?>

</div>
</div>

<div class="pro-details-carousel">

<?php

$z=1;

if( have_rows('photo_obekt') ):

	while ( have_rows('photo_obekt') ) : the_row();

?>

	<div class="pro-details-item">
		<a href="#pro-<?php echo $z; ?>" data-toggle="tab" class="it_prev">
			<img src="<?php the_sub_field('img');?>" alt=""/>
		</a>
	</div>

<?php

$z++;

	endwhile;

endif;

?>

</div>

</div>
<!-- pro-details-short-info -->
<div class="pro-details-short-info mb-60">
	<div class="row">

		<div class="col-sm-6 col-xs-12">
			<div class="pro-details-condition">
			
				<h5>Сведения</h5>
				
				<div class="pro-details-condition-inner bg-gray">
				
				<ul class="condition-list">
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/icons/13.png" alt="">Тип <?php the_field( "type" ); ?>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/icons/5.png" alt="">Комнат <?php the_field( "count_komnat" ); ?>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/icons/4.png" alt="">Площадь <?php the_field( "plosh" ); ?> м2
					</li>
					<li style="font-size: 24px;"><?php the_field( "price" ); ?> $</li>
				</ul>

				</div>

			</div>

		</div>

		<div class="col-sm-6 col-xs-12">

			<div class="pro-details-amenities">

				<h5>Удобства</h5>

				<div class="pro-details-amenities-inner bg-gray">

					<ul class="amenities-list">

			<?php

				foreach(get_field( "xaracter" ) as $xarect) {
					echo '<li>'.$xarect.'</li>';
				}

			?>
				</ul>

				</div>

			</div>

		</div>

	</div>
</div>
<!-- pro-details-description -->
<div class="pro-details-description mb-50">
<?php //if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
<?php the_content(); // контент ?>
<?php //endwhile; // конец цикла ?>
</div>
<!-- pro-details-feedback -->

<!-- agent-review -->
<div class="pro-details-agent-review">
<div class="row">
<!-- single-agent -->
<div class="col-md-5 col-sm-5 col-xs-12">

<div class="pro-details-agent">

	<h3>Контакты агента</h3>

	<div class="single-agent">

		<div class="agent-image">
			<img src="<?php bloginfo('template_directory'); ?>/images/agents/3.jpg" alt="">
		</div>

		<div class="agent-info">
			<div class="agent-name">

				<span>
					<h5>
						Койнова
					</h5>
					<h4>
						Алёна Олеговна
					</h4>
		        </span>

				<p>Специалист по недвижимости</p>

			</div>
		</div>

		<div class="agent-info-hover">

			<div class="agent-name">
				<h5><a href="mailto:mvhestate@gmail.com">Койнова Алёна</a></h5>
				<p>Специалист по недвижимости</p>
			</div>

			<ul class="agent-address">
				<li>&#128222;&#x0020;+84 32 704 79 30 </li>
				<li>&#x1f4e7;&#x0020;mvhestate@gmail.com</li>
			</ul>

			<center>
				<ul class="social-media">
				<li><a href="https://www.facebook.com/nelen.koinova"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://vk.com/id25629307"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				</ul>
			</center>

		</div>

	</div>
</div>
</div>

<!-- leave-massage -->
<div class="col-md-7  col-sm-7 col-xs-12">
	<div class="leave-review">
	<h3>Узнать подробности</h3>
	<?php echo do_shortcode('[contact-form-7 id="51" title="Форма обратной связи (страницы с недвижимостью)"]'); ?>
	</div>
</div>

<!-- <div class="col-lg-12"> -->

<!-- Put this script tag to the <head> of your page -->

<!-- <script type="text/javascript" src="//vk.com/js/api/openapi.js?152"></script>

<script type="text/javascript">
  VK.init({apiId: 6425351, onlyWidgets: true});
</script> -->

<!-- Put this div tag to the place, where the Comments block will be -->

<!-- <div id="vk_comments"></div> -->
<!-- <script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script> -->

<!-- </div> -->

	<div class="col-md-12">
	<?php comment_form(); ?>
	</div>

</div>
</div>
</div>

<div class="col-md-4 col-sm-12 row pt-50">

<?php

	dynamic_sidebar('ads-widget');

?>

</div>

</div>

<?php


	if( in_category('prodazha') ) {
		get_sidebar('sale');
	} else {
		get_sidebar('rent');
	}
	// подключаем sidebar

?>

</div>

</div>

</section>
<!-- End page content -->

<?php get_footer(); // подключаем footer.php ?>

