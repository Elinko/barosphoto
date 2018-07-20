<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package barosphoto-wp
 */

 if(get_locale()=='en_GB'){$lang='en';}elseif(get_locale()=='sk_SK'){$lang='sk'; }elseif(get_locale()=='hu_HU'){$lang='hu';}
 if($lang=='sk'){
   $header_text ='Dobrá fotka osloví, otvorí dvere na mysli a spojí dušu s dušou.';
   $kontakt='kontakt';
   $kredo='KRÉDO';
   $portfolio='portfólio';
   $svadba='svadba';
   $udalosti='udalosti';
   $portret='portrét';
   $produkt='produkt';
   $blackwhite='B & W';
   $impresie='impresie';
   $kontakt_oslovenie='Budem veľmi rád, ak ma oslovíte, som pripravený na spoluprácu s vami. Venujte, prosím chvílku na vyplnenie tohto formulára:';
   $meno='Meno:';
   $telefon='Telefón:';
   $sprava='Správa';
   $poslat='poslať';
   $dakujem='Ďakujem,';
   $succes_message='<p>správa bola úspešne odoslaná,</p>
   <p>čoskoro Vás budem kontaktovať.</p>';
   // var_dump(get_the_ID());
 }
 elseif($lang=='hu'){
   $header_text ='Megfogni a megfoghatatlant, megmenteni azt, ami egyébként elveszne, a pillanatot örökkévalósággá nemesíteni - ez a fénykép, a fotó becses titka.';
   $kontakt='ELÉRHETŐSÉG';
   $kredo='krédo';
   $portfolio='PORTFÓLIÓ';
   $svadba='ESKÜVŐ';
   $udalosti='ESEMÉNYEK';
   $portret='PORTRÉ';
   $produkt='TERMÉK';
   $blackwhite='B & W';
   $impresie='EGYÉB';
   $kontakt_oslovenie='Kedves Látogató, ha kérdésed van, kérlek alább írd meg. Igyekszem mihamarabb választ adni.';
   $meno='Név:';
   $telefon='Telefon:"';
   $sprava='Üzenet';
   $poslat='Elküldés';
   $dakujem='Köszönöm!';
   $succes_message='<p>Az üzenet sikeresen elkülve.</p>
   <p>Rövidesen válaszolok!</p>';

 }
 elseif($lang=='en'){
   $header_text ='To grasp the ungraspable, to rescue what would otherwise be lost, to refine the moment so it can take its place in eternity – this is the precious secret of photography. ';
   $kontakt='CONTACT';
   $kredo='CREDO';
   $portfolio='PORTFOLIO';
   $svadba='WEDDING';
   $udalosti='EVENT';
   $portret='PORTRAIT';
   $produkt='PRODUCT';
   $blackwhite='B & W';
   $impresie='IMPRESSION';
   $kontakt_oslovenie='Dear Visitor, if you have any questions please do not hesitate to contact me. I will reply as soon as possible.';
   $meno='Name:';
   $telefon='Phone:';
   $sprava='Message:';
   $poslat='Send';
   $dakujem='Thank you! ';
   $succes_message='<p>Your message has been sent successfully.</p>
   <p>I will reply as soon as possible. </p>';
 }

?>

<section id="kontakt">
	<div class="container">
		<div class="flower-box">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/kvet.png" alt="kvet">
			<h2><?php echo $kontakt;  ?></h2>
			<div class="flower-border"></div>
		</div>
	</div>
	<?php if($lang=='sk'){echo '	<p>„Úžasné momenty sa rodia s úžasnou príležitosťou.“</p>
		<p>Nikola Tesla</p> <br>';}  ?>
	<p><?php echo $kontakt_oslovenie;  ?></p>

	<div class="container">
		<div class="w3-twothird">
			<form name="contactform" method="post" id="contact-form" class="w3-container w3-margin" >
				<div class="w3-row w3-section">
					<div class="w3-rest">
						<input class="w3-input w3-border" name="name" type="text" placeholder="<?php echo $meno;  ?>"  required>

					</div>
				</div>
				<div class="w3-row w3-section">
					<div class="w3-rest">
						<input class="w3-input w3-border" id="email" name="email" type="text" placeholder="E-mail:" required>
					</div>
				</div>
				<div class="w3-row w3-section">
					<div class="w3-rest">
						<input class="w3-input w3-border" name="phone" type="text" placeholder="<?php echo $telefon;  ?>">
					</div>
				</div>
				<!-- <div class="w3-row w3-section">
					<div class="w3-rest">
						<input class="w3-input w3-border" name="date" type="text" placeholder="čas svadby:">
					</div>
				</div>
				<div class="w3-row w3-section">
					<div class="w3-rest">
						<input class="w3-input w3-border" name="place" type="text" placeholder="miesto svadby:">
					</div>
				</div> -->
				<div class="w3-row w3-section">
					<div class="w3-rest">
						<textarea rows="5" class="w3-input w3-border" name="message" type="text-area" required><?php echo $sprava;  ?></textarea>
					</div>
				</div>
				<button class="w3-input"><?php echo $poslat;  ?></button>
				</form>
				<div id="myModal" class="modal success-popup">
					<div class="modal-content">
						<span class="close">&times;</span>
						<h3><?php echo $dakujem;  ?></h3>
						<?php echo $succes_message;  ?>
					</div>

				</div>
		</div>
		<div class="w3-third">
				<a href="mailto:barosphoto@gmail.com">barosphoto@gmail.com</a>
				<a href="tel:+421 905 747 041">+421 905 747 041</a>
				<img src="<?php bloginfo('stylesheet_directory');?>/img/Robi1.jpg" alt="">
		</div>
	</div>

</section>
</main>
<footer>
<div class="social">
	<div class="social-box">
		<a href="https://www.facebook.com/barosphoto" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/facebook.png" alt=""></a>
		<a href="https://www.flickr.com/photos/136456851@N04/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/bodky.png" alt=""></a>
		<a href="#" ><img src="<?php bloginfo('stylesheet_directory');?>/img/instagram.png" alt=""></a>
		<a href="mailto:barosphoto@gmail.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/posta.png" alt=""></a>
	</div>
	<div class="social-border-dotted"></div>
</div>
<div class="footerbox">
	<div class="footer-content">
		<div class="w3-quarter	">
			<p>BAROS PHOTO</p>
			<p>Róbert BAROS</p>
			<p>925 81 Diakovce 601</p>
			<p><a href="tel:+421 905 747 041">+421 905 747 041</a> </p>
			<a href="mailto:barosphoto@gmail.com">barosphoto@gmail.com</a><br>
			<a href="http://www.barosphoto.sk" target="_blank">www.barosphoto.sk</a><br>
			<a href="https://www.facebook.com/barosphoto" target="_blank">www.faccebook.com/barosphoto</a>

		</div>
		<div class="w3-quarter center	">
			<?php if($lang=='sk'){ echo'<h3>MENU</h3>';}  ?>
				<ul>
					<li><a href="<?php bloginfo('url');?>/#kredo"><?php echo $kredo;?></a></li>
					<li><a href="<?php bloginfo('url');?>/#vyber"><?php echo $portfolio;?></a></li>
					<li><a href="#kontakt"><?php echo $kontakt;?></a></li>
				</ul>
		</div>
	</div>


</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/main.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/smartphoto.js"></script>

<script type="text/javascript">
$(document).ready(function() {

	$(window).scroll( function(){

				/* Check the location of each desired element */
				$('.img').each( function(i){

						var bottom_of_object = $(this).offset().top + $(this).outerHeight() -500;
						var bottom_of_window = $(window).scrollTop() + $(window).height() ;

						/* If the object is completely visible in the window, fade it it */
						if( bottom_of_window > bottom_of_object ){

								$(this).animate({'opacity':'1'},1000);

						}

				});

		});
	});
</script>
</body>
</html>
