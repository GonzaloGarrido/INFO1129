<?php 
    require_once('modelo/ma_model.php');

    class ma_controller{

        private $model_e;

        function __construct(){
            $this->model_e=new ma_model();
        }

        function index(){
            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
        }

        function administrador() {
            include_once('vistas/header.php');
            include_once('vistas/administrador.php');
            include_once('vistas/footer.php');    
        }

        function registro_admin() {
            include_once('vistas/header.php');
            include_once('vistas/registro_admin.php');
            include_once('vistas/footer.php');    
        }

        function nuevo_admin() {
            $usuario = $_REQUEST["FRMusuario"];
            $clave = $_REQUEST["FRMclave"];
            $sucursal = $_REQUEST["FRMsucursal"];
            $email = $_REQUEST["FRMemail"];
            $datos = [$usuario,$clave,$sucursal,$email];
            $this->model_e->NuevoAdmin($datos);
            include_once('vistas/header.php');
            include_once('vistas/registro_admin.php');
            include_once('vistas/footer.php');
        }

        function ingreso_admin() {
            $usuario = $_REQUEST["FRMusuario"];
            $clave = $_REQUEST["FRMclave"];
            $aDatos = [$usuario,$clave];
            $dato = $this->model_e->IngresoAdmin($aDatos);
            if($dato!=null) {
                include_once('vistas/header.php');
                include_once('vistas/index.php');
                include_once('vistas/footer.php');
            }
            else {
                include_once('vistas/header.php');
                include_once('vistas/administrador.php');
                include_once('vistas/footer.php');
            }
        }

        function estudiante(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_e->get_id($_REQUEST['id']);    
            }
            $query=$this->model_e->get();
            include_once('vistas/header.php');
            include_once('vistas/estudiante.php');
            include_once('vistas/footer.php');
        }

        function get_datosE(){

            
            $data['nombres']=$_REQUEST['txt_nombres'];
            $data['apellidopaterno']=$_REQUEST['txt_apellidopaterno'];
            $data['apellidomaterno']=$_REQUEST['txt_apellidomaterno'];
            $data['sexo']=$_REQUEST['txt_sexo'];
            $data['fechanacimiento']=$_REQUEST['txt_fechanacimiento'];
            $data['asignatura']=$_REQUEST['txt_asignatura'];
           //if ($_REQUEST['nombres']=="") {
                $this->model_e->create($data);
            //}

            include_once('vistas/header.php');
            include_once('vistas/estudiante.php');
            include_once('vistas/footer.php');
    }
}
?>