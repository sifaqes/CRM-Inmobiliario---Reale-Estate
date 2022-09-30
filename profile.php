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
<body class="text-center">
    <?php if (login_check($mysqli) == true) : ?>
       <div class="container ">
<!-- -------------------------------------------STAR------------------------------------------------------- -->   

<?php
require_once'nav.php';
require_once'includes/psl-config.php';
?>

<div class="alert alert-primary mt-2" role="alert">
  No se Puede Cambiar la contraseña actualmente !
</div>

<?php
    // PROFIL FONCCTION
$username = htmlentities($_SESSION['username']);
$Profil = $database->prepare("SELECT * FROM members  WHERE username = :_username");
$Profil->bindParam("_username",$username);

if ($Profil->execute()) {
  foreach($Profil AS $data){
    

}
}else {
    echo'<div class="alert alert-danger" role="alert">
   No puede conectar a la base de datos!
  </div>';
}
?>

<?php  
    // UPLOAD FONCCTION
    if(isset($_GET['upload'])){
      $updateCuenta = $database->prepare("UPDATE members SET username = :username, email = :email  WHERE id = :id");
        $updateCuenta->bindParam('id',$_GET['upload']);
        $updateCuenta->bindParam('username',$_GET['username']);
        $updateCuenta->bindParam('email',$_GET['email']);

        if ($updateCuenta->execute()) {
          echo'
          <div class="alert alert-success" role="alert">
            Has Guardado tu profil con exito!
          </div>'; 
          header("location:index.php",true);
        }else { 
        echo'
          <div class="alert alert-danger" role="alert">
            Eror guardar tu profil!
          </div>';
        }
        
        }
?>


<?php  
    // REMOUVE FONCCTION
    if(isset($_GET['remove'])){
        $removeCuenta = $database->prepare("DELETE FROM members WHERE id = :id");
        $removeCuenta->bindParam('id',$_GET['remove']);
        if ($removeCuenta->execute()) {
          echo'
          <div class="alert alert-success" role="alert">
            Has eliminado tu profil !
          </div>'; 
          header("location:index.php",true);
        }else {
          echo'
        <div class="alert alert-danger" role="alert">
          Eror eliminar profil!
        </div>';
      }
    }
        
        
        
?>




<form methos="POST">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mb-2">
    <div class="col">
      <label for="" class=" form-label">User ID </label>
      <input class="form-control border-danger text-center text-sm-center" type="text" name="id" id="" value="<?php echo $data['id']; ?>" disabled>
    </div>

    <div class="col">
      <label for="" class=" form-label">Usario  </label>
      <input class=" form-control border-danger text-center" type="text" name="username" id="" value="<?php echo $data['username']; ?>" disabled>
    </div>

    <div class="col">
      <label for="" class=" form-label">Email </label>
      <input class=" form-control border-danger text-center" type="text" name="email" id="" value="<?php echo $data['email']; ?>">
    </div>

    <div class="col">
      <p for="" class=" form-label">Tu Profile</p>
      <button class="btn btn-outline-danger" type="submit" name="remove" value="<?php echo $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg>
      </button>
      <button class="btn btn-outline-success" type="submit" name="upload" value="<?php echo $data['id']; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
          <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
        </svg>
    </div>

  </div>
</form>

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
