<?php

require_once('header.php');


?>









 
    
    
    
      <div class="parallax">

    
    
        <main class="main-content">

                
          <h1 class="pt-4 top-45">
            <i class="neon-red">Connexion</i>
            <i class="neon-blue">compte</i>
          </h1>
 
      
            <div class="login">
              <h1>Login</h1>
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
      
    
            </div>
            <p>Vous n'avez pas de compte</p>
            <a href="register.html"> Inscrivez-vous <i class="fa fa-sign-in" aria-hidden="false"></i></a> 

     

    
   
       
            </main>
      </div>

  
    

    <?php

    require_once('footer.php');
    
    ?>