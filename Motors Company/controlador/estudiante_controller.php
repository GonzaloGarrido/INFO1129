<?php 
    require_once('modelo/estudiante_model.php');

    class estudiante_controller{

        private $model_e;
        private $model_p;

        function __construct(){
            $this->model_e=new estudiante_model();
        }

        function index(){
            $query =$this->model_e->get();

            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
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
           if ($_REQUEST['nombres']=="") {
                $this->model_e->create($data);
            }
    

    }
}
?>