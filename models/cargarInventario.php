<?php
include("../controllers/conexion.php");
$sqlSelect="SELECT P.ID_PRO, P.NOM_PRO, P.MAR_PRO,P.EST_PRO,D.CAN_PRO_BOD, B.NOM_BOD FROM PRODUCTOS P, DETALLE_BODEGAS D, BODEGAS B WHERE P.ID_PRO = D.ID_PRO_BOD && D.ID_BOD_PER = B.ID_BOD";
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