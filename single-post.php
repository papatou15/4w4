<?php get_header() ?>
<main class="site__main">

     <h1>---- single-post.php ------</h1>
     <?php if (have_posts()): the_post(); ?>
          <article class="article">
               <?php the_title(); ?>
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