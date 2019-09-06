<?php get_header(); // подключаем header.php ?>
<!-- Start page content -->
<section id="page-about" class="page-wrapper">
<!-- PROPERTIES DETAILS AREA START -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-60 mb-60">
				<?php the_content(); // контент ?>
			</div>
		</div>
		<?php get_sidebar('rent'); ?>
	</div>
</section>
<!-- End page content -->
<?php get_footer(); // подключаем footer.php ?>

