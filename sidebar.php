<div class="col-md-12">

	<aside class="widget widget-featured-property mb-30">

		<h3>Смотрите также:</h3>

		<div class="row">

	<?php

		//$count_post = wp_count_posts('archives')->publish;
		
		//$r = rand( 1, $count_post ); // Random counter

		$the_query_tab_one = new WP_Query( array(/*'cat' => 'blog',*/'posts_per_page' => 3, 'orderby' => 'asc') ); //'rand') );

		for( $i=0; $i<4; $i++ ) {
			
			$id=$the_query_tab_one->posts[$i]->ID;//Получаем уд записи
			
			if($id!=null or $id!='' or $id!=0){
				
				$title=$the_query_tab_one->posts[$i]->post_title;//Получаем заголовок
				$thumb_id = get_post_thumbnail_id($id);//Получаем ID миниатюры
				$thumb_url = wp_get_attachment_image_src($thumb_id,array(263,263));//Получаем адресс миниатюры
				$urli=get_permalink($id);//Ссылка на запись
				// $price = get_field( "price",$id);
				// $aport = get_field( "count_komnat",$id);

			//Код вывода
	?>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="flat-item">
					<div class="flat-item-image">

						<!-- <span class="for-sale">Читайте также:</span> -->

						<a href="<?php echo $urli; ?>"><img data-src="<?php echo $thumb_url[0]; ?>" src="https://dummyimage.com/263x263/000/fff" alt=""></a>
						
						<div class="flat-link">
							<p style="color:#fff;"><?php echo $title ?></p>
							<br />
							<a href="<?php echo $urli; ?>">Читать</a>							
						</div>
						

					</div>
				</div>
			</div>
	


	<?php		

			}
		}

	?>


		</div>
	</aside>

<!-- 	<aside class="widget widget-featured-property mb-30">
		<div class="row">
		<div class="col-md-12">
		<?php //dynamic_sidebar('sidebar'); // выводим сайдбар, имя определено в functions.php ?>
		</div>
		</div>
	</aside> -->

</div>