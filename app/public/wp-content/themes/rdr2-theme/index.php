<?php get_header(); ?>

<main class="container">
    <?php
    // De Loop: herhaal dit blok voor elk bericht.
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
            <?php
        }
    } else {
        echo '<p>Geen berichten gevonden.</p>';
    }
    ?>
</main>

<?php get_footer(); ?>
