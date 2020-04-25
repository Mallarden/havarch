<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
					<div class="col-12" style="display:flex;">
					<!-- logo -->
					<div class="col-2">
						<div class="logo" style="display:flex;">
							<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/strandpipe.png" type='image/png' class="strandpipa fadeIn" />
							</a>
							<!-- /logo -->
							<?php
								$current_user = wp_get_current_user();
								echo do_shortcode( '[um_loggedin] <h2>Inloggad som [/um_loggedin]' ); ?>
								<?
								printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_firstname ) );
								// printf( __( 'User email: %s', 'textdomain' ), esc_html( $current_user->user_email ) ) . '<br />';
								printf( __( '%s', 'textdomain</h2>' ), esc_html( $current_user->user_lastname ) );

							?>
						</div>
					</div>
					<div class="col">
							<!-- nav -->
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
						</div>
					<div class="col-2 user_text">
						

						<div>
							<form class="search" method="get" style="display:flex;float:right;"action="<?php echo home_url(); ?>" role="search">
								<input class="search-input" type="search" name="s" placeholder="<?php _e( 'Sök', 'html5blank' ); ?>">
								<button class="search-submit" type="submit" role="button"><?php _e( '<i class="fas fa-search" style="font-size:1.5em;"></i>', 'html5blank' ); ?></button>
							</form>
						</div>
					</div>
				</div>
			</header>
			<!-- /header -->
