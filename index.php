<?php get_header(); ?>

<?php if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'content', get_post_format() );
	}

	// Previous/next page navigation.
	the_posts_pagination( array (
		'prev-text'			 => __( 'Previous page', 'silatoka24wp'),
		'next-text'			 => __( 'Next page', 'silatoka24wp'),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'page', 'silatoka24wp') . '</span>',
	) );

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

?>

</body>
</html>

<?php
get_footer();
 ?>