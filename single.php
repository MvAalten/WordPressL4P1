<?php get_header(); ?>
<main class="wrap">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('paper entry'); ?>>
    <h1><?php the_title(); ?></h1>
    <p class="meta">By <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?> in <?php the_category(', '); ?></p>
    <?php if (has_post_thumbnail()) the_post_thumbnail('large'); ?>
    <?php the_content(); ?>
    <p><?php the_tags('Tags: ', ' '); ?></p>
    <p class="meta"><?php previous_post_link('&laquo; %link'); ?> &nbsp; <?php next_post_link('%link &raquo;'); ?></p>
  </article>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
