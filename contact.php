<?php

require_once('header.php');
require_once('view_index_cat.php');
require_once('view_plat_page.php');

?>
    
    <div class="parallax " >

      
<main class="main-content">


   <!-- <div class="_2HZ1tocj _3OOC9meJ" data-uniqid="1"><svg alt="" aria-label="" xmlns="http://www.w3.org/2000/svg"
        version="1.1" viewBox="0 0 1024 1024" width="24px" height="24px" role="img" fill="#222">
        <path
          d="M500.6 99c-125.8 0-227.8 102-227.9 227.8 0 125.8 102 227.9 227.9 227.9 125.8 0 227.9-102 227.8-227.9 0-125.9-102-227.9-227.8-227.8z m0 68.3c88.2 0 159.6 71.4 159.6 159.5 0 88.1-71.5 159.6-159.6 159.6-88.1 0-159.6-71.5-159.6-159.6 0-88.1 71.5-159.6 159.6-159.5z m94.8 415.9l-166.8 0c-161.3 0-292.7 110.7-292.6 248l0 14c0 69 63.5 79 264.4 79.3l223.2 0 49-0.5c158.9-2.6 215.4-17.2 215.4-78.8l0-14c0-137.3-131.3-248-292.6-248z m0 60.1c124.2 0 224.3 84.4 224.3 187.9l0 14c0 1.5-8.8 6.6-38.6 11.4-33.7 5.5-79.6 7.4-157.7 7.7l-222.9 0c-81.2-0.1-124.5-1.8-157.8-7-30-4.7-38.5-9.7-38.5-12.1l0-14c0-103.4 100.1-187.8 224.4-187.9l166.8 0z">
        </path>
      </svg>
      <div class="_28KKe2JR">Se connecter/S'inscrire</div>
    </div>



    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h2 class="mt-5 mb-3 text-center">Connexion</h2>
          <form method="POST" name="connexion" id="validationCustom" class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="validationCustomUsername" class="form-label">Nom d'utilisateur</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername"
                  aria-describedby="inputGroupPrepend" required>
                <div class="valid-feedback">Valide!</div>
                <div class="invalid-feedback">Veuillez choisir un nom d'utilisateur.</div>
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustomPassword" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="validationCustomPassword" required>
              <div class="invalid-feedback">Veuillez saisir un mot de passe.</div>
            </div>
            <button class="btn btn-outline-primary w-100 mb-3" type="submit">Se connecter</button>
          </form>
          <p class="text-center">Pas encore de compte ? <a href="inscription.html">Inscrivez-vous ici</a></p>
        </div>
      </div>
    </div>
  </div>
-->


<h1 class="mt-md-8">
  <i class="neon-red">Formulaire</i>
  <i class="neon-blue">Contact</i>
</h1>





<fieldset >

  <div class="container col-3 justify-content-center position-relative ">
    <div class="row ">
     
 <form method="POST" name="inscription" id="validationCustom" class=" needs-validation " novalidate>

        <div class="col-md-6 ">
       <span>   <label for="validationCustom01" class="form-label">Prénom</label></span>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Jean" required>
          <div class="valid-feedback">Semble correcte!</div>
        </div>


        <div class="col-md-6 ">     
          <div class="valid-feedback">Semble correcte!</div>
          <span> <label for="validationCustom02" class="form-label">Nom</label></span>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Durand" required>
        </div>
   
     
        <div class="col-md-6 p-3">
          <span><label for="validationCustomUsername" class="form-label">Username</label></span>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
              required>
            <div class="valid-feedback">Semble correcte!</div>
            <div class="invalid-feedback">Choisissez un nom d'utilisateur entre 8 et 12 caractères.</div>
          </div>
          </div>
      
        <div class="col-md-6 p-3">
          <label for="validationCustom03" class="form-label">Ville</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">Chosissez un nom de ville correcte.</div>
        </div>

        <div class="col-md-6 ">
          <label for="validationCustom05" class="form-label">Email</label>

          <input type="email" class="form-control" id="validationCustom05" aria-describedby="emailHelpId"
            placeholder="abc@mail.com" required>
     
        <div class="invalid-feedback">L'adresse doit contenir un "@". </div>
       
        </div>
  

        <div class="col-md-6">
          <label for="validationCustom04" class="form-label">Sujets</label>
          <select class="form-select" id="validationCustom04" required>

            <option value="" selected>Veuillez séléctionner un sujet</option>
            <option value="produit">Question sur un produit</option>
            <option value="reclamation">Réclamation</option>
            <option value="autres">Autres</option>        
          <option selected disabled value="">Choisir un sujet...</option>  
        </select>     
          
        </div>

        <div class="col-md-6">
          <label class="form-label">Votre question:</label>
          <textarea class="form-label col " name="question" id="question" placeholder="* Maximum 50 caractères"
            required></textarea>

          <div class="invalid-feedback">* Remplir le champ question.</div>
        </div>

        <div class="col-md-6">
        <div class="form-check ">     
          <input class="form-check-input" type="checkbox" value="accepter" id="traitement" name="traitement" required>
        </div>
    </div>

    <div class="col-md-6">
          <label class="form-check-label" for="traitement">* J'accepte le traitement informatique de ce
            formulaire.</label>
          <div class="invalid-feedback">Vous devez valider.</div>
        </div>
      

        <div>
          <button class="btn btn-outline-primary" style="color:primary; " type="submit" value="Envoyer">Envoyer</button>
          <button class="btn btn-outline-danger" type="reset" value="Annuler">Annuler</button>
        </div>


 


       <div class="d-block  ">
                By creating an account, you agree to <a
                  href="/gp/help/customer/display.html/ref=ap_register_notification_condition_of_use?ie=UTF8&amp;nodeId=643006">Conditions
                  of Use</a> and <a
                  href="/gp/help/customer/display.html/ref=ap_register_notification_privacy_notice?ie=UTF8&amp;nodeId=643000">Privacy
                  Notice</a>.
              </div>
           
            </div>


</div>

     </form>
      
 </fieldset>


 <!--<div class="a-box a-spacing-extra-large">
    <div class="a-box-inner">
      <form id="a-page" class="ap_register_form" name="register" method="post" action="MailHandler-sub.php" novalidate>


        <h1 class="a-spacing-small">
          Create account
        </h1>




        <div class="a-row a-spacing-base">





          <label for="ap_customer_name" class="a-form-label">
            Your name
          </label>


          <input type="text" maxlength="50" id="ap_customer_name" autocomplete="name" placeholder="First and last name"
            name="customerName" tabindex="1"
            class="a-input-text a-span12 auth-autofocus auth-required-field a-form-error">





          <div id="auth-customerName-missing-alert"
            class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert"
            style="display: block;">
            <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
              <div class="a-alert-content">
                Enter your name
              </div>
            </div>
          </div>



          <div id="auth-inline-customerName-success-checklist" class="a-section auth-inline-success-checklist">
            <div id="auth-customerName-success-check-item-1"
              class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
              aria-live="polite" aria-atomic="true">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Use at least 1 character
                </div>
              </div>
            </div>


          </div>


        </div>



        <label for="ap_email" class="a-form-label">
          Mobile number or email
        </label>


        <input type="email" maxlength="64" id="ap_email" autocomplete="email" name="email" tabindex="3"
          class="a-input-text a-span12 a-spacing-micro auth-required-field auth-require-claim-validation"
          data-validation-id="email">






        <div id="auth-email-missing-alert"
          class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert">
          <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
            <div class="a-alert-content">
              Enter your email or mobile phone number
            </div>
          </div>
        </div>





        <div id="auth-email-invalid-claim-alert"
          class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" role="alert">
          <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
            <div class="a-alert-content">
              Enter a valid email address or phone number
            </div>
          </div>
        </div>





        <div id="auth-inline-email-success-checklist" class="a-section auth-inline-success-checklist">
          <div id="auth-email-success-check-item-1"
            class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
            aria-live="polite" aria-atomic="true">
            <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
              <div class="a-alert-content">
                Use half-width characters
              </div>
            </div>
          </div>


          <div id="auth-email-success-check-item-2"
            class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
            aria-live="polite" aria-atomic="true">
            <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
              <div class="a-alert-content">
                Use a valid e-mail or mobile number
              </div>
            </div>
          </div>

        </div>



        <div class="auth-require-fields-match-group">


          <div class="a-row a-spacing-base">


            <label for="ap_password" class="a-form-label">
              Password
            </label>


            <input type="password" maxlength="1024" id="ap_password" autocomplete="off"
              placeholder="At least 6 characters" name="password" tabindex="5"
              class="a-input-text a-span12 auth-required-field auth-require-fields-match auth-require-password-validation">






            <div class="a-box a-alert-inline a-alert-inline-info auth-inlined-information-message a-spacing-top-mini"
              aria-live="polite" aria-atomic="true">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Passwords must be at least 6 characters.
                </div>
              </div>
            </div>




            <div id="auth-password-missing-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Enter at least 6 half-width characters
                </div>
              </div>
            </div>





            <div id="auth-password-invalid-password-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Enter at least 6 half-width characters
                </div>
              </div>
            </div>




            <div id="auth-inline-password-success-checklist" class="a-section auth-inline-success-checklist">
              <div id="auth-password-success-check-item-1"
                class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
                aria-live="polite" aria-atomic="true">
                <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                  <div class="a-alert-content">
                    Use half-width characters
                  </div>
                </div>
              </div>


              <div id="auth-password-success-check-item-2"
                class="a-box a-alert-inline a-alert-inline-success auth-inline-grey-check-item a-spacing-top-mini"
                aria-live="polite" aria-atomic="true">
                <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                  <div class="a-alert-content">
                    Use at least 6 characters
                  </div>
                </div>
              </div>

            </div>


       




          <div class="a-row a-spacing-base">



            <label for="ap_password_check" class="a-form-label">
              Re-enter password
            </label>


            <input type="password" maxlength="1024" id="ap_password_check" autocomplete="off" name="passwordCheck"
              tabindex="6" class="a-input-text a-span12 auth-required-field auth-require-fields-match">




            <div id="auth-passwordCheck-missing-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Type your password again
                </div>
              </div>
            </div>


            <div id="auth-password-mismatch-alert"
              class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"
              role="alert">
              <div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i>
                <div class="a-alert-content">
                  Passwords must match
                </div>
              </div>
            </div>





            <div id="mobileClaimDisclosureMessage"
              class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden">
              By enrolling a mobile phone number, you consent to receive automated
              security notifications via text message from Amazon. Remove your number
              in
              Login &amp; Security to cancel. For more information reply HELP. Message
              and
              data rates may apply. Message frequency varies.
            </div>
            <div id="mobileClaimDisclosureMessageRelaxed"
              class="a-section a-spacing-top-mini auth-inlined-information-message aok-hidden">
              To verify your number, we will send you a text message with a temporary
              code. Message and data rates may apply.
            </div>



            <div class="a-section a-spacing-extra-large">
              <span id="auth-continue"
                class="a-button a-button-span12 a-button-primary auth-requires-verify-modal"><span
                  class="a-button-inner"><input id="continue" tabindex="8" class="a-button-input" type="submit"
                    aria-labelledby="auth-continue-announce"><span id="auth-continue-announce" class="a-button-text"
                    aria-hidden="true">
                    <span class="default-text">Continue</span>
                    <span class="phone-text aok-hidden">Verify mobile
                      number</span>
                    <span class="email-text aok-hidden">Verify email</span>
                  </span></span></span>
            </div>-->


        
<?php

require_once('footer.php');
            
?>

</body>

</html>