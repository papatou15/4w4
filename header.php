<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <?php show_admin_bar(true); ?>
    <style>
        .home::after{
            background-color: <?= get_theme_mod("background_clip_path"); ?>; ;
        }

        .site__main{
            background-color: <?= get_theme_mod("background_body"); ?>;
        }

        .menu-categorie_cours-container .menu .menu-item,
        .menu-evenement ul li,
        .site__footer__menu__ul .menu-item,
        .cours__desc__ouvrir{
            background-color: <?= get_theme_mod("bouton_background"); ?>;
            border: 3px solid <?= get_theme_mod("bouton_border"); ?>;
        }

        .menu-categorie_cours-container .menu .menu-item:hover,
        .menu-evenement ul li:hover,
        .site__footer__menu__ul .menu-item:hover,
        .cours__desc__ouvrir:hover{
            background-color: <?= get_theme_mod("bouton_background_hover"); ?>;
        }
    </style>
</head>
<body  <?php body_class("site"); ?>>
<header class="site__header">
    <section class="site__header__titre">
        <?= get_custom_logo(); ?>
        <h1 class="header__titre">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
                <?php bloginfo('name'); ?></h1>
            </a>
        <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>
    <section class="util">
        <?= get_sidebar('entete_1'); ?>
    <?php // get_search_form(); ?>
    </section>
    
    
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger" class="burger">
        <div class="burger__ligne"><div class="burger__ligne-shadow"></div></div>
        <div class="burger__ligne"><div class="burger__ligne-shadow"></div></div>
        <div class="burger__ligne"><div class="burger__ligne-shadow"></div></div>
    </label>
    <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav")); ?>
</section>
