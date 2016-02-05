<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;

get_header(); ?>

	<main id="content" tabindex="-1" role="main">

			<header class="page-header">
				<h1 class="page-title">Not Found</h1>
			</header>

			<div class="page-content">
				<p>It looks like nothing was found at this location. Maybe try a search?</p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

	</main><!-- #main -->

<?php
get_footer();
