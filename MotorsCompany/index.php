<?php
    require_once('bd/conexion.php');
    require_once('controlador/ma_controller.php');
    require_once('controlador/mc_controller.php');

    $controller = new ma_controller();
    $controller1 = new mc_controller();

    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }
        elseif(method_exists($controller1, $metodo)){
            $controller1->$metodo();
        }
        else{
            $controller->index();
        }
    }else{
        $controller->index();
    }
?>