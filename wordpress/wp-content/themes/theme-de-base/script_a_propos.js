var modal = document.getElementById("modal");

var btn = document.querySelectorAll("#modal_btn");

var span = document.getElementsByClassName("equipe__modal__content__close")[0];

var texteArray = ["Passionnée par la Nature, la faune et la flore, les jardins naturels mêlant rosiers, arbustes et vivaces, Louise Foglia aime le partage, les échanges, le dessin, la Nature,… ajoutez à cela le tricot pour les longues soirées d’hiver où le jardin ne veut pas d'elle (et réciproquement), voilà les menus plaisirs rassemblés en un seul métier qui fait son bonheur chaque jour!",
    "Chloé Fortier-Devin est jardinière amateure et fondatrice du Jardin de la devinette, un potager urbain sur le toit d’un triplex à Montréal. Elle a d’abord jardiné sur son balcon, mais celui-ci devenu trop étroit pour ses nombreux plants de tomates, elle a aménagé son potager sur le toit au printemps 2020. Son projet est constitué d’une vingtaine de bacs à réserve d’eau installés sur des palettes de bois. Elle y a cultivé entre autres des tomates, concombres, aubergines, fines herbes et fleurs comestibles, et a récolté plus de 32kg de légumes la première année. Elle est fière d’avoir cultivé une partie de son alimentation et désire partager son expérience pour encourager d’autres jardiniers et jardinières à tenter l’aventure de l’agriculture urbaine.",
    "William Des Marais est un grand adepte des plantes, du jardinage et de la nature, mais aussi du beau et de la décoration. Il adore créer de mes mains et faire de la photo. Il a une formation en Design Graphique et a travaillé quelques années dans le domaine. William se concentre maintenant sur la création de contenu, la photo, l’horticulture et l’artisanat. Il touche un peu à tout ce qui lui apporte du bonheur.",
    "Les deux pieds bien plantés dans mes pantoufles, euh, mes bottes de caoutchouc noir, le jeans sali, les ongles incrustés de terre; je suis dans un état de félicité absolue. Mes tracas se résument  à « Où vais-je bien transplanter cette barbe de bouc? »; « Hum, il est temps de retourner le tas de compost! » Le jardin, y être là tout entière, j’y rêvais depuis longtemps. Mais avant d’y rêver, j’ai fait un passage fabuleux (et j’y repasse encore) par le monde des plantes indigènes. Des années plus tard, je suis avec Mai Boites. Démarré sur un coup de tête, ce blogue visait à m’épancher; plus exactement, à dégourdir ma tête pleine de phrases, de pensées, car vous sentez bien que j’aime écrire.",
];
var imgArray = ["http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/louise.png", "http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/chloe.png", "http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/william.png", "http://localhost/boites-mai-kuroi-hana/wordpress/wp-content/uploads/2022/11/fanny.png"];
var titreArray = ["Louise Foglia", "Chloé Fortier-Devin", "William Des Marais", "Fanny Archambault"];

var texte = document.querySelector(".equipe__modal__content__texte");
var img = document.querySelector(".equipe__modal__content__image");
var titre = document.querySelector(".equipe__modal__content__titre");

for (let i = 0; i <= 3; i++) {
    btn[i].onclick = function () {
        modal.style.display = "block";
        texte.textContent = texteArray[i];
        img.src = imgArray[i];
        titre.textContent = titreArray[i];
    }
}

span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}