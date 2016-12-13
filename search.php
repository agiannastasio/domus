<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);
?>

<div class="wrapper scene_element scene_element--fadein">
	<section class="main-contents">
		<h1>Busqueda</h1>
		<div class="featured-image"><?php the_post_thumbnail('full'); ?></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_excerpt(); ?>
			</article>

		<?php endwhile; ?>

		<?php else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>No hay publicaciones</h1>
			</div>

		<?php endif; ?>

	</section>
</div>
<?php get_footer(); ?>