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
  <title>caroussel</title>
</head>
<body>
<div class="swipe-content js-swipe-content">
  <div class="slideshow js-slideshow slideshow--transition-prx" data-swipe="on">
    <p class="sr-only">Slideshow Items</p>
    
    <ul class="slideshow__content">
      
      <li class="slideshow__item bg js-slideshow__item" style="background-image: url('../pictures/yacht2.jpg');">
        <p class='sr-only'>Slideshow Item 1 Description</p>
      </li>
      
      <li class="slideshow__item bg js-slideshow__item" style="background-image: url('../pictures/yacht2.jpg');">
        <p class='sr-only'>Slideshow Item 2 Description</p>
      </li>
      
      <li class="slideshow__item bg js-slideshow__item" style="background-image: url('../pictures/yacht2.jpg');">
        <p class='sr-only'>Slideshow Item 3 Description</p>
      </li>
      
    </ul>
  
    <ul>
      <li class="slideshow__control js-slideshow__control">
        <button class="reset slideshow__btn js-tab-focus">
          <svg class="icon" viewBox="0 0 32 32"><title>Show previous slide</title><path d="M20.768,31.395L10.186,16.581c-0.248-0.348-0.248-0.814,0-1.162L20.768,0.605l1.627,1.162L12.229,16 l10.166,14.232L20.768,31.395z"></path></svg>
        </button>
      </li>
  
      <li class="slideshow__control js-slideshow__control">
        <button class="reset slideshow__btn js-tab-focus">
          <svg class="icon" viewBox="0 0 32 32"><title>Show next slide</title><path d="M11.232,31.395l-1.627-1.162L19.771,16L9.605,1.768l1.627-1.162l10.582,14.813 c0.248,0.348,0.248,0.814,0,1.162L11.232,31.395z"></path></svg>
        </button>
      </li>
    </ul>
  </div>

</div>
<script src="../assets/js/_2_slideshow.js"></script>

</body>