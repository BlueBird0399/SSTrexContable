<?php
    include '../controllers/conexion.php';
    if(isset($_POST)){
        if($_POST){
            $ced = $_POST["ID_CLI"];
            $sql = "DELETE FROM clientes WHERE ID_CLI='$ced'";
            if($mysqli->query($sql)){

                $res['success'] = true;
                echo json_encode($res);
            }else {
                echo "ERROR: ".$sql."<br>".$mysqli->error;
            }
        }
    }
        
?>