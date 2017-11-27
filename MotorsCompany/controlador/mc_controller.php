<?php
	require_once("modelo/mc_model.php");
	class mc_controller{
		
		private $model_p;

		function __construct() {
			$this->model_p = new mc_model();
		}

        function index(){
            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
        }

        function sucursales(){
            $resultado = $this->model_p->DatosSucursal();
            include_once('vistas/header.php');
            include_once('vistas/sucursales.php');
            include_once('vistas/footer.php');
        }

        function nosotros(){
            include_once('vistas/header.php');
            include_once('vistas/nosotros.php');
            include_once('vistas/footer.php');
        }

        function contacto(){
            include_once('vistas/header.php');
            include_once('vistas/contacto.php');
            include_once('vistas/footer.php');
        }

        function ayuda(){
            include_once('vistas/header.php');
            include_once('vistas/ayuda.php');
            include_once('vistas/footer.php');
        }

        function registrar_ayuda() {
            $nombre = $_REQUEST["FRMnombre"];
            $email = $_REQUEST["FRMemail"];
            $asunto = $_REQUEST["FRMasunto"];
            $sucursal = $_REQUEST["FRMsucursal"];
            $comentario = $_REQUEST["FRMcomentario"];
            $aDatos = [$nombre,$email,$asunto,$sucursal,$comentario];
            $resultado = $this->model_p->RegistrarAyuda($aDatos);
            if($resultado!=null) {
                echo "<script> alert('Tu mensaje ha sido enviado'); </script>";
                include_once('vistas/header.php');
                include_once('vistas/ayuda.php');
                include_once('vistas/footer.php');
            }
            else {
                echo "<script> alert('Ha ocurrido un error, inténtalo nuevamente'); </script>";
                include_once('vistas/header.php');
                include_once('vistas/ayuda.php');
                include_once('vistas/footer.php');
            }
        }
    }
?>