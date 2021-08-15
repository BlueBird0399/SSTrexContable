
<table id="dg" title="Clientes" class="easyui-datagrid" style="width:800px;height:400px;margin-top: 10px;"
        url="models/cargar.php"
        toolbar="#toolbar" pagination="true"
        rownumbers="true" fitColumns="true" singleSelect="true">
    <thead>
        <tr>
            <th field="ID_CLI" width="50">CEDULA</th>
            <th field="NOM_CLI" width="50">NOMBRE</th>
            <th field="APE_CLI" width="50">APELLIDO</th>
            <th field="DIR_CLI" width="50">DIRECCION</th>
            <th field="TEL_CLI" width="50">TELEFONO</th>
        </tr>
    </thead>
</table>
<div id="toolbar">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">NUEVO</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">EDITAR</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">ELIMINAR</a>
</div>

<div id="dlg" class="easyui-dialog" style="width:500px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
    <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
        <h3>INFORMACION</h3>
        <div style="margin-bottom:10px">
            <input name="ID_CLI" class="easyui-textbox" required="true" label="Cédula:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="NOM_CLI" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="APE_CLI" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="DIR_CLI" class="easyui-textbox" label="Direccion:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="TEL_CLI" class="easyui-textbox" label="Telefono:" style="width:100%">
        </div>
    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
</div>


<script type="text/javascript">
    var url;
    function newUser(){
        $('#dlg').dialog('open').dialog('center').dialog('setTitle','Nuevo Cliente');
        $('#fm').form('clear');
        url = 'models/guardar.php';
    }
    function editUser(){
        
        var row = $('#dg').datagrid('getSelected');
        if (row){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Editar Cliente');
            $('#fm').form('load',row);
            url = 'models/actualizar.php?id='+ row.ID_CLI;
        }
    }
    function saveUser(){
        $('#fm').form('submit',{
            url: url,
            iframe: false,
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                var result = eval('('+result+')');
                if (result.errorMsg){
                    $.messager.show({
                        title: 'Error',
                        msg: result.errorMsg
                    });
                } else {
                    $('#dlg').dialog('close');        // close the dialog
                    $('#dg').datagrid('reload');    // reload the user data
                }
            }
        });
    }
    function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            console.log(row.ID_CLI);
            if (row){
                $.messager.confirm('Confirmar','¿Está seuro de eliminar este cliente?',function(r){
                    if (r){
                        $.post('models/eliminar.php',{ID_CLI:row.ID_CLI},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        },'json');
                    }
                });
            }
        }
</script>

