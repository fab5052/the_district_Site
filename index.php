<?php


// Page is set to home (home.php) by default, so when the visitor visits, that will be the page they see.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';



// Récupération des catégories & plats depuis la page d'accueil (index)
$cat_index->execute();
$categories = $cat_index->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Categorie");


$plat_page->execute();
$plats = $plat_page->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Plat");