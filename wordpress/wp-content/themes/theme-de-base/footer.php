<?php
/*-----------------------------------------------------------------------------------*/
/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale 
?>
</main>

<footer>
    <div class="footer__content">
        <div class="footer__content__form">
            <h3 class="footer__content__form__title">Inscrivez-vous</h3>
            <input class="footer__content__form__txtInput" type="text" placeholder="Adresse e-mail">
            <input class="footer__content__form__btn" type="submit" value="S'inscrire">
        </div>
        <div class="footer__content__box">
            <a class="footer__content__link" href="equipe.html">
                <p>Qui sommes nous?</p>
            </a>
            <a class="footer__content__link" href="mailto:info@maiboites.com?">
                <p>Contactez-nous</p>
            </a>
            <a class="footer__content__link" href="liste_produits.html">
                <p>Boutique</p>
            </a>
        </div>
        <p class="copyright">Mai© 2022</p>
    </div>
</footer>

<?php
wp_footer();
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>

</html>