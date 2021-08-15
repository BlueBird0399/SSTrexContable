<?php
    require_once ("controllers/controller.php");
    require_once ("controllers/conexion.php");
    require_once ("models/model.php");
    $mvc = new mvcController();
    $mvc->template();
?>