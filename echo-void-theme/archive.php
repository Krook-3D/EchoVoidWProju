<?php get_header(); ?>
<main id="primary" class="site-main section">
	<div class="container">
		<header class="archive-header">
			<p class="eyebrow"><?php esc_html_e( 'Echo archive', 'echo-void-theme' ); ?></p>
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header>
		<div class="post-grid">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="card-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
						<?php endif; ?>
						<p class="meta-line"><?php echo esc_html( get_the_date() ); ?></p>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
					</article>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
