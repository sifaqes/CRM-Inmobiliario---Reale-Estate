<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ref&nbsp;<?php echo $_GET['view'];?>&nbsp;Gestion de Inmobiliaria Elboss Alicante</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gestion de Inmobiliaria Elboss Alicante">
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
    <meta property="og:image" content="imgs\logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="720">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://crm.elbossinmobiliaria.com">
    <meta property="fb:app_id" content="xxxxxxxxxxxxxxxxxxxx">

    <!-- Bootstrap On line -->
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
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

</head>
<body class="text-center">
    <?php if (login_check($mysqli) == true) : ?>
       <div class="container py-3">
<!-- -------------------------------------------STAR------------------------------------------------------- -->   

<?php
require_once'nav.php';
require_once'includes/psl-config.php';
?>



<?php
if(isset( $_GET['view'])){
$getPeticiones = $database->prepare("SELECT * FROM inmuebles  WHERE id = :id");
$getPeticiones->bindParam("id",$_GET['view']);


if ($getPeticiones->execute()) {
    foreach($getPeticiones AS $data){
        $pos =$data['position'];
        $pos1 =$data['position1'];
        $pos2 =$data['position2'];
        $pos3 =$data['position3'];
        $pos4 =$data['position4'];
        $pos5 =$data['position5'];
        $pos6 =$data['position6'];

        if ($pos6 === $hostingUrlimage."/") {
            $pos6 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $pos6 = $data['position6'];
        }

        if ($pos5 === $hostingUrlimage."/") {
            $pos5 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $pos5 = $data['position5'];
        }

        if ($pos4 === $hostingUrlimage."/") {
            $pos4 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $pos4 = $data['position4'];
        }

        if ($pos3 === $hostingUrlimage."/") {
            $pos3 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $pos3 = $data['position3'];
        }
        if ($pos2 === $hostingUrlimage."/") {
            $pos2 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $pos2 = $data['position2'];
        }
        if ($pos1 === $hostingUrlimage."/") {
            $pos1 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $pos1 = $data['position1'];
        }
        if ($pos === $hostingUrlimage."/") {
            $pos = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $pos = $data['position'];
        }
        echo'



















<main class="nav">             
        
    <div class="container">
        <h4 class="mb-3">Referancia&nbsp;'.$data['id'].'&nbsp;&nbsp;&nbsp;'.$data['tipo'].' '.$data['prop'].'&nbsp;para&nbsp;'.$data['oper'].'&nbsp;en&nbsp;'.$data['calle'].'&nbsp;'.$data['direccion'].'.</h4>
        <hr class="my-1">    
            <div class="card-body">
                <h4 class="card-title">Precio : '.$data['pvp'].'&nbsp;'.$SymbolEuro.'</h4>
                <p class="card-text ">

                '.$data['discripcion'].'

                </p>
                <p class="card-text"><small class="text-muted">En Alicante '.date ("Y-m-d").'</small></p>
                </div>
            </div>
            
          
            <div class="row g-0 bg-light border">
                <div class="col-6">
                    <div class="p-2  "><b>Tipo Operación : </b>'.$data['oper'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Tipo de Propiedad : </b>'.$data['prop'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Tipo de via :</b>'.$data['calle'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Direccion :</b>'.$data['direccion'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Numero :</b>'.$data['num'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Numero :</b>'.$data['puerta'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Zona : </b>'.$data['zona'].'&nbsp;'.$data['provoncia'].'</div>
                </div>
                <div class="col-6">
                     <div class="p-2  "><b>Superficie Útil y Construida : </b>'.$data['sup'].',&nbsp;'.$data['sup'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Habitaciones : </b>'.$data['hab'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Baños : </b>'.$data['ban'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Ascensor : </b>'.$data['ascensor'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Jardin : </b>'.$data['jar'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Terraza : </b>'.$data['terraza'].'</div>
                </div>
                
                <div class="col-6">
                    <div class="p-2  "><b>Año de construcción : </b>'.$data['ano'].'</div>
                </div>
                
                <div class="col-6">
                    <div class="p-2  "><b>Muebles  : </b>'.$data['estado'].'</div>
                </div>
                
                <div class="col-6">
                    <div class="p-2  "><b>Referencia catastral  : </b>'.$data['ref_cadastral'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Dño de la Propreidad : </b>'.$data['nombre'].'</div>
                </div>
                <div class="col-6">
                    <div class="p-2  "><b>Telefono de la Propreidad : </b>'.$data['telefono'].'</div>
                </div>              
                <div class="col-6">
                    <div class="p-2"><b>Consumo de Energía : </b>/</div>
                </div>                        
                
                <div class="col-6">
                    <div class="p-2"><b>Consumo Kg CO2/m2 Año : </b>/</div>
                </div>
                
                <div class="col-6">
                    <div class="p-2  "><b>Fecha : </b>'.$data['fecha'].'</div>
                </div>
            </div>




            <div class=" d-print-none container">
            <form method="POST">  
            <h1 class="h3 mb-3 fw-normal">Pasar una Oferta de inmeuble Ref :&nbsp;'. $data['id'].'</h1>
    
            <div class="form-floating">
                <input type="text" class="form-control"  name="name" placeholder="name@example.com">
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating mt-1">
                <input type="text" class="form-control" name="telefono" placeholder="Password" oninput="this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\..*)\./g, "$1");" >
                <label for="floatingPassword">Telefono</label>
            </div>
            <div class="form-floating mt-1">
                <input type="email" class="form-control" name="email" placeholder="Password">
                <label for="floatingPassword">Email</label>
            </div>
            <div class="form-floating mt-1">
                <input type="text" class="form-control" name="oferta" placeholder="Password" oninput="this.value = this.value.replace(/[^0-9.]/g, "").replace(/(\..*)\./g, "$1");">
                <label for="floatingPassword">Precio de oferta</label>
            </div>
    
            <div class="checkbox mb-3 mt-3">
            <label>
                
                <div class="col-12 container">
                    <div class="p-2">                 
                        <input type="checkbox" value="acepto" name="acepto" required>&nbsp;He leído y acepto <a href="php/Politica_de_Cookies.php" target="_blank">Política de Cookies</a>&nbsp;y&nbsp;<a href="php/Proteccion_de_Datos.php" target="_blank">Protección de Datos</a> . 
                    </div>
                </div>
                <div class="col-12 container">
                    <div class="p-2">                 
                        <input type="checkbox" value="1" name="buzzon">&nbsp;Quiero recibir información sobre productos y ofertas que me puedan beneficiar y mi&nbsp;<a href="php/privacidad.php"  target="_blank">privacidad</a>.
                    </div>
                </div>            
                
            </label>
            </div>
            <button class="w-100 btn btn-lg btn-outline-primary" type="submit" name="EnviarOferta" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                        </svg> &nbsp;Enviar la oferta</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
            </form>
        </div>






        <div >
            <div class="col">
                <div class="border bg-light"><a href="'.$pos.'" target="_blank"><img src="'.$pos.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
            </div>

            <div class="col">
                <div class="border bg-light"><a href="'.$pos1.'" target="_blank"><img src="'.$pos1.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
            </div>

            <div class="col">
                <div class="border bg-light"><a href="'.$pos2.'" target="_blank"><img src="'.$pos2.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
            </div>  


            <div class="col">
                <div class="border bg-light"><a href="'.$pos3.'" target="_blank"><img src="'.$pos3.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
            </div>  


            <div class="col">
                <div class="border bg-light"><a href="'.$pos4.'" target="_blank"><img src="'.$pos4.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
            </div>  


            <div class="col">
                <div class="border bg-light"><a href="'.$pos5.'" target="_blank"><img src="'.$pos5.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
            </div>
            <div class="col">
                <div class="border bg-light"><a href="'.$pos6.'" target="_blank"><img src="'.$pos6.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
            </div>
        </div>
       





          <table class="table container">
          <tbody>
          <tr>
            <td >Energia
                                                
            </td>
            <td class="tac t1 c1" width="100" style="font-size:12px;padding:5px;">Consumo de Energía<br> kWh/m<sup>2</sup> Año</td>
            <td class="tac t1 c1" width="100" style="font-size:12px;padding:5px;">Consumo Kg CO2/m2 Año</td>
          </tr>

          <tr>
            <td>
            Certificado Null
            </td>
            
            <td>
              /   
            </td>

            <td>
              /  
            </td>
            </tr>
        </tbody></table>
        <iframe src="https://www.google.com/maps/embed?pb=!3m2!1ses!2ses!4v1649614341097!5m2!1ses!2ses!6m8!1m7!1szVWp8kZkKdbT7ioustcY5Q!2m2!1d38.35229991449429!2d-0.486198916196484!3f80.13530390956072!4f1.4213984149941865!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>         
</main>    ';

            
           
}

    }else {
            echo '<div class="alert alert-danger container py-3" role="alert">
            Error de comunicacion de base de datos!
    </div>';
    }
}else {
    echo '

    <div class="alert alert-danger container py-3" role="alert">
        Error de cargar de inmeuble!, Porfavor vuelve
        <a href="inmuebles.php" class="" type="submit" >aquí</a> 
     </div>';
}
?>



    <?php 
        //--------------------------------------------------- ENVIAR OFERTA PHP-------------------------------------
        if(isset($_POST['EnviarOferta'])){
            if (isset($_POST['acepto'])) {
                $ref = $data['id'];
                $name = $_POST['name'];
                $tel = $_POST['telefono'];
                $email = $_POST['email'];
                $oferta = $_POST['oferta'];
                $buzzon = $_POST['buzzon'];
                
                $EnviarOferta = $database->prepare("INSERT INTO peticion(ref,name,tel,email,oferta,buzzon) 
                VALUES(:ref,:name,:tel,:email,:oferta,:buzzon)");
            
                $EnviarOferta->bindParam("ref",$ref);
                $EnviarOferta->bindParam("name",$name);
                $EnviarOferta->bindParam("tel",$tel);
                $EnviarOferta->bindParam("email",$email);
                $EnviarOferta->bindParam("oferta",$oferta);
                $EnviarOferta->bindParam("buzzon",$buzzon);
        
                // //////////////////EXECUTE DB///////////////////////////////////////////////////////
                if($EnviarOferta->execute()){
                    echo '
                        <div class="container d-print-none"> 
                            <div class="alert alert-success" role="alert">
                            Has hecho una oferta, Reciberas una respuesta en proximo 24h!
                            </div>
                        </div>
                        ';
                        
                        if (isset($_POST['buzzon'])) {

                                echo '
                                <div class="container d-print-none"> 
                                    <div class="alert alert-success" role="alert">
                                    Has registrado en nuestro buzon de offertas!
                                    </div>
                                </div>';

                                $id_Peticion = $_POST['email'];
                                $Unsubscribe_Peticion = $database->prepare("SELECT * FROM peticion WHERE email like :id ");
                                $Unsubscribe_Peticion->bindParam("id",$id_Peticion); 
                                $Unsubscribe_Peticion->execute();
                                    foreach($Unsubscribe_Peticion AS $peticion){ 
                                       
                                        
                                         //    SCRIPT EMAIL/////////////////////////////////////////////////////////////////////////////////////////////////
                                         // PROTOCOL OF MAIL MAILER
                                        //   **         
                                        require_once 'mail.php';
                                        $mail->addAddress($_POST['email']);
                                        // $mail->addAddress('elbossinmobiliaria@gmail.com');
                                        $mail->Subject = "Nuevo oferta del inmueble Ref : ".$data['id']." - Elboss Inmobiliaria Alicante";
                                        $mail->Body = '
                                        
                                        Has registrado en nuestro buzon de offertas!
                                        <img src="'.$hostingUrl.'/imgs/logo.png" alt="">
                                        <p><small disable>Si quieres dejar de recibir estos emails, puedes darte de baja o cambiar tu suscripción <a href="'.$hostingUrl.'php/Unsubscribe.php?darse_de_baje='.$peticion['id'].'">pulsando aquí</a>
                                            Calle del Alcalde Alfonso de Rojas 3, local 2 Alicante</small></p>
                                        ';
                                        $mail->setFrom("NoRaply@elbossinmobiliaria.es", "ELBOSSINMOBILIARIA");
                                        $mail->send();
                                        header("location:view_inmeubles.php?view=".$data['id']."",true);
                                        // exit();
                                    }  }
            
                    }else{
                    echo '
                        <div class="container d-print-none"> 
                            <div class="alert alert-danger" role="alert">
                                No Puede Pasar una oferta!
                            </div>
                        </div> 
                        ';
                    }
            }else {
                echo '
                <div class="container d-print-none"> 
                    <div class="alert alert-danger" role="alert">
                    Por Favor leer y acepta la Protección de Datos y nuestra privacidad!
                    </div>
                </div> 
                ';
            }

        }
        ?>

<?php
// FOOTER 
 require_once'footer.php';
 ?>



<!-- -------------------------------------------END------------------------------------------------------- -->
    </div>
        <?php 
        // FOOTER 
        require_once'footer.php';
        else : ?>

            <a href="protected_page.php"><img class="mb-3 mt-3" src="imgs/logo.png" alt="logo" ></a>  

            <div class="alert alert-danger container d-print-none  mt-2" role="alert">
                No tienes Autorisacion para acceder esta pagina!. Porfavor <a href="index.php">login</a>.
            </div>


            <?php
                if(isset( $_GET['view'])){
                $getPeticiones = $database->prepare("SELECT * FROM inmuebles  WHERE id = :id");
                $getPeticiones->bindParam("id",$_GET['view']);


                if ($getPeticiones->execute()) {
                    foreach($getPeticiones AS $data){
 
                        // si no hay imagens 
                        $pos =$data['position'];
                        $pos1 =$data['position1'];
                        $pos2 =$data['position2'];
                        $pos3 =$data['position3'];
                        $pos4 =$data['position4'];
                        $pos5 =$data['position5'];
                        $pos6 =$data['position6'];
                
                        if ($pos6 === $hostingUrlimage."/") {
                            $pos6 = $hostingUrl."imgs/".$ImageDefault;
                        }else {
                            $pos6 = $data['position6'];
                        }
                
                        if ($pos5 === $hostingUrlimage."/") {
                            $pos5 = $hostingUrl."imgs/".$ImageDefault;
                        }else {
                            $pos5 = $data['position5'];
                        }
                
                        if ($pos4 === $hostingUrlimage."/") {
                            $pos4 = $hostingUrl."imgs/".$ImageDefault;
                        }else {
                            $pos4 = $data['position4'];
                        }
                
                        if ($pos3 === $hostingUrlimage."/") {
                            $pos3 = $hostingUrl."imgs/".$ImageDefault;
                        }else {
                            $pos3 = $data['position3'];
                        }
                        if ($pos2 === $hostingUrlimage."/") {
                            $pos2 = $hostingUrl."imgs/".$ImageDefault;
                        }else {
                            $pos2 = $data['position2'];
                        }
                        if ($pos1 === $hostingUrlimage."/") {
                            $pos1 = $hostingUrl."imgs/".$ImageDefault;
                        }else {
                            $pos1 = $data['position1'];
                        }
                        if ($pos === $hostingUrlimage."/") {
                            $pos = $hostingUrl."imgs/".$ImageDefault;
                        }else {
                            $pos = $data['position'];
                        }
                        echo'
                <main class="nav">             
                        
                    <div class="container">
                        
                        <h4 class="mb-3">Referancia&nbsp;'.$data['id'].'&nbsp;&nbsp;&nbsp;'.$data['tipo'].' '.$data['prop'].'&nbsp;para&nbsp;'.$data['oper'].'&nbsp;en&nbsp;'.$data['calle'].'&nbsp;'.$data['direccion'].'.</h4>
                        <hr class="my-1">    
                        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                <div class="col">
                                <div class="border bg-light"><a href="'.$pos.'" target="_blank"><img src="'.$pos.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
                                </div>

                                <div class="col">
                                <div class="border bg-light"><a href="'.$pos1.'" target="_blank"><img src="'.$pos1.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
                                </div>

                                <div class="col">
                                <div class="border bg-light"><a href="'.$pos2.'" target="_blank"><img src="'.$pos2.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
                                </div>  


                                <div class="col">
                                <div class="border bg-light"><a href="'.$pos3.'" target="_blank"><img src="'.$pos3.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
                                </div>  


                                <div class="col">
                                <div class="border bg-light"><a href="'.$pos4.'" target="_blank"><img src="'.$pos4.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
                                </div>  


                                <div class="col">
                                <div class="border bg-light"><a href="'.$pos5.'" target="_blank"><img src="'.$pos5.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
                                </div>
                                <div class="col">
                                    <div class="border bg-light"><a href="'.$pos6.'" target="_blank"><img src="'.$pos6.'" class="img-thumbnail" alt="'.$data['fileName'].'"></a></div>
                                </div>
                            </div>
                                <hr class="my-1"> '; ?>





    <main class=" d-print-none">
        <form method="POST">  
        <h1 class="h3 mb-3 fw-normal">Pasar una Oferta de inmeuble Ref :&nbsp;<?php echo $data['id']; ?> </h1>

        <div class="form-floating">
            <input type="text" class="form-control"  name="name" placeholder="name@example.com">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mt-1">
            <input type="text" class="form-control" name="telefono" placeholder="Password" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            <label for="floatingPassword">Telefono</label>
        </div>
        <div class="form-floating mt-1">
            <input type="email" class="form-control" name="email" placeholder="Password">
            <label for="floatingPassword">Email</label>
        </div>
        <div class="form-floating mt-1">
            <input type="text" class="form-control" name="oferta" placeholder="Password" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
            <label for="floatingPassword">Precio de oferta</label>
        </div>

        <div class="checkbox mb-3 mt-3">
        <label>
            
            <div class="col-12 container">
                <div class="p-2">                 
                    <input type="checkbox" value="acepto" name="acepto" required>&nbsp;He leído y acepto <a href="php/Politica_de_Cookies.php" target="_blank">Política de Cookies</a>&nbsp;y&nbsp;<a href="php/Proteccion_de_Datos.php" target="_blank">Protección de Datos</a> . 
                </div>
            </div>
            <div class="col-12 container">
                <div class="p-2">                 
                    <input type="checkbox" value="1" name="buzzon">&nbsp;Quiero recibir información sobre productos y ofertas que me puedan beneficiar y mi&nbsp;<a href="php/privacidad.php"  target="_blank">privacidad</a>.
                </div>
            </div>            
            
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-outline-primary" type="submit" name="EnviarOferta" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                    </svg> &nbsp;Enviar la oferta</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
        </form>
    </main>



<?php
                           echo' <div class="row g-0 bg-light border">
                                <div class="col-6">
                                    <div class="p-2  "><b>Tipo Operación : </b>'.$data['oper'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Tipo de Propiedad : </b>'.$data['prop'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Direccion :</b>&nbsp;'.$data['direccion'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Zona : </b>'.$data['zona'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Superficie Útil y Construida : </b>'.$data['sup'].',&nbsp;'.$data['sup'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Habitaciones : </b>'.$data['hab'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Baños : </b>'.$data['ban'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Ascensor : </b>'.$data['ascensor'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Jardin : </b>'.$data['jar'].'</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2  "><b>Terraza : </b>'.$data['terraza'].'</div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="p-2  "><b>Año de construcción : </b>'.$data['ano'].'</div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="p-2  "><b>Muebles  : </b>'.$data['estado'].'</div>
                                </div>                        
                                
                                <div class="col-6">
                                    <div class="p-2  "><b>Fecha : </b>'.$data['fecha'].'</div>
                                </div>
                                
                                                        
                                
                                <div class="col-6">
                                    <div class="p-2"><b>Consumo de Energía : </b>/</div>
                                </div>                        
                                
                                <div class="col-6">
                                    <div class="p-2"><b>Consumo Kg CO2/m2 Año : </b>/</div>
                                </div>
                            </div>
                    
                            <hr class="my-2">

                            <iframe src="https://www.google.com/maps/embed?pb=!3m2!1ses!2ses!4v1649614341097!5m2!1ses!2ses!6m8!1m7!1szVWp8kZkKdbT7ioustcY5Q!2m2!1d38.35229991449429!2d-0.486198916196484!3f80.13530390956072!4f1.4213984149941865!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            

                            <div class="card-body">
                            <h4 class="card-title">Precio : '.$data['pvp'].'&nbsp;'.$SymbolEuro.'</h4>
                            <p class="card-text ">

                            '.$data['discripcion'].'

                            </p>
                            <p class="card-text"><small class="text-muted">En Alicante '.date ("Y-m-d").'</small></p>
                            </div>
                        </div>   
                    </div>         
                </main>    ';

?>











<?php 
        //--------------------------------------------------- ENVIAR OFERTA PHP-------------------------------------
        if(isset($_POST['EnviarOferta'])){
            if (isset($_POST['acepto'])) {
                $ref = $data['id'];
                $name = $_POST['name'];
                $tel = $_POST['telefono'];
                $email = $_POST['email'];
                $oferta = $_POST['oferta'];
                $buzzon = $_POST['buzzon'];
                
                $EnviarOferta = $database->prepare("INSERT INTO peticion(ref,name,tel,email,oferta,buzzon) 
                VALUES(:ref,:name,:tel,:email,:oferta,:buzzon)");
            
                $EnviarOferta->bindParam("ref",$ref);
                $EnviarOferta->bindParam("name",$name);
                $EnviarOferta->bindParam("tel",$tel);
                $EnviarOferta->bindParam("email",$email);
                $EnviarOferta->bindParam("oferta",$oferta);
                $EnviarOferta->bindParam("buzzon",$buzzon);
        
                // //////////////////EXECUTE DB///////////////////////////////////////////////////////
                if($EnviarOferta->execute()){
                    echo '
                        <div class="container d-print-none"> 
                            <div class="alert alert-success" role="alert">
                            Has hecho una oferta, Reciberas una respuesta en proximo 24h!
                            </div>
                        </div>
                        ';
                        
                        if (isset($_POST['buzzon'])) {

                                echo '
                                <div class="container d-print-none"> 
                                    <div class="alert alert-success" role="alert">
                                    Has registrado en nuestro buzon de offertas!
                                    </div>
                                </div>';

                                $id_Peticion = $_POST['email'];
                                $Unsubscribe_Peticion = $database->prepare("SELECT * FROM peticion WHERE email like :id ");
                                $Unsubscribe_Peticion->bindParam("id",$id_Peticion); 
                                $Unsubscribe_Peticion->execute();
                                    foreach($Unsubscribe_Peticion AS $peticion){ 
                                       
                                        
                                         //    SCRIPT EMAIL/////////////////////////////////////////////////////////////////////////////////////////////////
                                         // PROTOCOL OF MAIL MAILER
                                        //   **         
                                        require_once 'mail.php';
                                        $mail->addAddress($_POST['email']);
                                        // $mail->addAddress('elbossinmobiliaria@gmail.com');
                                        $mail->Subject = "Nuevo oferta del inmueble Ref : ".$data['id']." - Elboss Inmobiliaria Alicante";
                                        $mail->Body = '
                                        
                                        Has registrado en nuestro buzon de offertas!
                                        <img src="'.$hostingUrl.'/imgs/logo.png" alt="">
                                        <p><small disable>Si quieres dejar de recibir estos emails, puedes darte de baja o cambiar tu suscripción <a href="'.$hostingUrl.'php/Unsubscribe.php?darse_de_baje='.$peticion['id'].'">pulsando aquí</a>
                                            Calle del Alcalde Alfonso de Rojas 3, local 2 Alicante</small></p>
                                        ';
                                        $mail->setFrom("NoRaply@elbossinmobiliaria.es", "ELBOSSINMOBILIARIA");
                                        $mail->send();
                                        header("location:view_inmeubles.php?view=".$data['id']."",true);
                                        // exit();
                                    }  }
            
                    }else{
                    echo '
                        <div class="container d-print-none"> 
                            <div class="alert alert-danger" role="alert">
                                No Puede Pasar una oferta!
                            </div>
                        </div> 
                        ';
                    }
            }else {
                echo '
                <div class="container d-print-none"> 
                    <div class="alert alert-danger" role="alert">
                    Por Favor leer y acepta la Protección de Datos y nuestra privacidad!
                    </div>
                </div> 
                ';
            }

        }
        ?>


                            
<?php                        
                }

                    }else {
                            echo '<div class="alert alert-danger container py-3" role="alert">
                            Error de comunicacion de base de datos!
                    </div>';
                    }
                }else {
                    echo '

                    <div class="alert alert-danger container py-3" role="alert">
                        Error de cargar de inmeuble!, Porfavor vuelve
                        <a href="inmuebles.php" class="" type="submit" >aquí</a> 
                    </div>';
                }
            ?>
                            



        <?php 
// FOOTER 
 require_once'footer.php';
        endif; 
        ?>
        
    </body>
</html>



    </body>
</html>
