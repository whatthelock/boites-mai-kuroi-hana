<?php

/**
 * 	Template Name: liste nouvelle
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

$products = new WP_Query('post_type=nouvelle');

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
                    <div class="boites__boite">
                        <a class="boites__boite__content" href="#">
                            <img class="boites__boite__content__image" src="<?php the_field('image_principale'); ?>" alt="Boite Hélène">

                            <div class="boites__boite__content__info">
                                <h3 class="boites__boite__content__info__titre"><?php the_field('title'); ?></h3>
                                <div class="boites__boite__content__info__txt">
                                    <?php the_field('desc'); ?>
                                </div>
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