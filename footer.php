<footer class="site__footer">
    <!-- première rangé de colonne -->
    
    <!-- section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="footer__sociaux">
            <?php get_sidebar( 'footer_ligne_1' ); ?>
        </section>
        <section class="copyright"></section>
        <section class="footer__auteur"></section>
    </div>
    <h2 class="footer__titre">Cégep de Maisonneuve</h2>
    <p class="footer__presentation">Programme TIM</p>
    <h3 class="footer__author">Fait par Antoine Ridard</h3>
    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar( 'footer_colonne_1' ); ?>
        </section>
        <section class="footer__adresse">
            <?php get_sidebar( 'footer_colonne_2' ); ?>
        </section>
        <section class="footer__liens">
            <?php get_sidebar( 'footer_colonne_3' ); ?>
        </section>
    </div>
<?php 

$icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
wp_nav_menu(array(
                    "menu"=>"Footer_Menu",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>
                    <?php get_search_form(); ?>
</footer>
    <div class="boite__modale">
        <button class="boite__modale__fermeture"><svg width="33" height="33" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#fff"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></button>
        <article class="boite__modale__texte">
            Ceci est un premier test de boîte modale
        </article>
    </div>
    <div class="boite__carrousel">
        <button class="boite__carrousel__fermeture"><svg width="33" height="33" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#fff"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></button>
        <section class="boite__carrousel__navigation"></section>
    </div>
    <?php wp_footer(); ?>
</body>

</html>