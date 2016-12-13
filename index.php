<?php get_header(); ?>
<div class="wrapper scene_element scene_element--fadein" id="contents">

	<?php include("modules/hero-section.php"); ?>

	<section class="main-contents">
		<div class="featured-image"><?php the_post_thumbnail('full'); ?></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_content(); ?>
			</article>

		<?php endwhile; ?>

		<?php else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>No hay publicaciones</h1>
			</div>

		<?php endif; ?>

	</section>
<?php get_footer(); ?>
</div>