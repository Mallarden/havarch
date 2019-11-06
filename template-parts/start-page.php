<?php 
/*
* Template Name: startpage
*/
get_header(); ?>
	<div id="primary" class="content">
		<div class="fullpage-image">
		<video class='videoTag fadeIn' autoPlay loop muted>
				<source src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/loop.mp4" type='video/mp4' />
			</video>  
		<div class="header-boxes-wrapper">
			<div class="header-title">
				<h1>Strandpiparen 13-18</h1>
			</div>
			<div class="row">
				<div class="container-fluid">
					<div class="col-12 fullpage-content" style="display:flex;justify-content: space-between;">
						<div class="col-xs-4 col-sm-5 header-box">
							<a href="<?php echo get_page_link( get_page_by_title( login )->ID ); ?>" class="img-rectangle text-focus-in">
								<h3 class="text-focus-in">Logga in</h3>
							</a>
						</div>
						<div class="col-xs-4 col-sm-5  header-box">
							<a href="<?php echo get_page_link( get_page_by_title( register )->ID ); ?>" class="img-rectangle text-focus-in">
								<h3>Registrera</h3>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="first-page-wrapper">
		<!-- <div class="scroll-symbol"><i class="fas fa-certificate"></i></div> -->

			<div class="first-page-content foo">

			<h1 style="font-weight:700;"><?php the_title(); ?></h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

			<?php endif; ?>
			<div class="row">
				<div class="col-lg-12 col-sm-12 foo " data-delighter="start:0.9;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2132.6927138057026!2d11.970442316006528!3d57.68770018111483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTfCsDQxJzE1LjciTiAxMcKwNTgnMjEuNSJF!5e0!3m2!1ssv!2sse!4v1542323061004" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-lg-12 col-sm-12 foo" data-delighter="start:0.82;">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grannskap.png" type='image/png' style="width:100%;" class="" />
				</div>
			</div>
			<?php $the_query = new WP_Query( 'posts_per_page=1&category_name=Uncategorized' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				<div class="row mt-5 foo pl-4" style="" data-delighter="start:0.9;">
					<!-- <h2 style="font-size:2.8em;">Senaste nyhetsbrevet</h2> -->
					<div class="senaste-nyhet">
						<h1 style="font-weight:700;">Senaste nyhet</h1>
						<div class="nyhetsbrev_title"><?php the_title(); ?></div>
						<div class="nyhetsbrev_time"><?php the_time('j F Y'); ?></div>
						<div class="nyhetsbrev_content"><?php the_content(); ?></div>
					</div>
				</div>

				<?php 
					endwhile;
					wp_reset_postdata();
				?>
		</div>
	</div><!-- #primary -->
	</div>
<?php get_footer();

