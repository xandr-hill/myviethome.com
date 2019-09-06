<?php get_header(); // подключаем header.php ?>


	<!-- BREADCRUMBS AREA START -->
		<div class="breadcrumbs-area bg-5 bg-opacity-black-70">
		<div class="container">
		<div class="row">
		<div class="col-xs-12">
		<div class="breadcrumbs">
		<h2 class="breadcrumbs-title">	
		<?php the_content(); // выводим контент ?>
		</h2>
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
		</div>
		</div>
		</div>
		</div>
		</div>
	<!-- BREADCRUMBS AREA END -->


<!-- Start page content -->
<section id="page-rent-content" class="page-wrapper">
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

		<div class="row">

			<div class="col-sm-6 col-xs-12">                 
			<?php echo do_shortcode('[facetwp facet="Rayon"]'); ?>
			</div>			
			<div class="col-sm-6 col-xs-12">
			<?php echo do_shortcode('[facetwp facet="Count_comnat"]'); ?>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 col-xs-12" style="float: right;">
			<?php echo do_shortcode('[facetwp facet="price"]'); ?>
			</div>
		
		</div>
		

	</div>

</div>

</div>
</div>
</div>

<!-- FEATURED FLAT AREA START -->
<div class="featured-flat-area pb-60">
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="featured-flat">
				<div class="row facetwp-template">

				<div class="col-lg-12 form-sale-div row">
				<div class="col-sm-12 row">
					<center><h1>Оставить заявку на аренду недвижимости в Нячанге</h1></center>

					<br/>

					<img class="col-md-2 col-sm-12" src="<?php echo home_url('/wp-content/themes/Shpud-Theme/images/logo.png'); ?>" style="margin-right: 20px; margin-bottom:5px; float:left;" alt="Find home">
					<p class="myingress col-md-9 col-sm-12">
						Заполните заявку и наши специалисты свяжутся с вами.
					</p>
					<p class="myingress col-md-9 col-sm-12">
						Также вы можете ознакомиться с актуальными предложениями.
					</p>
					<p class="myingress col-md-9 col-sm-12">
						Ниже представлены проекты, с которыми сотрудничает наше агентство.
					</p>
				</div>

					<br/>
					<br/>

					<?php echo do_shortcode('[contact-form-7 id="3832" title="Форма аренды"]'); ?>

				</div>

<?php

// 1. Формируем параметры запроса
$args = [ 
  //'ignore_sticky_posts' => 'true', // не закреплять/приоритезировать записи (см. 'caller_get_posts')
  //'no_found_rows' => true,         // отключить подсчет всех найденных записей

  'post_type' => 'post',           // post, page, attachment, revision, nav_menu_item, any. Default: post
  'post_status' => 'publish',

  'category_name' => 'arenda',    // фильтр по slug

  //'post__in' => [1,2,3],           // посты с указанными ID ('include')
  //'post__not_in' => [12,13],         // исключить ID указанных постов ('exclude')

  //'meta_key' => 'some_meta_field', // сортировка по заданному meta-полю
  //'orderby' => 'meta_value_num',   // meta_value,  meta_value_num
  'order' => 'DESC',                // ASC, DESC

  //'paged' => 7,                    // N страницы архива ('page' - N страницы главной)
  'posts_per_page' => 12,          // число записей на страницу ('numberposts')
];
 
// 2. Выполняем дополнительный запрос на получение записей (похожие, последние, популярные и т.д.)
$query = new WP_Query($args);
 
// 3. Проверяем наличие результатов и выводим записи
if ($query->have_posts()) {

	  // Цикличный обход записей
  while ($query->have_posts()) {

    // "Извлечение" каждой последующей записи
    $query->the_post();

$id = get_the_ID(); //Получаем ID записи
$thumb_id = get_post_thumbnail_id($id); //Получаем ID миниатюры
$thumb_url = wp_get_attachment_image_src($thumb_id,array(263,263)); //Получаем адрес миниатюры

?>
<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="flat-item">

		<div class="flat-item-image">

			<a href="<?php the_permalink(); ?>"><img data-src="<?php echo $thumb_url[0]; ?>" src="https://dummyimage.com/263x263/000/fff" alt="myviethome.com"></a>
			<div class="flat-link">
				<a href="<?php the_permalink(); ?>">Подробнее</a>
			</div>

			<ul class="flat-desc">
				<li>
					<img src="https://myviethome.com/wp-content/themes/Shpud-Theme/images/icons/wallet.png" alt="myviethome.com">
					<span><?php echo get_field( "price" ); ?> $</span>
				</li>
				<li>
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
		<div class="col-md-12 text-cetner"><?php echo do_shortcode('[facetwp pager="true"]'); ?></div>
<?php
	}

	// 4. Восстановление данных и параметров оригинального запроса!
	wp_reset_postdata();

?>

		</div>

	</div>
</div>

<?php // get_sidebar(); // подключаем sidebar.php ?>

</div>

<div class="container" style="margin: 60px 0; padding:0">
		<div class="row">
			<article>	

				<p>
					Нячанг, как любой уважающий себя курортный город, способен предложить сотни отелей на любой вкус и кошелек. Тем не менее, в последние пару лет все большую популярность в Нячанге и Вьетнаме в целом приобретают апартаменты со своей кухней. Причем, как для долгосрочной, так и для краткосрочной аренды. А все потому, что за приемлемую цены вы можете снять комфортную, полноценную квартиру в любом районе Нячанга. В данной статье мы подробно рассмотрим особенности рынка аренды недвижимости в Нячанге и разберемся, как снять апартаменты в Нячанге по наиболее выгодной цене.
				</p>

				<br />

				<p>
					Цена на апартаменты в Нячанге
					Аренды жилья в Нячанге можно разделить на 2 основные категории: долгосрочная и посуточная. Наша компания занимается преимущественно долгосрочной арендой. Главное отличие этих двух типов аренды в стоимости. Так, например, квартиры, которая сдается в месяц за $250 в сутке вполне может стоить $18-20. Таким образом, арендовать такую квартиру на 2 недели будет дороже, чем на месяц. Однако не думайте, что вы придумали оригинальную схему “подписать контракт на месяц, заплатить $250, а съехать раньше”. В таком случае вы попросту теряете депозитную сумму, но об этом далее.
				</p>
				<p>
					Теперь что же касается порядка цен. По состоянию на начало 2019 года, наша компания может выделить несколько типов апартаментов по их стоимости:
				</p>
			
				<ol>
					<li>
						Cупер бюджетные. С данным типом недвижимости мы не работаем. И вот почему. К супер бюджетным можно отнести чисто вьетнамские апартаменты со старой дешевой мебелью. Зачастую в таких квартирах нет окна на улицу и нередко процветает плесень. Площади такого жилья небольшие: 15-20 кв.м. Стоимость: 2,5 - 3,5 млн донгов в месяц ($110-150).
					</li>
					<li>
						Эконом-класс. Данный вариант присутствует в нашей базе и на данный момент представлен несколькими десятками объектов. Ценовая политика: $190-250. Обычно это небольшие, чистые студии по 20-25 кв.м. Есть и двухуровневые варианты, где на первом расположены гостиная, кухня и санузел, а на втором - спальня. В таких квартирах чаще всего есть окно на улицу, изредка - даже неплохой вид. Однако последнее время стоимость аренды в Нячанге растет, так что таких вариантов становится все меньше.
					</li>
					<li>
						Стандарт. Речь ок квартирах ценой $260-400. В таком жилье уже нередко присутствует свой балкон. Если квартира дороже $300, то это вполне может быть и не студия, где кухня и спальня находятся в разных комнатах. Ближе к $400 можно также рассматривать и апартаменты с 2 спальнями. Разумеется, мы говорим только о чистых, аккуратных квартирах. Квартир этого типа в Нячанге больше всего.
					</li>	
					<li>
						Стандарт плюс. В данную категорию мы выделили апартаменты с нестандартным вьетнамским дизайном или хорошим видом из окна. Это достаточно условная категория. Цены таких квартир варьируются от 400 до $600. Это может быть как однокомнатные, так и двухкомнатные квартиры.
					</li>
					<li>
						Люкс. К квартирам класса люкс мы относим просторные апартамента с 1-2 спальнями с видом на море и стильным дизайном. Таких квартир не так много в общей массе. Поэтому и цена на них нередко искусственно завышена владельцами. Тем не менее, спрос на апартаменты со стильным дизайном и хорошим видом в Нячанге высокий. Особенно среди гостей из Китая и Кореи.
					</li>
					<li>
						Премиум. К данной категории мы бы отнесли квартиры в таких домах, как Costa, Ariana, Havana и некоторые другие премиум комплексы Нячанга. Зачастую это неоправданно дорогие квартиры, стоимость которых такова только из-за “модности” данных домов. Например, небольшая студия в Ariana будет стоить порядка $800. Да, это будет стильный дизайн, отличное расположение и прекрасный вид. так что каждый может снять то, что для него предпочтительнее.
					</li>					
				</ol>

				<p>
					<i>Важно!</i>
					Данная классификация не подразумевает деление квартир по районам. То есть если мы говорим, что минимум $190, то это однозначно не туристический квартал. Поэтому указанные цены - это показатели, приближенные к минимально возможным.
				</p>

				<p>
					Процедура аренды жилья в Нячанге
					В рамках данной статьи мы описываем процедуру аренды жилья конкретно с нашим агентством. Опыт показал, что данный механизм наиболее комфортный, как для владельца квартиры, так и для арендатора, поэтому мы остановились на нем.
				</p>

				<ol>
					<li>Обращение клиента в агентство</li>
					<li>Ответы на вопросы агента: желаемая стоимость, количество комнат, район, срок, пожелания по квартире и т.д</li>
					<li>Поиск нескольких вариантов по запросу клиента</li>
					<li>Отправка клиенту фотографий квартир с описанием условий аренды</li>
					<li>Реальный просмотр понравившихся объектов</li>
					<li>Подписание договора аренды выбранной квартиры (договор на 3 языках: вьетнамский, английский и русский)</li>
					<li>Оплата агентской комиссии</li>
				</ol>

				<p>
					Со своей стороны мы также всегда ведем процесс торгов и зачастую добиваемся для наших клиентов лучшей цены на жилье. Большинство владельцев предоставляют нам агентскую скидку, что позволяет нашим клиентам снять жилье максимально выгодно и неплохо сэкономить, особенно при долгосрочной аренде.
				</p>
				
				<br />
				
				<p>
					Важные моменты Главное, что важно помнить - 99,9% владельцев квартир в Нячанге берут депозитную сумму, как гарантию сохранности имущества. Чаще всего, эта сумму равна месячной плате за квартиру, однако в некоторых случаях нашим агентам удается договориться о скидке и здесь. Депозитная сумма является возвратной и арендатор (то есть вы) получает ее обратно, при выезде из квартиры. Соответствующий пункт, разумеется, указан в договоре аренды.
				</p>

				<p>
					В некоторых случаях, депозит может быть возвращен частично, либо не возвращен вообще. Единственной причиной невозврата депозита является одностороннее прекращение контракта со стороны арендатора, без заблаговременного (15 дней) уведомления об этом владельца жилья. Частичный возврат депозита возможен в случае нанесения арендатором ущерба квартире. В таком случае изымается часть депозита, равная стоимости ущерба. Однако такое происходит крайне редко.
				</p>

				<p>
					Также в 99% квартиры арендатор оплачивает коммунальные услуги. Обычно это только электричество и вода. Однако в некоторых комплексах приплюсовывается обслуживание дома (ЖКХ) и прачечная. Иногда дополнительно оплачивается интернет и парковка. В целом, средняя стоимость месячных коммунальных услуг $40-60.
				</p>
				
				<br />
				
				<p>
					Если у вас остались какие-либо вопросы, касательно аренды жилья в Нячанге, вы можете связаться с нашими менеджерами в онлайн чат или любым другим удобным вам способом. Также вы можете заполнить заявку на подбор квартиры выше. Также на нашем сайте вы найдете свежие новости Вьетнама и массу интересных статей о Нячанге.
				</p>

			</article>
		</div>
	</div>

</div>
</div>
<!-- FEATURED FLAT AREA END -->


</section>
<!-- End page content -->

<?php get_footer(); // подключаем footer.php ?>