<?php 
/*
* Template Name: Contact
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="top-container">
    <nav class="nav" role="navigation">
      <a href="#" onClick="history.back();return false;">← Back</a>
    </nav>
    </div>
    <?php
      // TO SHOW THE PAGE CONTENTS
      while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
          <div class="entry-content-page">
              <?php the_content(); ?> <!-- Page Content -->
          </&><!-- .entry-content-page -->
          <?php endwhile; //resetting the post loop ?>
    </div>
  </div><!-- #primary -->
</div>
<?php get_footer();