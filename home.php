<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Proyecto Xocolate</title>
  <meta property="og:title" content="Proyecto Chocolate"/>
  <meta property="og:url" content="https://www.proyectoxocolate.com/"/>
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/og-image-logo.jpg"/>
  <meta property="og:site_name" content="Proyecto Chocolate"/>
  <meta property="fb:admins" content="alan.renteria.10"/>
  <meta property="og:description" content="Proyecto Chocolate desarollo de chocolate artesanal "/>
  <style media="screen">

  </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>
          <link rel="stylesheet" type="text/css"  href="<?php bloginfo('template_url'); ?>/style.css">
          <script src="<?php bloginfo('template_url'); ?>/js/parallax.min.js"></script>
          <script src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>
          <script src="<?php bloginfo('template_url'); ?>/js/snowstorm.js"></script>
          </head>
<body>

  <script>
snowStorm.snowColor = '#ffffff';   // blue-ish snow!?
snowStorm.flakesMaxActive = 15;    // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
</script>

<!-- <div id="scene">

<div class="layer" data-depth="0.05" id="background-layer" > <div id="backgroung-cover-image" style="background:url(<?php bloginfo('template_url'); ?>/images/background-image.png) no-repeat ;
"> </div> </div>
<div class="layer" data-depth="0.40">  <img  class="parallax-logo" src="<?php bloginfo('template_url'); ?>/images/px-logo.png" /></div>

</div> -->
<img src="<?php bloginfo('template_url'); ?>/images/background-image.png" alt=""  data-depth="0.40" class="background-cover-image layer">

<div class="cuerpo-tienda" >
<!-- <div class="background-cover-image layer" data-depth="0.40">
</div> -->
 <div class="first-half">
   <div id="scene">
     <div class="layer image" data-depth="0.10">  <img  class="parallax-logo" src="<?php bloginfo('template_url'); ?>/images/px-logo.png" />
        </div>
        <!-- <div class="layer text" data-depth="0.50">
          <div >
            <span> Proudcto 100% </span> <span> Mexicano </span>
          </div>
        </div> -->
   </div>
   <div id="scene2">
        <div class="layer text" data-depth="0.50">
          <div >
            <span> Proudcto 100% </span> <span> Mexicano </span>
          </div>
        </div>
   </div>
 </div>
 <div class="second-half">
    <div class="fake-line">

    </div>
   <div class='cuerpo'>
     <div class="title">
        <div class="">
          <span>Pagina Bajo Construccion!</span>
        </div>
        <div class="">
          <span>Por el momento connectate con nosotros de las siguiente maneras!</span>
        </div>
     </div>
     <div class="body">
       <div class="body-phone">
         <div>
           <img src="<?php bloginfo('template_url'); ?>/images/phone.png" alt="">
    <p>(686) 262-7198 - Jesus Renteria<br><br>(686) 248-7506 - Alan Renteria</p>

         </div>
</div>
       <div class="body-email">
              <img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="">
   <span>ventas@proyectoxocolate.com</span>
 </div>
       <div class="body-register">
              <img src="<?php bloginfo('template_url'); ?>/images/register.png" alt="">
         <div class="text">
           <div>
             <span> Obtén lo ultimo </span>
           </div>
           <span>Manténgase al día con las últimas noticias, eventos y ofertas
especiales de Proyecto Xocolate.</span>
<div class="register-box">
      <?php echo do_shortcode( '[mc4wp_form id="8"]' ); ?>
</div>
         </div>
       </div>
   </div>
   </div>
 </div>
</div>



</body>
</html>
