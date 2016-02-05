<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,maximum-scale=1.0">
		<title><?php wp_title(); ?></title>
		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
		<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.png?v=1" type="image/x-icon" />
		<!--[if lt IE 9]>
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/javascript/support/picturefill.min.js"></script>
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/javascripts/support/html5.min.js"></script>
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/javascripts/support/augment.min.js"></script>
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/javascripts/support/selectivizr.min.js"></script>
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