<?php
include("ValidarIdentificacion.php");
$cedula=$_POST["ID_CLI"];
$validarCed=new ValidarIdentificacion();
if($validarCed->validarCedula($cedula)){
    include("../controllers/conexion.php");
    $nombre=$_POST["NOM_CLI"];
    $apellido=$_POST["APE_CLI"];
    $direccion=$_POST["DIR_CLI"];
    $telefono=$_POST["TEL_CLI"];
    if($direccion==""){
        $direccion="Sin Dirección";
    }
    if($telefono==""){
        $telefono="0000000000";
    }
    $sqlInsert="INSERT INTO clientes(ID_CLI,NOM_CLI,APE_CLI,DIR_CLI,TEL_CLI)VALUES('$cedula','$nombre','$apellido','$direccion','$telefono')";
    if($mysqli->query($sqlInsert)==TRUE){
        echo json_encode("Se guardo correctamente.");
    } else{
        echo "ERROR".$sqlInsert."<br>".$mysqli->error;
    }
    $mysqli->close();
}
else{
    $res['errorMsg']="Ingrese una Cédula Valida";
    echo json_encode($res);
}

?>