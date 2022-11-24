<?php

/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if (have_posts()) : // Est-ce que nous avons des pages à afficher ? 
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while (have_posts()) : the_post();
?>

        <article>
            <?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil 
            ?>
                <header>
                    <div class="hero">
                        <div class="hero__container">
                            <div class="hero__content">
                                <div class="hero__content__logo">
                                    <img src="sources/01_medias/logo_mai.png" alt="mai_logo">
                                    <h2>Le jardinage, simplifié</h2>
                                </div>
                                <div class="hero__content__fleche">
                                    <img src="" alt="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="95.32" height="63.563" viewBox="0 0 95.32 63.563">
                                        <defs>
                                            <filter id="Tracé_45" x="0" y="0" width="95.32" height="63.563" filterUnits="userSpaceOnUse">
                                                <feOffset dy="3" input="SourceAlpha" />
                                                <feGaussianBlur stdDeviation="3" result="blur" />
                                                <feFlood flood-opacity="0.161" />
                                                <feComposite operator="in" in2="blur" />
                                                <feComposite in="SourceGraphic" />
                                            </filter>
                                        </defs>
                                        <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#Tracé_45)">
                                            <path id="Tracé_45-2" data-name="Tracé 45" d="M-1096.656,990.815c.661.591,31.861,31.436,31.861,31.436l31.318-31.436" transform="translate(1112.73 -977.74)" fill="none" stroke="#403834" stroke-linecap="round" stroke-width="10" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="hero__forme_jaune">
                            </div>

                            <div class="hero__forme_brun">
                            </div>

                            <div class="hero__forme_rose">
                            </div>

                            <div class="hero__forme_vert">
                            </div>
                        </div>
                    </div>
                    <nav class='navbar'>
                        <div class='navbar__container'>
                            <div class='container__collapse'>
                                <ul class='container__ul'>
                                    <li>
                                        <a href="index.html">
                                            <img src="sources/01_medias/logo_mai.png" class="navbar__logo" alt="menu">
                                        </a>
                                    </li>
                                    <div class="navbar__pages">
                                        <li>
                                            <a href="liste_produits.html" class="navbar__lien_pages">Boutique</a>
                                        </li>
                                        <li>
                                            <a href="equipe.html" class="navbar__lien_pages">Qui sommes nous?</a>
                                        </li>
                                        <li>
                                            <a href="nouvelle.html" class="navbar__lien_pages">Blog</a>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class="content">
                    <h2>Gazon</h2>
                    <div class="content__graphs">
                        <div class="content__wrapper">
                            <div class="graph-01 content__graphs__graph">
                                <img src="sources/01_medias/commande_en_ligne.png">
                            </div>
                            <p>
                                <span class="underline">01.</span> <br>La commande en ligne
                            </p>
                        </div>

                        <div class="content__wrapper">
                            <div class="graph-02 content__graphs__graph">
                                <img src="sources/01_medias/ensemble.png">
                            </div>
                            <p>
                                <span class="underline">02.</span><br> L'ensemble contenant tout pour débuter un potager
                            </p>
                        </div>

                        <div class="content__wrapper">
                            <div class="graph-03 content__graphs__graph">
                                <img src="sources/01_medias/horticulture.png">
                            </div>
                            <p>
                                <span class="underline">03.</span><br> L'accompagnement horticole
                            </p>
                        </div>

                        <div class="content__wrapper">
                            <div class="graph-04 content__graphs__graph">
                                <img src="sources/01_medias/potager.png">
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
                                            <img src="sources/01_medias/helene.png" alt="">
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
                                            <img src="sources/01_medias/pierre.png">

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
                                            <img src="sources/01_medias/francoise.png" alt="">

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
                                            <img src="sources/01_medias/marcel.png" alt="">

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
                                            <img src="sources/01_medias/therese.png" alt="">

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

                </div>

            <?php endif; ?>

        </article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>