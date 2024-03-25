<?php

require_once('header.php');


?>

<?php

function connect_database () {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=the_district", "admin", "Afpa1234");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        session_start();

        echo "Connecté à la base de données:<br>";
        return $conn;
    } catch (Exception $e) {
        echo "Erreur : " .$e->getMessage() . "<br>";
        echo "N° :" .$e->getCode();
        die("Fin du script");
    }
}


?>








 
    
    
    
      <div class="parallax">

    
    
        <main class="main-content">

                
          <h1 class="pt-4 top-45">
            <i class="neon-red">Créer</i>
            <i class="neon-blue">Compte</i>
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
          </div>
       
            </main>
  

         
          <div id="stage" class="fade-in-forward" style="opacity: 1;"><div>
            <div class="card">
              <header class="mb-8">
                    <h1 id="fxa-enter-email-header" class="card-header">
                      Saisissez votre adresse e-mail
                      <span class="block text-sm font-body font-normal mt-1" id="subheader">
                          <!L10N: For languages structured like English, the phrase can read "to continue to %(serviceName)s" -->
                          <!-- Continuer vers MDN Plus
                      </span>
                    </h1>
              </header>
            
              <section>
                <div class="error"></div>
                <div class="success"></div>
                
            
                <form novalidate="">
                  <div class="tooltip-container">
                    <input name="email" type="email" class="input-text tooltip-below invalid" autofocus="" placeholder="Saisissez votre adresse e-mail" aria-invalid="true" aria-describedby="error-tooltip-1023">
                  <aside id="error-tooltip-1023" class="tooltip tooltip-below fade-up-tt" style="top: 62px;">Adresse e-mail valide requise</aside></div>
            
                  <div class="flex mt-5">
                    <button id="submit-btn" type="submit" class="cta-primary cta-xl">
                      S’inscrire ou se connecter
                    </button>
                  </div>
                </form>
            
                  <aside class="third-party-auth">
              <div class="separator">ou</div>
                
              https://accounts-static.cdn.mozilla.net/images/third_party_auth/37f16dcb.apple_btn_normal.svg <button id="google-login-button" class="button login-button"><span class="google-logo"></span>Continuer avec Google</button>
                <button id="apple-login-button" class="button login-button"><span class="apple-logo"></span>Continuer avec Apple</button>
            </aside>
            
            
                <div class="text-xs text-grey-500 mb-0 mt-5">
                      En continuant, vous acceptez les <a class="link-grey" id="fxa-tos" href="/legal/terms">Conditions d’utilisation</a> et la <a class="link-grey" id="fxa-pp" href="/legal/privacy">Politique de confidentialité</a>.
                </div>
            
              </section>
            </div>
            </div></div>    
           

          <form  id="form1 "  >

    <article class="pad ">
  
        <div class="inner">
      <div class="list-pad">
   

        <fieldset>
        <label class="name">
          <input type="text" value="Enter Name:">
          <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label><br>
        <label class="email">
          <input type="email" value="Enter Email:">
          <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label><br>
        <label class="state notRequired">
          <input type="text" value="Enter Your State:">
          <span class="error">*This is not a valid state name.</span> <span class="empty">*This field is required.</span> </label><br>
        <label class="phone">
          <input type="tel" value="Enter Phone:">
          <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label><br>
        <label class="fax">
          <input type="tel" value="Enter Fax:">
          <span class="error">*This is not a valid fax number.</span> <span class="empty">*This field is required.</span> </label><br>
        <label class="message">
          <textarea>Enter Message:</textarea>
          <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label><br>
        <br class="clear">
        <div class="btns"><a href="#" class="button" data-type="reset">Clear</a><a href="#" class="button" data-type="submit">Submit</a></div>
        </fieldset>
      </form>
</div>
        </div>
      </article>
    </div>
  

  
    

    <?php

    require_once('footer.php');
    
    ?>