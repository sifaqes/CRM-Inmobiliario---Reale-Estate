<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'Activado';
} else {
    $logged = 'Invitado';
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>FIbra Elboss Alicante</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gestion de Inmobiliaria Elboss Alicante">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="inmobiliaria,elboss,gestion del, inmobiliaria, pisos,alquiler,vender,comprar,rent, habitaciones,locales,naves,oficina,estudiantes,hepotica,edificios">
    <meta name="auteur" content="ZERROUKI SIFAQES +34658629772" />

<!-- Icon de main:apple windows android -->
    <link rel="icon" href="icon.png">
    <link rel="shortcut" href="icon.png">
    <link rel="apple-touche-icon" href="icon.png">


        <!-- SEO TAG FACEBOOK -->
    <meta property="og:title" content="Gestion de Inmobiliaria Elboss Alicante">
    <meta property="og:description" content="C.Del Alcalde Alfonso de Rojas 3 Local 2 Alicante 03004 Tel 623508417">
    <meta property="og:image" content="logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="720">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://crm.elbossinmobiliaria.com">
    <meta property="fb:app_id" content="xxxxxxxxxxxxxxxxxxxx">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
<body>

<?php
require_once'nav.php';
?>


<div class="container" >


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/fibra/1.jpeg"   class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/4.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/5.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/6.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/7.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/8.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/fibra/9.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






</div>






    

<footer>
    <?php 
    // FOOTER 
    require_once'footer.php';
    ?>    
</footer>

</body>
</html>








