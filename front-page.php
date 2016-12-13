
<?php get_header(); ?>
<div class="homepage">
	<div class="inner">
		<?php
			// WP_Query arguments
			$args = array (
				'post_type'          => array('eventos'),
				'pagination'         => false,
				'posts_per_page'     => 5,
			);
			// The Query
			$slider_pagination = new WP_Query( $args );
			while($slider_pagination->have_posts()) : $slider_pagination->the_post(); ?>

				<article class="event" id="post-<?php the_ID(); ?>">
					<figure>
						<span class="event__poster">
							<?php the_post_thumbnail('full'); ?>
						</span>
						<figcaption class="event__data">
							<?php the_title(); ?> / 
							<?php the_field('date') ?> / 
							<?php the_field('venue') ?> / 
							<?php the_field('notes') ?>
						</figcaption>
					</figure>
				</article>
		<?php endwhile; ?>
	</div>
	<div class="inner">
		<header>
			<h1 class="home__title">&Uacute;ltimos albums</h1>
			<p class="home__view-more"><a href="/albums/" title="Albums editados por Domus">Ver todos</a></p>
		</header>
		<section class="tiles">
			<?php 
				// get sticky posts from DB
				$sticky = get_option('sticky_posts');
				// check if there are any
				if (!empty($sticky)) {
					// optional: sort the newest IDs first
					rsort($sticky);
					// override the query
					$args = array(
						'post_type'          => array('albums'),
						'pagination'         => false,
						'posts_per_page'     => -1,
					    'post__in' => $sticky
					);
					query_posts($args);
					// the loop
					while (have_posts()) { the_post(); ?>
				     	<article class="album" id="post-<?php the_ID(); ?>">
				     		<span class="image album__cover">
								<?php the_post_thumbnail('medium'); ?>
							</span>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<h2>
									<span class="album__artist"><?php the_field('album_artist'); ?></span>
									<span class="album__title"><?php the_title(); ?></span>
								</h2>
							</a>
						</article>
					<?php }
				} ?>
		</section>
	</div>

</div> <!-- .homepage -->

<?php get_footer(); ?>