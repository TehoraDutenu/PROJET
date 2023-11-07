<div class="col-sm-3 offset-1 blog-sidebar bg-warning">
    <!-- Dernières sorties -->


    <div class="sidebar-module sidebar-module-insert">
        <!-- Navigation sidebar -->
        <?php wp_nav_menu(
            array(
                "theme_location" => "menu-sidebar", //on indique le menu à afficher
                "menu_class" => "sidebar-menu", //ajout de la class pour le css
                "container" => false,
                "walker" => new Sidebar_menu() //récupèration de notre template du menu
            )
        )
        ?>
    </div>
</div>