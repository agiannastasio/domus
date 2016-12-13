<?php get_header(); ?>

	<section class="main-contents">
		<div class="inner">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="texts">
					<?php the_post_thumbnail('full'); ?>
					<?php the_content(); ?>
					<footer>
						<?php the_tags(); ?>
					</footer>
				</article>
			
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>