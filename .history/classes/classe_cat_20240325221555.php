<?php

class Categorie {
    public  $libelle;
    public  $image;
    
    private $id;
    private $active;
     
    public function __construct($id= null, $libelle= null, $image= null, $active= null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->image = $image;
     
    }

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

    // Méthodes pour obtenir et définir la propriété image
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
            return $this;
    }


    public function afficher_cat_view() {
        
        echo "<h6>" . $this->getLibelle() . "</h6>
        <div class='mt-3'>
        <a href='plat_cat.php?id=" . $this->getId() . "'>
        <img class='card-img-top img_cat mx-auto img-fluid d-block' src='". $this->getImage() . "'>
        </a>
        </div>";
      
        

    }   
    
    public function afficher_cat_index() {
        echo $this->afficher_cat_view();
    }


    public function afficher_cat_page() {
        echo $this->afficher_cat_view();
    }
   

  
}

