<?php

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "sistema_contable";

    $conexion = mysqli_connect($server_name,$user_name,$password,$db_name);

    $mysqli = new mysqli($server_name,$user_name,$password,$db_name);

    if(!$mysqli){
        die("Ha ocurrido un error: ".mysqli_connect_error());
    }

?>