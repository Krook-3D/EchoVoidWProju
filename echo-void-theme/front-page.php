<?php get_header(); ?>
<main id="primary">
	<section class="hero-section">
		<div class="container hero-grid">
			<div class="hero-copy">
				<p class="eyebrow"><?php esc_html_e( 'Urban exploration / drone footage / forgotten architecture', 'echo-void-theme' ); ?></p>
				<h1><?php esc_html_e( 'Explore the places the world forgot', 'echo-void-theme' ); ?></h1>
				<p><?php esc_html_e( 'Echo Void documents abandoned Soviet-era ruins, underground corridors, industrial spaces, drone views, and urban art with a focus on safety and respect.', 'echo-void-theme' ); ?></p>
				<div class="hero-actions">
					<a class="button" href="#locations"><?php esc_html_e( 'Explore locations', 'echo-void-theme' ); ?></a>
					<a class="button button-outline" href="#maps"><?php esc_html_e( 'View maps', 'echo-void-theme' ); ?></a>
				</div>
			</div>
			<div class="hero-panel">
				<span><?php esc_html_e( 'Signal 04', 'echo-void-theme' ); ?></span>
				<h2><?php esc_html_e( 'Concrete halls, cold air, old echoes.', 'echo-void-theme' ); ?></h2>
				<p><?php esc_html_e( 'A visual placeholder.', 'echo-void-theme' ); ?></p>
			</div>
		</div>
	</section>

	<section id="locations" class="section">
		<div class="container">
			<div class="section-heading">
				<p class="eyebrow"><?php esc_html_e( 'Featured explorations', 'echo-void-theme' ); ?></p>
				<h2><?php esc_html_e( 'Routes into the void', 'echo-void-theme' ); ?></h2>
			</div>
			<div class="feature-grid">
				<?php
				$features = array(
	array(
		'Abandoned Hospitals',
		'Explore forgotten hospitals, sanatoriums, and medical facilities left behind.',
		'https://travelshop.local/wp-content/uploads/2026/08/DJI_0725-scaled.jpg'
	),
	array(
		'Soviet Architecture',
		'Concrete monuments and brutalist structures from the Soviet era.',
		'https://travelshop.local/wp-content/uploads/2026/08/IMG_6071-scaled.jpeg'
	),
	array(
		'Industrial Ruins',
		'Factories, power plants, warehouses, and forgotten production sites.',
		'https://travelshop.local/wp-content/uploads/2026/08/IMG_2072-scaled.jpeg'
	),
	array(
		'Military Sites',
		'Bunkers, radar stations, bases, and abandoned military infrastructure.',
		'https://travelshop.local/wp-content/uploads/2026/08/IMG_2111-scaled.jpeg'
	),
	array(
		'Underground',
		'Tunnels, shelters, bunkers, and hidden infrastructure beneath cities.',
		'https://travelshop.local/wp-content/uploads/2026/08/IMG_6060-1-scaled.jpeg'
	),
	array(
		'Urban Art',
		'Graffiti and street art found inside abandoned buildings.',
		'https://travelshop.local/wp-content/uploads/2026/08/IMG_6089-scaled.jpeg'
	),
);
				foreach ( $features as $feature ) :
					?>
					<article class="feature-card" style="background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.9)), url('<?php echo esc_url( $feature[2] ); ?>');">
	<h3><?php echo esc_html( $feature[0] ); ?></h3>
	<p><?php echo esc_html( $feature[1] ); ?></p>
</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="maps" class="section section-dark">
		<div class="container">
			<div class="section-heading">
				<p class="eyebrow"><?php esc_html_e( 'Future webshop', 'echo-void-theme' ); ?></p>
				<h2><?php esc_html_e( 'Downloadable urbex maps', 'echo-void-theme' ); ?></h2>
				<p><?php esc_html_e( 'These product cards are placeholders for a later shop. No payment functionality is included yet.', 'echo-void-theme' ); ?></p>
			</div>
			<div class="map-grid">
				<article class="map-card"><span><?php esc_html_e( 'Coming soon', 'echo-void-theme' ); ?></span><h3><?php esc_html_e( 'Soviet Ruins Starter Map', 'echo-void-theme' ); ?></h3><p><?php esc_html_e( 'A fictional guide for research and project presentation.', 'echo-void-theme' ); ?></p></article>
				<article class="map-card"><span><?php esc_html_e( 'Coming soon', 'echo-void-theme' ); ?></span><h3><?php esc_html_e( 'Industrial Zone Notes', 'echo-void-theme' ); ?></h3><p><?php esc_html_e( 'Marked inspiration points for factories, rail yards, and warehouses.', 'echo-void-theme' ); ?></p></article>
				<article class="map-card"><span><?php esc_html_e( 'Coming soon', 'echo-void-theme' ); ?></span><h3><?php esc_html_e( 'Underground Route Pack', 'echo-void-theme' ); ?></h3><p><?php esc_html_e( 'Concept maps for tunnels, bunkers, and service spaces.', 'echo-void-theme' ); ?></p></article>
			</div>
		</div>
	</section>

	<section class="section art-section">
		<div class="container split-section">
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Walls that speak', 'echo-void-theme' ); ?></p>
				<h2><?php esc_html_e( 'Urban art from forgotten spaces', 'echo-void-theme' ); ?></h2>
			</div>
			<p><?php esc_html_e( 'Graffiti and street art turn empty rooms into unofficial galleries. Echo Void treats these marks as part of the story of each location.', 'echo-void-theme' ); ?></p>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-heading">
				<p class="eyebrow"><?php esc_html_e( 'Latest articles', 'echo-void-theme' ); ?></p>
				<h2><?php esc_html_e( 'Recent field notes', 'echo-void-theme' ); ?></h2>
			</div>
			<div class="post-grid">
				<?php
				$latest_posts = new WP_Query( array( 'posts_per_page' => 3, 'post_status' => 'publish' ) );
				if ( $latest_posts->have_posts() ) :
					while ( $latest_posts->have_posts() ) :
						$latest_posts->the_post();
						?>
						<article class="content-card">
							<?php if ( has_post_thumbnail() ) : ?>
								<a class="card-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
							<?php else : ?>
								<div class="image-placeholder"><?php esc_html_e( 'Image placeholder', 'echo-void-theme' ); ?></div>
							<?php endif; ?>
							<p class="meta-line"><?php the_category( ', ' ); ?></p>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</article>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php else : ?>
					<article class="content-card"><div class="image-placeholder"><?php esc_html_e( 'Image placeholder', 'echo-void-theme' ); ?></div><p class="meta-line"><?php esc_html_e( 'Safety', 'echo-void-theme' ); ?></p><h3><?php esc_html_e( 'How to plan a safe urbex visit', 'echo-void-theme' ); ?></h3><p><?php esc_html_e( 'Example article teaser for responsible exploration and school project content.', 'echo-void-theme' ); ?></p></article>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="section safety-section">
		<div class="container safety-box">
			<p class="eyebrow"><?php esc_html_e( 'Safety and ethics', 'echo-void-theme' ); ?></p>
			<h2><?php esc_html_e( 'Take nothing but photos. Leave nothing but footprints.', 'echo-void-theme' ); ?></h2>
			<p><?php esc_html_e( 'Echo Void promotes responsible urbex: do not vandalize, do not steal, respect locations, avoid dangerous structures, and put safety first.', 'echo-void-theme' ); ?></p>
		</div>
	</section>
</main>
<?php get_footer(); ?>
