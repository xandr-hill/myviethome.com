<?php get_header(); // подключаем header.php ?>


<!-- Start page content -->
<section id="page-content" class="page-wrapper">
<div class="find-home-area bg-blue call-to-bg plr-140 pt-60 pb-20">
<div class="container-fluid">

<div class="row">
<div class="col-md-3 col-xs-12">
<div class="section-title text-white">
<h3>ПОДОБРАТЬ</h3>
<h2 class="h1">ОБЪЕКТ</h2>
</div>
</div>

<div class="col-md-9 col-xs-12">

	<div class="find-homes row">

		<div class="row">
			
			<div class="col-sm-6 col-xs-12">
			<!-- <div class="find-home-item custom-select"> -->
			<?php echo do_shortcode('[facetwp facet="Vid"]'); ?>
			<!-- </div> -->
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
<div class="featured-flat-area pt-115 pb-60">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="featured-flat">
					
					<div class="row facetwp-template">

<?php


			// 1. Формируем параметры запроса
			$args = [ 
			  //'ignore_sticky_posts' => 'true', // не закреплять/приоритезировать записи (см. 'caller_get_posts')
			  //'no_found_rows' => true,         // отключить подсчет всех найденных записей

			  'post_type' => 'post',           // post, page, attachment, revision, nav_menu_item, any. Default: post
			  'post_status' => 'publish',

			  'category__in' => array( 18, 22 ),
			  //'category_name' => '',    // фильтр по slug

			  //'post__in' => [1,2,3],           // посты с указанными ID ('include')
			  //'post__not_in' => [12,13],         // исключить ID указанных постов ('exclude')

			  //'meta_key' => 'some_meta_field', // сортировка по заданному meta-полю
			  //'orderby' => 'meta_value_num',   // meta_value,  meta_value_num
			  'order' => 'DESC',                // ASC, DESC

			  //'paged' => 7,                    // N страницы архива ('page' - N страницы главной)
			  //'posts_per_page' => 8,          // число записей на страницу ('numberposts')
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
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full'); //Получаем адрес миниатюры

?>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="flat-item">

									<div class="flat-item-image">
										
										<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url[0]; ?>" alt=""></a>

										<div class="flat-link">
											<a href="<?php the_permalink(); ?>">Подробнее</a>
										</div>

										<ul class="flat-desc">
											<li>
												<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/wallet.png" alt="">
												<span><?php echo get_field( "price" ); ?>$</span>
											</li>
											<li>
												<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/5.png" alt="">
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
			} // end if

			// 4. Восстановление данных и параметров оригинального запроса!
			wp_reset_postdata();

?>

						<div class="col-lg-12 text-cetner"><?php echo do_shortcode('[facetwp pager="true"]'); ?></div>
					
					</div>

				</div>

			</div>

<?php 	//get_sidebar(); // подключаем sidebar.php ?>

		</div>

	</div>

</div>
<!-- FEATURED FLAT AREA END -->


</section>
<!-- End page content -->

<?php get_footer(); // подключаем footer.php ?>

