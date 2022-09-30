<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Darse de Baje - Gestion de Inmobiliaria Elboss Alicante</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="GGestion de Inmobiliaria Elboss Alicante">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="inmobiliaria,elboss,gestion del, inmobiliaria, pisos,alquiler">
    <meta name="auteur" content="ZERROUKI SIFAQES +34658629772" />

<!-- Icon de main:apple windows android -->
    <link rel="icon" href="../icon.png">
    <link rel="shortcut" href="../icon.png">
    <link rel="apple-touche-icon" href="../icon.png">

<!-- SEO TAG FACEBOOK -->
    <meta property="og:title" content="Gestion de Inmobiliaria Elboss Alicante">
    <meta property="og:description" content="C.Del Alcalde Alfonso de Rojas 3 Local 2 Alicante 03004 Tel 623508417">
    <meta property="og:image" content="../logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="720">
    <meta property="og:type" content="website">
    
    <meta property="og:url" content="https://crm.elbossinmobiliaria.com">
    <meta property="fb:app_id" content="xxxxxxxxxxxxxxxxxxxx">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
<body class="container">
    
<?php

require_once'../includes/psl-config.php';

?>

<!-- Code de  Header -->

<header class="py-3">
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="../protected_page.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="..\imgs\logo.png" alt="logo">
                    <!-- <span class="fs-4">Alicante</span><span class="nav-link disabled">Hola&nbsp;<?php echo htmlentities($_SESSION['username']); ?></span> -->
                </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="..\inmuebles.php">Nuevo Inmuebles</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="..\clients.php">Nuevo Cliente</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="..\list.php">Lista de Clientes</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="..\search.php">Buscar Clients</a>

                    <a class="py-2 text-dark text-decoration-none" href="..\profile.php">Profile</a>
                    <a ></a>
                </nav>
                <nav class="d-inline-flex">
                    <form method="GET">
                        <a  class="nav-link btn" href="..\index.php" name="logout"> Login </a>
                    </form>

                 </nav>

            </div>
</header>


<div class="alert alert-info" role="alert">
            Recuerda que por registrarte con nosotros, recibirás todas las ofertas de compra y venta, Ya no podrás aprovechar los descuentos!   
</div>

   <form method="POST">
<ul class="nav justify-content-center mb-3">
        <li class="nav-item">      
        <span class=" btn ms-2 mb-2 mt-2 " >Elije una de las siguientes opciones&nbsp;&nbsp;&nbsp;</span>
        </li>
        <li class="nav-item">      
        <button class="btn btn-success ms-2 mb-2 mt-2 " type="submit" name="alta">Continuar Alta</button>
        </li>

        <li class="nav-item">
        <button class="btn btn-warning ms-2 mb-2 mt-2 " type="submit" name="baja">Darse de Baja </button>
        </li>

        <li class="nav-item">
        <button class="btn btn-danger ms-2 mb-2 mt-2 " type="submit" name="delte">Eliminar Cuenta</button>
        </li>
</ul>
 </form> 






<!-- href="../protected_page.php" -->
<?php 
// ------------------------------DARSE ALTA PHP--------------------------------------------------
if(isset( $_POST['alta'])){
    $id_baja = $_GET['darse_de_baje'];
    $buzzon = '1';
            $Baja = $database->prepare("UPDATE peticion SET buzzon = :buzzon WHERE id = :id_baja");
            $Baja->bindParam("buzzon",$buzzon);           
            $Baja->bindParam("id_baja",$id_baja);
          
            if ($Baja->execute()) {
   
                echo '
                    <div class="alert alert-success" role="alert">
                        Has hecho Alta con éxito, Bienvenido en el boss inmobiliaria Alicante! 
                    </div>';
                    header("refresh:2;");
                }else{
                echo '
                    <div class="alert alert-danger d-print-none" role="alert">
                        Error de darse de Alta !
                    </div>';
                    header("refresh:2;");
                        
            }

        }
?>


<?php 
// ------------------------------DARSE BAJA PHP--------------------------------------------------
if(isset( $_POST['baja'])){
    $id_baja = $_GET['darse_de_baje'];
    $buzzon = '0';
            $Baja = $database->prepare("UPDATE peticion SET buzzon = :buzzon WHERE id = :id_baja");
            $Baja->bindParam("buzzon",$buzzon);           
            $Baja->bindParam("id_baja",$id_baja);
          
            if ($Baja->execute()) {
   
                echo '
                    <div class="alert alert-success" role="alert">
                        Has hecho Baja con éxito!
                    </div>';
                    header("refresh:2;");
                }else{
                echo '
                    <div class="alert alert-danger d-print-none" role="alert">
                        Error de darse de baja !
                    </div>';
                    header("refresh:2;");
                        
            }

        }
?>



<?php 
// ------------------------------ELIMINAR CUENTA PHP--------------------------------------------------
if(isset( $_POST['delte'])){
    $id_baja = $_GET['darse_de_baje'];
     
            $clear = $database->prepare("SELECT * FROM peticion  WHERE id = :id_baja ");
            $clear->bindParam("id_baja",$id_baja);
          
            if ($clear->execute()) {
                $ListAll = $clear->rowCount();
                $darse_baja_id = $database->prepare("DELETE FROM peticion WHERE id = :id ");
                $darse_baja_id->bindParam("id",$id_baja);
                    if($darse_baja_id->execute()){
                        echo '
                        <div class="alert alert-success" role="alert">
                            Has eliminado la cuenta con éxito!
                            </div>';
                            header("refresh:2;");
                        }else{
                        echo '
                            <div class="alert alert-danger d-print-none" role="alert">
                                No puede eliminar la cuenta!
                            </div>';
                            header("refresh:2;");
                        }
            }

        }
?>


<?php 
// FOOTER 
    require_once'../footer.php';
?>

  </body>
</html>