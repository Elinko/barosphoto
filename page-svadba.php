<?php
/*
	Template Name: Svadba
*/
// Advanced custom fields treba ulozit do premennej v pripade vytvorenia CPT ktore treba nacitat az po ACF
$url=home_url( $wp->request );
echo $url;
if($url=='http://barosphoto.sk/en/wedding' || $url=='http://barosphoto.sk/svadba' || $url=='http://barosphoto.sk/hu/eskuvo'  ){
  $uzke = get_field('galeria_uzke_foto',33);
  $siroke = get_field('galeria_siroke_foto',33);
}
if($url=='http://barosphoto.sk/en/event' || $url=='http://barosphoto.sk/udalosti' || $url=='http://barosphoto.sk/hu/esemenyek'  ){
  $uzke = get_field('galeria_uzke_foto',55);
  $siroke = get_field('galeria_siroke_foto',55);
}
if($url=='http://barosphoto.sk/en/portrait' || $url=='http://barosphoto.sk/portret' || $url=='http://barosphoto.sk/hu/portre'  ){
  $uzke = get_field('galeria_uzke_foto',126);
  $siroke = get_field('galeria_siroke_foto',126);
}
if($url=='http://barosphoto.sk/en/product' || $url=='http://barosphoto.sk/produkt' || $url=='http://barosphoto.sk/hu/termek'  ){
  $uzke = get_field('galeria_uzke_foto',202);
  $siroke = get_field('galeria_siroke_foto',202);
}
if($url=='http://barosphoto.sk/en/blackwhite-en' || $url=='http://barosphoto.sk/blackwhite' || $url=='http://barosphoto.sk/hu/blackwhite-hu'  ){
  $uzke = get_field('galeria_uzke_foto',212);
  $siroke = get_field('galeria_siroke_foto',212);
}
if($url=='http://barosphoto.sk/en/impression' || $url=='http://barosphoto.sk/impresie' || $url=='http://barosphoto.sk/hu/egyeb'  ){
  $uzke = get_field('galeria_uzke_foto',234);
  $siroke = get_field('galeria_siroke_foto',234);
}

if(get_locale()=='en_GB'){$lang='en';}elseif(get_locale()=='sk_SK'){$lang='sk'; }elseif(get_locale()=='hu_HU'){$lang='hu';}
if($lang=='sk'){
  $portfolio='portfólio';
}
elseif($lang=='hu'){
  $kredo='krédo';
  $portfolio='PORTFÓLIÓ';
}
elseif($lang=='en'){
  $portfolio='PORTFOLIO';
}

$title = get_field('nadpis_na_stranke');
$max_uzke= sizeof($uzke);
$max_siroke= sizeof($siroke);
$max_uzke--;
$max_siroke--;

// v headeri nacitavame novy post z CPT
get_header();



$size = 'full'; // (thumbnail, medium, large, full or custom size)

 ?>
 <main>
 	<div class="back-top">
 		<div class="back-top-content">
 			<i class="fas fa-arrow-up"></i>
 		</div>
 	</div>
 	<section id="galeria" class="galeria-section">
 		<div class="container" >
 				<div class="flower-box">
 					<img src="<?php bloginfo('stylesheet_directory');?>/img/kvet.png" alt="kvet">
 					<h2><?php echo $portfolio; ?></h2>
 					<div class="flower-border"></div>
 					<h3><?php echo $title; ?></h3>
 				</div>
 				<div class="podpis">
 					<img src="<?php bloginfo('stylesheet_directory');?>/img/podpis.png" alt="">
 				</div>
 		</div>

 				<div class="container-image">
          <?php
          $u=$max_uzke;
          $s=$max_siroke;
          while((($max_uzke-($max_uzke-$u))>=3)&&(($max_siroke-($max_siroke-$s))>=3)) {
            echo'<div class=" four-img">
        						<div class="w3-half">';
        		echo'			<div class="img long">
        								<a href="'.$uzke[$u]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
        									<img src="'.$uzke[$u]['sizes']['large'].'" alt="svadba">
        								</a>
        							</div>'; $u--;
        		echo'			<div class=" img short ">
        								<a href="'.$siroke[$s]['sizes']['large'].'"  class="js-img-viwer" data-caption=" " data-id="aaa">
        									<img src="'.$siroke[$s]['sizes']['large'].'" alt="svadba">
        								</a>
        							</div>
        						</div>';$s--;
        		echo'		<div class="w3-half">
        							<div class="img short ">
        								<a href="'.$siroke[$s]['sizes']['large'].'"  class="js-img-viwer" data-caption=" " data-id="aaa">
        									<img src="'.$siroke[$s]['sizes']['large'].'" alt="svadba">
        								</a>
        							</div>';$s--;
        		echo'			<div class="img long">
        								<a href="'.$uzke[$u]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
        									<img src="'.$uzke[$u]['sizes']['large'].'" alt="svadba">
        								</a>
        							</div>
        						</div>
        					</div>';$u--;
            echo '<div class=" two-img">
        						<div class="img w3-half long">
        							<a href="'.$uzke[$u]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
        								<img src="'.$uzke[$u]['sizes']['large'].'" alt="svadba">
        							</a>
        						</div>';$u--;
            echo'	  <div class="img w3-half long">
        							<a href="'.$uzke[$u]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
        								<img src="'.$uzke[$u]['sizes']['large'].'" alt="svadba">
        							</a>
        						</div>
        					</div>';$u--;
            echo'<div class="img one-img">
        						<a href="'.$siroke[$s]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
        							<img src="'.$siroke[$s]['sizes']['large'].'" alt="svadba">
        						</a>
        				 </div>';$s--;
          }
          while(($s>0)){
            echo'<div class="img one-img">
                    <a href="'.$siroke[$s]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
                      <img src="'.$siroke[$s]['sizes']['large'].'" alt="svadba">
                    </a>
                 </div>';$s--;
          }
          while ((($max_uzke-($max_uzke-$u))>0)) {
            echo '<div class=" two-img">
                    <div class="img w3-half long">
                      <a href="'.$uzke[$u]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
                        <img src="'.$uzke[$u]['sizes']['large'].'" alt="svadba">
                      </a>
                    </div>';$u--;
            echo'	  <div class="img w3-half long">
                      <a href="'.$uzke[$u]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
                        <img src="'.$uzke[$u]['sizes']['large'].'" alt="svadba">
                      </a>
                    </div>
                  </div>';$u--;
          }
          if ((($max_uzke-($max_uzke-$u))>-1)) {
            echo'	<div class=" two-img">
                    <div class="img w3-half long">
                      <a href="'.$uzke[$u]['sizes']['large'].'" class="js-img-viwer" data-caption="" data-id="aaa">
                        <img src="'.$uzke[$u]['sizes']['large'].'" alt="svadba">
                      </a>
                    </div>
                  </div>';$u--;
          }

           ?>



        </div>
 	</section>
 <?php
 get_footer();
