<?php get_header(); ?>
<div class="wrapper">
	
	<div class="single-artistas">

	<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>

	<div class="hero-section half">
		<div class="hero-wrap">
			<figure class="featured-image">
				<img src="<?php the_field('profile_picture', $term); ?>" alt="<?php echo $term->name; ?>">
				<figcaption>
					<hgroup class="headings">
				      <h1><?php echo $term->name; ?></h1>
				      <p class="desc"><?php echo $term->description; ?></p>
				    </hgroup>				
				</figcaption>
			</figure>
		</div>
	</div>
	<section class="main-contents">
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h1><?php echo $term->name; ?></h1>
			<p><?php the_field('bio', $term); ?></p>
			<h3>Albums</h3>
			<?php 
				// WP_Query arguments
				$args = array (
					'post_type'         => array( 'albums' ),
					'post_status'       => array( 'publish' ),
					'taxonomy'          => 'artistas',
					'term'				=> $term->slug,
				);

				// The Query
				$query_albums = new WP_Query( $args );

				// The Loop
				if ( $query_albums->have_posts() ) {
					while ( $query_albums->have_posts() ) {
						$query_albums->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
					<?php
					}
				} else {
					// no posts found
				}
				// Restore original Post Data
				wp_reset_postdata();
			?>

			<h3>Galerías</h3>
			<?php 
				// WP_Query arguments
				$args = array (
					'post_type'         => array( 'gallery' ),
					'post_status'       => array( 'publish' ),
					'taxonomy'          => 'artistas',
					'term'				=> $term->slug,
				);

				// The Query
				$query_albums = new WP_Query( $args );

				// The Loop
				if ( $query_albums->have_posts() ) {
					while ( $query_albums->have_posts() ) {
						$query_albums->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
					<?php
					}
				} else {
					// no posts found
				}
				// Restore original Post Data
				wp_reset_postdata();
			?>
		</article>
	</section>
</div> <!-- .page-artista -->
<?php get_footer(); ?>
</div>