<footer class="site__footer">
    <h2 class="footer__titre">Juste un footer</h2>
    <h3 class="footer__author">Fait par Antoine Ridard</h3>
    <div class="footer_content">
        <div class="footer_menu">
            <?php 
            $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array(
                                "menu"=>"simple",
                                "container"=>"nav",
                                "container_class"=>"site__footer__menu",
                                "menu_class"=>"site__footer__menu__ul",
                                "link_before"=>$icone)); ?>
        </div>
        <div class="footer_social">
            <?php get_sidebar('footer_social') ?>
        </div>
        <div class="footer_searchbar">
            <h3>Recherchez un article...</h3>
            <?php get_search_form(); ?>
        </div>
    </div>
    
</footer>
<?php wp_footer(); ?>
</body>

</html>