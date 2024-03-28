<?php

class Categorie {
    public  $libelle;

    public  $image;
    
    private $id;
    
    public function __construct($id= null, $libelle= null, $image= null, $active= null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->image = $image;
        $this->active= $active;
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

   

    // Méthodes pour obtenir et définir la propriété image
    public function getImage() {
        return array($this->image);
    }
    



    public function afficher_cat_view() {
        
        echo "<h3>" . $this->getLibelle() . "</h3>
        <div class='carousel3d mx-auto mt-3'>
        <a href='plat_cat.php?id=" . $this->getId() . "'>
        <img class='mx-auto img-fluid d-block' src='". $this->getImage() . "'></div>
        </a>
        </div>";
      
        

    }   

 
    
    public function afficher_cat_index() {
        $this->afficher_cat_view();
    }


    public function afficher_cat_page() {
        $this->afficher_cat_view();
    }
   

  
}
