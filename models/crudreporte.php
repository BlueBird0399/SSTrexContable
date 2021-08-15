<?php 
include("../controllers/conexion.php");
$rep=$_GET['rep'];
if($rep=="vendidosemana"){
    $tit="Más Vendidos Entre Semana";
    $sql="SELECT 
    productos.ID_PRO, 
    productos.NOM_PRO,
    productos.MAR_PRO,
    SUM(detalle_factura.CAN_PRO_VEN_FAC) AS CANT
    FROM 
    productos productos INNER JOIN detalle_factura detalle_factura ON productos.ID_PRO = detalle_factura.ID_PRO_FAC 
      INNER JOIN facturas facturas ON detalle_factura.ID_FAC_PER = facturas.ID_FAC 
    WHERE productos.ID_PRO= detalle_factura.ID_PRO_FAC 
    AND facturas.FEC_FAC BETWEEN DATE_SUB(NOW(),INTERVAL 7 DAY) AND CURDATE() 
    GROUP BY detalle_factura.ID_PRO_FAC 
    ORDER BY (SUM(detalle_factura.CAN_PRO_VEN_FAC)) DESC";
}
else if($rep=="agotado"){
    $sql="SELECT P.ID_PRO,P.NOM_PRO,P.MAR_PRO,SUM(D.CAN_PRO_BOD)AS CANT  FROM productos P,detalle_bodegas D WHERE P.ID_PRO=D.ID_PRO_BOD AND P.EST_PRO='Y' GROUP BY P.ID_PRO HAVING CANT=0 ORDER BY CANT DESC";
    $tit="No Disponibles en Bodega";
}
else{
    $sql="SELECT P.ID_PRO,P.NOM_PRO,P.MAR_PRO,SUM(D.CAN_PRO_VEN_FAC)AS CANT  FROM productos P,detalle_factura D WHERE P.ID_PRO=D.ID_PRO_FAC GROUP BY P.ID_PRO ORDER BY CANT DESC";
    $tit="Más Vendidos";
}
?>