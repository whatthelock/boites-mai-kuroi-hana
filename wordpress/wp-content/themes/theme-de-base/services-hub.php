<?php

/**
 * 	Template Name: liste produit
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

$products = new WP_Query(array(
    'post_type' => 'produit',
    'posts_per_page' => -1,
));

//var_dump(print_r($products));
?>


<main>
    <section>
        <div class="boites">

            <?php
            if ($products->have_posts()) : while ($products->have_posts()) : $products->the_post();
            ?>
                    <!--<pre><?php //print_r($product); 
                                ?></pre>-->



                    <!-- <div class="boites__boite">
                        <a class="boites__boite__content" href="<?php the_permalink() ?>">
                            <?php // echo $products; 
                            ?>
                            <img class="boites__boite__content__image" src="<?php the_field('image_principale'); ?>" alt="Boite Hélène">

                            <div class="boites__boite__content__info">
                                <h3 class="boites__boite__content__info__titre"><?php the_title(); ?></h3>
                                <div class="boites__boite__content__info__txt">
                                    <?php the_content(); ?>
                                </div>
                                <b>
                                    <p class="boites__boite__content__info__prix"><?php the_field('prix'); ?></p>
                                </b>
                            </div>
                            <div class="boites__boite__content__btn">
                                Acheter
                            </div>
                        </a>
                    </div> -->



                    <div class="boites__boite">
                        <a class="boites__boite__content" href="<?php the_permalink() ?>">
                            <img class="boites__boite__content__image" src="<?php the_field('image_principale'); ?>" alt="Boite Hélène">

                            <div class="boites__boite__content__info">
                                <h3 class="boites__boite__content__info__titre"><?php the_title(); ?></h3>
                                <div class="boites__boite__content__info__txt"><?php the_content(); ?></div>
                                <b>
                                    <p class="boites__boite__content__info__prix"><?php the_field('prix'); ?></p>
                                </b>
                            </div>
                            <div class="boites__boite__content__btn">
                                Acheter
                            </div>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_query();

            //if (have_posts()) : // Est-ce que nous avons des pages à afficher ?
            // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
            //while (have_posts()) : the_post();

            ?>
        </div>
    </section>
</main>

<?php

get_footer(); // Affiche footer.php 
?>