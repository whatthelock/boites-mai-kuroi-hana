<?php
/*
 * Template Name: produit
 * Template Post Type: post, page, product, produit, produits
 */

get_header();
?>

<section class="produit">
    <div class="produit__image">
        <div class="produit__image__survol">
            <h2 class="produit__titre"><?php the_title(); ?></h2><br>
            <p class="produit__resume"><?php the_content(); ?>
            </p>
            <div class="produit__image__ui">
                <h4 class="produit__prix"><?php the_field('prix'); ?></h4>
                <form class="produit__quantite">
                    <label for="quantite">Quantité:</label><br>
                    <input type="number" id="nombre" value="1" min="0" class="produit__nombre_quantite"><br><br>
                    <input type="button" value="Ajouter" class="produit__bouton_ajouter">
                </form>
            </div>
        </div>
        <div class="produit__image__container">
            <img class="produit__image" src="<?php the_field('image_principale'); ?>">
        </div>
    </div>

    <div class="produit__details">
        <?php if (the_field('deuxieme_description') != null) { ?>
            <h4>Détails</h4>
            <p class="produit__description"><?php the_field('deuxieme_description') ?>
            </p>

        <?php
        }
        ?>
        <p>
            <?php the_field('deuxieme_description') ?>
        </p>
    </div>
</section>
<?php get_footer(); // Affiche footer.php 
?>