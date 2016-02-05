
<header class="page-header">
	<h1 class="page-title">No results found. :(</h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
		<?php get_search_form(); ?>

	<?php else : ?>

		<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
