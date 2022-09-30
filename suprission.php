<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>

<?php if (login_check($mysqli) == true) : ?>


<?php 
 require_once'includes/psl-config.php';
// -------------------------------------button remouve inmeuble -----------------------
    if(isset($_GET["remove"])){
        $removeProduct = $database->prepare("DELETE FROM inmuebles WHERE id = :id ");
        $getId = $_GET["remove"];
        $removeProduct->bindParam("id",$getId);
        if ($removeProduct->execute()) {
            echo "<script type='text/javascript'>window.top.location='protected_page';</script>"; exit;
        }else {
            echo '<div class="container alert alert-danger" role="alert">
           No se puede eliminar el inmueble !
            </div>';
        }
        
    }
?>


<?php 
        else : ?>
            <div class="alert alert-danger container d-print-none  mt-2" role="alert">
                No tienes Autorisacion para acceder esta pagina!. Porfavor <a href="index.php">login</a>.
            </div>      
        <?php 
        endif; 
        ?>