    
<table id="dg" title="Inventario" class="easyui-datagrid" style="width:700px;height:250px"
        url="models/cargarInventario.php"
        toolbar="#toolbar" pagination="true"
        rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="ID_PRO" width="50">CODIGO</th>
            <th field="NOM_PRO" width="50">DESCRIPCION</th>
            <th field="MAR_PRO" width="50">MARCA</th>
            <th field="PRE_UNI_PRO" width="50">PRECIO UNITARIO</th>
            <th field="CAN_PRO_BOD" width="50">CANTIDAD</th>
            <th field="ID_BOD_PER" width="50">CATEGORIA</th>
        </tr>
    </thead>
</table>
