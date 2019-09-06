<?php
/*
Template Name: Шаблон страницы вывода категорий продажи
*/

get_header(); // подключаем header.php ?>

<?php
			while( have_posts() ) : the_post();
				global $post;
				$post_slug = $post->post_name;
			endwhile;
?>
	<!-- BREADCRUMBS AREA START -->
		<div class="breadcrumbs-area bg-2 bg-opacity-black-70">
		<div class="container">
		<div class="row">
		<div class="col-xs-12">
		<div class="breadcrumbs">
		<h2 class="breadcrumbs-title">
		<?php the_title(); // выводим заголовок ?>
		</h2>
		</div>
		</div>
		</div>
		</div>
		</div>
	<!-- BREADCRUMBS AREA END -->

<!-- Start page content -->
<section id="page-sale-obj<?php echo $post_slug; ?>" class="page-wrapper">
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
						<div class="col-sm-4 col-xs-12">
						<?php echo do_shortcode('[facetwp facet="Count_comnat"]'); ?>
						</div>
						<div class="col-sm-6 col-xs-12" style="float: right;">
						<?php echo do_shortcode('[facetwp facet="price"]'); ?>
						</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FEATURED FLAT AREA START -->
<div class="featured-flat-area pt-60 pb-60">
<div class="container">
	<div class="row">
		<div class="featured-flat">
		<div class="row">
				<div class="pro-details-image mb-60">
				<div class="row col-md-6">
					<div class="col-md-12 complex-title-div">
						<h1><?php echo the_content(); //the_title(); ?></h1>
					</div>
				</div>
			<div class="col-md-6 row">
				<div class="pro-details-big-image col-md-12">
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
					<!-- <img data-src="<?php // the_sub_field('img'); ?>" src="https://dummyimage.com/600x400/000/fff" alt="Квартира в Нячанге" /> -->
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
				</div> <!-- big image -->
					<div class="pro-details-carousel col-md-12">
				<?php
					$z=1;
					if( have_rows('photo_obekt') ):
						while ( have_rows('photo_obekt') ) : the_row();
				?>
						<div class="pro-details-item">
							<a href="#pro-<?php echo $z; ?>" data-toggle="tab" class="it_prev">
								<!-- <img data-src="<?php // the_sub_field('img');?>" src="https://dummyimage.com/600x400/000/fff" alt="myviethome.com"/> -->
								<img src="<?php the_sub_field('img');?>" alt="myviethome.com"/>
							</a>
						</div>
				<?php
					$z++;
						endwhile;
					endif;
				?>
					</div>
			</div>
			</div>
		</div>
<br />
		<div class="row">		
<?php
			// 1. Формируем параметры запроса
			$args = [
			'category_name' => $post_slug, // фильтр по slug
			'post_type' => 'post',
			'order' => 'DESC', // ASC, DESC
			'posts_per_page' => 8, // число записей на страницу ('numberposts')
			];
			// 2. Выполняем дополнительный запрос на получение записей (похожие, последние, популярные и т.д.)
			$query = new WP_Query($args);
			// 3. Проверяем наличие результатов и выводим записи
			if ($query->have_posts()) {
?>
			<center>
				<h1>
					Выбрать квартиру в <?php echo the_title(); ?>:
				</h1>
			</center>
<br />
<div class="row">
<?php
			// Цикличный обход записей
			while ($query->have_posts()) {
			    // "Извлечение" каждой последующей записи
			    $query->the_post();
				$id = get_the_ID(); //Получаем ID записи
				$thumb_id = get_post_thumbnail_id($id); //Получаем ID миниатюры
				$thumb_url = wp_get_attachment_image_src($thumb_id,array(270,270)); //Получаем адрес миниатюры
?>
							<div class="col-sm-3 col-xs-12">
								<div class="flat-item">
									<div class="flat-item-image">
										<a href="<?php the_permalink(); ?>">
											<!-- <img data-src="<?php // echo $thumb_url[0]; ?>" src="https://dummyimage.com/600x400/000/fff" alt="myviethome.com"> -->
											<img data-src="<?php echo $thumb_url[0]; ?>" alt="myviethome.com">
										</a>
										<div class="flat-link">
											<a href="<?php the_permalink(); ?>">Подробнее</a>
										</div>
										<ul class="flat-desc">
											<li>
												<!-- <img data-src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/wallet.png" src="https://dummyimage.com/600x400/000/fff" alt="myviethome.com"> -->
												<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/wallet.png" alt="myviethome.com">
												<span><?php echo get_field( "price" ); ?>$</span>
											</li>
											<li>
												<!-- <img data-src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/5.png" src="https://dummyimage.com/600x400/000/fff" alt="myviethome.com"> -->
												<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/5.png" alt="myviethome.com">
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
</div> <!-- row -->
<?php
	} // end if
	// 4. Восстановление данных и параметров оригинального запроса!
	wp_reset_postdata();
?>
				<div class="col-lg-12 text-cetner"><?php echo do_shortcode('[facetwp pager="true"]'); ?></div>
			</div>		
			<div class="row social-icons">
				<div class="col-md-8 col-sm-12 social-title">							
					<span>
						<i><h4>Наши группы в социальных сетях:</h4></i>
					</span>
				</div>
				<div class="col-md-4 col-sm-12 social-img">
					<a href="https://www.facebook.com/MYVIETHOMEINFO" >
						<div class="address-icon">
							<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/fb.png" alt="myviethome.com">
						</div>
					</a>
					<a href="https://vk.com/myviethomeinfo" >
						<div class="address-icon">
							<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/vk.png" alt="myviethome.com">
						</div>
							</a>
					<a href="https://instagram.com/viethomegroup" >
						<div class="address-icon">
							<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/insta.png" alt="myviethome.com">
						</div>
					</a>
				</div>
			</div>			
		</div> <!-- .featured-flat -->
		<div class="form-sale-div row">
			<div class="col-md-12 col-sm-12 row">
				<center><h1>Оставить заявку на покупку недвижимости в Нячанге</h1></center>
			</div>
			<br/>
			<?php echo do_shortcode('[contact-form-7 id="2491" title="Форма продажи"]'); ?>
		</div>
	</div>
</div> <!-- .container -->
</div>
<!-- FEATURED FLAT AREA END -->
</section>
<!-- End page content -->
<?php get_footer(); // подключаем footer.php ?>
