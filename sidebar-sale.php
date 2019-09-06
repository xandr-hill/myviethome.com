<div class="col-md-12 row">
	<aside class="widget widget-featured-property mb-30">
		<h3>Также в продаже:</h3>
		<div class="row">
<?php
		$the_query_tab_one = new WP_Query( array('category_name' => 'prodazha', 'posts_per_page' => 3, 'orderby' => 'rand') );
		for( $i=0; $i<4; $i++ ) {
			$id=$the_query_tab_one->posts[$i]->ID;//Получаем уд записи
			if($id!=null or $id!='' or $id!=0){
				$title=$the_query_tab_one->posts[$i]->post_title;//Получаем заголовок
				$thumb_id = get_post_thumbnail_id($id);//Получаем ID миниатюры
				$thumb_url = wp_get_attachment_image_src($thumb_id,array(263,263));//Получаем адресс миниатюры
				$urli=get_permalink($id);//Ссылка на запись
			//Код вывода
?>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="flat-item">
					<div class="flat-item-image">
						<a href="<?php echo $urli; ?>"><img data-src="<?php echo $thumb_url[0]; ?>" src="https://dummyimage.com/263x263/000/fff" alt="myviethome.com"></a>
						<div class="flat-link">
							<p style="color:#fff;"><?php echo $title ?></p>
							<br />
							<a href="<?php echo $urli; ?>">Подробнее</a>
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
</div>