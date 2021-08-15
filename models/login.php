<?php
    if($_POST){
        session_start();
        $user = $_POST['usuario'];
        $pass = $_POST['password'];
        require_once ("controllers/conexion.php");
        $sql = "SELECT NOM_USU,ID_USU,CLA_USU,ROL_USU,EST_USU FROM usuarios where ID_USU = '$user' AND CLA_USU = '$pass'";
        $result = $conexion->query($sql);
        if($row=$result->fetch_assoc()){
            if($row['EST_USU']!='Y'){
                echo '<script>alert("Usuario Inactivo, por favor ponerse en contacto con los administradores");location.href="index.php";</script>'; 
            }
            else{
                $_SESSION['NOM_USU']=$row['NOM_USU'];
                $_SESSION['ROL_USU']=$row['ROL_USU'];
            }
            header("Location: ingreso.php");
        }else{
            echo '<script>alert("Usuario o Contraseña Incorrectos");location.href="index.php";</script>'; 
        }
    }
?>