<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;

get_header(); ?>

	<main id="content" tabindex="-1" role="main">

		<div class="home-welcome-message">
			<h1>Hello World</h1>
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Watermelon">
			<h4>Welcome to <span class="highlight">Watermelon</span> Theme</h4>
			<button class="button">Enjoy</button>
		</div>

	</main>

<?php
get_footer();
