<?php

class Categorie {
    public  $libelle;

    public  $image_path_1, $image_path_2;
    
    private $id;
    private $active;
    
    public function __construct($id= null, $libelle= null, $image_path_1= null, $image_path_2=null,  $active= null) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->image = $image_path_1;  $image_path_2;
        $this->active= $active;
    }

    public function getId() {
        return $this->id;
    }



    // Méthodes pour obtenir et définir la propriété active
    public function getActive() {
        return $this->active;
    }

    

    // Méthodes pour obtenir et définir la propriété libelle
    public function getLibelle() {
        return $this->libelle;
    }

   

    // Méthodes pour obtenir et définir la propriété image
    public function getImage() {
        return array($this->image_path_1, $this->image_path_2);
    }
    



    public function afficher_cat_view() {
        
        echo "<h3>" . $this->getLibelle() . "</h3>
        <div id='camera_wrap_1' class='camera_wrap camera_magenta_skin row justify-content-center  col-7 mx-auto  mt-3' >
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

