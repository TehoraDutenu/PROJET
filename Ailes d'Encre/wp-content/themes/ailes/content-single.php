<!-- Contenu d'une page de post -->


<h3 class="text-dark blog-post-title">
    <?php the_title() ?>
</h3>

<div class="mt-3">
    <?php the_date() ?> par <a href="#"><?php the_author() ?></a>
</div>

<div class="mt-3">
    <p>Catégories : <?php the_category() ?></p>
</div>

<?php if (has_tag()) : ?>
    <p>Tags : <?php the_tags() ?> </p>
<?php endif; ?>