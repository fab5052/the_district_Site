
<?php 

require_once('header.php');

session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}


?>



  <div class="parallax ">


    <main class="main-content">


        <h1 > 
          <script langage="JavaScript1.2">
                    var message = "Catégories" //
                    var neonbasecolor = "#8fe9e57c;" //couleur de base du texte
                    var neontextcolor = "#9ac74762"
                    var neontextcolor2 = "#610606"
                    var flashspeed = 200 // vitesse du flashing en millisecondes
                    var flashingletters = 3 // nombre de lettres qui flashent en neontextcolor
                    var flashingletters2 = 1 // nombre de lettres qui flashent en neontextcolor2 (0 pour désactiver)
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

      <div class="featured my-auto">
    <h2>Menu</h2>
    <p>Decouvrez toutes nos catégories de plats</p>
</div> 
<div class="recentlyadded content-wrapper">
    <h2>Plats</h2>
    <div class="products">
      <section class="hero-section">
  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </li>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
  <div>
</section>

      <?php

require_once('view/view_index_cat.php');

?>
        <div class="container-fluid ">
          <!-- ACCORDION ROW -->
          <div class="row">
            <ul class="accordion-group" id="accordion">
              <li
                style="background-image: url('https://www.istockphoto.com/fr/photo/assortiment-de-divers-aliments-malsains-malsains-gm1440200404-480246623?phrase=vertical%20image%20of%20junk%20food&searchscope=image%2Cfilm');">
                <div class="accordion-overlay"></div>
                <h3>Rustic</h3>
                <section class="hidden-xs">
                  <article>
                    <p>Rual and rustic</p>
                  </article>
                </section>
              </li>
              <li class="out"
                style="background-image: url('https://images.unsplash.com/photo-1484154218962-a197022b5858?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1953&q=80');">
                <div class="accordion-overlay"></div>
                <h3>Clean</h3>
                <section class="hidden-xs">
                  <article>
                    <p>For the single or couple
                    </p>
                  </article>
                </section>
              </li>
              <li
                style="background-image: url('https://images.unsplash.com/photo-1507089947368-19c1da9775ae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80');">
                <div class="accordion-overlay"></div>
                <h3>Stylish</h3>
                <section class="hidden-xs">
                  <article>
                    <p>When people want it cosy but stylish</p>
                  </article>
                </section>
              </li>
              <li
                style="background-image: url('https://images.unsplash.com/photo-1495433324511-bf8e92934d90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');">
                <div class="accordion-overlay"></div>
                <h3>Family</h3>
                <section class="hidden-xs">
                  <article>
                    <p>For the family dinner</p>
                  </article>
                </section>
              </li>
            </ul>
          </div>
    </div>

        
     <!--      <label for="categoryFilter" class="mb-4 "></label>

            <select id="categoryFilter" class="form-control mb-3" style="opacity: 0.75; box-shadow: 2px 2px 10px 2px rgba(49, 34, 34, 0.9) inset; border: 1px #403737 solid; border-right: 1px #0f0d0d89 solid; text-align: center; font-size: 20px; font-family: Calibri; letter-spacing: 2px">
                <option value="">Sélectionnez une catégorie</option>
                <-- Les options de catégorie seront générées dynamiquement en JavaScript --
            </select>

            <div class="accordion col-sm-12  d-flex justify-content-center  " id="accordion">
                <-- Les catégories seront générées dynamiquement en JavaScript --
            </div>
        </div>
    </div>
    
    <script>
      $(document).ready(function () {
          const categoryFilter = $('#categoryFilter');
          const jsonDataUrl = 'customData.json';
  
          $.ajax({
              url: jsonDataUrl,
              type: 'GET',
              dataType: 'json',
              success: function (data) {
                  generateCategoryOptions(data);
  
                  categoryFilter.change(function () {
                      const selectedCategory = $(this).val();
                      filterMenu(data, selectedCategory);
                  });
              },
              error: function (error) {
                  console.error('Erreur lors du chargement du fichier JSON.', error);
              }
          });
  
          function generateCategoryOptions(data) {
              data.categorie.forEach(category => {
                  categoryFilter.append($('<option>', {
                      value: category.id_categorie,
                      text: category.libelle
                  }));
              });
          }
  
          function filterMenu(data, category) {
              window.location.href = 'plat.html?category=' + category;
          }
  
          // Générer les catégories sous forme d'accordéon
          function generateAccordion(data) {
              const accordion = $('#accordion');
              accordion.empty();
              data.categorie.forEach(category => {
                  const card = $('<div class="card"></div>');
                  const cardHeader = $('<div class="card-header" id="heading' + category.id_categorie + '"></div>').appendTo(card);
                  const button = $('<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse' + category.id_categorie + '" aria-expanded="true" aria-controls="collapse' + category.id_categorie + '">' + category.libelle + '</button>').appendTo(cardHeader);
                  const collapseDiv = $('<div id="collapse' + category.id_categorie + '" class="collapse" aria-labelledby="heading' + category.id_categorie + '" data-parent="#accordion"></div>').appendTo(card);
                  const cardBody = $('<div class="card-body"></div>').appendTo(collapseDiv);
                  // Ajout de la balise img pour afficher l'image de la catégorie
                  cardBody.append('<img src="' + category.image + '" class="img-fluid" alt="' + category.libelle + '">');
                  card.append(cardBody)
                  card.appendTo(accordion);
              });
          }
  
          // Appel initial pour générer l'accordéon des catégories
          $.ajax({
              url: jsonDataUrl,
              type: 'GET',
              dataType: 'json',
              success: function (data) {
                  generateAccordion(data);
              },
              error: function (error) {
                  console.error('Erreur lors du chargement du fichier JSON.', error);
              }
          });
      });
  </script>-->

<section>

  <div class="container-fluid d-block justify-content-center position-relative col-10    ">
    <h2 class="text-center ">Quality</h2>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-box">
          <h3 class="text-center">High quality</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-box">
          <h3 class="text-center">Smart design</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-box">
          <h3 class="text-center">Modern or retro</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>

    </div>

</section>







</main>
<?php

require_once('footer.php');

?>




