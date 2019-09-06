<section id="page-blog-single-content" class="page-wrapper">

<!-- FEATURED FLAT AREA START -->
<div class="featured-flat-area pt-15 pb-15">
<div class="container">

	<div class="row">

		<div class="featured-flat">

			<div class="col-md-8 col-sm-12 row">

				<div class="properties-details-area pb-40">
				
<?php

if ( have_posts() ) :

while ( have_posts() ) : the_post(); // старт цикла
?>
<div class="col-md-12 pt-15">

<?php the_content(); // контент ?>

<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fmyviethome.com%2F&width=184&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=197640133933909" width="184" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

	<div class="poxojie_zapisi">

<?php
		$categories = get_the_category($post->ID);
		if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
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

					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
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

<?php endwhile; endif; // конец цикла ?>

					<div class="col-md-12 row social-icons">
						<div class="col-md-8 col-sm-12 social-title">							
							<span>
								<i><h4>Наши группы в социальных сетях:</h4></i>
							</span>
						</div>

						<div class="col-md-4 col-sm-12 social-img">
							<a href="https://www.facebook.com/myviethomesale" >
								<div class="address-icon">
									<div class="icos ico-fb-sm"></div>
								</div>
							</a>
							<a href="https://vk.com/myviethomeinfo" >
								<div class="address-icon">
									<div class="icos ico-vk-sm"></div>
								</div>
							</a>
							<a href="https://instagram.com/viethomegroup" >
								<div class="address-icon">					
									<div class="icos ico-insta-sm"></div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-12 comments-tpl">

<?php comments_template(); ?>

					</div>
				
				</div>

			</div>

			<div class="col-md-4 col-sm-12 row pt-50">

<?php dynamic_sidebar('ads-widget'); ?>

			</div>

		</div>

<?php // подключаем sidebar
	if( in_category('novosti') ) {
		get_sidebar('news');
	} else {
		get_sidebar('blog');
	}
?>
	</div>

</div>
</div>

</section>