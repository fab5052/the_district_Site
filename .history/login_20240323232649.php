<?php

require_once('header.php');


?>









 <!--   <header>



        <nav>
    
          <a href="index.html" class="nav-icon" aria-label="homepage" aria-current="page">
        <span ><img  class="Logo" src="assets/img/images_the_district/the_district_brand/logo_transparent.png"></img>
    
          </a>
    
          <div class="main-navlinks">
            <bouton type="button" class=" toggle " aria-label="Toggle Navigation" aria-expanded="false">
              <span></span>
              <span></span>
              <span></span>
    
              </button>
    
    
    
          </div>
          <div class="navlinks-container d-flex  ">
    
            <h3><a class="nav-link " href="index.html" aria-current="page">Accueil</a></h3>
            <h3><a class="nav-link" href="categories.html">Catégories</a></h3>
            <h3><a class="nav-link" href="plat.html">Plats</a></h3>
            <h3><a class="nav-link" href="contact.html">Contact</a></h3>
    
          </div>
    
    
    
    
    
           <!-- <input class="form-control mr-2 width: 65px height: 25px text-left" type="search" placeholder="recherche..."
              aria-label="Search"
              style=" opacity: 0.75; box-shadow: 2px 2px 10px 2px rgba(49, 34, 34, 0.9) inset; border: 1px #403737 solid; border-right: 1px #0f0d0d89 solid; text-align: center; font-size: 20px; font-family: Calibri; letter-spacing: 2px">
    
            <button class="btn btn-outline-secondary" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"
                style="transform: translateY(-15%) ">
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
              </svg>
            </button>
          </form>--
    
    
    
    
          <div class="nav-authentication col-2 d-flex   ">
    <div class="shopping mx-0" >
          <a href="#">  <h3><i class="fa fa-shopping-cart red "></i> <span class="badge badge-red">0</span></h3></a>
           
    </div>
         <div class="sign-btns  ">    <a href="SignIn.html"> 
     <h3> <img src="assets/img/user.svg" class="user-toggler" aria-label="Sign in page" alt="user icon">
           
             <i class="fa fa-sign-in" aria-hidden="true"></i></h3></a> 
            </div>
    
         
          
              <form  class="search" id="search" action="results.php" method="GET" accept-charset="utf-8">
              <input type="text" name="input" class="input" placeholder="Search" />
              <button type="reset" class="search " id="search-button">
              </form>
            </button>
        
    
          </div>
        
    
      
        
        </nav>
      </header>-->
    
    
    
      <div class="parallax">

    
    
        <main class="main-content">

                
          <h1 class="pt-4 top-45">
            <i class="neon-red">Créer</i>
            <i class="neon-blue">Compte</i>
          </h1>
          <body class="loggedin">
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
       
            </main>
  
  </div>
         
          <!--<div id="stage" class="fade-in-forward" style="opacity: 1;"><div>
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
  

  
    

    <script src="toggle.js"></script>
    <script src="script.js"></script>-->

