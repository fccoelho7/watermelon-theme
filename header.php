<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( ! get_option( 'site_icon' ) ) : ?>
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon" />
		<?php endif; ?>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" type="image/x-icon" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/javascript/support/picturefill.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/support/html5.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/support/augment.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/javascripts/support/selectivizr.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Remove case the theme doesn`t have a facebook integration -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<header id="header">
			<div class="container">

				<?php if ( is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php else : ?>
					<div class="site-title h1">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</div>
					<div class="site-description h2">
						<?php bloginfo( 'description' ); ?>
					</div>
				<?php endif; ?>

				<nav id="main-navigation" class="navigation navigation-main" data-component="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => '',
							)
						);
					?>
				</nav>

			</div>
		</header>

		<main id="content" tabindex="-1" role="main">
			<div class="container">
