<?php
include("crudreporte.php");
$respuesta=$conexion->query($sql);
$result=array();
if($respuesta->num_rows>0){
    while($row = $respuesta->fetch_assoc()){
        array_push($result, $row);
    }
} else{
    $result = "No se pudo realizar el reporte";
}
echo json_encode($result);
?>