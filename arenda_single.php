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
			<img data-src="<?php the_sub_field('img'); ?>" src="https://dummyimage.com/750x565/000/fff" alt="Квартира в Нячанге" />
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
			<img data-src="<?php the_sub_field('img');?>" src="https://dummyimage.com/180x135/000/fff" alt="myviethome.com"/>
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
						<div class="icos ico-garage"></div>
						Тип <?php the_field( "type" ); ?>
					</li>
					<li>
						<div class="icos ico-bed"></div>
						Комнат <?php the_field( "count_komnat" ); ?>
					</li>
					<li>
						<div class="icos ico-plan"></div>
						Площадь <?php the_field( "plosh" ); ?> м2
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
					the_field("xaracter");
			?>
				</ul>

				</div>

			</div>

		</div>

	</div>
</div>
<!-- pro-details-description -->
<div class="pro-details-description mb-50">

<?php the_content(); // контент ?>

<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fmyviethome.com%2F&width=184&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=197640133933909" width="184" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

	<div class="poxojie_zapisi">
<?php
		$categories = get_the_category($post->ID);
		if ($categories) {

			$category_ids = array();
			foreach($categories as $individual_category) {
				// if ($individual_category == 'rayon') {
					// if (1 == $individual_category->category_parent) {
        				// get_category_link($childcat->cat_ID);
        				// $childcat->category_description;
        				// $childcat->cat_name;
    				// }
				// };
				$category_ids[] = $individual_category->term_id;
			};
			$args=array(
				'category__in' => $category_ids,
				'post__not_in' => array($post->ID),
				'showposts'=>3,
				'orderby'=>'rand',
				'caller_get_posts'=>1
			);
		$my_query = new wp_query($args);
		if( $my_query->have_posts() ) {
			echo '<h3>Похожие записи:</h3>';
			echo '<div class="row">';
			while ($my_query->have_posts()) {
				$my_query->the_post();
?>
		<div class="col-md-4">
			<div class="flat-item">
				<div class="flat-item-image">

					<!-- <span class="for-sale">Читайте также:</span> -->

					<a href="<?php the_permalink(); ?>">
					<?php 	the_post_thumbnail(); ?>
					</a>
						
					<div class="flat-link">
						<p style="color:#fff;"><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>">Подробнее</a>
					</div>

				</div>
			</div>
		</div>
<?php
		}
		echo '</div>';
	}
		wp_reset_query();
}
?>
	</div>
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
			<img data-src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/agents/3.jpg" src="https://dummyimage.com/265x312/000/fff" alt="myviethome.com">
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
				<li><a href="https://www.facebook.com/nelen.koinova"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
				<li><a href="https://vk.com/id25629307"><i class="fa fa-vk" area-hidden="true"></i></a></li>
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


					<div class="col-md-12 row social-icons">
						<div class="col-md-8 col-sm-12 social-title">							
							<span>
								<i><h4>Наши группы в социальных сетях:</h4></i>
							</span>
						</div>

<?php
	if( in_category('arenda') ) {

		$vk_link = 'https://vk.com/viethome';
		$fb_link = 'https://www.facebook.com/viethomeestate/';
		$insta_link = 'https://www.instagram.com/myviethomerent/';

	} else {

		$vk_link = 'https://vk.com/myviethomesale';
		$fb_link = 'https://www.facebook.com/myviethomesale/';
		$insta_link = 'https://www.instagram.com/myviethomesale/';

	};
?>
						<div class="col-md-4 col-sm-12 social-img">
							<a href="<?php echo $fb_link; ?>" >
								<div class="address-icon">
									<div class="icos ico-fb-sm"></div>
								</div>
							</a>
							<a href="<?php echo $vk_link; ?>" >
								<div class="address-icon">
									<div class="icos ico-vk-sm"></div>
								</div>
							</a>
							<a href="<?php echo $insta_link; ?>" >
								<div class="address-icon">					
									<div class="icos ico-insta-sm"></div>
								</div>
							</a>
						</div>

					</div>

					<div class="col-md-12 comments-tpl">
<?php
					comments_template();
?>
					</div>

</div>
</div>
</div>

<div class="col-md-4 col-sm-12 row">

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