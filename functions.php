<?php 

register_nav_menus(array(
	'primary' => __('Primary Menu', 'silatoka24wp')
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(360, 500, true);

?>