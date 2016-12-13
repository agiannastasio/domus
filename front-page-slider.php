
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="homepage">
		<div style="position: relative; height: 100%;">

			<ul class="slider">
				<?php
					// WP_Query arguments
					$args = array (
						'post_type'          => array('eventos', 'albums'),
						'pagination'         => false,
						'posts_per_page'     => -1,
					);
					// The Query
					$hp_slider = new WP_Query( $args );
					while($hp_slider->have_posts()) : $hp_slider->the_post(); ?>

						<li class="slide post-<?php the_ID(); ?>">
							<figure class="image">
								<?php the_post_thumbnail(); ?>
								<figcaption class="title">
									<h4><?php the_title(); ?></h4>
									<?php $date = get_field('date');
										if ($date != ''): ?>
										<p class="date"><?php echo $date; ?> </p>
									<?php endif; ?>
									<?php $venue = get_field('venue');
										if ($venue != ''): ?>
										<p class="venue"><?php echo $venue; ?> </p>
									<?php endif; ?>
									<?php $notes = get_field('notes');
										if ($notes != ''): ?>
										<p class="notes"><?php echo $notes; ?> </p>
									<?php endif; ?>
								</figcaption>
							</figure>
						</li>
				<?php endwhile; ?>
			</ul>

			<ul class="slider-pager">
			  <?php
					// WP_Query arguments
					$args = array (
						'post_type'          => array('eventos', 'albums'),
						'pagination'         => false,
						'posts_per_page'     => -1,
					);
					// The Query
					$slider_pagination = new WP_Query( $args );
					while($slider_pagination->have_posts()) : $slider_pagination->the_post(); ?>
		
						<li class="page" id="post-<?php the_ID(); ?>">
							<figure class="thumbnail">
								<?php the_post_thumbnail('thumbnail'); ?>
								<figcaption class="title"><?php the_title(); ?></figcaption>
							</figure>
						</li>
				<?php endwhile; ?>
			</ul>
			

		<?php endwhile; ?>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>

</div> <!-- .homepage -->