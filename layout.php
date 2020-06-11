<?php




?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
  <!-- <link rel="stylesheet" href="assets/css/custom-style.css"> -->
  <!-- browsers not supporting CSS variables -->
  <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
  </script>
  <title>Layout</title>
</head>


<body>
<?php
include './partials/header.php'
?>
<section class="hero min-height-100vh flex items-center" style="background-image: url('pictures/port couv.jpg')">
  <div class="container max-width-adaptive-sm">
    <div class="text-center">
      <div class="newsletter-card">
  <div class="newsletter-card__inner">
    
    <div class="text-component margin-bottom-md">
      <h3>Welcome on board</h3>
      <p>I want to be notified.</p>
    </div>
  
    <form class="flex flex-column gap-xxs">
      <div>
      <input aria-label="Email" class="form-control" type="email" placeholder="Email Address">
      <button type="submit" href="../models/formresearch.php" class="btn btn--primary">Subscribe</button>
      </div>
    </form>
  
    <p class="newsletter-card__feedback newsletter-card__feedback--is-visible newsletter-card__feedback--success margin-top-sm" role="alert"><strong>Or sign up</strong></p>
    <button type="submit" href="views/formcreateaccount.php" class="btn btn--accent btn--lg bg--color-warning-darker">Create an acount</button>
  
    
  </div>
</div>
    </div>
  </div>
</section>
   
<?php
include './partials/footer.php'
?>
<script src="../assets/js/scripts.js"></script>



</body>

</html>