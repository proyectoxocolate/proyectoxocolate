<?php /* Template Name: homepage */ ?>
<?php
  get_header();
 ?>
<div class="topheader">
  <div class="container">
    <div>
      <img src="<?php bloginfo('template_url'); ?>/images/logofrontpage.png" alt="">
    </div>
    <div class="button-menu">
      <img src="<?php bloginfo('template_url'); ?>/images/flecha-scroll-down.png" alt="">
      </div>

  </div>
</div>

<?php
get_template_part( 'menu-bar' ); ?>
 <div class="content-body">

 </div>
<?php get_footer(); ?>
