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
    <link href="css/style.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
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

<!-- Custom styles for this template -->
<link href="pricing.css" rel="stylesheet">
</head>
<body>
    <?php if (login_check($mysqli) == true) : ?>
        <div class="container">
<!-- -------------------------------------------STAR------------------------------------------------------- -->   
<?php
require_once'nav.php';
?>







<div class="container ">

<div id="divSuppression" class="alert alert-success d-none" role="alert">
Datos borrados correctamente
</div>

    <form method="POST">
        <h4 class="mb-3">Nuevo Cliente <?php echo'<span style=" text-align: center; color:red">: '.$ListAll.'</span>'; ?></h4>
            <div class="row g-3">
                <div class="col-sm-1">
                <label  class="form-label">Administrador</label>
                        <select class="form-select mt-1 mb-1 " name="userid" value="null" required>
                                    <option value="Siphax"><?php echo htmlentities($_SESSION['username']); ?></option>
                                    <option value="Amina">Amina</option>
                                    <option value="Sergio">Sergio</option>
                                    <option value="Karim">Karim</option>
                                    <option value="Siphax">Siphax</option>
                        </select>
                </div>
                <div  class="col-sm-2">
                <label  class="form-label">Nombre Apelledo*</label>
                        <input class="form-control mt-1 mb-1"  type="text" name="name" placeholder="Nombre *" required> 
                </div>
                <div  class="col-sm-2">
                <label  class="form-label">Indicador*</label>
                        <select class="form-select mt-1 mb-1" name="indi" required>
                                <option value="+34">España (+34)</option>
                                <option value="+213">Argelia (+213)</option>
                                <option value="+33">Francia (+33)</option>
                                <option value="+212">Morueco (+212)</option>
                                <option value="+44">United Kingdom (+44)</option>
                                <option value="+7">Russia (+7)</option>
                                <option value="+57">Colombia (+57)</option>
                                <option value="+47">Noruega (+47)</option>
                                <option value="+41">Suecia (+41)</option>
                                <option value="+966">السعودية (+966)</option>
                                <option value="+385">(+385) Croacia</option>
                        </select>  
                </div>
                <div class="col-sm-2">
                <label  class="form-label">Telefono*</label>
                        <input class="form-control mt-1 mb-1"  type="number" name="phone" placeholder="612345656" maxlength="10" size="7" required/>
                </div>
                <div class="col-sm-2">`
                <label  class="form-label">Operacion</label>
                        <select class="form-select mt-1 mb-1" name="tipo" required>
                                        <option value="Alquiler">Alquiler</option>
                                        <option value="Comprar">Comprar</option>
                                        <option value="Vender">Vender</option>
                                        <option value="Colaborador">Colaborador</option>
                        </select>

                </div>
                <div class="col-sm-2">
                <label  class="form-label">propiedad</label>
                    <select class="form-select mt-1 mb-1" name="propiedad" required>
                        <option value="Piso">Piso</option>
                        <option value="Casa">Casa</option>
                        <option value="Habitacion">Habitacion</option>
                        <option value="Chalet">Chalet</option>
                        <option value="Local">Local</option>
                        <option value="Nave">Nave</option>
                        <option value="Garaje">Garaje</option>
                        <option value="Inquilino">Inquilino/a</option>
                    </select>
                </div>
        </div>
        <div class="col-sm-12">
                        <textarea   name="text"  class="form-control mt-1 mb-1" placeholder="Discripcion" rows="8" ></textarea>
        </div>
        <button  type="submit" class="w-100 btn btn-success btn-lg" name="add"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
            <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/>
            </svg>&nbsp;Nuevo Cliente</button>
        <hr class="my-4">
    </form>
</div>


            

<?php 
//    SCRIPT EMAIL/////////////////////////////////////////////////////////////////////////////////////////////////
// BASE DE  DATOS
require_once'includes/psl-config.php';

if(isset($_GET['status'])){

    if($_GET['statusValue'] ==="no"){
    $updateStatus = $database->prepare("UPDATE clients SET status = 'yes' WHERE id = :id");
    $updateStatus->bindParam("id",$_GET['status']);
    $updateStatus->execute();
    // PROTOCOL OF MAIL MAILER
            //   **         
            require_once 'mail.php';
            // $mail->addAddress($_SESSION['user']->EMAIL);
            $mail->addAddress('elbossinmobiliaria@gmail.com');
            $mail->Subject = "::CLIENTE CONFERMADO";
            $mail->Body = 'Hola '.$items['id'].' has puesto un inmueble en servicio, Informaciones del inmueble '.$items['name'].'';
            $mail->setFrom("NoRaply@elbossinmobiliaria.es", "ELBOSSINMOBILIARIA");
            $mail->send();
    
    header("location:clients.php",true);
    }else if($_GET['statusValue'] ==="yes"){
        $updateStatus = $database->prepare("UPDATE clients SET status = 'no' WHERE id = :id");
        $updateStatus->bindParam("id",$_GET['status']);
        $updateStatus->execute();
    // PROTOCOL OF MAIL MAILER
            //   **         
            require_once 'mail.php';
            $mail->addAddress('elbossinmobiliaria@gmail.com');
            $mail->Subject = "::CLIENTE NON CONFERMADO";
            $mail->Body = 'Hola '.$items['id'].'has puesto un inmueble fuera del del servicio, Informaciones del inmueble '.$items['name'].' ';
            $mail->setFrom("NoRaply@elbossinmobiliaria.es", "ELBOSSINMOBILIARIA");
            $mail->send();
        header("location:clients.php",true);
    } 
    }
?> 



<?php
////////////////////////////////////////INSERT ITEMS/////////////////////////////////////  
    if(isset($_POST['add'])){
//CALL DATA BASE
require_once'includes/psl-config.php';

    $addItem = $database->prepare("INSERT INTO clients(userid,name,status,fecha,indicator,tel,tipo,propiedad,text ) 
    VALUES(:userid,:name,'no',:fecha,:indicator,:tel,:tipo,:propiedad,:text)");

// INSERT USERID
    $userId = $_POST['userid'];
    $addItem->bindParam("userid",$userId);

// INSERT TEXT
    $textadd = $_POST['name'];
    $addItem->bindParam("name",$textadd);

// INSERT fecha
    $addfecha = date ("Y-m-d");
    $addItem->bindParam("fecha",$addfecha);

// INSERT  indicator
    $addindicator = $_POST['indi'];
    $addItem->bindParam("indicator",$addindicator);
// INSERT  tel
    $addtel = $_POST['phone'];
    $addItem->bindParam("tel",$addtel);

// INSERT tipo
    $addtipo = $_POST['tipo'];
    $addItem->bindParam("tipo",$addtipo);

// INSERT tipo
    $addpropiedad = $_POST['propiedad'];
    $addItem->bindParam("propiedad",$addpropiedad);

// INSERT tipo
    $addtext = $_POST['text'];
    $addItem->bindParam("text",$addtext);

    if($addItem->execute()){
    echo '
            <div class="alert alert-success" role="alert">
                Agregado exitosamente!
            </div>';    
    header("location:./",true);
    }
    }
?>






    <?php  
        /////////////////////////////////////// DISPLAY TEXT ////////////////////////////////////
        // $toDoItems = $database->prepare("SELECT * FROM clients WHERE userid = :id");
        $toDoItems = $database->prepare("SELECT * FROM clients WHERE userid = userid ORDER BY id DESC");
        // session_start(); 
        // $userId = $_SESSION['user']->ID;
        // $toDoItems->bindParam("id",$userId);
        $toDoItems->execute();
    ?>

<!-- -------------------------------------------------LIST TABLE INDEX ---------------------------------------------- -->
<div class="table-responsive">    
    <table class="table text-center table-striped">
        <thead>
            <tr>
                <th style="width: 2%" class="text-center">Ref</th>
                <th style="width: 5%" class="text-center">Usario*</th>
                <th style="width: 9%" class="text-center">Fecha</th>
                <th style="width: 1%" class="text-center" >Nombre*</th>
                <th style="width: 1%" class="text-center" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg></th>
                <th style="width: 6%" class="text-center" >Operacion*</th>
                <!-- <th style="width: 6%" class="text-center">Obserbaciones</th> -->
                <th style="width: 6%" class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                            </svg></th>
                <th style="width: 2%" class="text-center" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
                                <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1v3ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                            </svg></th>
                <th style="width: 2%" class="text-center" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                            </svg></th>
                <th style="width: 1%" class="text-center" ></th> 
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($toDoItems AS $items){ 
            ?>
                <form method="GET">
                            <tr id="tr_<?php echo $items['id']?>">       
                            <th scope="row" class="text-center"><?php echo $items['id'];?></th> 
                            <td scope="row"class="text-center" ><?php echo $items['userid'];?></td>
                            <td scope="row"class="text-center" ><?php echo $items['fecha'];?></td>
                            <td scope="row"class="text-center" ><?php echo $items['name'];?></td>
                            <td scope="row"class="text-center" ><?php echo $items['indicator'].$items['tel'];?></td>
                            <td scope="row"class="text-center" ><?php echo $items['tipo'].' '.$items['propiedad'];?></td>
                            <!-- <td scope="row"class="text-center" ><?php //echo $items['text'];?></td> -->
                            <td scope="row"class="text-center" >
                                <a class="btn btn-outline-secondary" href="<?php echo $hostingUrl; ?>edit_clients.php?edit=<?php echo $items['id'];?>" name="edit_client" value="<?php echo $items['id']; ?>" target="_blank" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                </a>
                            </td>

                        <?php if($items['status'] ==="no"){ ?>
                            <td><input type="hidden" name="statusValue" value="<?php echo $items['status'];?>"/><button class="btn btn-outline-warning" type="submit"name="status" value="<?php echo $items['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                        </svg></button> </td>
                        <?php    }else if($items['status'] ==="yes"){ ?>
                            <td><input type="hidden" name="statusValue" value="<?php echo $items['status']; ?>"/>
                            <button class="btn btn-outline-success" type="submit" name="status" value="<?php echo $items['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z"/>
                                        </svg></button></td>
                        <?php   }   ?>
       
                            <td> 
                                

                            
                            <a  onClick="fctDelete(<?php echo $items['id']; ?>)" class="btn btn-outline-danger"   name="remove" value="<?php echo $items['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path></svg></a>
                    
                    
                    
                        </td>

                            <td>  <a class="btn btn-outline-success" href="https://wa.me/<?php echo $items['indicator'].$items['tel'];?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                        </svg>
                                    </a> 
                            </td>
                    </tr> 
                </form> 
            <?php   }   ?> 
        </tbody>
    </table> 
</div>

<script >
      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success ms-3',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    
     function fctDelete(remove){    
      swalWithBootstrapButtons.fire({
      title: '¿Está seguro de que desea eliminar este cliente?',
      text: "No puedes volver!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Si, eliminarlo!',
      cancelButtonText: 'No, cancela!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        var id="tr_"+remove;
      $.ajax({
        url: "includes/suprission.php",
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
                    alert("Fail")
                    console.log(textStatus, errorThrown);
                  }
        });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelado',
          'Tu archivo imaginario está a salvo :)',
          'Error'
        )
      }
    })
      }
    </script>

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
