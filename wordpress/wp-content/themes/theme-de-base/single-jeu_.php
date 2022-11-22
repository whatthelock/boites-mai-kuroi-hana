<?php
/*
 * Template Name: single-jeu_
 * Template Post Type: post, page, product, jeu_
 */

get_header();
?>

<main>
    <div class="game">
        <div class="game__media">
            <img src="<?php the_field('image_jeux'); ?>">
        </div>

        <div class="game__infos">
            <div class="game__stats">
                <div class="game__price"><?php the_field('prix'); ?> 💵</div>
                <div class="game__duration"><?php the_field('duree_moyenne'); ?> ⏱️</div>
                <div class="game__players"><?php the_field('nombre_de_joueurs'); ?> 👨‍👩‍👦</div>
                <div class="game__age"><?php the_field('age_minimal_requis'); ?> 🎂</div>
            </div>

            <h2 class="game__title"><?php the_title(); // Titre de l'article 
                                    ?></h2>

            <div class="game__desc">
                <?php the_content(); // Contenu principal de l'article 
                ?>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>Valet de coeur - 2021</p>
</footer>
</div>