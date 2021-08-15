    
    <table id="dg" title="My Users" class="easyui-datagrid" style="width:700px;height:250px"
            url="get_users.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="ID_PRO" width="50">CODIGO</th>
                <th field="NOM_PRO" width="50">DESCRIPCION</th>
                <th field="MAR_PRO" width="50">MARCA</th>
                <th field="PRE_UNI_PRO" width="50">PRECIO UNITARIO</th>
                <th field="EST_PRO" width="50">ESTADO</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">INGRESAR</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">EDITAR</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">ELIMINAR</a>
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3>INFORMACION</h3>
            <div style="margin-bottom:10px">
                <input name="ID_PRO" class="easyui-textbox" required="true" label="Código:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="NOM_PRO" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="MAR_PRO" class="easyui-textbox" required="true" label="Marca:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="PRE_UNI_PRO" class="easyui-textbox" required="true" validType="Precio Unitario:" label="Email:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="EST_PRO" class="easyui-textbox" required="true" label="Estado:" style="width:100%">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>
    <script type="text/javascript">
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
            $('#fm').form('clear');
            url = 'save_user.php';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
                $('#fm').form('load',row);
                url = 'update_user.php?id='+row.id;
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
            if (row){
                $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
                    if (r){
                        $.post('destroy_user.php',{id:row.id},function(result){
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
