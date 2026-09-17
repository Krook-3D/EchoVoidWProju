<?php get_header(); ?>
<main id="primary" class="site-main section">
	<div class="container content-layout">
		<section class="post-list">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="card-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
						<?php endif; ?>
						<p class="meta-line"><?php echo esc_html( get_the_date() ); ?> / <?php the_category( ', ' ); ?></p>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read signal', 'echo-void-theme' ); ?></a>
					</article>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php else : ?>
				<article class="content-card">
					<h1><?php esc_html_e( 'No signals found', 'echo-void-theme' ); ?></h1>
					<p><?php esc_html_e( 'Create your first Echo Void post to begin documenting forgotten places.', 'echo-void-theme' ); ?></p>
				</article>
			<?php endif; ?>
		</section>
	</div>
</main>
<?php get_footer(); ?>
