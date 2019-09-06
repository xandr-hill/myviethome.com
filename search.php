<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 */
get_header(); // подключаем header.php ?>
<!-- BREADCRUMBS AREA START -->
	<div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
	<div class="container">
	<div class="row">
	<div class="col-xs-12">
	<div class="breadcrumbs">
	<h2 class="breadcrumbs-title">
		Результаты поиска
	</h2>
	</div>
	</div>
	</div>
	</div>
	</div>
<!-- BREADCRUMBS AREA END -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 <?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<h1><?php printf('Вы искали: %s', get_search_query()); // заголовок поиска ?></h1>
			<?php 	if ( have_posts() && strlen( trim(get_search_query()) ) > 0 ) :
						while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp
							get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php
						endwhile; // конец цикла
					else: echo '<p>Нет записей.</p>';
					endif; // если записей нет, напишим "простите" ?>	
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
		<div class="row">
			<center>
			<?php pagination(); // пагинация, функция нах-ся в function.php ?>
			</center>
		</div>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>
