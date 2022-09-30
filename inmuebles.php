<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Inmueble Gestion de Inmobiliaria Elboss Alicante</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




</head>
<body>
    <?php if (login_check($mysqli) == true) : ?>
        <div class="container">
<!-- -------------------------------------------STAR------------------------------------------------------- -->   
<!-- <ul class="nav justify-content-center"> -->
<?php
require_once'nav.php';
require_once'includes/psl-config.php';






?>



<!------------------------------------------------------- HTML INPUTS ------------------------------------------------- -->

<div class="container">
            <h4 class="mb-3">Añadir nuevo inmueble</h4>
            <!-- novalidate -->
                <form class="needs-validation" method="POST" enctype="multipart/form-data" >
        <!-- ------------------------------------------------------------------------------------------------------- -->
        Operacion <br>
        <!-- ------------------------------------------------------------------------------------------------------- -->
                    <div class="row row-cols-4 g-1">
                        <div class="col">
                        <!-- Usario -->
                            <!-- <label  class="form-label">Usario</label> -->

                            <select class="form-select mt-1 mb-1 " name="admin" value="null" required>
                                <?php 
                                echo '<option value="Admin">'.htmlentities($_SESSION['username']).'</option>';
                                $viewadmins = $database->prepare("SELECT username FROM members WHERE username=username;");
                                if ($viewadmins->execute()) {
                                    foreach($viewadmins as $data){
                                        echo '<option value="Admin">'.$data['username'].'</option>';
                                    }
                                } 
                                ?>
                                
                                <!-- <option value="Admin">Amina*</option>
                                <option value="Admin">Serjio*</option>
                                <option value="Admin">Karim*</option> -->
                            </select>
                        </div>
                        
                        <!-- TIPO -->                 
                        <div class="col">
                            <!-- <label  class="form-label">Usario</label> -->
                            <select class="form-select mt-1 mb-1 " name="tipo" value="null" required>
                            <option value="Oferta">Oferta*</option>
                            <option value="Demanda">Demanda</option>

                            </select>
                        </div>

                        <!-- Operacion -->
                        <div class="col">
                            <!-- <label  class="form-label">Usario</label> -->
                            <select class="form-select mt-1 mb-1 " name="oper" value="null" required>
                            <option value="Vender">Vender*</option>
                            <option value="Comprar">Comprar</option>
                            <option value="Alquiler">Alquiler</option>
                            <option value="Transpaso">Transpaso</option>
                            </select>
                        </div>

                        <!-- Propreidad -->
                        <div class="col">
                            <!-- <label  class="form-label">Usario</label> -->
                            <select class="form-select mt-1 mb-1 " name="prop" value="null" required>
                            <option value="Piso">Piso*</option>
                            <option value="Casa">Casa</option>
                            <option value="Habitacion">Habitacion</option>
                            <option value="Chalet">Chalet</option>
                            <option value="Local">Local</option>
                            <option value="Nave">Nave</option>
                            <option value="Garaje">Garaje</option>
                            </select>
                        </div>
                    </div>
        <!-- ----------------------------------------------------------------------------------------------------- -->
         Dirección
        <!-- ----------------------------------------------------------------------------------------------------- -->
                    <div class="row row-cols-4 g-1 bg-warning">
                        <!-- Calle -->
                        <div class="col-sm-2">
                            <!-- <label  class="form-label">Calle</label> -->
                            <select class="form-select mt-1 mb-1 " name="calle" value="null" placeholder="Calle*"required >
                                <option value="Calle">Calle*</option>
                                <option value="Avd">Avd*</option>
                                <option value="Local">Local*</option>
                                <option value="Pasaje">Pasaje*</option>
                            </select>
                        </div>
                        <!-- direccion -->
                        <div class="col-sm-6">
                            <!-- <label  class="form-label">Direccion</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="direccion" placeholder="Dirección*" required> 
                        </div>


                        <!-- numero -->
                        <div class="col-sm-1">
                            <!-- <label  class="form-label">Numero</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="num" placeholder="num" size="2">   
                        </div>

                        <!-- puerta -->
                        <div class="col-sm-1">
                            <!-- <label  class="form-label">P.Block</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="puerta" placeholder="Der" maxlength="5" size="2" />   
                        </div>
                    </div>


                    <div class="row row-cols-3 g-1 bg-warning">
                        <!-- ZONA -->
                        <div class="col">
                            <!-- <label  class="form-label">ZONA</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="zona" placeholder="Alicante*" required/>
                        </div>
                        <!-- provoncia -->
                        <div class="col">
                            <!-- <label  class="form-label">Comeunidad</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="provoncia" placeholder="Valencia*" required/>
                        </div>
                        <!-- postal -->
                        <div class="col">
                            <!-- <label  class="form-label">C.Postal</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="postal" placeholder="C.Postal"/>
                        </div>
                    </div>
        <!-- ----------------------------------------Liña-------------------------------------------------------------- -->
         Caracteristicas <br>
        <!-- ----------------------------------------Line2------------------------------------------------------------- -->
                    <div class="row row-cols-4 g-1 bg-secondary">
                        <!-- Superficie -->
                        <div class="col">
                            <!-- <label  class="form-label">Superficie</label> -->
                            <input class="form-control mt-1 mb-1" type="text" name="sup" placeholder="78 m2" />
                        </div>
                        <!-- Habitaciones -->
                        <div class="col">
                            <!-- <label  class="form-label">Habitaciones</label> -->
                            <input class="form-control mt-1 mb-1"  type="number" name="hab" placeholder="3" value="3" />
                        </div>
                        <!-- Baño -->
                        <div class="col">
                            <!-- <label  class="form-label">Baño</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="ban" placeholder="Baño" value="1"/>
                        </div>
                        <!-- Jardin -->
                        <div class="col">
                            <!-- <label  class="form-label">Jardin</label> -->
                            <select class="form-select mt-1 mb-1 " name="jar" value="null">
                                    <option value="Sin Jardin">Sin Jardin</option>
                                    <option value="Con Jardin">Con Jardin</option>
                            </select>
                        </div>
                    </div>

                    <div class="row row-cols-4 g-1 bg-secondary">
                        <!-- ascensor -->
                        <div class="col">
                            <!-- <label  class="form-label">Ascensor*</label> -->
                            <select class="form-select mt-1 mb-1 " name="ascensor" value="null"required>
                                <option value="Sin Ascensor">Sin Ascensor*</option>
                                <option value="Con Ascensor">Con Ascensor*</option>

                            </select>
                        </div>
                        <!-- terraza -->
                        <div class="col">
                            <!-- <label  class="form-label">Terraza</label> -->
                            <select class="form-select mt-1 mb-1 " name="terraza" value="null">
                                <option value="Sin Terraza">Sin Terraza</option>
                                <option value="Con Terraza">Con Terraza</option>
    
                            </select>
                        </div>
                        <!-- ano -->
                        <div class="col">
                            <!-- <label  class="form-label">Año</label> -->
                            <input class="form-control mt-1 mb-1"  type="number" name="ano" placeholder="Año"/>
                        </div>                    

                        <!-- estado -->
                        <div class="col">
                            <!-- <label  class="form-label">Estado</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="estado" placeholder="Muebles" />
                            <!-- <select class="form-select mt-1 mb-1 " name="estado"  value="null">
                                <option value="Con muebles">Con muebles</option>
                                <option value="Sin muebles">Sin muebles</option> -->
                        </div>
                    </div>
        <!-- ------------------------------------------------------------------------------------------------------- -->
        Contacto <br>
        <!-- ------------------------------------------------------------------------------------------------------- -->
                

        
                    <div class="row row-cols-4 g-1 bg-danger">

                        <!-- nombre -->
                        <div class="col">
                            <!-- <label  class="form-label">Dño</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="nombre" placeholder="Sr.Nombre"/>
                        </div>
                        <!-- telefono -->
                        <div class="col">
                            <!-- <label  class="form-label">Contacto</label> -->
                            <input class="form-control mt-1 mb-1"  type="number" name="telefono" placeholder="WhatsApp*" required/>
                        </div>
                        <!-- P.Compras -->
                        <div class="col">
                            <!-- <label  class="form-label">P.Compras</label> -->
                            <input class="form-control mt-1 mb-1"  type="number" name="precio" placeholder="350.000*" required/>
                        </div>
                        <!-- Precio de Venta -->
                        <div class="col">
                            <!-- <label  class="form-label">P.Venta</label> -->
                            <input class="form-control mt-1 mb-1"  type="number" name="pvp"  placeholder="P.Venta*" required/>
                        </div>
                        <!-- Precio de Venta -->
                         <div class="col">
                            <!-- <label  class="form-label">P.Venta</label> -->
                            <input class="form-control mt-1 mb-1"  type="text" name="ref_cadastral"  placeholder="N.Cadastral" />
                        </div>
                    </div>
        <!-- ------------------------------------------------------------------------------------------------------- -->
                    <hr class="my-1">
        <!-- ------------------------------------------------------------------------------------------------------- -->
                    

                    <div class=" row row-cols-4 g-1">

                    <!-- Button trigger modal -->
                    <button name="discagar" type="button" class="w-100 btn-lg btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" required>
                    Añadir fotos*
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Añadir hasta 7 fotos required*</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           
                        


                        <div class="row row-cols-4 g-1">
                        <div class="col-4">
                            <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                            <input class="form-control mt-1 mb-1" type="file" name="file" required>
                        </div>

                        

                        <div class="col-4">
                            <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                            <input class="form-control mt-1 mb-1" type="file" name="file1" >
                        </div>

                        <div class="col-4">
                            <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                            <input class="form-control mt-1 mb-1" type="file" name="file2" >
                        </div>

                        <div class="col-4">
                            <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                            <input class="form-control mt-1 mb-1" type="file" name="file3" >
                        </div>
                            <div class="col-4">
                                <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                                <input class="form-control mt-1 mb-1" type="file" name="file4" >
                            </div>

                            <div class="col-4">
                                <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                                <input class="form-control mt-1 mb-1" type="file" name="file5" >
                            </div>
                            <div class="col-4">
                                <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                                <input class="form-control mt-1 mb-1" type="file" name="file6" >
                            </div>
                    </div>


                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" >Atras</button> -->
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Discargar</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>

<!-- ------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------------------------- -->
              
                        <!-- discripcion -->
                        <div class="col">
                            <textarea   name="discripcion"  class="form-control mt-1 mb-1" placeholder="Discripcion*" rows="12" required></textarea>
                        </div>
                        <!-- Button submit -->
                        <button  type="submit" class="w-100 btn btn-success btn-lg" name="upload"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0z"/></svg><small>&nbsp; 
                            Añadir Inmueble</small> 
                        </button>
        </form>
    </div>








<?php
//////////////////////////////////////////////////////ADD INMUEBLE /////////////////////////////////////////////////////////////////////////////////////
        if(isset($_POST['upload'])){

            $fileName = $_FILES['file']["name"];
            $fileName1 = $_FILES['file1']["name"];
            $fileName2 = $_FILES['file2']["name"];
            $fileName3 = $_FILES['file3']["name"];
            $fileName4 = $_FILES['file4']["name"];
            $fileName5 = $_FILES['file5']["name"];
            $fileName6 = $_FILES['file6']["name"];
            // echo $fileName1; echo $fileName2;
            $fileType = $_FILES['file']["type"];
            // // COPIAR EN BASE DE DATOS DB DIRECTLY  حفض الصور في قاعدة البيانات 
            $fileData = file_get_contents( $_FILES['file']["tmp_name"]);

            
            // SAVE IMGS EN DATABASE
            $file = $_FILES['file']["tmp_name"];
            $file1 = $_FILES['file1']["tmp_name"];
            $file2 = $_FILES['file2']["tmp_name"];
            $file3 = $_FILES['file3']["tmp_name"];
            $file4 = $_FILES['file4']["tmp_name"];
            $file5 = $_FILES['file5']["tmp_name"];
            $file6 = $_FILES['file6']["tmp_name"];
            // echo $file1; echo $file2;
            move_uploaded_file($file,$hostingUrlimage."/".$fileName);
            move_uploaded_file($file1,$hostingUrlimage."/".$fileName1);
            move_uploaded_file($file2,$hostingUrlimage."/".$fileName2);
            move_uploaded_file($file3,$hostingUrlimage."/".$fileName3);
            move_uploaded_file($file4,$hostingUrlimage."/".$fileName4);
            move_uploaded_file($file5,$hostingUrlimage."/".$fileName5);
            move_uploaded_file($file6,$hostingUrlimage."/".$fileName6);
            $position = $hostingUrlimage."/".$fileName;
            $position1 = $hostingUrlimage."/".$fileName1;
            $position2 = $hostingUrlimage."/".$fileName2;
            $position3 = $hostingUrlimage."/".$fileName3;
            $position4 = $hostingUrlimage."/".$fileName4;
            $position5 = $hostingUrlimage."/".$fileName5;
            $position6 = $hostingUrlimage."/".$fileName6;

            // /////////////////////////////////INPUTS VARIABLES///////////////////////////////////////////////////////////////////
            $admin = $_POST['admin'];
            $tipo = $_POST['tipo'];
            $prop = $_POST['prop'];
            $oper = $_POST['oper']; 
            $calle = $_POST['calle'];
            $direccion = $_POST['direccion'];
            $num = $_POST['num'];
            $puerta = $_POST['puerta'];
            $zona = $_POST['zona']; 
            $provoncia = $_POST['provoncia'];
            $postal = $_POST['postal'];
            $sup = $_POST['sup'].$SymbolSub;
            $hab = $_POST['hab'];
            $ban = $_POST['ban'];
            $jar = $_POST['jar'];
            $ascensor = $_POST['ascensor'];
            $terraza = $_POST['terraza'];
            $ano = $_POST['ano'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $precio = $_POST['precio'];
            $fecha = date ("Y-m-d");
            $estado = $_POST['estado'];
            $discripcion = $_POST['discripcion'];
            $pvp = $_POST['pvp'];
            $ref_cadastral = $_POST['ref_cadastral'];



            // /////////////////////////////////CALL DB///////////////////////////////////////////////////////////////////
            $addFile = $database->prepare("INSERT INTO inmuebles(file,fileName,fileType,position,position1,position2,position3,position4,position5,position6,admin,tipo,prop,oper,calle,direccion,num,puerta,zona,provoncia,postal,sup,hab,ban,jar,ascensor,terraza,ano,nombre,telefono,precio,fecha,estado,discripcion,pvp,ref_cadastral) 
            VALUES(:file ,:fileName,:fileType,:position,:position1,:position2,:position3,:position4,:position5,:position6,:admin,:tipo,:prop,:oper,:calle,:direccion,:num,:puerta,:zona,:provoncia,:postal,:sup,:hab,:ban,:jar,:ascensor,:terraza,:ano,:nombre,:telefono,:precio,:fecha,:estado,:discripcion,:pvp,:ref_cadastral)");
            // /////////////////////////////////IMAGE 1///////////////////////////////////////////////////////////////////
            $addFile->bindParam("file",$fileData);
            $addFile->bindParam("fileName",$fileName);
            $addFile->bindParam("fileType",$fileType);
            $addFile->bindParam("position",$position);
            $addFile->bindParam("position1",$position1);
            $addFile->bindParam("position2",$position2);
            $addFile->bindParam("position3",$position3);
            $addFile->bindParam("position4",$position4);
            $addFile->bindParam("position5",$position5);
            $addFile->bindParam("position6",$position6);
            // /////////////////////////////////IMAGE 2///////////////////////////////////////////////////////////////////
            // /////////////////////////////////IMAGE 3///////////////////////////////////////////////////////////////////
            // /////////////////////////////////IMAGE 4///////////////////////////////////////////////////////////////////
            // /////////////////////////////////IMAGE 5///////////////////////////////////////////////////////////////////
            // /////////////////////////////////IMAGE 6///////////////////////////////////////////////////////////////////



            // /////////////////////////////////TEXT 1////////////////////////////////////////////////////////////////////
            $addFile->bindParam("admin",$admin);
            $addFile->bindParam("tipo",$tipo);
            $addFile->bindParam("prop",$prop);
            $addFile->bindParam("oper",$oper);
            $addFile->bindParam("calle",$calle);
            $addFile->bindParam("direccion",$direccion);
            $addFile->bindParam("num",$num);
            $addFile->bindParam("puerta",$puerta);
            $addFile->bindParam("zona",$zona);
            $addFile->bindParam("provoncia",$provoncia); 
            $addFile->bindParam("postal",$postal);
            $addFile->bindParam("sup",$sup);
            $addFile->bindParam("hab",$hab);
            $addFile->bindParam("ban",$ban);
            $addFile->bindParam("jar",$jar);
            $addFile->bindParam("ascensor",$ascensor);
            $addFile->bindParam("terraza",$terraza);
            $addFile->bindParam("ano",$ano);
            $addFile->bindParam("nombre",$nombre);
            $addFile->bindParam("telefono",$telefono);
            $addFile->bindParam("precio",$precio);
            $addFile->bindParam("fecha",$fecha);   
            $addFile->bindParam("estado",$estado);
            $addFile->bindParam("discripcion",$discripcion);
            $addFile->bindParam("pvp",$pvp);
            $addFile->bindParam("ref_cadastral",$ref_cadastral);
            



// //////////////////EXECUTE DB///////////////////////////////////////////////////////
            if($addFile->execute()){
            echo '
                <div class="container mt-2"> 
                    <div class="alert alert-success" role="alert">
                        Datos Guardado!

                    </div>
                </div>
                ';
                echo "<script type='text/javascript'>window.top.location='inmuebles.php';</script>"; exit;
            }else{
            echo '
                <div class="container mt-2"> 
                    <div class="alert alert-danger" role="alert">
                        No Puede Guardar los Datos!
                    </div>
                </div> 
                ';
            }
        }
?>




<nav>
    <p></p>
</nav>







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





















