<?php get_header(); ?>
<div class="wrapper">
	<section class="main-contents">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php if (has_post_thumbnail()) {
			echo '<figure class="event-banner">';
			the_post_thumbnail('');
			echo '</figure>';
		}?>

		<h1 class="entry-title"><?php wp_title(''); ?></h1>

		<article class="texts">
			<?php the_content(); ?>
		</article>
	
	<?php endwhile; ?>
	<?php endif; ?>
	</section>
</div>
<?php get_footer(); ?>