<?php
// Définition des pages sur lesquelles afficher le contenu
$array_index = array("index.php"); // Pages index
$array_cat_page = array("categories.php"); // Pages catégorie

// Récupération du nom de la page courante
$Currentpage = basename($_SERVER['PHP_SELF']);

// Inclusion du script PHP de la classe Categorie
require_once('classes/classe_cat.php');
require_once('classes/classe_plat.php');
// Connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=the_district", 'root', 'Afpa1234');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Inclusion du script DAO pour les requêtes
require_once('DAO.php');

// Récupération des catégories & plats depuis la page d'accueil (index)
$cat_index->execute();
$categories = $cat_index->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categories");

// Affichage des catégories & des plats les plus vendus sur la page index
if (in_array($Currentpage, $array_index)) {
    echo "<div class='row justify-content-center  col-7 mx-auto'>";
    foreach ($categories as $categorie) {
        echo "<div class='col-10 col-sm-6 col-lg-4'>";
        $categorie->afficher_cat_index();
        echo "<br>"."</div>";
    }
    echo "</div>";

    $plat_index->execute();
    $plats_view_index = $plat_index->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plats");
    echo "<h2>Nos Best-Sellers !</h2>";
    echo "<div class='row justify-content-center  col-7 mx-auto'>";
    foreach ($plats_view_index as $plat) {
        echo "<div class='col-md-4'>";
        $plat->afficher_plat_index();
         echo "<br>"."</div>";
    }
    echo "</div>";

}

// Récupération des catégories pour la page de catégories
$cat_page->execute();
$categories = $cat_page->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categories");


   
// Affichage des catégories 
if (in_array($Currentpage, $array_cat_page))  {
     echo "<div class='row justify-content-center  col-7 mx-auto'>";
    foreach ($categories as $categorie) {
        echo "<div class='col-md-4'>";
        $categorie->afficher_cat_page();
        echo "<br>"."</div>";
    }
    echo "</div>";
}






// Fermeture de la connexion à la base de données
$conn = null;
