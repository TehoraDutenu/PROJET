<!-- Accès aux valeurs détenues par the_post() -->

<h4 class="text-primary blog-post-title"> <?php the_title(); ?> </h4>

<p> <?php the_date() ?> par <a href="#" class="text-primary""><?php the_author() ?></a> </p>

<?php the_content(); ?>