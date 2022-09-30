<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar inmueble Ref&nbsp;<?php echo $_GET['edit'];?>&nbsp;Gestion de Inmobiliaria Elboss Alicante</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


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
<link href="pricing.css" rel="stylesheet">
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















<?php


if(isset($_GET['edit'])){
    $getProduct = $database->prepare("SELECT * FROM inmuebles  WHERE id = :id");
    $getProduct->bindParam("id",$_GET['edit']);

if ($getProduct->execute()) {
    foreach($getProduct AS $data){

        if ($data['position'] === $hostingUrlimage."/") {
            $img = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $img = $data['position'];
        }

        if ($data['position1'] === $hostingUrlimage."/") {
            $img1 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $img1 = $data['position1'];
        }

        if ($data['position2'] === $hostingUrlimage."/") {
            $img2 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $img2 = $data['position2'];
        }

        if ($data['position3'] === $hostingUrlimage."/") {
            $img3 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $img3 = $data['position3'];
        }

        if ($data['position4'] === $hostingUrlimage."/") {
            $img4 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $img4 = $data['position4'];
        }

        if ($data['position5'] === $hostingUrlimage."/") {
            $img5 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $img5 = $data['position5'];
        }

        if ($data['position6'] === $hostingUrlimage."/") {
            $img6 = $hostingUrl."imgs/".$ImageDefault;
        }else {
            $img6 = $data['position6'];
        }

        

    echo '
<!------------------------------------------------------- HTML INPUTS ------------------------------------------------- -->
            
            <div class="container">
                    <h4 class="mb-3">Ref_Inmueble'.$data['id'].'</h4>
                    <!-- novalidate -->
                        <form class="needs-validation" method="POST" enctype="multipart/form-data" >
                            <div class="row g-3">
                                <div class="col-sm-3">
                                <!-- Usario -->
                                    <!-- <label  class="form-label">Usario</label> -->
                                    <select class="form-select mt-1 mb-1 " name="admin" value="'.$data['admin'].'" required>
                                        <option value="'.$data['admin'].'" >'.$data['admin'].'</option>
                                        <option value="siphax">Amina*</option>
                                        <option value="amina">Serjio*</option>
                                        <option value="sergio">Karim*</option>
                                        <option value="karim">siphax*</option>
                                    </select>
                                </div>
                                
                                <!-- TIPO -->                 
                                <div class="col-sm-3">
                                    <!-- <label  class="form-label">Usario</label> -->
                                    <select class="form-select mt-1 mb-1 " name="tipo" value="'.$data['tipo'].'" required>
                                    <option value="'.$data['tipo'].'" >'.$data['tipo'].'</option>                        
                                    <option value="Oferta">Oferta*</option>
                                    <option value="Demanda">Demanda</option>
            
                                    </select>
                                </div>
            
                                <!-- Operacion -->
                                <div class="col-sm-3">
                                    <!-- <label  class="form-label">Usario</label> -->
                                    <select class="form-select mt-1 mb-1 " name="oper" value="'.$data['oper'].'" required>
                                    <option value="'.$data['oper'].'">'.$data['oper'].'</option> 
                                    <option value="Vender">Vender*</option>
                                    <option value="Comprar">Comprar</option>
                                    <option value="Alquiler">Alquiler</option>
                                    <option value="Se Transpasa">Se Transpasa</option>
                                    </select>
                                </div>
            
                                <!-- Propreidad -->
                                <div class="col-sm-3">
                                    <!-- <label  class="form-label">Usario</label> -->
                                    <select class="form-select mt-1 mb-1 " name="prop" value="'.$data['prop'].'" required>
                                    <option value="'.$data['prop'].'">'.$data['prop'].'</option>
                                    <option value="Piso">Piso*</option>
                                    <option value="Piso">Piso*</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Habitacion">Habitacion</option>
                                    <option value="Chalet">Chalet</option>
                                    <option value="Local">Local</option>
                                    <option value="Nave">Nave</option>
                                    <option value="Garaje">Garaje</option>
                                    </select>
                                </div>
            <!-- ----------------------------------------------------------------------------------------------------- -->
                                <hr class="my-1">
            <!-- ----------------------------------------------------------------------------------------------------- -->
                                <!-- Calle -->
                                <div class="col-sm-2">
                                    <!-- <label  class="form-label">Calle</label> -->
                                    <select class="form-select mt-1 mb-1 " name="calle" value="null"required >
                                        <option value="'.$data['calle'].'">'.$data['calle'].'</option>
                                        <option value="Calle">Calle*</option>
                                        <option value="Avd">Avd*</option>
                                        <option value="Local">Local*</option>
                                    </select>
                                </div>
                                <!-- direccion -->
                                <div class="col-sm-8">
                                    <!-- <label  class="form-label">Direccion</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="direccion" value="'.$data['direccion'].'" required> 
                                </div>
                                <!-- numero -->
                                <div class="col-sm-2">
                                    <!-- <label  class="form-label">Numero</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="num" value="'.$data['num'].'" size="2">   
                                </div>
            <!-- ----------------------------------------Line1------------------------------------------------------------- -->
            
                                <!-- puerta -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">P.Block</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="puerta" value="'.$data['puerta'].'" maxlength="5" size="2" placeholder="P.Block" />   
                                </div>
            
            
            
                                <!-- ZONA -->
                                <div class="col-3">
                                    <!-- <label  class="form-label">ZONA</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="zona" value="'.$data['zona'].'" placeholder="ZONA" required/>
                                </div>
                                <!-- provoncia -->
                                <div class="col-4">
                                    <!-- <label  class="form-label">Comeunidad</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="provoncia" value="'.$data['provoncia'].'" placeholder="Provoncia" required/>
                                </div>
                                <!-- postal -->
                                <div class="col-3">
                                    <!-- <label  class="form-label">C.Postal</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="postal" value="'.$data['postal'].'"  placeholder="C.Postal" />
                                </div>
            <!-- ----------------------------------------Liña-------------------------------------------------------------- -->
                                <hr class="my-1">
            <!-- ----------------------------------------Line2------------------------------------------------------------- -->
            
                                <!-- Superficie -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Superficie</label> -->
                                    <input class="form-control mt-1 mb-1" type="text" name="sup"  value="'.$data['sup'].'"  />
                                </div>
                                <!-- Habitaciones -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Habitaciones</label> -->
                                    <input class="form-control mt-1 mb-1"  type="number" name="hab" value="'.$data['hab'].'"  />
                                </div>
                                <!-- Baño -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Baño</label> -->
                                    <input class="form-control mt-1 mb-1"  type="number" name="ban" value="'.$data['ban'].'"/>
                                </div>
                                <!-- Jardin -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Jardin</label> -->
                                    <select class="form-select mt-1 mb-1 " name="jar" value="null">
                                            <option value="'.$data['jar'].'">'.$data['jar'].'</option>
                                            <option value="Sin Jardin">Sin Jardin</option>
                                            <option value="Con Jardin">Con Jardin</option>
                                    </select>
                                </div>
                                <!-- ascensor -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Ascensor*</label> -->
                                    <select class="form-select mt-1 mb-1 " name="ascensor" value="null"required>
                                        <option value="'.$data['ascensor'].'">'.$data['ascensor'].'</option>
                                        <option value="Sin Ascensor">Sin Ascensor*</option>
                                        <option value="Con Ascensor">Con Ascensor*</option>
            
                                    </select>
                                </div>
                                <!-- terraza -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Terraza</label> -->
                                    <select class="form-select mt-1 mb-1 " name="terraza" value="null">
                                        <option value="'.$data['terraza'].'">'.$data['terraza'].'</option>
                                        <option value="Sin Terraza">Sin Terraza</option>
                                        <option value="Con Terraza">Con Terraza</option>
            
                                    </select>
                                </div>
        <!-- ------------------------------------LINE 3---------------------------------------------------- -->
                                <hr class="my-1">
                                <!-- ano -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Año</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="ano" value="'.$data['ano'].'" placeholder="Año de Con.." />
                                </div>
            
            
                                <!-- nombre -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Dño</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="nombre" value="'.$data['nombre'].'" placeholder="Nombre del Dño" />
                                </div>
                                <!-- telefono -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Contacto</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="telefono" value="'.$data['telefono'].'" placeholder="Tel" required/>
                                </div>
                                <!-- P.Compras -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">P.Compras</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="precio" value="'.$data['precio'].'" placeholder="PVT" />
                                </div>
            
                                <!-- estado -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">Estado</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="estado" value="'.$data['estado'].'" placeholder="Meubles" />
                                </div>                    
                                <!-- Precio de Venta -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">P.Venta</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="pvp"  value="'.$data['pvp'].'" placeholder="PVP"  />
                                </div>
            
                                
                                <!-- fecha -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">fecha</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="fecha"  value="'.$data['fecha'].'" placeholder="fecha"  />
                                </div>
            
                                
                                <!-- ref_cadastral -->
                                <div class="col-2">
                                    <!-- <label  class="form-label">fecha</label> -->
                                    <input class="form-control mt-1 mb-1"  type="text" name="ref_cadastral"  value="'.$data['ref_cadastral'].'" placeholder="Ref cadastral"  />
                                </div>


                                <hr class="my-1">

                                <div class="col-12">


                                    <!-- <label for="formFile" class="form-label">10 fOTOS Maximum</label> -->
                                    <input class="form-control mt-1 mb-1" type="file" name="file" required>
                                    
                                    </div>
            
                            
                                <!-- discripcion -->
                                <div class="col-sm-12">
                                    <textarea   name="discripcion"  class="form-control mt-1 mb-1" value="'.$data['discripcion'].'" rows="4" required>'.$data['discripcion'].'</textarea>
                                </div>
            
                                <button  type="submit" class="w-100 btn btn-success btn-lg"  value="'.$data['id'].'" name="update">Cambiar Y Guardar</button>
                                
                                <hr class="my-4">
            
                              <div class="img-thumbnail border-danger ">
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <a class="card" href="view_inmeubles.php?view='.$data['id'].'"  target="_blank">
                                            <img style="max-height: 300px;" src="'.$img.'" class="img-fluid rounded-start" alt="'.$data['fileName'].'">
                                        </a>                                 
                                    </div>
                                  </div>
                              </div>


                              <div class="img-thumbnail border-danger ">
                                <div class="row ">
                                    <div class="col-md-6 ">
                                        <a class="card" href="view_inmeubles.php?view='.$data['id'].'"  target="_blank">
                                            <img style="max-height: 300px;" src="'.$img1.'" class="img-fluid rounded-start" alt="'.$data['fileName'].'">
                                        </a>                                 
                                    </div>
                                    <div class="col-md-6 ">
                                        <a class="card" href="view_inmeubles.php?view='.$data['id'].'"  target="_blank">
                                            <img style="max-height: 300px;" src="'.$img2.'" class="img-fluid rounded-start" alt="'.$data['fileName'].'">
                                        </a>                                 
                                    </div>
                                  </div>
                              </div>


                            <div class="img-thumbnail border-danger ">
                              <div class="row ">
                                  <div class="col-md-6 ">
                                      <a class="card" href="'.$img3.'"  target="_blank">
                                          <img style="max-height: 300px;" src="'.$img3.'" class="img-fluid rounded-start" alt="'.$data['fileName'].'">
                                      </a>                                 
                                  </div>
                                  <div class="col-md-6 ">
                                      <a class="card" href="'.$img4.'"  target="_blank">
                                          <img style="max-height: 300px;" src="'.$img4.'" class="img-fluid rounded-start" alt="'.$data['fileName'].'">
                                      </a>                                 
                                  </div>
                                </div>
                            </div>


                            <div class="img-thumbnail border-danger ">
                              <div class="row ">
                                  <div class="col-md-6 ">
                                      <a class="card" href="view_inmeubles.php?view='.$data['id'].'"  target="_blank">
                                          <img style="max-height: 300px;" src="'.$img5.'" class="img-fluid rounded-start" alt="'.$data['fileName'].'">
                                      </a>                                 
                                  </div>
                                  <div class="col-md-6 ">
                                      <a class="card" href="view_inmeubles.php?view='.$data['id'].'"  target="_blank">
                                          <img style="max-height: 300px;" src="'.$img6.'" class="img-fluid rounded-start" alt="'.$data['fileName'].'">
                                      </a>                                 
                                  </div>
                                </div>
                            </div> 
                    </div>
                </form>
            </div>
            
            ';
        }

        if(isset($_POST['update'])){
            
            $discripcion = $_POST['discripcion'];

            $fileName = $_FILES['file']["name"];
            $file = $_FILES['file']["tmp_name"];
            move_uploaded_file($file,$hostingUrlimage."/".$fileName);
            $position = $hostingUrlimage."/".$fileName;
            
            $update = $database->prepare("UPDATE inmuebles 
            SET position = :position , admin = :admin, tipo = :tipo , pvp = :pvp , discripcion = :discripcion, prop = :prop , oper = :oper, calle = :calle , direccion = :direccion
            , num = :num , puerta = :puerta , zona = :zona , provoncia = :provoncia , postal = :postal , hab = :hab , ban = :ban
            , jar = :jar , ascensor = :ascensor , terraza = :terraza , ano = :ano , nombre = :nombre , telefono = :telefono , precio = :precio , fecha = :fecha
            , estado = :estado , ref_cadastral = :ref_cadastral WHERE id = :id");

            $update->bindParam("id",$_POST['update']);
            $update->bindParam("position",$position);
            $update->bindParam("admin",$_POST['admin']);
            $update->bindParam("tipo",$_POST['tipo']);
            $update->bindParam("pvp",$_POST['pvp']);
            $update->bindParam("discripcion",$discripcion);
            $update->bindParam("prop",$_POST['prop']);  
            $update->bindParam("oper",$_POST['oper']);  
            $update->bindParam("calle",$_POST['calle']);
            $update->bindParam("direccion",$_POST['direccion']);
            $update->bindParam("num",$_POST['num']);
            $update->bindParam("puerta",$_POST['puerta']);
            $update->bindParam("zona",$_POST['zona']);
            $update->bindParam("provoncia",$_POST['provoncia']);
            $update->bindParam("postal",$_POST['postal']);       
            //   var_dump($update);
            $update->bindParam("hab",$_POST['hab']);
            $update->bindParam("ban",$_POST['ban']);
            $update->bindParam("jar",$_POST['jar']);
            $update->bindParam("ascensor",$_POST['ascensor']);
            $update->bindParam("terraza",$_POST['terraza']);
            $update->bindParam("ano",$_POST['ano']);
            $update->bindParam("nombre",$_POST['nombre']);
            $update->bindParam("telefono",$_POST['telefono']);
            $update->bindParam("precio",$_POST['precio']);
            $update->bindParam("fecha",$_POST['fecha']);
            $update->bindParam("estado",$_POST['estado']);
            // $update->bindParam("discripcion",$_POST['discripcion']); -------------
            // $update->bindParam("pvp",$_POST['pvp']); -------------
            $update->bindParam("ref_cadastral",$_POST['ref_cadastral']);  
        
            if ($update->execute()) {
                echo'
                </div>
                    <div class="alert alert-success container py-3 mt-2" role="alert">
                    Duatos Guardado!
                    </div>
                ';
                header("Location: edit_inmeubles.php?edit=" . $_POST['update']);
            }else {
                echo'
                </div>
                    <div class="alert alert-danger container py-3 mt-2" role="alert">
                    No puede guardar los datos!
                    </div>
                ';
            }  
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








<!-- -------------------------------------------END------------------------------------------------------- -->
</div>
        <?php 
        // FOOTER 
        // require_once'footer.php';
        else : ?>
            <div class="alert alert-danger container py-3" role="alert">
                No tienes Autorisacion para acceder esta pagina!. Porfavor <a href="index.php">login</a>.
            </div>      
        <?php 
        endif; 
        ?>
    </body>
</html>
    </body>
</html>


