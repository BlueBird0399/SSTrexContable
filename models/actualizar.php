<?php
include("../controllers/conexion.php");
if(isset($_GET["id"])){

    $id=$_GET["id"];
    $cedula=$_POST["ID_CLI"];
    $nombre=$_POST["NOM_CLI"];
    $apellido=$_POST["APE_CLI"];
    $direccion=$_POST["DIR_CLI"];
    $telefono=$_POST["TEL_CLI"];

    $sqlActualizar="UPDATE clientes SET NOM_CLI='$nombre', APE_CLI='$apellido', DIR_CLI='$direccion', TEL_CLI='$telefono' WHERE ID_CLI = '$id'";
    if($mysqli->query($sqlActualizar)==TRUE){
        echo json_encode("Se actualizo correctamente.");
    } else{
        echo "ERROR".$sqlActualizar."<br>".$mysqli->error;
    }
    $mysqli->close();
}



?>