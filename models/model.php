<?php

    class redireccionEnlaces{

        static function redireccion($enlace){
            if($enlace=='gestionclientes' || $enlace=='inventario'){
                $respuesta = 'views/modules/'.$enlace.'.php';
            }else if($enlace=='masvendido' || $enlace=='vendidosemana' || $enlace=='agotado'){
                $respuesta = 'views/modules/reportes.php';
            }
            else{
                $respuesta = 'views/modules/inicio.php';
            }
            return $respuesta;
        }
    }

?>