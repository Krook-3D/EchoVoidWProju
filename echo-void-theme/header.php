<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="container header-inner">
		<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="logo-mark">EV</span>
				<span><?php bloginfo( 'name' ); ?></span>
			<?php endif; ?>
		</a>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<?php esc_html_e( 'Menu', 'echo-void-theme' ); ?>
		</button>
		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'echo-void-theme' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>
	</div>
</header>
