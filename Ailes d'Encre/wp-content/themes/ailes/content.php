<!-- Accès aux valeurs détenues par the_post() -->

<h5 class="blog-post-title" style="color: rgba(90, 32, 32, 0.5);"> <?php the_title(); ?> </h5>

<p> <?php the_date() ?> par <a href="#"><?php the_author() ?></a> </p>

<div class="entry-summary">
    <!-- Afficher un résumé du post -->
    <?php the_excerpt() ?>
    <!-- Bouton pour accéder à l'intégralité du post -->
    <a href="<?php the_permalink() ?>">
        <!-- Interpréter le code hexadécimal -->
        <?php esc_html_e("La suite &rarr;") ?>
    </a>
    <hr>
</div>