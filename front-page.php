<?php get_header(); // подключаем header.php ?>
<!-- Start page content -->
<section id="main-page-content" class="page-wrapper">
<div class="find-home-area bg-blue call-to-bg plr-140 pt-60 pb-20">
<div class="container-fluid">
<div class="row">
	<div class="col-md-3 col-xs-12">
		<div class="section-title text-white">
			<h3>ПОДОБРАТЬ НЕДВИЖИМОСТЬ</h3>
		</div>
	</div>
	<div class="col-md-9 col-xs-12">
		<div class="find-homes row">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php echo do_shortcode('[facetwp facet="Vid"]'); ?>
				</div>
				<div class="col-sm-6 col-xs-12">                 
					<?php echo do_shortcode('[facetwp facet="Rayon"]'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php echo do_shortcode('[facetwp facet="Count_comnat"]'); ?>
				</div>
				<div class="col-sm-6 col-xs-12">
					<?php echo do_shortcode('[facetwp facet="price"]'); ?>
				</div>				
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- FEATURED FLAT AREA START -->
<div class="featured-flat-area pt-40">
	<div class="container">
		<div class="row">
			<div class="featured-flat">	
				<div class="col-md-8">
					<div class="row facetwp-template">
<?php
			// 1. Формируем параметры запроса
			$args = [ 
			  'post_type' => 'post', // post, page, attachment, revision, nav_menu_item, any. Default: post
			  'post_status' => 'publish',
			  'category__in' => array( 18, 22 ),
			  'order' => 'DESC', // ASC, DESC
			  'posts_per_page' => 8, // число записей на страницу ('numberposts')
			];
			// 2. Выполняем дополнительный запрос на получение записей (похожие, последние, популярные и т.д.)
			$query = new WP_Query($args);
			// 3. Проверяем наличие результатов и выводим записи
			if ($query->have_posts()) {
				  // Цикличный обход записей
			  while ($query->have_posts()) {
			    // "Извлечение" каждой последующей записи
			    $query->the_post();
				$id = get_the_ID(); //Получаем ID записи
				$thumb_id = get_post_thumbnail_id($id); //Получаем ID миниатюры
				$thumb_url = wp_get_attachment_image_src($thumb_id, 'medium'); //Получаем адрес миниатюры
?>
							<div class="col-md-6 col-sm-4 col-xs-12">
								<div class="flat-item">
									<div class="flat-item-image">
										<a href="<?php the_permalink(); ?>">
											<img data-src="<?php echo $thumb_url[0]; ?>" src="<?php echo get_theme_file_uri(); ?>/images/logo2.png" height="<?php echo $thumb_url[1]; ?>" width="<?php echo $thumb_url[2]; ?>" alt="myviethome.com">
											<!-- <img src="<?php // echo $thumb_url[0]; ?>" height="<?php // echo $thumb_url[1]; ?>" width="<?php // echo $thumb_url[2]; ?>" alt="myviethome.com"> -->
										</a>
										<div class="flat-link">
											<a href="<?php the_permalink(); ?>">Подробнее</a>
										</div>
										<ul class="flat-desc">
											<li>
												<div class="icos ico-wallet"></div>
												<span><?php echo get_field( "price" ); ?>$</span>
											</li>
											<li>
												<div class="icos ico-bed"></div>
												<span><?php echo get_field( "count_komnat" ); ?></span>
											</li>
										</ul>
									</div>
									<div class="flat-item-info">
										<div class="flat-title-price">
											<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
										</div>
									</div>
								</div>
							</div>
<?php
		} // end while
?>
					<div class="col-lg-12 text-cetner pager-area"><?php echo do_shortcode('[facetwp pager="true"]'); ?></div>

<?php
	} // end if
	// 4. Восстановление данных и параметров оригинального запроса!
	wp_reset_postdata();
?>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 row">
					<?php dynamic_sidebar('ads-widget'); ?>
				</div>
			</div>
			<?php get_sidebar('blog'); ?>
		</div>
	</div>
</div>
<!-- FEATURED FLAT AREA END -->

</section>
<!-- End page content -->

<?php get_footer(); // подключаем footer.php ?>
