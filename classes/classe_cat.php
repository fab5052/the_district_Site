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
        return $this->image;
    }
    



    public function afficher_cat_view() {
        echo "<h3>" . $this->getLibelle() . "</h3>
     <div>   <slide>   <label class='cards d-flex'>
       <span> <a href='plat_cat.php?id=" . $this->getId() . "'></span></label>
        <img class='carousel img-fluid' src='". $this->getImage() . "'>
        </slide></div>";
     
        
        

    }   

 
    
    public function afficher_cat_index() {
        $this->afficher_cat_view();
    }


    public function afficher_cat_page() {
        $this->afficher_cat_view();
    }
   

  
}
