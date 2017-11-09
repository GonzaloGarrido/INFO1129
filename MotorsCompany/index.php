<?php
    require_once('bd/conexion.php');
    require_once('controlador/mc_controller.php');

    $controller= new mc_controller();
    
    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
            $controller->index();
        }
    }else{
        $controller->index();
    }
?>