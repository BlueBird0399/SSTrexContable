<?php
$rep=$_GET['action'];
if($rep=="vendidosemana"){
    $tit="Más Vendidos Entre Semana";
}
else if($rep=="agotado"){
    $tit="No Disponibles en Bodega";
}
else{
    $tit="Más Vendidos";
}
?>
<table id="dg" title="Productos <?php echo $tit; ?>" class="easyui-datagrid" style="width:800px;height:400px;margin-top: 10px;"
        url="models/cargarreporte.php?rep=<?php echo $rep; ?>"
        toolbar="#toolbar" pagination="true"
        rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="ID_PRO" width="50">ID</th>
            <th field="NOM_PRO" width="50">Nombre</th>
            <th field="MAR_PRO" width="50">Marca</th>
            <th field="CANT" width="50">Cantidad</th>
        </tr>
    </thead>
</table>
<div id="toolbar">
    <a href="models/descargarReporte.php?rep=<?php echo $_GET['action']; ?>" class="easyui-linkbutton" iconCls="icon-large-chart" plain="true"">Descargar</a>
</div>




