<?php 
/*
* Template Name: Home
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="top-container">
    <div class="top-left">
      <h2>Havar Cemal Architecture SAR/MSA</h2>
      <h2>Gothenburg / Sweden</h2>
    </div>
    <div class="top-right">
      <h2 class="text-right">havarcemal@gmail.com</h2>
      <h2 style="text-align:right;">
        <nav class="nav" role="navigation">
          <?php html5blank_nav(); ?>
        </nav>
      </h2>
    </div>
  </div>
  <header class="header clear" role="banner">
    <div class="col-12" style="height:32vw;">
      <div class="x-image image-bold">
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/havarch-bold.png" type='image/png'
          class="strandpipa fadeIn" />
      </div>
      <div class="x-image image-stroke">
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/havarch-stroke.png" type='image/png'
          class="strandpipa fadeIn" />
      </div>
    </div>
  </header>
  <div class="image-wrapper"></div>
  <div class="image-area">
    <img src="<?php echo get_template_directory_uri(); ?>/img/01-havar.jpg">
    <div class="small-text-startpage"></br></div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/02-havar.jpg">
    <div class="small-text-startpage"></br></div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/04-havar.jpg">
    <div style="color:lightgrey;" class="small-text-startpage"><a href="https://www.behance.net/ruznyaevart">Artem Ruznyaev</a></div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_2731-2.jpg">
  </div>
</div><!-- #primary -->

<?php get_footer();