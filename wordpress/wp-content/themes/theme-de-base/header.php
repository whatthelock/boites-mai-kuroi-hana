<?php
/*-----------------------------------------------------------------------------------*/
/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style_menu.css">
    <link rel="stylesheet" href="styles/style_liste_produits.css">
    <link rel="stylesheet" href="styles/style_footer.css">


    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>
        <?php bloginfo('name'); // Affiche le nom du blog 
        ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. 
        ?>
    </title>
    <?php
    // Tous les .css et .js sont chargés dans le fichier functions.php
    ?>

    <?php wp_head();
    /* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
    ?>
</head>

<body <?php body_class();
        /* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
        ?>>

    <header>
        <?php
        if (is_page_template('index.php')) { ?>

            <header>
                <div class="hero">
                    <div class="hero__container">
                        <div class="hero__content">
                            <div class="hero__content__logo">
                                <img src="http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/logo_mai.png" alt="mai_logo">
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
            </header>

        <?php
        }
        ?>

        <nav>
            <?php
            // Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
            wp_nav_menu(array('theme_location' => 'main-menu'));
            ?>
        </nav>

    </header>

    <main>
        <!-- Débute le contenu principal de notre site -->