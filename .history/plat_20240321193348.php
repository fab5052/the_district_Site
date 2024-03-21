<?php

require_once('header.php');

?>


  <div class="parallax ">


    <div class="main-content">

      <h1>
        <script langage="JavaScript1.2">
          var message = "Plats" //
          var neonbasecolor = "black" //couleur de base du texte
          var neontextcolor = "#509188"
          var neontextcolor2 = "#C3F1EB"
          var flashspeed = 200 // vitesse du flashing en millisecondes
          var flashingletters = 3 // nombre de lettres qui flashent en neontextcolor
          var flashingletters2 = 2 // nombre de lettres qui flashent en neontextcolor2 (0 pour désactiver)
          var flashpause = 0 // pause entre les cycles de flashing en millisecondes
          ///Ne rien toucher sous cette ligne///
          var n = 0
          if (document.all || document.getElementById) {
            document.write('<font color="' + neonbasecolor + '">')
            for (m = 0; m < message.length; m++)
              document.write('<span id="neonlight' + m + '">' + message.charAt(m) + '</span>')
            document.write('</font>')
          } else
            document.write(message)

          function crossref(number) {
            var crossobj = document.all ? eval("document.all.neonlight" + number) : document.getElementById("neonlight" + number)
            return crossobj
          }

          function neon() {
            //Change all letters to base color
            if (n == 0) {
              for (m = 0; m < message.length; m++)
                crossref(m).style.color = neonbasecolor
            }
            //cycle through and change individual letters to neon color
            crossref(n).style.color = neontextcolor
            if (n > flashingletters - 1) crossref(n - flashingletters).style.color = neontextcolor2
            if (n > (flashingletters + flashingletters2) - 1) crossref(n - flashingletters - flashingletters2).style.color = neonbasecolor
            if (n < message.length - 1)
              n++
            else {
              n = 0
              clearInterval(flashing)
              setTimeout("beginneon()", flashpause)
              return
            }
          }

          function beginneon() {
            if (document.all || document.getElementById)
              flashing = setInterval("neon()", flashspeed)
          }
          beginneon()
        </script>
      </h1>






            <!--        <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 mb-0 d-flex p-3 justify-content-center">
                <a href="#" class="image-link position-relative">
                  <img src="assets/images_the_district/food/lasagnes_viande.jpg" alt="Food-Name-6340"
                    class="img-thumbnail m-3">
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 mb-0 d-flex p-3 justify-content-center">
                <a href="#" class="image-link position-relative">
                  <img src="assets/images_the_district/food/spaghetti-legumes.jpg" alt="Food-Name-433"
                    class="img-thumbnail m-3">
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 mb-0 d-flex p-3 justify-content-center">
                <a href="#" class="image-link position-relative">
                  <img src="assets/images_the_district/food/pizza-margherita.jpg" alt="salad1"
                    class="img-thumbnail m-3">
                </a>
              </div>
            </div>
          </div>-->



 
      
          <div id="menu-container" >

    <select id="categoryFilter" class="form-control justify-content-center justify-items-center position-relative   mb-3" 
    style="width: 40% ;height: 40px; opacity: 0.75; box-shadow: 2px 2px 10px 2px rgba(49, 34, 34, 0.9) inset; border: 1px #403737 solid; border-right: 1px #0f0d0d89 solid; text-align: center; font-size: 20px; font-family: Calibri; letter-spacing: 2px">
    <option value="all">Cliquez et trouver...</option>

  </select>
     
        
          <div  class="card-group " >
          
</div>
 
</div>


</main>


  </div>

  <?php

require_once('view/view_plat_page.php');

?>



  <?php

require_once('footer.php');

?>


</body>

</html>