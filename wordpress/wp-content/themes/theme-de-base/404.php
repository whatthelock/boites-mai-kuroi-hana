<?php

/**
 * Modèle de la page 404
 */

get_header(); // Affiche header.php
?>
<link rel="stylesheet" href="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/themes/theme-de-base/styles/style_erreur_404.css?ver=6.0.3">
<style>
    header {
        display: none;
    }

    footer {
        display: none;
    }
</style>
<?php
//get_template_part('partials/404'); // Affiche partials/404.php

get_footer(); // Affiche footer.php 
?>
<main>
    <div class="overlay__image"></div>
    <div class="overlay__black"></div>

    <section>
        <div class="section__404">
            <div class="section__404__animation">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/arrosoir.png" class="section__404__animation__arrosoir" alt="arrosoir">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/goutte_eau.png" class="section__404__animation__goutte" alt="arrosoir">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/goutte_eau.png" class="section__404__animation__goutte" alt="arrosoir">
                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/goutte_eau.png" class="section__404__animation__goutte" alt="arrosoir">

            </div>

            <div class="section__404__main">
                <h1 class="section__404__main__title titre__oeuvre">404</h1>
                <p class="section__404__main__subtitle">Oops cette page n'existe pas</p>
                <p class="section__404__main__txt">Tu as creusé trop profond</p>
                <a href="http://localhost/boites-mai-kuroi-hana/wordpress/">
                    <input class="section__404__main__btn" type="submit" value="Retourner a la page d'acceuil">
                </a>
            </div>
        </div>

    </section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="scripts/script_erreur_404.js"></script>
</body>