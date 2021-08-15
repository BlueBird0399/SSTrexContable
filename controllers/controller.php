<?php
class mvcController{
    static public $enter=false;
    function login(){
        include "views/index.php";
    }
    function template(){
        include "views/template.php";
    }
    function change(){
        if(isset($_GET['action'])){
            $enlace = $_GET['action'];
        }else{
            $enlace = 'inicio';
        }
        $result =  redireccionEnlaces::redireccion($enlace);
        include $result;
    }

}

?>