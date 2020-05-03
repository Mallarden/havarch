<?php 
/*
* Template Name: Contact
*/
get_header(); ?>
<div id="primary" class="content">
<div class="top-container">
  <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </><!-- .entry-content-page -->
        <?php endwhile; //resetting the post loop ?>
  </div>

</div><!-- #primary -->
</div>
<?php get_footer();