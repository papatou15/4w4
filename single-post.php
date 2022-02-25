<?php get_header() ?>
<main class="site__main">
     <?php if (have_posts()): the_post(); ?>
          <article class="article">
               <h1><?php the_title(); ?></h1>
               <div class="article_contenu">
                    <?php if (has_post_thumbnail()): ?>
                    <figure class="article_contenu_figure">
                         <?php the_post_thumbnail();?>
                    </figure>
                    <?php endif ?>
               </div>
               <?php the_content(); ?>
          </article>
                
     <?php endif ?>
</main>
<?php get_footer(); ?>