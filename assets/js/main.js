$(document).ready(function() {

    // on click to back top arrow
    $('.back-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1600);
        return false;
    });
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
          // back top arrow
          if ($(this).scrollTop() > 500) {
              $('.back-top').fadeIn();
          } else {
              $('.back-top').fadeOut();
          }

      });

// nastavenie dlzky headeru
  	var vyskaokna =  $(window).height() ;
  	$('.index-header').height(vyskaokna*.9);

  	$('.scrolltokredo').click( function(e){
  		e.preventDefault();
  		$('html, body').animate({ scrollTop: vyskaokna }, 1000);
  	});
// skrolnut z headeru
  	$('.clickredo').click( function(e){
  		e.preventDefault();
  		$('html, body').animate({ scrollTop: vyskaokna }, 1000);
  	});
// odstranit reklamu
    $('.dulezite').hide();
    $('.partner').hide();
    $('.eq').hide();
    var location= window.location.pathname;

      // formular
      if(location=='/'){
        $('#contact-form').validate({
            messages: {
              name: 'Prosím, doplňte svoje meno',
              date: 'Prosím, doplňte dátum udalosti',
              phone: 'Prosím, doplňte svoj telefón',
              email: {
                required: 'Prosím, doplňte e-mail',
                email: 'Prosím, doplňte e-mail v správnom tvare'
              },
              place: 'Prosím, doplňte miesto udalosti',
              message: 'Prosím, doplňte svoju správu'
            },
            submitHandler: postValidForm
        });
      }
      if(location=='/en/'){
        $('#contact-form').validate({
            messages: {
              name: 'Please fill out your name',
              date: 'Prosím, doplňte dátum udalosti',
              phone: 'Prosím, doplňte svoj telefón',
              email: {
                required: 'Please fill out your e-mail',
                email: 'Please fill out your e-mail'
              },
              place: 'Prosím, doplňte miesto udalosti',
              message: 'Prosím, doplňte svoju správu'
            },
            submitHandler: postValidForm
        });
      }
      if(location=='/hu/'){
        $('#contact-form').validate({
            messages: {
              name: 'Kérem töltse ki a nevét',
              date: 'Prosím, doplňte dátum udalosti',
              phone: 'Prosím, doplňte svoj telefón',
              email: {
                required: 'Kérem töltse ki a e-mail címét',
                email: 'Kérem töltse ki a e-mail címét'
              },
              place: 'Prosím, doplňte miesto udalosti',
              message: 'Prosím, doplňte svoju správu'
            },
            submitHandler: postValidForm
        });
      }

      function postValidForm() {
        // $('.form').hide();
        $('.success-popup').show();
        $.ajax({
          method: 'POST',
          url: 'http://barosphoto.sk/send-mail.php',
          data: $('#contact-form').serialize(),
          datatype: 'json',
          success: function success(data) {
            if (data === '1') {
              $('#contact-form')[0].reset();
              // $('.form').hide();
              $('.success-popup').show();
              // if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
              //   window.scrollTo(200, 1000);
              // } else {
              //   $('html,body').animate({
              //     scrollTop: 1000,
              //     scrollLeft: 200
              //   }, 800, function () {
              //     $('html,body').clearQueue();
              //   });
              // }
            } else {
                    console.log(data);
              $('.submit-fail').fadeIn(400);
            }
          },
          error: function error() {
                  console.log(data);
            $('.submit-fail').fadeIn(400);
          }
        });
      };

      //  pre modal
      // Get the modal
      var modal = document.getElementById('myModal');

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }

      $('.more-link').text('Čítaj viac');
      $('.post-navigation').hide();
  });


  document.addEventListener('DOMContentLoaded',function(){
  	var photo = new SmartPhoto(".js-img-viwer");
  			photo.on('change',function(){
  					console.log('change');
  			});
  			photo.on('close',function(){
  					console.log('close');
  			});
  			photo.on('swipestart',function(){
  					console.log('swipestart');
  			});
  			photo.on('swipeend',function(){
  					console.log('swipeend');
  			});
  			photo.on('loadall',function(){
  					console.log('loadall');
  			});
  			photo.on('zoomin',function(){
  					console.log('zoomin');
  			});
  			photo.on('zoomout',function(){
  					console.log('zoomout');
  			});
  			photo.on('open',function(){
  					console.log('open');
  			});
      });
