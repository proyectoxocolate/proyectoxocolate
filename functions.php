<?php


add_action( 'init', 'redirect_visitors' );

function redirect_visitors() {

  if(!is_user_logged_in()) {
    if (
   !in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))
   && !is_admin()
   && !is_user_logged_in() &&  !home_url()
  ) {
   wp_redirect(home_url());
   exit;
 }
  }
}
