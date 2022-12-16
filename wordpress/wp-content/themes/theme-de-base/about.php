<?php

/**
 * 	Template Name: About
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<section class="a_propos">
    <h1 class="a_propos__titre">Salut! </h1>
    <h2 class="a_propos__titre">nous c’est mai!</h2>
    <div class="a_propos__description">
        <p class="a_propos__description__paragraphe">Nous sommes un groupe d’étudiants montréalais provenant de divers domaines. Des rêveurs, des curieux,
            des
            créatifs et des pouces verts, tous rassemblés autour de la même mission. Mettre les mains à la
            terre, tout
            simplement.</p>
        <p class="a_propos__description__paragraphe">C’est peut-être l’innocence de la jeunesse qui rêve d’une ville plus verte ou de changement pour la
            nouvelle
            génération. Nous on voit ça comme la solution.</p>
        <p class="a_propos__description__paragraphe">Ceux qui étaient dans la rue pour le climat se rejoignent de nouveau, militant autrement pour
            l’inaction de
            l’État. Ce qui était initialement une idée folle de cégépiens, verdit aujourd’hui les maisons de nos
            voisins
            et voisines. </p><br>
        <h3 class="a_propos__description__titre">Mettre les mains à la terre, tout simplement.</h3>
        <p class="a_propos__description__paragraphe">Et s’il était possible de verdir nos villes? D’initier une habitude saine chez nos voisins?</p>
        <p class="a_propos__description__paragraphe">Nous avons remarqué que les principaux freins pour se lancer dans le jardinage sont l’accessibilité
            aux
            équipement, l’espace et le manque de connaissances. Pourquoi alors ne pas créer une solution qui
            répond à ces
            trois points? Un potager simple et ludique destiné aux débutants comme aux pros sur les petits et
            grands
            balcons! </p>
        <p class="a_propos__description__paragraphe">Peut-être, avec votre aide, prouverons-nous que l’autonomie alimentaire est un rêve réalisable!</p>
        <p class="a_propos__description__paragraphe">Voilà mai.</p>
    </div>
    <div class="a_propos__boite_image">
        <img class="a_propos__boite_image__img" src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/mai-boites.jpg">
    </div>
</section>

<section class="histoire">
    <h1 class="histoire__titre">De la rue aux balcons</h1>
    <div class="histoire__description">
        <p class="histoire__description__paragraphe">Quelle est l’histoire de mai? C’est tout simple. Il y a deux ans, à l’aube de la pandémie, nous
            étions des étudiants de 19 ans avec plus de temps sur les bras. Ne pouvant se regrouper dans les
            rues, nous avons vu l’opportunité de rapprocher les citoyens de leur communauté, de leur assiette et
            de l’autosuffisance alimentaire! </p>
        <p class="histoire__description__paragraphe">C’est en voyant le désir de nos voisins et voisines de jardiner que nous nous sommes lancés. Comment
            serait-il possible, de rendre l’agriculture urbaine à tous? Et si on passait par les balcons?</p>
        <p class="histoire__description__paragraphe">Nous avons donc, en moins de 10 jour, créé mai. Des ensembles de prêts-à-jardiner pour les
            Montréalais, livrés en BIXI, emballés dans le sous-sol de nos parents. Nous avons eu la piqure. </p>
        <p class="histoire__description__paragraphe">Deux ans plus tard, et 1400 nouveaux jardiniers et jardinières avec nous dans l’aventure, nous
            lançons notre 3e saison! </p>
    </div>
    <div class="histoire__boite_image">
        <img class="histoire__boite_image__img" src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/mai-boites.jpg">
    </div>
</section>

<section class="equipe">
    <h1 class="equipe__titre">Notre équipe</h1>
    <div class="equipe__boites">
        <div class="equipe__boites__boite" id="modal_btn">
            <img class="equipe__boites__boite__image" src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/chloe.png" alt="Louise">
            <h4 class="equipe__boites__boite__titre">Louise Foglia</h4>
            <p class="equipe__boites__boite__phrase">Un jardin, même tout petit, est la porte du paradis!</p>
        </div>
        <div class="equipe__boites__boite" id="modal_btn">
            <img class="equipe__boites__boite__image" src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/fanny.png" alt="Chloé">
            <h4 class="equipe__boites__boite__titre">Chloé Fortier-Devin</h4>
            <p class="equipe__boites__boite__phrase">Planter un jardin, c'est croire en demain.</p>
        </div>
        <div class="equipe__boites__boite" id="modal_btn">
            <img class="equipe__boites__boite__image" src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/william.png" alt="William">
            <h4 class="equipe__boites__boite__titre">William Des Marais</h4>
            <p class="equipe__boites__boite__phrase">Ne laisse entrer dans le jardin de ta vie que ceux qui ont des fleurs à
                planter.</p>
        </div>
        <div class="equipe__boites__boite" id="modal_btn">
            <img class="equipe__boites__boite__image" src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/louise.png" alt="Fanny">
            <h4 class="equipe__boites__boite__titre">Fanny Archambault</h4>
            <p class="equipe__boites__boite__phrase">Un jardin, c'est comme un ami que nous pouvons rendre visite n'importe
                quand.</p>
        </div>
    </div>
    <div class="equipe__modal" id="modal">
        <div class="equipe__modal__content">
            <span class="equipe__modal__content__close">&times;</span>
            <img class="equipe__modal__content__image" src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/fanny.png"></img>
            <h5 class="equipe__modal__content__titre">Chloé Fortier-Devin</h5>
            <p class="equipe__modal__content__texte">Chloé Fortier-Devin est jardinière amateure et fondatrice du Jardin de la devinette, un potager urbain sur le toit d’un triplex à Montréal. Elle a d’abord jardiné sur son balcon, mais celui-ci devenu trop étroit pour ses nombreux plants de tomates, elle a aménagé son potager sur le toit au printemps 2020. Son projet est constitué d’une vingtaine de bacs à réserve d’eau installés sur des palettes de bois. Elle y a cultivé entre autres des tomates, concombres, aubergines, fines herbes et fleurs comestibles, et a récolté plus de 32kg de légumes la première année. Elle est fière d’avoir cultivé une partie de son alimentation et désire partager son expérience pour encourager d’autres jardiniers et jardinières à tenter l’aventure de l’agriculture urbaine.</p>
        </div>
    </div>
    </div>
</section>

<script src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/themes/theme-de-base/script_a_propos.js"></script>
<?php
//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>