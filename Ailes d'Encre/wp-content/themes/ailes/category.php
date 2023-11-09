<!-- Appeler le header -->
<?php get_header(); ?>

<main>

    <div class="category-header">
        <?php
        the_archive_title("<h2>", "</h2>");
        the_archive_description("<em>", "</em>");
        ?>
    </div>


    <div class="d-flex">
        <div class="col-sm-8 bloc-main">

            <!-- Récupérer les chroniques -->
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    get_template_part('content', 'category', get_post_format());
                endwhile;
            endif;
            ?>

        </div>
        <?php get_sidebar(); ?> <!-- Dernières sorties en widget -->
    </div>
</main>

<!-- Appeler le footer -->
<?php get_footer(); ?>