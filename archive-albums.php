<?php get_header(); ?>

	<section class="main-contents">
		<div class="inner">
			<header>
				<h1>Albums</h1>
			</header>
			<section class="tiles">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
				<?php endwhile; ?>

				<?php else : ?>
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>No hay albums publicados.</h1>
					</div>
				<?php endif; ?>
			</section>
		</div>
	</section>

<?php get_footer(); ?>
