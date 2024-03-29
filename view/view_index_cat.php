<?php


$array_plat = array("index.php");
$array_cat_plat = array("category.php");

$Currentpage = basename($_SERVER['PHP_SELF']);

// Inclusion du fichier DAO pour accéder à la base de données
require_once('DAO.php');

// Si des paramètres sont passés dans l'URL, afficher la page de recherche

// Vérification de la requête et inclusion de la vue de recherche si nécessaire
if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != "") {
    require_once('view_pages/view_search.php');
}

// Si la page actuelle est l'index, affichage des catégories et des plats les plus vendus
if ($Currentpage == "index.php") {
  
    // Récupération et affichage des catégories
    $cat_index = get_categories($conn);
    echo "<h2>LES BEST-SELLERS DE LA SEMAINE</h2>
        <div>";
    foreach ($cat_index as $categorie) {
        echo "<div >";
        $categorie->afficher_cat_index();
        echo "<br></div>";
    }
    echo "</div>";

    // Récupération et affichage des plats les plus vendus
    $plats_index = get_plat_index($conn);
    echo "<h2>Les Plat les plus vendus</h2>
        <div  >";
    foreach ($plats_index as $plat) {
        echo "<div>";
        $plat->afficher_plat_index();
        echo "<br></div>";
    }
    echo "</div>";
}


// Si la page actuelle est la page de catégorie, afficher les catégories disponibles
if ($Currentpage == "categorie.php")  {
  $categories = get_cat_page($conn);
  echo "<div class='container-fluid '>";
  foreach ($categories as $categorie) {
  echo "<div  >";
  $categorie->afficher_cat_page();
  echo "</div>";
  }
  echo "</div>";
}