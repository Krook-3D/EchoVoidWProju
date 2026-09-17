<?php get_header(); ?>
<main id="primary" class="site-main section">
	<div class="container narrow-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card page-card' ); ?>>
				<h1><?php the_title(); ?></h1>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="featured-image"><?php the_post_thumbnail( 'large' ); ?></div>
				<?php endif; ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</main>
<?php get_footer(); ?>
