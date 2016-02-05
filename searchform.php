<?php
// Avoid that files are directly loaded
if ( ! function_exists( 'add_action' ) ) :
	exit(0);
endif;
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="search" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="Find something.." />
	<input type="submit" value="Search">
</form><!-- /searchform -->
