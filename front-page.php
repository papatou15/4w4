<?php get_header() ?>
<main class="site__main">

    <h1>Les études en TIM</h1>
    
    <?php 
    /* --------------------------------------------- menu accueil */
    wp_nav_menu(array("menu"=>"accueil",
                            "container"=>"nav")); ?>

    <h1>Nos événements</h1>
    
   <?php 
   /* --------------------------------------------- menu evenement */
   wp_nav_menu(array("menu"=>"evenement",
                            "container"=>"nav",
                            "menu_class"=>"menu-evenement")); ?>

    <h1>Nos ateliers</h1>
    <?php
        wp_nav_menu(array("menu"=>"menu_ateliers",
                                "container"=>"nav",
                                "menu_class"=>"menu-atelier"));
    ?>

    <?php if(have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    <?php endif ?>
   
</main>
<?php get_footer() ?>