<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo esc_url (get_template_directory_uri()); ?>css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="header" class="site-header">
		<div class="inner">
			<img src="<?php echo fw_get_db_settings_option('logo-image')['url']; ?>" class="logo" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
		</div>
		<?php if ( has_nav_menu ('primary' ) ) : ?>
		<div class="menu">
			<?php 
				//Primary Navigation Menu
				wp_nav_menu( array(
					'menu_class'	 => 'nav-menu',
					'theme_location' => 'Primary',
				) );
			?>
		</div>
	<?php endif; ?>
	</header>