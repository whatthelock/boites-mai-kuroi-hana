<?php
/*-----------------------------------------------------------------------------------*/
/* Ce fichier est présent sur chaque page
	/* Vous pouvez y ajouter des fonctions au besoin
	/*-----------------------------------------------------------------------------------*/

/* --------------------------------
Ajoute les vignettes dans les posts de type Article */
add_theme_support('post-thumbnails');


/* --------------------------------
Déclare le menu principal */
register_nav_menus(
    array(
        /* 
			1. 'main-menu' = Nom dans le code
			2. 'Menu principal' = Nom dans l'admin
			3. 'Menu principal du site' = Description dans l'admin */
        'main-menu' => __('Menu principal', 'Menu principal du site'),
        /* Dupliquer cette ligne si vous désirez déclarer d'autres menus */
    )
);


/* --------------------------------
Function déclarant la barre latérale principale */
function add_sidebars()
{
    register_sidebar(array(
        /* 
			1. 'main-sidebar' = Nom dans le code
			2. 'Barre laterale principale' = Nom dans l'admin
			3. 'Barre latérale principale du site' = Description dans l'admin */
        'main-sidebar' => __('Barre laterale principale', 'Barre latérale principale du site'),
        /* Dupliquer cette ligne si vous désirez déclarer d'autres sidebars */
    ));
}
/* Appel la fonction déclarant la barre latérale au moment de l'init des widgets */
add_action('widgets_init', 'add_sidebars');


/* -------------------------------- 
Function ajoutant les styles et scripts */
function add_style_and_js()
{
    $debug = '?t=' . microtime(1);
    /* Ajoute le fichier style.css du theme WordPress actif 
	  1. 'default' = ID de référence à donner au à la feuille de style
		2. get_template_directory_uri() . '/style.css' = Chemin où ce trouve le fichier CSS en question
	*/
    wp_enqueue_style('styles', get_template_directory_uri() . '/styles/style.css' . $debug);
    //
    wp_enqueue_style('footer', get_template_directory_uri() . '/styles/style_footer.css' . $debug);
    wp_enqueue_style('menu', get_template_directory_uri() . '/styles/style_menu.css' . $debug);

    if (is_page_template('index.php')) {
        wp_enqueue_style('index', get_template_directory_uri() . '/styles/style_index.css' . $debug);
        wp_enqueue_style('hero', get_template_directory_uri() . '/styles/style_hero.css' . $debug);
        wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' . $debug);
    }

    if (is_page_template('about.php')) {
        wp_enqueue_style('a-propos', get_template_directory_uri() . '/styles/style_a_propos.css' . $debug);
    }

    if (is_page_template('services-hub.php')) {
        wp_enqueue_style('liste_produit', get_template_directory_uri() . '/styles/style_liste_produits.css' . $debug);
    }

    if (is_page_template('news-hub.php')) {
        wp_enqueue_style('liste_produit', get_template_directory_uri() . '/styles/style_liste_produits.css' . $debug);
        wp_enqueue_style('hero', get_template_directory_uri() . '/styles/style_hero.css' . $debug);
    }

    if (is_page_template('404.php')) {
        wp_enqueue_style('404', get_template_directory_uri() . '/styles/style_erreur_404.css' . $debug);
    }


    /* Pour ajoutez une feuille de style supplémentaire, copier la ligne précédente et ajuster le chemin du fichier de façon relative vers votre nouveau fichier CSS */

    /* Ajoute le fichier main.js du theme WordPress actif 
	   1. 'default' = ID de référence à donner au script
		 2. get_template_directory_uri() . '/main.js' = Chemin où ce trouve le fichier JS en question
		 3. array() = Liste des dépendances de ce script (généralement vide)
		 4. false = Si un no de version doit être ajouté (généralement à false)
		 5. true = Est-ce que le script doit-être ajouté à la fin du body. Si mis à false le script est ajouter dans le head à la place
	*/



    // wp_enqueue_script('default', get_template_directory_uri() . '/main.js');

    // if (is_page_template('index.php')) {
    //     wp_enqueue_script('swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
    //     wp_enqueue_script('AHHH', get_template_directory_uri() . '/scripts/script_index.js');
    // }

    // if (is_page_template('404.php')) {
    //     wp_enqueue_script('swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
    //     wp_enqueue_script('AHHH', get_template_directory_uri() . '/scripts/script_index.js');
    // }


    /* Pour ajoutez un script, copier la ligne précédente et ajuster le chemin de façon relative vers votre nouveau fichier JS */
}

/* Appel de la fonction ajoutant les styles et scripts */
add_action('wp_enqueue_scripts', 'add_style_and_js');
