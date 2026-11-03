<?php get_header(); ?>
<section class="hero">
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
</section>
<main class="wrap">
  <section class="paper">
    <h2>Latest from the frontier</h2>
    <?php $latest = new WP_Query(['posts_per_page' => 6, 'ignore_sticky_posts' => true]); ?>
    <?php if ($latest->have_posts()) : ?>
      <div class="grid">
        <?php while ($latest->have_posts()) : $latest->the_post(); get_template_part('template-parts/card'); endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
      <p>No stories yet, partner. Add some posts in the dashboard.</p>
    <?php endif; ?>
  </section>
  <section class="paper">
    <h2>Browse by category</h2>
    <?php foreach (get_categories(['hide_empty' => false]) as $c) : ?>
      <a class="tag" href="<?php echo esc_url(get_category_link($c)); ?>"><?php echo esc_html($c->name); ?> (<?php echo (int) $c->count; ?>)</a>
    <?php endforeach; ?>
    <h2>Tags</h2>
    <?php wp_tag_cloud(['smallest' => 14, 'largest' => 22, 'unit' => 'px']); ?>
  </section>
</main>
<?php get_footer(); ?>
