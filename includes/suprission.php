<?php  
require_once'psl-config.php';

echo $_GET["data"];
    // REMOUVE FONCCTION
    if(isset($_GET["data"])){
        $id = $_GET['data'];
        $removeItem = $database->prepare("DELETE FROM clients WHERE id = :id");
        $removeItem->bindParam('id',$id);
        $removeItem->execute();
        echo $removeItem->execute();
        // header("location:clients.php",true);

        }else {
            echo'else';
        }
?>