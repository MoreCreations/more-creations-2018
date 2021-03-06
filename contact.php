<?php
if ( isset( $_POST[ 'submit' ] ) ) {

	$naam = $_POST[ "naam" ];
	$email = $_POST[ "email" ];
	$bericht = $_POST[ "bericht" ];

	$to = "hello@morecreations.nl";
	$subject = "Nieuw bericht via morecreations.nl";
	$body = "Naam: $naam - Email: $email - Bericht: $bericht";
	$headers = 'From: noreply@morecreations.nl' . "\r\n" .
	'Reply-To: noreply@morecreations.nl' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

  if ( mail( $to, $subject, $body, $headers ) ) {
		echo( '<div class="kontainer">
            <div class="verzonden">
						<img src="img/contact-succes.svg">
              <h2>Verzonden! We proberen zo snel mogelijk contact met je op te nemen!</h2>
            </div>
          </div>' );
	} else {
		echo( '<div style="position:relative; z-index:999;" class="kontainer">
		<div class="verzonden">
				<img src="img/contact-fail.svg">
				<h2>Woeps! Volgens mij ben je iets vergeten in te vullen! Check goed na of je alles wel hebt ingevuld!</h2>
			</div>
		</div>');
	}
}
?>
<!doctype html>
<html lang="en"><head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Contact | More Creations</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e1d7a67d-8a6d-4cb6-b592-f53ee4478cbf";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
  <div class="big-ass-container">

<div class="nav-container">

  <div class="nav">
    <div class="nav-header">

    <div class="logo">
<a href="index.html">
      <svg class="logo-more" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 393.9 154" style="enable-background:new 0 0 393.9 154;" xml:space="preserve">
      <style type="text/css">
        .st0{fill:#76CEFF;}
      </style>
      <g >
        <g >
          <g>
            <polygon  class="st0" points="55.2,40.9 24.9,5.8 4,5.8 4,102.3 22.2,102.3 22.2,32.1 55.2,70 87.9,32.3 87.9,102.3 106.1,102.3
              106.1,30.3 85.1,6.1 			"/>
            <path class="st0" d="M165.6,3.7c-28.2,0-44.2,18.2-48.4,39.2l17.8,20.4c-0.6-2.8-0.9-5.6-1-8.4c-0.4-16.3,9-34.6,31.7-34.6
              c22.7,0,31.8,18.2,31.6,34.5c-0.3,15.8-8.8,32.9-31.6,32.9c-4,0-7.6-0.5-10.7-1.5l15.7,18c30.4-2.3,44.3-26,44.5-49.7
              C215.4,29.2,198.8,3.7,165.6,3.7z"/>
            <path class="st0" d="M270.5,53.5h-27.7V22.6h24.1l-14.8-17c-9.2,0-18.3-0.1-27.5-0.1v96.6h18.2V69.9l14.7,0l28.1,32.2l25.6,0.3
              l-30.4-34.8c7.8-1.6,13.4-4.9,17.3-9.2l-12.3-14.1C283.8,49.5,278.9,53.5,270.5,53.5z"/>
            <path class="st0" d="M389,23.3V5.7h-72.2c0,24.7,0,49.4,0,74.1l19.5,22.4H389V84.2h-54.2V62.4H387v-17h-52.2V23.3H389z"/>
          </g>
        </g>
        <g>
          <path class="st0" d="M21.7,132.1l-1.7,2.2c-1.6-1.5-3.7-2.4-6.3-2.4c-4.4,0-7.5,3.2-7.5,7.8c0,4.6,3.1,7.8,7.5,7.8
            c2.8,0,5-1,6.5-2.7l1.8,1.9c-1.9,2.3-4.8,3.6-8.4,3.6c-6.1,0-10.4-4.4-10.4-10.6c0-6.3,4.4-10.6,10.4-10.6
            C17,128.9,19.8,130.1,21.7,132.1z"/>
          <path class="st0" d="M57.3,133.7c1.4-3.1,4-4.8,7.6-4.8v3.2c-4.4-0.1-7.2,2.7-7.6,6.8v11.2h-3.1V129h3.1V133.7z"/>
          <path class="st0" d="M113.6,140.8H96.4c0.6,4.1,3.6,6.7,7.6,6.7c2.6,0,4.9-0.9,6.5-2.6l1.7,1.8c-2,2.2-5,3.5-8.5,3.5
            c-6.2,0-10.5-4.4-10.5-10.6c0-6.3,4.3-10.6,10.4-10.6C110.5,128.9,113.9,133.6,113.6,140.8z M110.8,138.2c-0.2-4-2.9-6.6-7-6.6
            c-4,0-6.9,2.6-7.4,6.6H110.8z"/>
          <path class="st0" d="M158.4,146.9c-1.7,2.3-4.4,3.4-7.7,3.4c-4.4,0-7.2-2.8-7.2-6.4c0-3.7,2.9-6,7.9-6h6.9v-1.2
            c0-3.1-1.9-4.9-5.6-4.9c-2.3,0-4.5,0.9-6.7,2.4l-1.3-2.3c2.7-1.8,5-2.8,8.6-2.8c5.2,0,8.1,2.8,8.1,7.3l0,13.9h-3V146.9z
             M158.4,142.8v-2.5h-6.6c-3.5,0-5.4,1.1-5.4,3.4c0,2.3,1.9,3.8,4.8,3.8C154.9,147.5,157.6,145.7,158.4,142.8z"/>
          <path class="st0" d="M205.7,148.7c-1.5,1-3.1,1.6-4.8,1.6c-3.1,0-5.4-1.8-5.4-6v-12h-3v-2.5h3v-5.6h3.1v5.6l6.7,0v2.6h-6.7v11.5
            c0,2.6,1,3.5,2.8,3.5c1.1,0,2.2-0.4,3.4-1.1L205.7,148.7z"/>
          <path class="st0" d="M240.4,123c0,1.2-0.9,2.2-2,2.2c-1.2,0-2-0.9-2-2.2c0-1.2,0.9-2.2,2-2.2C239.5,120.8,240.4,121.7,240.4,123z
             M236.8,150.1V129h3.1v21.1H236.8z"/>
          <path class="st0" d="M293.1,139.5c0,6.3-4.4,10.7-10.7,10.7c-6.2,0-10.7-4.4-10.7-10.7c0-6.3,4.4-10.6,10.7-10.6
            C288.7,128.9,293.1,133.3,293.1,139.5z M274.9,139.6c0,4.6,3.2,7.8,7.6,7.8c4.4,0,7.6-3.2,7.6-7.8c0-4.6-3.2-7.8-7.6-7.8
            C278.1,131.8,274.9,135,274.9,139.6z"/>
          <path class="st0" d="M344.3,137.1v13h-3.1v-12.2c0-3.7-2.2-5.9-6-5.9c-4.2,0-6.7,2.8-7.1,6.8v11.3H325V129h3.1v4.6
            c1.5-3.2,4.3-4.7,8.2-4.8C341.3,128.9,344.3,132,344.3,137.1z"/>
          <path class="st0" d="M390,130.8l-1.2,2.5c-1.6-1-3.8-1.7-5.7-1.7c-2.4,0-4.2,0.8-4.2,2.8c0,4.7,11.8,2.3,11.8,9.8
            c0,4.2-3.7,6-7.7,6c-3,0-6.1-1-8.1-3l1.2-2.4c1.8,1.7,4.5,2.7,7,2.7s4.5-0.9,4.5-3c0.1-5.1-11.7-2.5-11.6-10c0-4,3.5-5.7,7.3-5.7
            C385.8,128.9,388.2,129.6,390,130.8z"/>
        </g>
      </g>
      </svg>
</a>
    </div>
    <div class="hamburger">
      <div class="stripe top">

      </div>
      <div class="stripe margin-top midden">

      </div>
      <div class="stripe margin-top bottom">

      </div>
    </div>
  </div>
  <div class="rechts menu-hover">


    <div class="item item1">
      <a class="menu-item" href="index.html">
        <span class="menu-item-name" >Home</span>
      </a>
    </div>
    <div class="item item2">
      <a class="menu-item" href="studio.html">
        <span class="menu-item-name" >Studio</span>
      </a>        </div>
    <div class="item item3">
      <a class="menu-item" href="portfolio.html">
        <span class="menu-item-name" >Portfolio</span>
      </a>        </div>
    <div class="item item4">
      <a class="menu-item" href="contact.php">
        <span class="menu-item-name" >Contact</span>
      </a>        </div>

  </div>

  </div>

</div>

<div class="header gradient-top vc">
  <div class="headertekst">
    <div class="andereheader">
      <h2 data-aos="fade-down">Start een project <br>met ons</h2>
      <p data-aos="fade-up">Wij willen je graag beter leren kennen en kijken of we
      wat voor elkaar kunnen betekenen! Wij zien je mailtje graag tegemoet komen!</p>
    </div>
  </div>
</div>

<div class="contact">
  <div class="content">
    <form action="contact.php" method="post" class="contact100-form validate-form">

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
        <span class="label-input100">Hoe heet je?</span>
        <input required class="input100" type="text" name="naam" placeholder="Plaats hier je naam">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Wat is je email?</span>
        <input required class="input100" type="email" name="email" placeholder="Typ hier je email adres">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <span class="label-input100">Wat wil je graag vragen?</span>
        <textarea required class="input100" name="bericht" placeholder="Typ hier je vraag..."></textarea>
        <span class="focus-input100"></span>
      </div>

      <div class="container-contact100-form-btn">
          <span>
            <input class="verzend" type="submit" name="submit" value="Versturen">
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
          </span>
      </div>
    </form>
  </div>
  </div>

<!--
  <div id="forum" class="forum">

  <form class="forum1" action="contact.php" method="post">
    <div class="form-left">

    <input class="naam" type="text" name="naam" placeholder="Naam"><br>
     <input class="email" type="email" name="email" placeholder="E-mail"><br>
   </div>

  <div class="form-right">

     <textarea class="text" name="bericht" placeholder="Bericht" rows="8" cols="80"></textarea>
     <input class="verzend" type="submit" name="submit" value="Neem contact op">
   </div>

  </form>

  </div>
-->

<div class="contactinfo">
  <div class="content cont">
    <h2>Onze Contactgegevens</h2>
      <div class="contactinformatie">
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <h5>Email</h5>
            <p>hello@morecreations.nl</p>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-4">
            <h5>Telefoon</h5>
            <p>+31 6 41 804 177</p>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
  </div>
</div>

<div class="call-to-action">
  <div class="content">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="contact-deck contact-links" data-aos="fade-right">
          <h3>Contact opnemen</h3>
            <div class="contact-deck-text">
              <p>Ben je overtuigd van wat wij kunnen?
                Wij staan te popelen om kennis te maken en samen
                te ontdekken wat wij voor elkaar kunnen betekenen!</p>
            </div>
              <a href="mailto:hello@morecreations.nl"><div class="button">Stuur direct een mail</div></a>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="contact-deck contact-rechts" data-aos="fade-left">
          <h3>Ons portfolio</h3>
            <div class="contact-deck-text">
              <p>Benieuwd naar al onze creaties?
                Neem gerust een kijkje op onze portfolio pagina
                om te zien wat wij allemaal hebben uitgespookt 👻</p>
            </div>
              <a href=""><div class="button">Bezoek direct de pagina</div></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer bubbles">
  <div class="content">
    <div class="row">
      <div class="col-sm-12 col-lg-8">
        <div class="footer-call-to-action" data-aos="fade-right">
          <p>Ben je al overtuigd van wat wij kunnen? Aarzel niet langer en stuur een mailtje naar <br> <a href="mailto:hello@morecreations.nl" class="gradient">hello@morecreations.nl</a></p>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="socials" data-aos="fade-left">
          <a href="https://www.linkedin.com/company/more-creations/" target="_blank"><img src="img/social/linkedin.svg"/></a>
          <a href="https://www.facebook.com/morecreationsnl/" target="_blank"><img src="img/social/facebook.svg" /></a>
          <a href="https://dribbble.com/thomasotter" target="_blank"><img src="img/social/dribbble.svg" /></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/nav.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
			AOS.init({
				easing: 'ease-in-out',
				duration: 700
			});
		</script>
    <script>

      // TIJD VOOR FADE-OUT CONTACT BERICHT

setTimeout(function() {
  $('.verzonden').addClass('animate-out');
}, 3000); // <-- time in milliseconds
setTimeout(function() {
  $('.verzonden').addClass('remove');
}, 5000); // <-- time in milliseconds
</script>
// <script>
// // Auto resize input
// function resizeInput() {
//     $(this).attr('size', $(this).val().length);
// }

$('input[type="text"], input[type="email"]')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);


console.clear();
// Adapted from georgepapadakis.me/demo/expanding-textarea.html
(function(){

  var textareas = document.querySelectorAll('.expanding'),

      resize = function(t) {
        t.style.height = 'auto';
        t.style.overflow = 'hidden'; // Ensure scrollbar doesn't interfere with the true height of the text.
        t.style.height = (t.scrollHeight + t.offset ) + 'px';
        t.style.overflow = '';
      },

      attachResize = function(t) {
        if ( t ) {
          console.log('t.className',t.className);
          t.offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

          resize(t);

          if ( t.addEventListener ) {
            t.addEventListener('input', function() { resize(t); });
            t.addEventListener('mouseup', function() { resize(t); }); // set height after user resize
          }

          t['attachEvent'] && t.attachEvent('onkeyup', function() { resize(t); });
        }
      };

  // IE7 support
  if ( !document.querySelectorAll ) {

    function getElementsByClass(searchClass,node,tag) {
      var classElements = new Array();
      node = node || document;
      tag = tag || '*';
      var els = node.getElementsByTagName(tag);
      var elsLen = els.length;
      var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
      for (i = 0, j = 0; i < elsLen; i++) {
        if ( pattern.test(els[i].className) ) {
          classElements[j] = els[i];
          j++;
        }
      }
      return classElements;
    }

    textareas = getElementsByClass('expanding');
  }

  for (var i = 0; i < textareas.length; i++ ) {
    attachResize(textareas[i]);
  }

})();
</script>

</body>
</html>
