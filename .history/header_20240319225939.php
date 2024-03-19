<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Fil_Rouge</title>


  <!--Custom styles for this template -->


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <script src="tarteaucitron/tarteaucitron.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" href="assets/css/camera.css">
 


</head>


<body>

<header>

<nav >
    
<a href="view_index_cat.php" class="nav-icon" aria-label="homepage" aria-current="page">
        <span ><img  class="Logo" src="assets/img/images_the_district/the_district_brand/logo_transparent.png"></img>
    
          </a>
    
          <div class="main-navlinks">
            <bouton type="button" class=" toggle mx-auto" aria-label="Toggle Navigation" aria-expanded="false">
              <span></span>
              <span></span>
              <span></span>
    
              </button>
    
    
    
          </div>
          <div class="navlinks-container d-flex  ">
    
   

        <h3><a class="nav-link " href="view_index_cat.php" aria-current="page">Accueil</a></h3>
        <h3><a class="nav-link" href="categories.php">Catégories</a></h3>
        <h3><a class="nav-link" href="plat.php">Plats</a></h3>
        <h3><a class="nav-link" href="contact.php">Contact</a></h3>

      </div>

    
      <div class="nav-authentication m-0 col-md-2">
    <div class="shopping my-auto" >
          <a href="#">  <h3><i class="fa fa-shopping-cart red "></i> <span class="badge badge-red">0</span></h3></a>
           
    </div>
         <div class="sign-btns my-auto  ">    <a href="SignIn.html"> 
     <img src="assets/img/user.svg" class="user-toggler" aria-label="Sign in page" alt="user icon">
           
            <h3><i class="fa fa-sign-in" aria-hidden="true"></i></h3></a> 
            </div>
    
         
          
              <form  id="search" class="search " action="results.php" method="GET" accept-charset="utf-8">
              <input type="text" name="input" class="input" placeholder="Search" />
              <button type="reset" class="search " id="search-button">  </button>
              </form>
          
        
    
          </div>

 

      
    </nav>
 
    </header>