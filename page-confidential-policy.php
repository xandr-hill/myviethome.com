<?php get_header(); // подключаем header.php ?>

<!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->
        
<section id="page-content" class="page-wrapper">

            <!-- CONTACT AREA START -->
            <div class="contact-area pt-115 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
<?php the_content(); // контент ?>
<?php endwhile; // конец цикла ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT AREA END -->


</section>
        <!-- End page content -->

<?php get_footer(); // подключаем footer.php ?>