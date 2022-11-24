<?php

/**
 * 	Template Name: liste produit
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

$products = new WP_Query('post_type=produits');

//echo $products
?>


<main>
    <section>
        <div class="boites">

            <?php
            //if (have_posts()) : // Est-ce que nous avons des pages à afficher ? 
            // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
            //while (have_posts()) : the_post();
            while ($projects->have_posts()) : $projects->the_post();
            ?>
                <div class="boites__boite">
                    <a class="boites__boite__content" href="#">
                        <img class="boites__boite__content__image" src="https://via.placeholder.com/300.png/09f/fff" alt="Boite Hélène">

                        <div class="boites__boite__content__info">
                            <h3 class="boites__boite__content__info__titre">Hélène</h3>
                            <p class="boites__boite__content__info__txt">
                                Hélène est un ensemble d’herbes.
                                Elle contient 4 variétés de fines
                                herbes : du basilic italien, de la
                                ciboulette, du persil frisé et de l’origan
                                zaatar.
                            </p>
                            <b>
                                <p class="boites__boite__content__info__prix">À partir de 49,95 $</p>
                            </b>
                        </div>
                        <div class="boites__boite__content__btn">
                            Acheter
                        </div>
                    </a>
                </div>
            <?php endwhile; // Fermeture de la boucle
            //endif;
            ?>
        </div>
    </section>
</main>

<?php

get_footer(); // Affiche footer.php 
?>