<?php
/*
Template Name: Artistas Index
*/

get_header(); ?>
<div class="wrapper contents archive-artistas">
  <div class="hero-section">
    <figure class="featured-image"><?php the_post_thumbnail('full'); ?></figure>
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </div>
  <section class="main-contents">
    <?php
      $artistas = get_terms('artistas');
      foreach($artistas as $artista) {
        $albums = new WP_Query(array(
          'post_type' => array('albums','gallery'),
          'post_per_page'=> -1,
          'taxonomy'=> 'artistas',
          'term' => $artista->slug,
        ));
        $link = get_term_link(intval($artista->term_id),'artistas');
        echo "<h2><a href=\"{$link}\">{$artista->name}</a></h2>";
        echo '<ul>';
        while ( $albums->have_posts() ) {
          $albums->the_post();
          $link = get_permalink($post->ID);
          $title = get_the_title();
          echo "<li><a href=\"{$link}\">{$title}</a></li>";
        }
        echo '</ul>';
      }
    ?>
  </section>
</div>
<?php get_footer(); ?>