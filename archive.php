<?php // Filtered overview: category, tag, author and date archives all land here. ?>
<?php get_header(); ?>
<main class="wrap">
  <section class="paper">
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description('<p>', '</p>'); ?>
    <?php if (have_posts()) : ?>
      <div class="grid"><?php while (have_posts()) : the_post(); get_template_part('template-parts/card'); endwhile; ?></div>
      <div class="pagination"><?php the_posts_pagination(); ?></div>
    <?php else : ?>
      <p>No stories here, partner.</p>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>
