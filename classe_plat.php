<?php

require_once('classes/classe_cat.php');


class Plat {
    
    public $libelle;
    public $description;
    public $prix;
    public $image;
    
    private $id_categorie;
    private $id;
    
    // public function __construct() {};
    public function __construct($id = null, $libelle = null, $description= null, $image = null, $prix = null, $id_categorie = null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->description = $description;
        $this->image = $image;
        $this->prix = $prix;
        $this->id_categorie = $id_categorie;
    }

  // Méthodes pour obtenir et définir la propriété id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
            return $this;
    }

// Méthodes pour obtenir et définir la propriété libelle
    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
            return $this;
    }

// Méthodes pour obtenir et définir la propriété description
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
            return $this;
    }

// Méthodes pour obtenir et définir la propriété prix
    public function getPrix() {
        return $this->prix;
}

    public function setPrix($prix) {
        $this->prix = $prix;
            return $this;
    }

// Méthodes pour obtenir et définir la propriété image
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
            return $this;
    }

// Méthodes pour obtenir et définir la propriété id_categorie
    public function getIdCategorie() {
        return $this->id_categorie;
    }

    public function setIdCategorie($id_categorie) {
        $this->id_categorie = $id_categorie;
            return $this;
    }

    public function afficher_plat_index() {
        echo "<h6>". $this->getLibelle() ."</h6>
        <div class='  mx-auto col-8 col-md-6'>
        <a  class='  mx-auto' href='commande.php?id=".$this->getId()."'>
        <img class=' img-fluid d_block' src ='" . $this->getImage() . "'>
        </a>
        </div>";
    }

    public function afficher_plat_view() {
        echo "<h6>". $this->getlibelle() ."</h6>
        <div class='card mx-auto col-8 col-md-6'>
        <img class='mx-auto img-fluid' src ='".$this->getImage()."'>
        <div class='card-body'>
        <p>".$this->getDescription()."</p>
        <p>".$this->getPrix()."</p>
        <a href='commande.php?id=".$this->getId()."'>Commandez</a>
        </div></div>";
    }


    public function afficher_plat_page()  {
        echo $this->afficher_plat_view();
    }



    public function afficher_plat_cat() {
        echo $this->afficher_plat_view();
    }




    public function afficher_plat_commande() {
        echo "<h6>". $this->getlibelle() ."</h6>
        <div class='card mx-auto col-8 col-md-6'>
        <img class='mx-auto img-fluid' src ='".$this->getImage()."'>
        <div class='card-body'>
        <p>".$this->getDescription()."</p>
        <p>".$this->getPrix()."</p>
        </div></div>";
    }

}
?>