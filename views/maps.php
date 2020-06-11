<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link id="codyframe" rel="stylesheet" href="../assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/custom-style.css"> -->
  <!-- browsers not supporting CSS variables -->
  <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
  </script>
  <title>researchYacht</title>
</head>

<body>
<?php
include '../partials/header.php'
?>
<section class="hero min-height-100vh flex items-center" style="background-image: url('../pictures/maps.PNG')">
  <div class="container max-width-adaptive-sm">
      
    <div class="alert alert--is-visible js-alert" role="alert">
      <img class="ancre justify-center" aria-controls="drawer1" src="../pictures/stickers-ancre-marine-ref-t-mk756-noir-38x57-cm.jpg" alt="">
          
        <div class="flex items-center justify-centers">
          <div class="flex items-center">
        
        </div>
      </div>

    </div>
    
    <!-- <button class="btn btn--primary" aria-controls="drawer1">boat</button> -->

    <div class="drawer js-drawer" id="drawer1">
      <div class="drawer__content" role="alertdialog"  aria-labelledby="drawerTitle1">
        <div class="drawer__body padding-x-md padding-y-sm js-drawer__body justify-center">
          <div class="text-component">
              
              <div class="col-6@md col-7@lg">
                
                <figure class="image-zoom js-image-zoom ">
                  <a href="../views/product.php"><img class="image-zoom__preview js-image-zoom__preview" src="../pictures/yacht3.jpg" alt="Preview image description"></a>
                  <figcaption class="sr-only">Image Caption</figcaption>
                </figure>
              </div>
              <h4 id="drawerTitle1">L'évasion</h4>
              <p>Lorem ipsum dolor sit amet, consectetur sint et velit beatae voluptatem. Quisquam sapiente aliquam consequatur doloribus. Exercitationem facere ratione laborum magnam libero quis excepturi accusamus?</p>
            </div>
          </div>
        </div>

        <button class="reset drawer__close-btn position-fixed js-tab-focus js-drawer__close">
          <svg class="icon" viewBox="0 0 16 16"><title>Close drawer panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
        </button>
      </div>
  </div>
  </section>
    <div class="newsletter-card">
      <div class="margin-bottom-sm">
        <div class="grid gap-xs justify-center">
          <div class="col-2@md">
          
            <input class="form-control width-100%" type="text" name="inputFirstName" id="inputFirstName" placeholder="Destination">
          </div>

          <div class="col-2@md">
            
            <input class="form-control width-100%" type="date"  name="datearrivee" id="inputLastName" placeholder="Date d'arrivée">
          </div>
          <div class="col-2@md">
            
            <input class="form-control width-100%" type="date" name="datedepart" id="inputFirstName" placeholder="Date de départ">
          </div>

          <div class="col-2@md">
            
            <input class="form-control width-100%" type="text" name="inputLastName" id="inputLastName"placeholder="Taille du bateau">
            
          </div>
          <div class="col-2@md">
          <button type="submit" href="../views/formcreateaccount.php" class="btn btn--primary btn-xxs">RECHERCHER</button>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
        <div class="text-component margin-bottom-sm">
        <h3>Resultats de votre recherche</h3>
        <p>ou voir tous les yachts disponibles</p>
      </div>
  
    </div>
  </div>

<!-- cards -->
<div class="container padding-y-md max-width-lg grid justify-center">
 <?php 
 for ($i=1;$i<=12;$i++):?>
  <div class="card card--is-link col-3">
    <a class="card__link" href="../views/product.php" aria-label="Description of the link">
      <figure class="card__img">
        <a href="../views/product.php"><img src="../pictures/yacht2.jpg" alt="Card preview img"></a>
        <div class="card__link-icon" aria-hidden="true">
          <svg class="icon" viewBox="0 0 32 32"><g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10"><path d="M21,5s-4.333-1.667-7,1L6,14c-2.667,2.667-1,7-1,7"></path><path d="M27,11s1.667,4.333-1,7l-8,8c-2.667,2.667-7,1-7,1"></path> <line x1="12" y1="20" x2="4" y2="28"></line><line x1="28" y1="4" x2="20" y2="12"></line></g></svg>
        </div>
      </figure>
    
      <div class="card__content">
        <div class="text-component">
          <h4>Title of the Card</h4>
          <p class="text-sm color-contrast-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, suscipit.</p>
        </div>
      </div>
    </a>
  </div>
  <?php endfor;?>
  
</div>


<?php
include '../partials/footer.php'
?>

<script src="../assets/js/scripts.js"></script>
<script src="../assets/js/_1_drawer.js"></script>


</body>

</html>