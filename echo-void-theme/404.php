<?php get_header(); ?>
<main id="primary" class="site-main section error-page">
	<div class="container narrow-content">
		<section class="content-card">
			<p class="eyebrow"><?php esc_html_e( 'Signal lost', 'echo-void-theme' ); ?></p>
			<h1><?php esc_html_e( '404: This corridor is sealed', 'echo-void-theme' ); ?></h1>
			<p><?php esc_html_e( 'The page you were looking for may have moved, collapsed, or never existed in the map.', 'echo-void-theme' ); ?></p>
			<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return to base', 'echo-void-theme' ); ?></a>
		</section>
	</div>
</main>
<?php get_footer(); ?>
