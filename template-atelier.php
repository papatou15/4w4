<?php
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
     <article class="atelier">
          <?php if (have_posts()): the_post(); ?>
          <h1><?php the_title() ?></h1>
          <section class="atelier__description">
               <?php the_field('description'); ?>
          </section>
          <p class="atelier__animateur">
          <?php the_field('animateur'); ?>
          </p>
          <p class="atelier__date__debut">
          <?php the_field('date_de_debut_de_latelier'); ?>
          </p>
          <p class="atelier__date__fin">
          <?php the_field('date_de_fin_de_latelier'); ?>
          </p>
          <p class="atelier__heure__debut">
          <?php the_field('heure_de_debut'); ?>
          </p>
          <p class="atelier__heure__fin">
          <?php the_field('heure_de_fin'); ?>
          </p>
          <p class="atelier__duree__seance">
          <?php the_field('duree_dune-seance-datelier'); ?>
          </p>
          <p class="atelier__local">
          <?php the_field('local'); ?>
          </p>
     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>