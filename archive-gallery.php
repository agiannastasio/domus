<?php get_header(); ?>
<div class="wrapper">
	<div class="hero-section">
		<div class="hero-wrap">
			<figure class="featured-image">
				<img src="/wp-content/themes/domus/img/juan-martin-ibarra.jpg" alt="Domus">
			</figure>
		</div>
		<h1 class="entry-title">Galer&iacute;as</h1>
	</div>
	<section class="main-contents">
		<ul class="albums">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li class="album">
					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<figure class="cover">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
						</figure>
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<footer>
							<?php the_taxonomies('artistas'); ?>
						</footer>
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