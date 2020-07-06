<?php 
/*
* Template Name: About
*/
get_header(); ?>
<div id="primary" class="content">
<div class="top-container">
  <div class="top-left">
    <h2>Havar Cemal Architecture SAR/MSA</h2>
    <h2>Gothenburg / Sweden</h2>
  </div>
    <div class="top-right">
      <h2>hc@havarch.se</h2>
      <h2 style="text-align:right;">
        <nav class="nav" role="navigation">
          <a href="#" onClick="history.back();return false;">← Back</a>
        </nav>
      </h2>
    </div>
  </div>
  <div class="small-text-startpage">
  <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->
        <?php endwhile; //resetting the post loop ?>
  </div>

</div><!-- #primary -->

<?php get_footer();