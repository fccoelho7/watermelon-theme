<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;

get_header(); ?>

	<div id="primary">
		<main id="main-content" class="site-main" role="main">
			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
