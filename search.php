<?php get_header(); ?>
<main class="site-main">
    <?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); ?>
    <h3><?php echo get_permalink(); ?></h3>
    <?php the_title(); ?>
    <p><?php echo wp_trim_words(get_the_content(), 20, "...>"); ?></p>
    <hr>
    <?php endwhile; ?>
    <?php else : ?><p>Aucun résultat ☺</p><iframe width="500" height="300" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <?php endif; ?>
</main>
<?php get_footer(); ?>