<?php
/*
	Template Name: Home Page
*/
// Advanced custom fields
// $popisstranky= get_field('popis_stranky');
// $nadpisstranky= get_field('nadpis_stranky');
// $loop = new WP_query(array('post_type' => 'pozadie_pre_menu', 'orderby' => 'post_id', 'order' => 'ASC'));
// $loop->the_post();

if(get_locale()=='en_GB'){$lang='en';}elseif(get_locale()=='sk_SK'){$lang='sk'; }elseif(get_locale()=='hu_HU'){$lang='hu';}
$text = get_field('text');

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


$loop = new WP_query(array('post_type' => 'pozadie_pre_menu', 'orderby' => 'post_id', 'order' => 'ASC'));
$loop->the_post();


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="description" content="Hľadáte fotografa v okolí Galanty? Práve ste objavili ideálneho fotografa na svadby, udalosti, portréty, rodinné fotky.">
 	<meta name="keywords" content="fotograf galanta, baros photo, robert baros">
 	<title>Barosphoto.sk</title>
 	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/b-logo.png" type="image/x-icon"/>
 	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/normalize.css">
 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">
	<?php //wp_head(); ?>

 </head>
 <body>
 <header class="index-header">
 	<p><?php echo $header_text; ?></p>
 	<div class="podpisuvod">
 		<img src="<?php bloginfo('stylesheet_directory');?>/img/podpis.png" alt="">
 	</div>
 		<div class="w3-row">
 		  <div class="w3-third w3-container ">
 					<a href="<?php bloginfo('url');?>">
 						<div class="logo">
 							<h1>baros photo</h1>
 						</div>
 					</a>

 		  </div>
 		  <div class="w3-half w3-container">
        <span class="language">
          <a href="http://barosphoto.sk/" class="<?php if($lang=='sk') echo'activ'; ?>">SK</a>
          <a href="http://barosphoto.sk/en/" class="<?php if($lang=='en') echo'activ'; ?>">EN</a>
          <a href="http://barosphoto.sk/hu/" class="<?php if($lang=='hu') echo'activ'; ?>">HU</a>
        </span>
 				<div class="w3-bar navigation">
   				<a href="#kontakt" class="w3-bar-item w3-button clickontakt"><?php echo $kontakt;  ?></a>

          <div class="w3-dropdown-hover">
            <button class="w3-button"><?php echo $portfolio;  ?></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-3">
              <a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/wedding';}elseif($lang=='sk'){echo'/svadba';}elseif($lang=='hu'){echo'/eskuvo';} ?>" class="menu-item"><p> <?php echo $svadba;  ?></p>
                  <img src="<?php the_field('svadba_pozadie') ?>" alt="svadba">
              </a>
              <a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/event';}elseif($lang=='sk'){echo'/udalosti';}elseif($lang=='hu'){echo'/esemenyek';} ?>" class="menu-item"><p><?php echo $udalosti;  ?></p>
                <img src="<?php the_field('udalosti_pozadie') ?>" alt="udalosti">
              </a>
              <a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/portrait';}elseif($lang=='sk'){echo'/portret';}elseif($lang=='hu'){echo'/portre';} ?>" class="menu-item"><p><?php echo $portret;  ?></p>
                <img src="<?php the_field('portret_pozadie') ?>" alt="portrét">
              </a>
              <a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/product';}elseif($lang=='sk'){echo'/produkt';}elseif($lang=='hu'){echo'/termek';} ?>" class="menu-item"><p><?php echo $produkt;  ?></p>
                <img src="<?php the_field('produkt_pozadie') ?>" alt="kava">
              </a>
              <a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/blackwhite-en';}elseif($lang=='sk'){echo'/blackwhite';}elseif($lang=='hu'){echo'/blackwhite-hu';} ?>" class="menu-item"><p><?php echo $blackwhite;  ?></p>
                <img src="<?php the_field('black&white_pozadie') ?>" alt="blackwhite">
              </a>
              <a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/impression';}elseif($lang=='sk'){echo'/impresie';}elseif($lang=='hu'){echo'/egyeb';} ?>" class="menu-item"><p><?php echo $impresie;  ?></p>
                <img src="<?php the_field('impresie_pozadie') ?>" alt="impresie">
              </a>
            </div>
          </div>
   					<a href="" class="w3-bar-item w3-button clickredo"><?php echo $kredo;  ?></a>


 				</div>
 		  </div>
 		</div>
 		<a href="" class="scrolltokredo">
 			<i class="fas fa-chevron-down"></i>
 		</a>

 </header>
 <main>
 	<div class="back-top">
 		<div class="back-top-content">
 			<i class="fas fa-arrow-up"></i>
 		</div>
 	</div>
 	<section id="kredo">
 		<div class="container" id>
 				<div class="flower-box">
 					<img src="<?php bloginfo('stylesheet_directory');?>/img/kvet.png" alt="kvet">
 					<h2><?php echo $kredo;  ?></h2>
 					<div class="flower-border"></div>
 				</div>
 				<?php echo $text; ?>
 				<div class="flower-box">
 					<img src="<?php bloginfo('stylesheet_directory');?>/img/kvet.png" alt="kvet">
 					<h2><?php echo $portfolio;  ?></h2>
 					<div class="flower-border"></div>
 				</div>
 		 </div>
 	</section>
 	<section id="vyber">
 			<div class="container-image">
 				<div class="w3-half ">
 					<a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/wedding';}elseif($lang=='sk'){echo'/svadba';}elseif($lang=='hu'){echo'/eskuvo';} ?>">
 						<img src="<?php the_field('svadba_pozadie') ?>" alt="svadba">
 						<div class="image-info">
 							<h3><?php echo $svadba;  ?></h3>
 						</div>
 					</a>
 				</div>
 				<div class="w3-half">
 					<a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/event';}elseif($lang=='sk'){echo'/udalosti';}elseif($lang=='hu'){echo'/esemenyek';} ?>">
 						<img src="<?php the_field('udalosti_pozadie') ?>" alt="udalosti">
 						<div class="image-info">
 							<h3><?php echo $udalosti;  ?></h3>
 						</div>
 					</a>
 				</div>
 				<div class="w3-half">
 					<a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/portrait';}elseif($lang=='sk'){echo'/portret';}elseif($lang=='hu'){echo'/portre';} ?>">
 						<img src="<?php the_field('portret_pozadie') ?>" alt="portrét">
 						<div class="image-info">
 							<h3><?php echo $portret;  ?></h3>
 						</div>
 					</a>
 				</div>
 				<div class="w3-half">
 					<a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/product';}elseif($lang=='sk'){echo'/produkt';}elseif($lang=='hu'){echo'/termek';} ?>">
 						<img src="<?php the_field('produkt_pozadie') ?>" alt="kava">
 						<div class="image-info">
 							<h3><?php echo $produkt;  ?></h3>
 						</div>
 					</a>
 				</div>
 				<div class="w3-half">
 					<a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/blackwhite-en';}elseif($lang=='sk'){echo'/blackwhite';}elseif($lang=='hu'){echo'/blackwhite-hu';} ?>">
 						<img src="<?php the_field('black&white_pozadie') ?>" alt="b&w">
 						<div class="image-info">
 							<h3><?php echo $blackwhite;  ?></h3>
 						</div>
 					</a>
 				</div>
 				<div class="w3-half">
 					<a href="<?php echo bloginfo('url'); if($lang=='en'){echo'/impression';}elseif($lang=='sk'){echo'/impresie';}elseif($lang=='hu'){echo'/egyeb';} ?>">
 						<img src="<?php the_field('impresie_pozadie') ?>" alt="impresie">
 						<div class="image-info">
 							<h3><?php echo $impresie;  ?></h3>
 						</div>
 					</a>
 				</div>
 			</div>
 	</section>
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

  </body>
  </html>
<?php
// get_sidebar();
// get_footer();
