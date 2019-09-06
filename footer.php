<!-- Start footer area -->
<footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
<div class="footer-top pt-40 pb-80">
<div class="container">
<div class="row">
<!-- footer-address -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="footer-widget">
<h6 class="footer-titel">Связаться с нами</h6>
	<ul class="footer-address">
		<li>
			<a href="tel:+84327047930">
				<div class="address-icon">					
					<!-- <div class="icos ico-phone_3"></div> -->
					<i class="fa fa-volume-control-phone"></i>
				</div>
				<div class="address-info">
					<span>+84 32 704 79 30</span>
				</div>
			</a>	
		</li>
		<li>
			<a href="mailto:mvhestate@gmail.com">
				<div class="address-icon">					
					<!-- <div class="icos ico-world"></div> -->
					<i class="fa fa-globe"></i>
				</div>
				<div class="address-info">
					<span>mvhestate@gmail.com</span>
				</div>
			</a>	
		</li>
		<li>
			<a href="https://www.facebook.com/MYVIETHOMEINFO/">
				<div class="address-icon">					
					<!-- <div class="icos ico-fb-sm"></div> -->
					<i class="fa fa-facebook-square"></i>
				</div>
				<div class="address-info">
					<span>facebook.com</span>
				</div>
			</a>
		</li>
		<li>
			<a href="https://vk.com/myviethomeinfo">
				<div class="address-icon">
					<i class="fa fa-vk"></i>
				</div>
				<div class="address-info">
					<span>vk.com</span>
				</div>
			</a>
		</li>
		<li>
			<a href="https://www.instagram.com/myviethomeinfo/">
				<div class="address-icon">
					<i class="fa fa-instagram"></i>
				</div>
				<div class="address-info">
					<span>instagram.com</span>
				</div>
			</a>
		</li>
	</ul>
</div>
</div>
<!-- footer-latest-news -->
<div class="col-lg-6 col-md-5 hidden-sm col-xs-12">
<div class="footer-widget middle">
<h6 class="footer-titel">Новости</h6>
<ul class="footer-latest-news">
<?php
$the_query_tab_one = new WP_Query(array('cat' => 12,'posts_per_page' => 3));
for($i=0;$i<=4;$i++)
{
$id=$the_query_tab_one->posts[$i]->ID;//Получаем уд записи
if($id!=null or $id!='' or $id!=0){
$titles=$the_query_tab_one->posts[$i]->post_title;//Получаем заголовок
$thumb_id = get_post_thumbnail_id($id);//Получаем ID миниатюры
$thumb_url = wp_get_attachment_image_src($thumb_id,array(82,82));//Получаем адресс миниатюры
$urli=get_permalink($id);//Ссылка на запись
//Код вывода
echo '<li>
<div class="latest-news-image">
<a href="'.$urli.'"><img src="'.$thumb_url[0].'" alt=""></a>
</div>
<div class="latest-news-info">
<h6><a href="'.$urli.'">'.$titles.'</a></h6>
</div>
</li>';
}}
?>
</ul>
</div>
</div>
<!-- footer-contact -->
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
<div class="footer-widget last-one">
<h6 class="footer-titel">Напишите нам</h6>
<div class="footer-contact">
<?php echo do_shortcode('[contact-form-7 id="42" title="Обратная связь футер"]'); ?>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="copyright text-center">
<p>Copyright &copy; 2017-2018 <a href="/confidential-policy"><b>ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</b></a>.</p>
</div>
</div>
</div>
</div>
</div>
</footer>
<!-- End footer area -->
</div>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48214379 = new Ya.Metrika({ id:48214379, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48214379" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'wwBZ0KIE9g';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script async src="//ehzggd.com/mn9l17912/ilvpm003y/oln/786/vqu768kypc01r"></script>

</body>
</html>