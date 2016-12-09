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
    <meta property="og:description"
          content="Proyecto Chocolate desarollo de chocolate artesanal "/>
    <style media="screen">

      body{
        /*background-color:#3A281B;*/
        background-color:#594530;
      }
    </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


            <script src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
  </head>
  <body>
    <script src="<?php bloginfo('template_url'); ?>/js/parallax.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/snowstorm.js"></script>
    <script>
snowStorm.snowColor = '#99ccff';   // blue-ish snow!?
snowStorm.flakesMaxActive = 15;    // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
</script>

<div id="scene">

  <div class="layer" data-depth="0.05" id="background-layer" > <div id="backgroung-cover-image" style="background:url(<?php bloginfo('template_url'); ?>/images/background-image.png) no-repeat ;
"> </div> </div>
  <div class="layer" data-depth="0.40">  <img  class="parallax-logo" src="<?php bloginfo('template_url'); ?>/images/px-logo.png" /></div>

</div>

  </body>
</html>
