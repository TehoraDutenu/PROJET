<!-- Articles d'une catégorie donnée -->

<div>
    <h3>
        <a href="<?php the_permalink() ?>">
            <?php the_title() ?>
        </a>
    </h3>
    <?php if ('post' === get_post_type()) : ?>
        <div class="blog-postmeta">
            <p class="post-date"><?php echo get_the_date() ?></p>
        </div>

    <?php endif; ?>
</div>
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