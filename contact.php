<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница контактов
 */
get_header(); // подключаем header.php ?>

<!-- BREADCRUMBS AREA START -->
        <div class="breadcrumbs-area bg-5 bg-opacity-black-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs">
                            <h2 class="breadcrumbs-title">Контакты</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS AREA END -->
        
<section id="page-content" class="page-wrapper">

            <!-- CONTACT AREA START -->
            <div class="contact-area pt-40 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <!-- get-in-toch -->
                            <div class="get-in-toch">
                                <div class="section-title mb-30">
                                    <h1>Наши контакты</h1>
                                </div>

                                <ul class="contact-address">
                                    <li>

                                        <div class="contact-address-name">
                                            <span>
                                                <h2>
                                                  Койнова
                                                </h2>
                                                <h3>
                                                  Алёна Олеговна
                                                </h3>
                                            </span>
                                        </div>

                                        <div class="contact-address-image">
                                           <img data-src="<?php echo get_the_post_thumbnail_url($post_id, 'thumbnail'); ?>" src="https://dummyimage.com/150x150/000/fff" alt="myviethome.com" />
                                        </div>

                                    </li>
                                    <li>
                                        <div class="contact-address-info">
                                            <a href="tel:+84327047930">
                                                <span>&#x0020;&#x0020;&#128222;&#x0020;+84 32 704 79 30</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="contact-address-info">
                                            <a href="mailto:mvhestate@gmail.com">
                                                <span>&#x0020;&#x0020;&#x1f4e7;&#x0020;mvhestate@gmail.com</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-info">
                                            <a href="https://www.facebook.com/nelen.koinova" >
                                                <span>
                                                    www.facebook.com
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-info">
                                            <a href="https://vk.com/id25629307" >
                                                    <span>
                                                        www.vk.com
                                                    </span>
                                                </a>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="contact-messge contact-bg">
                                <!-- blog-details-reply -->
                                <div class="leave-review">
                                    <h2>Напишите нам</h2>
<?php echo do_shortcode('[contact-form-7 id="43" title="Форма обратной связи (страница контакты)"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row map-contacts">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d974.7431271788136!2d109.19425832920956!3d12.25013963008094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31706730759fc9ef%3A0x9b511bf75180e211!2sMyVietHome+estate!5e0!3m2!1sru!2s!4v1563339333130!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
            <!-- CONTACT AREA END -->



        </section>
        <!-- End page content -->

<?php get_footer(); // подключаем footer.php ?>
        