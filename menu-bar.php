
<div id="menu-bar">
  <div class="icons-position">
    <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
  <img id="logo-bara" src="<?php bloginfo('template_url'); ?>/images/logo-bara.png" alt="">
  <img id="logo-cart" src="<?php bloginfo('template_url'); ?>/images/cart.png" alt="">
  </div>

  <?php
     wp_nav_menu( array(
      'theme_location' => 'header'
  ));
      ?>
</div>
