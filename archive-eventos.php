<?php get_header(); ?>
<div class="wrapper">
	<div class="archive-albums">
		<div class="hero-section">
			<div class="hero-wrap">
				<figure class="featured-image">
					<img src="/wp-content/themes/domus/img/vinyl.jpg" alt="Domus">
				</figure>
			</div>
			<h1 class="entry-title">Agenda</h1>
		</div>
		<section class="main-contents">
			<ul class="eventos">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li class="evento">
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<figure class="evento-flyer">
									<?php the_post_thumbnail('medium'); ?>
								</figure>
								<figcaption class="evento-title"><?php the_title(); ?></figcaption>
							</a>
						</article>
					</li>
				<?php endwhile; ?>

				<?php else : ?>
					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>No hay albums publicados.</h1>
					</div>
				<?php endif; ?>
			</ul>
		</section>
		<?php get_footer(); ?>
	</div>
</div>