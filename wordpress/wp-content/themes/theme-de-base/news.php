<?php

/**
 * 	Template Name: Nouvelle
 * Template Post Type: post, page, product, nouvelle, nouvelles
 */

get_header(); // Affiche header.php
?>

<main>
    <section class="nouvelle">
        <h2 class="nouvelle__titre"><?php the_title(); ?></h2>
        <i>
            <p class="nouvelle__auteur"><?php the_field('auteur'); ?></p>
        </i><br>
        <p class="nouvelle__description"><?php the_field('desc'); ?></p>
        <div class="nouvelle__image__container">
            <img class="nouvelle__image" src="<?php the_field('image_principale'); ?>">
        </div>
        <p><?php the_field('desc_2'); ?></p>
    </section>
</main>

<?php
//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>