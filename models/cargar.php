<?php
include("../controllers/conexion.php");
$sqlSelect="SELECT * FROM clientes";
$respuesta=$conexion->query($sqlSelect);
$result=array();
if($respuesta->num_rows>0){
    while($row = $respuesta->fetch_assoc()){
        array_push($result, $row);
    }
} else{
    $result = "No hay clientes";
}
echo json_encode($result);
?>