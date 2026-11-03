<?php // Reusable post card, used by front page, index and archive. ?>
<article <?php post_class('card'); ?>>
  <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('rdr2-card'); ?></a>
  <?php endif; ?>
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <p class="meta"><?php echo get_the_date(); ?> · <?php the_author_posts_link(); ?></p>
  <p><?php the_excerpt(); ?></p>
  <?php the_category(' '); ?>
</article>
