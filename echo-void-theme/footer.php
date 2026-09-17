<footer class="site-footer">
	<div class="container footer-grid">
		<div>
			<a class="site-logo footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="logo-mark">EV</span>
				<span><?php bloginfo( 'name' ); ?></span>
			</a>
			<p><?php esc_html_e( 'Echo Void is a student WordPress project about urbex stories, Soviet ruins, drone exploration, underground places, and urban art.', 'echo-void-theme' ); ?></p>
		</div>
		<nav aria-label="<?php esc_attr_e( 'Footer navigation', 'echo-void-theme' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>
		</nav>
		<div class="social-links">
			<a href="#"><?php esc_html_e( 'Instagram', 'echo-void-theme' ); ?></a>
			<a href="#"><?php esc_html_e( 'YouTube', 'echo-void-theme' ); ?></a>
			<a href="#"><?php esc_html_e( 'TikTok', 'echo-void-theme' ); ?></a>
		</div>
	</div>
	<div class="container footer-bottom">
		<p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Student project.', 'echo-void-theme' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
