<?php

/**

/**
 * 	Template Name: Index
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
?>

<div class="content">
    <h2>Gazon</h2>
    <div class="content__graphs">
        <div class="content__wrapper">
            <div class="graph-01 content__graphs__graph">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/commande_en_ligne.png">
            </div>
            <p>
                <span class="underline">01.</span> <br>La commande en ligne
            </p>
        </div>

        <div class="content__wrapper">
            <div class="graph-02 content__graphs__graph">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/ensemble.png">
            </div>
            <p>
                <span class="underline">02.</span><br> L'ensemble contenant tout pour débuter un potager
            </p>
        </div>

        <div class="content__wrapper">
            <div class="graph-03 content__graphs__graph">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/horticulture.png">
            </div>
            <p>
                <span class="underline">03.</span><br> L'accompagnement horticole
            </p>
        </div>

        <div class="content__wrapper">
            <div class="graph-04 content__graphs__graph">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/potager.png">
            </div>
            <p>
                <span class="underline">04.</span><br> le potager, simple et ludique
            </p>
        </div>
    </div>

    <div class="content__produit">
        <h2>Prêt à acheter?</h2>

        <div class="produit__slider--wrap">
            <div class="swiper main-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide modal-opener">
                        <a href="">
                            <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/helene.png" alt="">
                            <div class="class">
                                <h2>Hélène</h2>
                            </div>
                            <div class="title">
                                basilic, ciboulette, persil, origan.
                            </div>
                        </a>
                    </div>


                    <div class="swiper-slide modal-opener">
                        <a href="">
                            <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/pierre.png">

                            <div class="class">
                                <h2>Pierre</h2>
                            </div>
                            <div class="title">
                                haricot, tomate, basilic.
                            </div>
                        </a>
                    </div>


                    <div class="swiper-slide modal-opener">
                        <a href="">
                            <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/francoise.png" alt="">

                            <div class="class">
                                <h2>Françoise</h2>
                            </div>
                            <div class="title">
                                kale, bette à carde, laitue romaine.
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide modal-opener">
                        <a href="">
                            <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/marcel.png" alt="">

                            <div class="class">
                                <h2>Marcel</h2>
                            </div>
                            <div class="title">
                                poivron, concombre.
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide modal-opener">
                        <a href="">
                            <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/therese.png" alt="">

                            <div class="class">
                                <h2>Thérèse</h2>
                            </div>
                            <div class="title">
                                tomates
                            </div>
                        </a>
                    </div>

                    <!-- <div class="swiper-slide modal-opener slide-4 caravan-slide" >
                            <img src="" class="project-img" alt="">

                            <div class="class">
                                INTERACTIVITÉ
                            </div>
                            <div class="title">
                                BROUHAHA
                            </div>
                        </div>

                        <div class="swiper-slide modal-opener slide-5 jeux-slide" >
                            <img src="" class="project-img" alt="">

                            <div class="class">
                                JEUX VIDÉO
                            </div>
                            <div class="title">
                                MESPRIT
                            </div>
                        </div> -->
                </div>

                <!-- If we need navigation buttons -->

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/themes/theme-de-base/styles/script_index.js"></script>
</div>
<?php get_footer(); // Affiche footer.php 
?>