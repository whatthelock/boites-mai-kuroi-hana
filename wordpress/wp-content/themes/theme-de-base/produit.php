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
            <h2 class="produit__titre">Oïa pointu</h2><br>
            <p class="produit__resume">Le pointilleux, le précis, celui qui répond à nos petites envies.
                Parfait à l’intérieur pour nos petites plantes dans des pots de 12 pouces et plus. Arrosage une
                fois
                semaine.
            </p>
            <div class="produit__image__ui">
                <h4 class="produit__prix">26,95$</h4>
                <form class="produit__quantite">
                    <label for="quantite">Quantité:</label><br>
                    <input type="number" id="nombre" value="1" min="0" class="produit__nombre_quantite"><br><br>
                    <input type="button" value="Ajouter" class="produit__bouton_ajouter">
                </form>
            </div>
        </div>
        <div class="produit__image__container">
            <img class="produit__image" src="sources/01_medias/oia_pointu.png">
        </div>
    </div>
    <div class="produit__details">
        <h4>Détails</h4>
        <p class="produit__description">La porosité de la jarre permet une irrigation adaptée aux besoins de la
            plante,
            tout comme dans la nature, ce sont les racines qui se rendent à la source d'eau et non l'eau de
            pluie ou
            d'arrosage en surface qui se rend aux racines.
            Elle permet aussi une économie d'eau allant de 50% à 70% du fait de la diminution des pertes par
            évaporation.
            Grâce à l'irrigation en profondeur, on diminue les mauvaises herbes et les maladies fongiques.
            Très simple d'utilisation, une fois enterré, remplissez le Oïa 1 à 2 fois par semaine et laissez vos
            cultures
            s'épanouir sans stress hydrique.</p>
        <p>* Les conditions climatiques, l'exposition, le type de terre ou de pots peuvent faire varier la durée
            de
            l'autonomie.</p>
        <i>
            <p>Pour plante de 12po. et plus</p>
            <p>23 x 8 cm</p>
            <p>400 mL</p>
        </i>
    </div>
</section>