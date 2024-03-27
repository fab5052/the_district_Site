<?php

$Currentpage = basename($_SERVER['PHP_SELF']);

// Inclusion du fichier DAO pour accéder à la base de données
require_once('DAO.php');

// Si des paramètres sont passés dans l'URL, afficher la page de recherche

if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != "") {
  require_once('view_pages/view_search.php');
}

// Si la page actuelle est l'index, afficher les catégories et les plats les plus vendus
if ($Currentpage == "index.php") {
  
  // Récupération des catégories et affichage
  $cat_index = get_categorie($conn);
  echo " <h2>Les Best-Sellers de la semaine</h2>
  <div class='camera_wrap camera_magenta_skin  row justify-content-center  col-7 mx-auto' id='camera_wrap_1' >";
  foreach ($cat_index as $categorie) {
    echo "<div class='camera_caption col-10 col-sm-6 col-lg-4'>";
    $categorie->afficher_cat_index();
    echo "<br>"."</div>";
  }
 echo "</div>";


 

 // Récupération et affichage des plats les plus vendus
 $plats_index = get_plat_index($conn) ;
 echo "<h2>Les plats les </h2>";
 echo "<div class='  row justify-content-center  col-7 mx-auto' id='camera_wrap_1'>";
 foreach ($plats_index as $plat) {
   echo "<div class='camera_caption col-md-4'>";
   $plat->afficher_plat_index();
   echo "<br>"."</div>";
  }
  echo "</div>";
}

// Si la page actuelle est la page de catégorie, afficher les catégories disponibles
if ($Currentpage == "categorie.php")  {
  $categories = get_cat_page($conn);
  echo "<div class='row justify-content-center  col-7 mx-auto' id='camera_wrap_1' >";
  foreach ($categories as $categorie) {
    echo "<div class='camera_caption  col-md-4'>";
    $categorie->afficher_cat_page();
    echo "<br>"."</div>";
  }
  echo "</div>";
}
