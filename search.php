<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
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


<!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php if (login_check($mysqli) == true) : ?>
<div class="container">
<!-- -------------------------------------------STAR------------------------------------------------------- -->   
<?php
require_once'nav.php';
require_once'includes/psl-config.php';
?>
<!-- INPUTS HTML -->
<form method="GET">
    <div class="card-body border container">
        <div class="row g-2">
                <div class="col-12">
                    <input type="text" class="form-control border-danger" name="search" placeholder="Ref tel nombre tipo . .">

                </div>
                <div class="col-6  ">
                    <button class="btn  gap-2 btn-outline-danger" type="submit" name="btn-search">Buscar</button>
                </div>
                <div class="col-3"> 
                    <input type="date" name="date" id="myDate" class="form-control" >
                </div>
                <div class="col-3   ">
                    <button  class="btn btn-success" onclick="myFunction()" name="btn-date">Fecha</button>
                </div>
            <div class="row g-2">
                <ul class="col-2   ">
                    <button class="btn btn-warning"  name="checkbox2"  value="yes" id="myCheck" >si</button>
                </ul>
                <ul class="col-2">
                    <button class="btn btn-success"  name="checkbox1"  value="no" id="myCheck" >no</button>
                </ul>
                <ul class="col-4  ">
                    <button class="btn btn-warning"  name="inquilino"  value="yes" id="myCheck" >Inquilinos</button>
                </ul>
                <ul class="col-4 ">
                    <button class="btn btn-danger"  name="colaborador"  value="yes" id="myCheck" >colaboradores</button>
                </ul>
            </div>
        </div>
    </div>
</form>


<!-- fonction JS dATE -->
<script>
    function myFunction() {
    document.getElementById("myDate").value = "<?php echo date("Y-m-d");?>";
    }
    </script>


<?php
// -----------------------------------------SEARCH SCRIPT PHP -------------------------------------------------

// SEARCH DATE------------------------------------------------------------------------------------
if (isset($_GET['btn-date'])) {

    $SEARCHDATE = $database->prepare("SELECT * FROM clients WHERE fecha LIKE :fecha  ORDER BY id DESC");
    $fecha = "%".$_GET['date']."%";
    $SEARCHDATE->bindParam("fecha",$fecha);
    if ($SEARCHDATE->execute()) {
        echo '<div class=" container mt-3 ">';
        echo '<table class="table table-striped" >
                    <tr>
                        <th class="col">Ref</th>
                        <th class="col">Usario</th>
                        <th class="col">Nombre Apelledo</th>
                        <th class="col">Estado</th>
                        <th class="col">Fecha</th>
                        <th class="col">Telephono</th>
                        <th class="col">Tipo de operacion</th>
                        <th class="col">Descripcion</th>
                        <th class="class="col""></th>
                        <th class="class="col""></th>
                    <tr>';
        foreach($SEARCHDATE AS $result){
    
            echo  '<tr>
                        <td>'.$result['id'].'</td>';
                    echo '<td> '.$result['userid'] .'</td>';
                    echo '<td> '.$result['name'] .'</td>';
                    echo '<td> '.$result['status'] .'</td>';
                    echo '<td> '.$result['fecha'] .'</td>';
                    echo '<td> '.$result['indicator'].$result['tel'].'</td>';
                    echo '<td>'.$result['tipo'].' '.$result['propiedad'].'</td>';
                    echo '<td> '.$result['text'] .'</td>';
                    echo'<td scope="row"class="text-center" >
                    <a class="btn btn-outline-secondary" href="'.$hostingUrl.'edit_clients.php?edit='.$result['id'].'" name="edit_client" value="'.$result['id'].'" target="_blank" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"><path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/><path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/></svg>
                    </a>
                    </td>';
                    echo '<td> 
                            <a class="btn btn-outline-success" href="https://wa.me/'.$result['indicator'].$result['tel'].'" target="_blank">   
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                            </a>
                        </td>
                    <tr>';
          }
          echo '</table>
          </div>';
    
    }else {
        echo 'No puedo buscar';
    }

}





// CHECKBOX1------------------------------------------------------------------------------------
if (isset($_GET['checkbox1'])) {

    $SEARCHBOX1 = $database->prepare("SELECT * FROM clients WHERE status LIKE :status  ORDER BY id DESC");
    $status = "%".$_GET['checkbox1']."%";
    $SEARCHBOX1->bindParam("status",$status);
    if ($SEARCHBOX1->execute()) {
        echo '<div class=" container mt-3">';
        echo '<table class="table table-striped">
                    <tr>
                        <th class="col">Ref</th>
                        <th class="col">Usario</th>
                        <th class="col">Nombre Apelledo</th>
                        <th class="col">Estado</th>
                        <th class="col">Fecha</th>
                        <th class="col">Telephono</th>
                        <th class="col">Tipo de operacion</th>
                        <th class="col">Descripcion</th>
                        <th class="class="col""></th>
                        <th class="class="col""></th>
                    <tr>';
        foreach($SEARCHBOX1 AS $result){
    
            echo  '<tr>
                        <td>'.$result['id'].'</td>';
                    echo '<td> '.$result['userid'] .'</td>';
                    echo '<td> '.$result['name'] .'</td>';
                    echo '<td> '.$result['status'] .'</td>';
                    echo '<td> '.$result['fecha'] .'</td>';
                    echo '<td> '.$result['indicator'].$result['tel'].'</td>';
                    echo '<td>'.$result['tipo'].' '.$result['propiedad'].'</td>';
                    echo '<td> '.$result['text'] .'</td>';
                    echo'<td scope="row"class="text-center" >
                    <a class="btn btn-outline-secondary" href="'.$hostingUrl.'edit_clients.php?edit='.$result['id'].'" name="edit_client" value="'.$result['id'].'" target="_blank" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"><path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/><path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/></svg>
                    </a>
                    </td>';
                    echo '<td> 
                            <a class="btn btn-outline-success" href="https://wa.me/'.$result['indicator'].$result['tel'].'" target="_blank">   
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                            </a>
                        </td>
                    <tr>';
          }
          echo '</table>
          </div>';
    
    }else {
        echo 'No puedo buscar';
    }

}


// CHECKBOX2------------------------------------------------------------------------------------
if (isset($_GET['checkbox2'])) {

    $SEARCHBOX2 = $database->prepare("SELECT * FROM clients WHERE status LIKE :status  ORDER BY id DESC");
    $status = "%".$_GET['checkbox2']."%";
    $SEARCHBOX2->bindParam("status",$status);
    if ($SEARCHBOX2->execute()) {
        echo '<div class=" container mt-3">';
        echo '<table class="table table-striped">
                    <tr>
                        <th class="col">Ref</th>
                        <th class="col">Usario</th>
                        <th class="col">Nombre Apelledo</th>
                        <th class="col">Estado</th>
                        <th class="col">Fecha</th>
                        <th class="col">Telephono</th>
                        <th class="col">Tipo de operacion</th>
                        <th class="col">Descripcion</th>
                        <th class="class="col""></th>
                        <th class="class="col""></th>
                    <tr>';
        foreach($SEARCHBOX2 AS $result){
    
            echo  '<tr>
                        <td>'.$result['id'].'</td>';
                    echo '<td> '.$result['userid'] .'</td>';
                    echo '<td> '.$result['name'] .'</td>';
                    echo '<td> '.$result['status'] .'</td>';
                    echo '<td> '.$result['fecha'] .'</td>';
                    echo '<td> '.$result['indicator'].$result['tel'].'</td>';
                    echo '<td>'.$result['tipo'].' '.$result['propiedad'].'</td>';
                    echo '<td> '.$result['text'] .'</td>';
                    echo'<td scope="row"class="text-center" >
                    <a class="btn btn-outline-secondary" href="'.$hostingUrl.'edit_clients.php?edit='.$result['id'].'" name="edit_client" value="'.$result['id'].'" target="_blank" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"><path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/><path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/></svg>
                    </a>
                    </td>';

                    echo '<td> 
                            <a class="btn btn-outline-success" href="https://wa.me/'.$result['indicator'].$result['tel'].'" target="_blank">   
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                            </a>
                        </td>
                    <tr>';
          }
          echo '</table>
          </div>';
    
    }else {
        echo 'No puedo buscar';
    }

}

// SEARCH ---------------------------------------------------------------------------------------
if(isset($_GET['btn-search'])){
$SEARCH = $database->prepare("SELECT * FROM clients  WHERE id LIKE :id OR userid LIKE :userid OR name LIKE :name OR  
status LIKE :status  OR fecha LIKE :fecha OR indicator LIKE :indicator OR  tel LIKE :tel OR tipo LIKE :tipo OR propiedad LIKE :propiedad ORDER BY id DESC ");
$id = "%".$_GET['search']."%";
$userid  = "%".$_GET['search']."%";
$name = "%".$_GET['search']."%";
$status = "%".$_GET['search']."%";
$fecha = "%".$_GET['search']."%";
$indicator = "%".$_GET['search']."%";
$tel = "%".$_GET['search']."%";
$tipo = "%".$_GET['search']."%";
$propiedad = "%".$_GET['search']."%";
// $text = "%".$_GET['search']."%";

$SEARCH->bindParam("id",$id);
$SEARCH->bindParam("userid",$userid);
$SEARCH->bindParam("name",$name);
$SEARCH->bindParam("status",$status);
$SEARCH->bindParam("fecha",$fecha);
$SEARCH->bindParam("indicator",$indicator);
$SEARCH->bindParam("tel",$tel);
$SEARCH->bindParam("tipo",$tipo);
$SEARCH->bindParam("propiedad",$propiedad);
// $SEARCH->bindParam("text",$text);


if ($SEARCH->execute()) {
    echo '<div class=" container mt-3">';
    echo '<table class="table table-striped">
                <tr>
                    <th class="col">Ref</th>
                    <th class="col">Usario</th>
                    <th class="col">Nombre Apelledo</th>
                    <th class="col">Estado</th>
                    <th class="col">Fecha</th>
                    <th class="col">Telephono</th>
                    <th class="col">Tipo de operacion</th>
                    <th class="col">Descripcion</th>
                    <th class="class="col""></th>
                    <th class="class="col""></th>
                <tr>';
    foreach($SEARCH AS $result){

        echo  '<tr>
                    <td>'.$result['id'].'</td>';
                echo '<td> '.$result['userid'] .'</td>';
                echo '<td> '.$result['name'] .'</td>';
                echo '<td> '.$result['status'] .'</td>';
                echo '<td> '.$result['fecha'] .'</td>';
                echo '<td> '.$result['indicator'].$result['tel'].'</td>';
                echo '<td>'.$result['tipo'].' '.$result['propiedad'].'</td>';
                echo '<td> '.$result['text'] .'</td>';
                echo'<td scope="row"class="text-center" >
                <a class="btn btn-outline-secondary" href="'.$hostingUrl.'edit_clients.php?edit='.$result['id'].'" name="edit_client" value="'.$result['id'].'" target="_blank" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"><path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/><path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/></svg>
                </a>
                </td>';
                echo '<td> 
                        <a class="btn btn-outline-success" href="https://wa.me/'.$result['indicator'].$result['tel'].'" target="_blank">   
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>
                    </td>
                <tr>';
      }
      echo '</table>
      </div>';

}else {
    echo 'No puedo buscar';
}

}

?>












<?php

// SEARCH inquilino---------------------------------------------------------------------------------------
if(isset($_GET['inquilino'])){
$SEARCH = $database->prepare("SELECT * FROM clients WHERE tipo LIKE :tipo ORDER BY id DESC ");
$tipo = "%inquilino%";

$SEARCH->bindParam("tipo",$tipo);
// $SEARCH->bindParam("text",$text);


if ($SEARCH->execute()) {
    echo '<div class=" container mt-3">';
    echo '<table class="table table-striped">
                <tr>
                    <th class="col">Ref</th>
                    <th class="col">Usario</th>
                    <th class="col">Nombre Apelledo</th>
                    <th class="col">Estado</th>
                    <th class="col">Fecha</th>
                    <th class="col">Telephono</th>
                    <th class="col">Tipo de operacion</th>
                    <th class="col">Descripcion</th>
                    <th class="class="col""></th>
                    <th class="class="col""></th>
                <tr>';
    foreach($SEARCH AS $result){

        echo  '<tr>
                    <td>'.$result['id'].'</td>';
                echo '<td> '.$result['userid'] .'</td>';
                echo '<td> '.$result['name'] .'</td>';
                echo '<td> '.$result['status'] .'</td>';
                echo '<td> '.$result['fecha'] .'</td>';
                echo '<td> '.$result['indicator'].$result['tel'].'</td>';
                echo '<td>'.$result['tipo'].' '.$result['propiedad'].'</td>';
                echo '<td> '.$result['text'] .'</td>';
                echo'<td scope="row"class="text-center" >
                <a class="btn btn-outline-secondary" href="'.$hostingUrl.'edit_clients.php?edit='.$result['id'].'" name="edit_client" value="'.$result['id'].'" target="_blank" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"><path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/><path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/></svg>
                </a>
                </td>';
                echo '<td> 
                        <a class="btn btn-outline-success" href="https://wa.me/'.$result['indicator'].$result['tel'].'" target="_blank">   
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>
                    </td>
                <tr>';
      }
      echo '</table>
      </div>';

}else {
    echo 'No puedo buscar';
}

}

?>






<?php

// SEARCH inquilino---------------------------------------------------------------------------------------
if(isset($_GET['colaborador'])){
$SEARCH = $database->prepare("SELECT * FROM clients WHERE tipo LIKE :tipo ORDER BY id DESC ");
$tipo = "%colaborador%";

$SEARCH->bindParam("tipo",$tipo);
// $SEARCH->bindParam("text",$text);


if ($SEARCH->execute()) {
    echo '<div class=" container mt-3">';
    echo '<table class="table table-striped">
                <tr>
                    <th class="col">Ref</th>
                    <th class="col">Usario</th>
                    <th class="col">Nombre Apelledo</th>
                    <th class="col">Estado</th>
                    <th class="col">Fecha</th>
                    <th class="col">Telephono</th>
                    <th class="col">Tipo de operacion</th>
                    <th class="col">Descripcion</th>
                    <th class="class="col""></th>
                    <th class="class="col""></th>
                <tr>';
    foreach($SEARCH AS $result){

        echo  '<tr>
                    <td>'.$result['id'].'</td>';
                echo '<td> '.$result['userid'] .'</td>';
                echo '<td> '.$result['name'] .'</td>';
                echo '<td> '.$result['status'] .'</td>';
                echo '<td> '.$result['fecha'] .'</td>';
                echo '<td> '.$result['indicator'].$result['tel'].'</td>';
                echo '<td>'.$result['tipo'].' '.$result['propiedad'].'</td>';
                echo '<td> '.$result['text'] .'</td>';
                echo'<td scope="row"class="text-center" >
                <a class="btn btn-outline-secondary" href="'.$hostingUrl.'edit_clients.php?edit='.$result['id'].'" name="edit_client" value="'.$result['id'].'" target="_blank" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16"><path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/><path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/></svg>
                </a>
                </td>';
                echo '<td> 
                        <a class="btn btn-outline-success" href="https://wa.me/'.$result['indicator'].$result['tel'].'" target="_blank">   
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>
                    </td>
                <tr>';
      }
      echo '</table>
      </div>';

}else {
    echo 'No puedo buscar';
}

}

?>





<!-- -------------------------------------------END------------------------------------------------------- -->
</div>
        <?php 
        // FOOTER 
        require_once'footer.php';
        else : ?>
            <div class="alert alert-danger container d-print-none  mt-2" role="alert">
                No tienes Autorisacion para acceder esta pagina!. Porfavor <a href="index.php">login</a>.
            </div>    
        <?php 
        endif; 
        ?>
        
    </body>
</html>



    </body>
</html>
