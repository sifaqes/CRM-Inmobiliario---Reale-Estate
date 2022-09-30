<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Inmobiliaria : Hola <?php echo htmlentities($_SESSION['username']); ?>Tabla de Administrador</title>
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
    <link href="css/style.css" rel="stylesheet">
   
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
<?php if (login_check($mysqli) == true) : ?>
<!-- -----------------------------------------------------star protected page ------------------------------- -->
<header>
<?php
    require_once'nav.php';
?>
 </header>

 <div id="divSuppression" class="alert alert-success d-none" role="alert">
                        Datos borrados correctamente
 </div>

<main>
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Inmobiliaria Elboss Alicante</h1>
                <p class="fs-5 text-muted d-print-none  ">Estamos en C.Des Alcalde Alfonso de Rojas Alicante</p>
</div>



<?php 
////////////////////////////////////////////////////////////// DISPLAY INMUEBLE ///////////////////////////////////////////////////////////////////////////////
            // 2) define how many results you want per page - تعريف عدد نتائج لكل صفحة
            if (isset($_POST['resultsPerPage'])) {
                $resultsPerPage = $_POST['resultsPerPage'];
            }else {
                $resultsPerPage = 12;
            }
                  
            $myFiles = $database->prepare("SELECT * FROM inmuebles WHERE id =  id");
            $myFiles->execute();
            $myresultsPerPage = $myFiles->rowCount();
           
            // 4) -تحديد رقم الصفحة الذي يعمل عليه الزائر حاليًا
            // determine which page number visitor is currently on 
            if(!isset($_GET['page'])){
                $page = 1;
                }else if(isset($_GET['page'])){
                $page = $_GET['page'];
                }
    
            // 5) determine number of total pages available - تحديد عدد الصفحات الإجمالية المتاحة
            $totalPages = ceil($myresultsPerPage / $resultsPerPage) ;
            ?>
            <ul class="nav justify-content-end  d-print-none container">
                 <li class="nav-item">
            <?php
            for($count = 1; $count<= $totalPages; ++$count){
                if($page == $count){
                    ?>
                    <a class=" btn btn-danger d-print-none " href="protected_page.php?page=<?php echo $count; ?>"><?php echo $count; ?></a>
                   <?php
                }else{
                   ?>
                    <a class=" btn btn-outline-danger d-print-none " href="protected_page.php?page=<?php echo $count; ?>"><?php echo $count; ?></a>
                   <?php
                }
            }
            ?>
                   <!-- <input class="form-control" type="" name="" value=""> -->
                </li>
                    <form method="POST">
                        <li class="nav-item container d-print-none ">
                            <select class="form-select ms-3 btn btn-outline-danger " name="resultsPerPage" type="submit">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>  
                        </li>
                    </form> 
                </ul>

<!-- --------------------------------------------------------NUMEROS OF PAGES------------------------------ -->
           <?php
            // 6) تحديد رقم البداية المحدد للنتائج في صفحة العرض
            // determine the sql LIMIT starting number for the results on the displaying page
            $results = $database->prepare("SELECT * FROM inmuebles ORDER BY id DESC LIMIT " . $resultsPerPage . " OFFSET " . ($page-1)*$resultsPerPage . "  ");
            if ($results->execute()) {
            // var_dump($results);
            // 7) display the results  - // عرض  النتائج الصفحات


echo'

<div class="album py-5">
    <div class="container mt-1">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
';
            foreach($results AS $data){
                // Monstrar Imagens desde la base de datos
                $getFile = "data:" . $data['fileType'] . ";base64,".base64_encode($data['file']);
                // SI IMAGEN NO EXISTE WILL REMPLACE
                // $pos = $getFile;
                $pos =$data['position'];
                if ($pos === $hostingUrlimage."/") {
                    $pos = $hostingUrl."imgs/".$ImageDefault;
                }else {
                    $pos = $data['position'];
                }

                // image 300px*200px resulution favorito
                echo'
                <!-- //////////////////////////////////STAR CARDS /////////////////////////////////////////////////////////7 -->

            <div class="col rounded mt-2" height="800px">
                <div class="card shadow-sm"  id="tr_'.$data['id'].'">
                        <a class="" href="view_inmeubles.php?view='.$data['id'].'"  target="_blank">
                                <img class="rounded bd-placeholder-img card-img-top"     height="250px"  src="'.$pos.'" alt="'. $data['fileName'].'">         
                        </a>
                        <div class="card-body">
                            <a class=" nav-link" href="view_inmeubles.php?view='.$data['id'].'"  target="_blank">
                                <text class="text-center">
                                        '.$data['oper'].'&nbsp;'.$data['prop'].'&nbsp;en&nbsp;'.$data['calle'].'&nbsp;'.$data['direccion'].'
                                </text>
                            </a> 
                                <br>
                        <b class="card-text">'.$data['pvp'].'&nbsp;'.$SymbolEuro.'</b>&nbsp;&nbsp;
                        <span class="link-secondary text-decoration-none" >
                    
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                            </svg>
                            <small>'.$data['hab'].'&nbsp;</small>&nbsp;

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-badge-wc" viewBox="0 0 16 16">
                                <path d="M10.348 7.643c0-1.112.488-1.754 1.318-1.754.682 0 1.139.47 1.187 1.108H14v-.11c-.053-1.187-1.024-2-2.342-2-1.604 0-2.518 1.05-2.518 2.751v.747c0 1.7.905 2.73 2.518 2.73 1.314 0 2.285-.792 2.342-1.939v-.114h-1.147c-.048.615-.497 1.05-1.187 1.05-.839 0-1.318-.62-1.318-1.727v-.742zM4.457 11l1.02-4.184h.045L6.542 11h1.006L9 5.001H7.818l-.82 4.355h-.056L5.97 5.001h-.94l-.972 4.355h-.053l-.827-4.355H2L3.452 11h1.005z"/>
                                <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                            </svg>
                            <small>'.$data['ban'].'&nbsp;</small>&nbsp;

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-expand" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z"/>
                            </svg>
                            <small>'.$data['ascensor'].'&nbsp;</small>&nbsp;

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle" viewBox="0 0 16 16">
                                <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146zm.122 2.112v-.002.002zm0-.002v.002a.5.5 0 0 1-.122.51L6.293 6.878a.5.5 0 0 1-.511.12H5.78l-.014-.004a4.507 4.507 0 0 0-.288-.076 4.922 4.922 0 0 0-.765-.116c-.422-.028-.836.008-1.175.15l5.51 5.509c.141-.34.177-.753.149-1.175a4.924 4.924 0 0 0-.192-1.054l-.004-.013v-.001a.5.5 0 0 1 .12-.512l3.536-3.535a.5.5 0 0 1 .532-.115l.096.022c.087.017.208.034.344.034.114 0 .23-.011.343-.04L9.927 2.028c-.029.113-.04.23-.04.343a1.779 1.779 0 0 0 .062.46z"/>
                            </svg>
                            <small>'.$data['zona'].'&nbsp;</small>&nbsp;
                            
                        </span>
                            <p class="card-text  text-truncate" style="max-width: 100%;">'.$data['discripcion'].'</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group d-print-none">
                                    <form method="GET">
                                        <tr>
                                            <!-- Button trigger modal -->
                                            <a  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg>
                                            </a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Quieres Eliminar  el inmueble?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Atras</button>
                                                    <button type="submit" class="btn btn-danger" formaction="suprission.php" name="remove" value="'.$data['id'].'&hh">Eliminar</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>




                                        </tr> 
                                    </form>         
                                
                                   

                                    <a class="btn btn-outline-dark " href="edit_inmeubles.php?edit='. $data['id'].'" type="submit" name="edit"  target="_blank">                     
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                        </svg>
                                    </a> 

                                
                                    <a  class="btn btn btn-outline-primary "  type="button"  href="tel:'.$data['telefono'].'" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                    </a>

                                   
                                    <a class="btn btn btn-outline-success " href="https://wa.me/'.$data['telefono'].'" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                        </svg>
                                    </a>
               

                                    <a class="btn btn-outline-secondary " type="button"  onclick="myFunction()" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg>                                              
                                    </a>
                                    <p hidden><input type="input" name="myInput" id="myInput" value="'.$hostingUrl.'view_inmeubles.php?view='.$data['id'].'" ></p>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>                      
';        
 }
echo'                      
             </div>
        </div>
    </div>

';
} 
 ?>

<div class="container">
    <ul class="nav justify-content-center mt-2 d-print-none   ">
        <li class="nav-item">
                <?php
                for($count = 1; $count<= $totalPages; ++$count){
                    if($page == $count){
                        ?>
                        <a class=" btn btn-danger" href="protected_page.php?page=<?php echo $count; ?>"><?php echo $count; ?></a>
                    <?php
                    }else{
                    ?>
                        <a class=" btn btn-outline-danger" href="protected_page.php?page=<?php echo $count; ?>"><?php echo $count; ?></a>
                    <?php
                    }
                }
                ?>
                    <!-- <input class="form-control" type="" name="" value=""> -->
        </li>
    </ul>
</div>

</main>


<script >
      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    
     function fctDelete(remove){    
      swalWithBootstrapButtons.fire({
      title: 'Est vous sur de vouloir supprimer cette commande?',
      text: "Vous ne pourrez pas revenir en arrière!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Oui, supprimez-le!',
      cancelButtonText: 'Non, annuler!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        var id="tr_"+remove;
      $.ajax({
        url: "scripts.php",
        type: "GET",
        data: {data:remove} ,
        success: function (response) {

            // Supprimer y afficher le message suprimer 
          if(response>0) {
            $( "#tr_"+remove ).hide( "slow", function() {
              // Use arguments.callee so we don't need a named function
              var div = document.getElementById("divSuppression").classList.remove("d-none");
            
              // Use arguments.callee so we don't need a named function
              var div = document.getElementById("divSuppression").classList.remove("d-none");
              setTimeout(function(){
                $( "#divSuppression" ).hide( "slow", function() {});

            },2000)
            });
          }
                    // You will get response from your PHP page (what you echo or print)
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                    alert("fail")
                    console.log(textStatus, errorThrown);
                  }
        });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Annulé',
          'Votre fichier imaginaire est en sécurité :)',
          'Erreur'
        )
      }
    })
      }
    </script>












<script>
                                            function myFunction() {
                                            /* Get the text field */
                                            var copyText = document.getElementById("myInput");

                                            /* Select the text field */
                                            copyText.select();
                                            copyText.setSelectionRange(0, 99999); /* For mobile devices */

                                            /* Copy the text inside the text field */
                                            navigator.clipboard.writeText(copyText.value);
                                            
                                            /* Alert the copied text */
                                            alert("Copied the text: " + copyText.value);
                                            }
</script> 

<footer>
    <?php 
    // FOOTER 
    require_once'footer.php';
    ?>    
</footer>
<!-- -------------------------------------------------end proteceted page----------------------------------- -->
<?php else : ?>
    <div class="alert alert-danger container d-print-none mt-2" role="alert">
        No tienes Autorisacion para acceder esta pagina!. Porfavor <a href="index.php">login</a>.
    </div>
<?php endif; ?>
</body>
</html>