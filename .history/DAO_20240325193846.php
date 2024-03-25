<?php
// Inclusion du fichier de connexion à la base de données
require_once('conn_database.php');


// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}

// Requête pour obtenir les catégories actives à afficher sur la page d'index
$cat_index = $conn->prepare("SELECT id, libelle , image, active
FROM categorie
WHERE active = 'Yes'
LIMIT 6");




// Requête pour obtenir toutes les catégories et leurs images
$cat_page = $conn->prepare("SELECT  id, libelle , image
FROM categorie 
WHERE active = 'Yes'");

// Requête pour obtenir les plats qui ont été commandés plus de deux fois et qui n'ont pas été annulés
$plat_index = $conn->prepare("SELECT DISTINCT  p.*
 FROM categorie cat
 JOIN plat p ON p.id_categorie = cat.id
 JOIN commande com ON com.id_plat = p.id
 WHERE com.quantite > 2
 AND com.etat != 'Annulée'");


$plat_page =$conn->prepare("SELECT plat.*
FROM plat
JOIN categorie ON categorie.id = plat.id_categorie");


$cat_plat =$conn->prepare("SELECT *
FROM plat
WHERE id_categorie = :id_categorie");
