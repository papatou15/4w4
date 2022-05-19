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
          <div class="atelier__info">
            <p class="atelier__animateur">
            <b>Animée par: </b><i><?php the_field('animateur'); ?></i>
            </p>
            <div class="atelier__date__container">
                <p class="atelier__date__debut">
                <b> Du: </b> <i><?php the_field('date_de_debut_de_latelier'); ?></i>
                </p>
                <p class="atelier__date__fin">
                <b> Au: </b><i><?php the_field('date_de_fin_de_latelier'); ?></i>
                </p>
            </div>
            <div class="atelier__heure__container">
                <p class="atelier__heure__debut">
                <b> De: </b><i><?php the_field('heure_de_debut'); ?></i>
                </p>
                <p class="atelier__heure__fin">
                <b>Jusqu'à: </b><i><?php the_field('heure_de_fin'); ?></i>
                </p>
            </div>
            
            <p class="atelier__duree__seance">
            <b> Durée d'une séance: </b><i><?php the_field('duree_dune-séance-datelier'); ?>H</i>
            </p>
            <p class="atelier__local">
            <b>Au local</b> <i><?php the_field('local'); ?></i>
            </p>
          </div>
          
     </article>
     <?php endif ?>
</main>
<?php get_footer() ?>