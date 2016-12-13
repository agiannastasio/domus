<?php get_header(); ?>
<div class="wrapper single-gallery">
	<div class="hero-section">
		<div class="hero-wrap">
			<figure class="featured-image">
				<img src="/wp-content/themes/domus/img/juan-martin-ibarra.jpg" alt="Domus">
			</figure>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<section class="main-contents">
		<div class="featured-image"><?php the_post_thumbnail('full'); ?></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				
				<?php the_content(); ?>
				<?php
					$images = get_field('images');
					if( $images ): ?>
				        <?php foreach( $images as $image ): ?>
				        	<figure>
				                <a href="<?php echo $image['url']; ?>" data-rel="lightbox-gallery">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <figcaption><?php echo $image['caption']; ?></figcaption>
			                </figure>
				        <?php endforeach; ?>
					<?php endif; ?>
				<footer>
					<?php the_taxonomies('artistas'); ?>
				</footer>
			</article>

		<?php endwhile; ?>

		<?php else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>No hay galer&iacute;as publicadas.</h1>
			</div>

		<?php endif; ?>

	</section>
<?php get_footer(); ?>
</div>