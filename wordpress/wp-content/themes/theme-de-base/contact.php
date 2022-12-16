<?php

/**
 * 	Template Name: Contact
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<main>
    <div class="content">
        <h1>Envoyez nous un message</h1>

        <div class="content__grid">
            <div class="content__form">
                <form>
                    <label for="lname">Nom Complet *</label><br>
                    <input type="text" id="fname" name="fname" placeholder="Prénom">
                    <input type="text" id="lname" name="lname" placeholder="Nom de Famille">
                    <br><br>
                    <label for="lname">E-mail *</label><br>
                    <input type="text" id="email" name="email" placeholder="E-mail">
                    <br><br>
                    <label for="objet">Objet *</label><br>
                    <input type="text" id="objet" name="objet" placeholder="Objet">
                    <br><br>
                    <label for="message">Message *</label><br>
                    <input type="text" id="message" name="message" placeholder="Message" style="height:200px">
                    <br><br>
                    <input class="content__grid__btn" type="submit" value="Submit">
                </form>
            </div>

            <div class="content__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.465975611529!2d-73.61267268444!3d45.540950979102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc919155429e9ed%3A0xec67cb4e121595d1!2s7033%20Rue%20Boyer%2C%20Montr%C3%A9al%2C%20QC%20H2S%202J9!5e0!3m2!1sfr!2sca!4v1670014240444!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="responsive-iframe"></iframe>
            </div>
        </div>

        <div class="content__grid">
            <div class="content__mailTxt">
                <p>Vous souhaitez offrir un ensemble de prêt-à-jardiner à vos employé.es? <br>
                    Écrivez nous : <a class="content__media__underline" href="mailto: corpo@maiboites.com"> <b> corpo@maiboites.com</b></a></p>
            </div>

            <div class="content__media">
                <p>Téléphone : <a class="content__media__underline" href="tel:+5145523486">514 552-3486</a></p>
                <div class="content__media__social">
                    <a href="https://www.facebook.com/maiboites/"><img class="socials" src="sources/01_medias/Facebook.png" alt=""></a>
                    <a href="https://www.instagram.com/maiboites/"><img class="socials" src="sources/01_medias/Instagram.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
//get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>