<?php get_header(); ?>
<main class="wrap">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('paper entry'); ?>>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
