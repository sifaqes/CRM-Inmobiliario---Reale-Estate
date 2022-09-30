<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cliente&nbsp;<?php echo $_GET['edit']; ?>&nbsp;Gestion de Inmobiliaria Elboss Alicante</title>
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
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

</head>
<body>
    <?php if (login_check($mysqli) == true) : ?>
       <div class="container ">
<!-- -------------------------------------------STAR------------------------------------------------------- -->   

<?php
require_once'nav.php';
require_once'includes/psl-config.php';
?>


<script>
    function myFunction1() {
        /* Get the text field */
        var copyText = document.getElementById("myInput1");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
                }

                function myFunction2() {
        /* Get the text field */
        var copyText = document.getElementById("myInput2");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
                                                            
                }

                function myFunction3() {
        /* Get the text field */
        var copyText = document.getElementById("myInput3");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
    }
                function myFunction4() {
        /* Get the text field */
        var copyText = document.getElementById("myInput4");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);
    }                                               
</script>


<?php
if(isset($_GET['edit'])){
$getProduct = $database->prepare("SELECT * FROM clients  WHERE id = :id");
$getProduct->bindParam("id",$_GET['edit']);


if ($getProduct->execute()) {

    echo'<form method="POST">
        <div class="container ">
        <div class="row g-2">
        <h4 class="mb-3">Ref'.$_GET['edit'].'</h4>
    ';

    foreach($getProduct AS $data){

    echo'
            <div class="col">
                <select class=" form-select"  type="text" name="userId"  >
                    <option value="'.$data['userid'].'">'.$data['userid'].'</option>
                    <option value="siphax">Amina*</option>
                    <option value="amina">Serjio*</option>
                    <option value="sergio">Karim*</option>
                    <option value="karim">siphax*</option>
                </select>
            </div>
            <div class="col">
            <input class="form-control" type="text" name="name" value="'.$data['name'].'" >
            </div>
            <div class="col">
            <select class=" form-select" name="status">
                <option value="'.$data['status'].'">'.$data['status'].' </option>
                <option value="si">Conferme</option>
                <option value="no">En expediante</option>
            </select>
            </div>
            <div class="col">
            <input class="form-control" type="date" name="fecha" value="'.$data['fecha'].'" >
            </div>
        </div>
        <div class="row g-2 mt-2">
            <div class="col">
            <select class="form-select" type="text" name="indicator" value="'.$data['indicator'].'"  >
            <option value="+34">España (+34)</option>
            <option value="+213">Argelia (+213)</option>
            <option value="+33">Francia (+33)</option>
            <option value="+212">Morueco (+212)</option>
            <option value="+44">United Kingdom (+44)</option>
            <option value="+7">Russia (+7)</option>
            <option value="+57">Colombia (+57)</option>
            <option value="+47">Noruega (+47)</option>
            <option value="+41">Suecia (+41)</option>
            </select>


            </div>
            <div class="col">
            <input class="form-control" type="text" name="tel" value="'.$data['tel'].'"  maxlength="12" >
            </div>
            
            <div class="col ">
            <select class=" form-select" name="tipo">
                <option value="'.$data['tipo'].'">'.$data['tipo'].'</option>
                <option value="Alquiler">Alquiler</option>
                <option value="Comprar">Comprar</option>
                <option value="Vender">Vender</option>
                <option value="Colaborador">Colaborador</option>
                <option value="Inquilino">Inquilino/a</option>
            </select>
            </div>
            <div class="col">                    
            <select class="form-select " name="propiedad" required>
            <option value="'.$data['propiedad'].'">'.$data['propiedad'].'</option>
                <option value="Piso">Piso</option>
                <option value="Casa">Casa</option>
                <option value="Habitacion">Habitacion</option>
                <option value="Chalet">Chalet</option>
                <option value="Local">Local</option>
                <option value="Nave">Nave</option>
            <option value="Garaje">Garaje</option>
        </select>
            </div>
        </div>
        <div class="row g-2 mt-2">   
            <div class="col">
            <textarea  class="form-control d-print-none" name="text" id="" cols="30" rows="8">'.$data['text'].'</textarea>
            </div>
            
                <button class="btn btn-outline-success mt-2 d-print-none" type="submit" name="update" value="'.$data['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg></button>

                <div class="container mt-3">
           

            <ul class="list-group">
              <li class="list-group-item" >
                    Informaciones Sobre el cliente 
              </li>
              <li class="list-group-item">
              <div class="p-3  bg-light">
                  Administrador de inmobiliaria : '.$data['userid'].' 
              </div>
              </li>
              <li class="list-group-item">
              <div class="p-3  bg-light">Nombre y Appelledo : '.$data['name'].'
                            <a class=" btn btn-danger d-print-none" type="button"  onclick="myFunction1()" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                </svg>                                              
                            </a>
                        <p hidden><input type="text" class="form-control" id="myInput1" value="'.$data['name'].'"></p>     
                    </div>
              </li>
              <li class="list-group-item">
              <div class="p-3  bg-light">Telefono : '.$data['indicator'].''.$data['tel'].'
                  <a class=" btn btn-danger d-print-none " type="button"  onclick="myFunction2()" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                          <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                          <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                      </svg>                                              
                  </a>
              <p hidden><input type="text" class="form-control" id="myInput2" value="'.$data['indicator'].''.$data['tel'].'"></p>     
                  </div>
              </li>
              <li class="list-group-item">
              <div class="p-3  bg-light">Nesesita&nbsp;:&nbsp;'.$data['tipo'].'&nbsp;'.$data['propiedad'].'
              <a class=" btn btn-danger d-print-none" type="button"  onclick="myFunction3()" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                  </svg>                                              
              </a>
          <p hidden><input type="text" class="form-control" id="myInput3" value="'.$data['tipo'].''.$data['propiedad'].'"></p>    
              </div>
              </li>
              <li class="list-group-item">
              <div class="p-3  bg-light">'.$data['text'].'
                    <a class=" btn btn-danger d-print-none" type="button"  onclick="myFunction4()" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                        </svg>                                              
                    </a>
                <p hidden><input type="text" class="form-control" id="myInput4" value="'.$data['text'].'"></p> 
                    </div>
              </li>
            </ul>

 </div>
    ';

        }
echo '    </div>
</div></form>';
        if(isset($_POST['update'])){

            $id = $_POST['update'];
            $user = $_POST['userId'];
            $name = $_POST['name'];  
            $status = $_POST['status']; 
            $fecha = $_POST['fecha']; 
            $indicator = $_POST['indicator']; 
            $tel = $_POST['tel']; 
            $tipo = $_POST['tipo']; 
            $propiedad = $_POST['propiedad']; 
            $text = $_POST['text']; 

            $update = $database->prepare("UPDATE clients 
            SET userid = :userID, name = :name , status = :status , fecha = :fecha ,  indicator = :indicator ,
            tel = :tel , tipo = :tipo , propiedad = :propiedad , text = :text WHERE id = :id");

        //    var_dump($update);

           $update->bindParam("id",$id );
           $update->bindParam("userID",$user);
           $update->bindParam("name",$name);
           $update->bindParam("status",$status);
           $update->bindParam("fecha",$fecha );
           $update->bindParam("indicator",$indicator);
           $update->bindParam("tel",$tel);
           $update->bindParam("tipo",$tipo);
           $update->bindParam("propiedad",$propiedad);
           $update->bindParam("text",$text);
        
            if ($update->execute()) {
                echo'
                </div>
                    <div class="alert alert-success container mt-3 " role="alert">
                    Duatos Guardado!
                    </div>
                ';
                
                echo "<script type='text/javascript'>window.top.location='edit_clients.php?edit=".$_POST['update']."';</script>"; exit;
            }else {
                echo'
                </div>
                    <div class="alert alert-danger container mt-3" role="alert">
                    No puede guardar los datos!
                    </div>
                header("Location: edit_clients.php.php?edit='.$_POST['update'].'");
                ';
            }  
        }
    
?>







        


<?php
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
