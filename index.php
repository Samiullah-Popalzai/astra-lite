<?php get_header(); ?>


<main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post() ?>
            <article>
                <?php the_title(); ?>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else: ?>
        <p>no content found</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>