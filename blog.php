<!-- Start page content -->
<section id="page-blog-content" class="page-wrapper">

<!-- FEATURED FLAT AREA START -->
<div class="featured-flat-area pb-60">
<div class="container">

<div class="row">

	<div class="featured-flat">

		<div class="col-md-8 pb-40">

			<div class="row">

<?php

	while ( have_posts() ) : the_post();

		$id=get_the_ID();//Получаем уд записи
		$thumb_id = get_post_thumbnail_id($id);//Получаем ID миниатюры
		$thumb_url = wp_get_attachment_image_src($thumb_id,array(230,230));//Получаем адресс миниатюры
		$urli=get_permalink($id);//Ссылка на запись

		if( in_category('novosti') ) {
			$read_more = 116;
			$add_class = 'news';
		} else {
			$read_more = 135;
			$add_class = 'blog';
		};

?>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<article class="blog-item bg-gray <?php echo $add_class; ?>">

					<div class="blog-image">
						<a href="<?php echo $urli; ?>">
							<!-- <img data-src="<?php // echo $thumb_url[0]; ?>" src="https://dummyimage.com/230x230/000/fff" alt="<?php // the_title();?>"/> -->
							<img src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title();?>"/>
						</a>
					</div>

					<div class="blog-info">

						<div class="post-title-time">
							<h5><a href="<?php echo $urli; ?>"><?php the_title();?></a></h5>
						</div>

						<div class="post-readmore">
							<p><?php echo mb_substr( strip_tags( get_the_content() ), 0, $read_more );?>...</p>
						</div>
						
					</div>

					<div class="post-readmore-more">
						<a class="read-more" href="<?php echo $urli; ?>">Читать</a>
					</div>					

				</article>
			</div>

<?php endwhile; ?>

			</div>
		
		</div>
		
		<div class="col-md-4 col-sm-12 row pt-50">
		<?php dynamic_sidebar('ads-widget'); ?>
		</div>

	</div>

</div> <!-- .container > .row -->

</div>
</div>
</div>
<!-- FEATURED FLAT AREA END -->

<div class="row blog-pagination">
<?php
		// Пагинация
		global $wp_query;
		$big = 999999999;
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'type' => 'list',
			'prev_text'    => __('« Предыдущие'), 
		    'next_text'    => __('Еще »'),
			'total' => $wp_query->max_num_pages
		) );
?>
</div> <!-- .row .blog-pagination -->

</section>