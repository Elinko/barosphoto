<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package barosphoto-wp
 */

 // show id and url
 // var_dump(get_the_ID());
 // echo home_url( $wp->request );

 // get the images for menu categories
 $loop = new WP_query(array('post_type' => 'pozadie_pre_menu', 'orderby' => 'post_id', 'order' => 'ASC'));
 $loop->the_post();

 if(get_locale()=='en_GB'){$lang='en';}elseif(get_locale()=='sk_SK'){$lang='sk';}elseif(get_locale()=='hu_HU'){$lang='hu';}


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
<!DOCTYPE html>
<html <?php //language_attributes(); ?> style="margin-top:0;">
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="description" content="Hľadáte fotografa v okolí Galanty? Práve ste objavili ideálneho fotografa na svadby, udalosti, portréty, rodinné fotky.">
 <meta name="keywords" content="fotograf galanta, baros photo, robert baros">
 <title>Barosphoto.sk</title>

 <link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/b-logo.png" type="image/x-icon"/>
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/smartphoto.css">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/normalize.css">
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
 <script src="<?php bloginfo('stylesheet_directory');?>/assets/js/smartphoto.js"></script>
	<?php //wp_head(); ?>
</head>

<body <?php //body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'barosphoto-wp' ); ?></a>

	<header class="galeria">
			<div class="w3-row">
				<div class="w3-third w3-container ">
						<a href="<?php bloginfo('url');?>">
							<div class="logo">
								<h1>baros photo</h1>
							</div>
						</a>

			  </div>
				<div class="w3-half w3-container">
					<div class="w3-bar navigation">
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

	</header>
