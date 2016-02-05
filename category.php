<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;

get_header(); ?>

	<main id="content" tabindex="-1" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</header><!-- .page-header -->

				<?php

						while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

						endwhile;

					else :

						get_template_part( 'content', 'none' );

				endif;
			?>
	</main><!-- #main -->

<?php
get_footer();
