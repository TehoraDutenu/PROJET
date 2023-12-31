<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ailes d'Encre</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Mon CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/style.css" ?>">

</head>

<body>
    <header class="text-dark p-4 ">

        <div class="header d-flex flex-column col-12 container-fluid">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/arbre.png' ?>" alt='banniere'>
            <!-- Nom du site -->
            <a href="<?php echo get_bloginfo('wpurl') ?>">
                <h2> <?php echo get_bloginfo('name') ?> </h2>
            </a>
            <em class="blog-description"> <?php echo get_bloginfo('description') ?> </em>
            <!-- Menu de navigation -->
            <?php wp_nav_menu(
                array(
                    "theme_location" => "menu-sup",
                    "menu_class" => "custom-menu",
                    "container" => false,
                    "walker" => new Depth_menu()
                )
            )
            ?>
        </div>
    </header>