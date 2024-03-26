<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'Afpa1234';
$DATABASE_NAME = 'the_district';
// Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}




require_once('header.php');

session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: register.php');
	exit;
}





?>







 
    
    
    
      <div class="parallax">

    
    
        <main class="main-content pt-45">
    
          <h1 class="pt-4 top-45">
            <i class="neon-red">Connexion</i>
            <i class="neon-blue">compte</i>
          </h1>
 
      
            <div class="login">
              <h2>Login</h2>
              <form action="authenticate.php" method="post">
                <label for="username">
                  <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                  <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login">
             
            
              </form>
              <div class="reg my-auto d-flex justify-content-center ">
              <h5 >Vous n'avez pas de compte :</h5>
         <h4><a href="register.html"> Inscrivez-vous </a></h4>
          </div>
    
            </div>
        

     

    
   
       
            </main>
      </div>

  
    

    <?php

    require_once('footer.php');
    
    ?>