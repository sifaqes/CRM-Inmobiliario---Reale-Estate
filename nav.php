<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Inmobiliaria Elboss Alicante</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="GGestion de Inmobiliaria Elboss Alicante">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="inmobiliaria,elboss,gestion del, inmobiliaria, pisos,alquiler">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body>
    
<?php

require_once'includes/psl-config.php';
$toDoItems = $database->prepare("SELECT * FROM clients ");
$toDoItems->execute();
$ListAll = $toDoItems->rowCount();
?>

<!-- Code de  Header -->

<header class="container">
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="protected_page.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="imgs\logo.png" alt="logo">
                    <span class="fs-4 d-print-none">Alicante</span><span class="nav-link disabled d-print-none">Hola&nbsp;<?php echo htmlentities($_SESSION['username']); ?></span>
                </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto d-print-none">

                <a class="me-3 py-2 text-dark text-decoration-none" href="inmuebles.php">Inmuebles</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="clients.php">Clientes</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="list.php">Peticiones</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="search.php">Buscador</a>

                    <a class="py-2 text-dark text-decoration-none" href="profile.php">Profile</a>
                    <a ></a>
                </nav>
                <nav class="d-inline-flex d-print-none">
                    <form method="GET">
                        <button  class="nav-link btn" name="logout"> Salir </button>
                    </form>

                 </nav>

            </div>
</header>



                              

<?php 

// LOGOUT SYSTEM
if(isset($_GET['logout'])){
    
session_unset();
echo "<script> location.replace('index.php') </script>";
}
?>




  </body>
</html>






