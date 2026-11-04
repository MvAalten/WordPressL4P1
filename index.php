<?php // Fallback for everything without a more specific template (e.g. the blog page, search). ?>
<?php get_header(); ?>
<main class="wrap">
  <section class="paper">
    <h1><?php echo is_search() ? 'Search: ' . esc_html(get_search_query()) : 'All stories'; ?></h1>
    <?php if (have_posts()) : ?>
      <div class="grid"><?php while (have_posts()) : the_post(); get_template_part('template-parts/card'); endwhile; ?></div>
      <div class="pagination"><?php the_posts_pagination(); ?></div>
    <?php else : ?>
      <p>Nothing found.</p>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>
