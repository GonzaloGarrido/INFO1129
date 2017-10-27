<?php
    
    class estudiante_model{
        private $DB;
        private $estudiantes;

        function __construct(){
            $this->DB=Database::connect();
        }

        function get(){
            $sql= 'SELECT * FROM estudiante ORDER BY id DESC';
            $fila=$this->DB->query($sql);
            $this->estudiantes=$fila;
            return  $this->estudiantes;
        }

        function create($data){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO estudiante(nombres,apellidopaterno,apellidomaterno,sexo,fechanacimiento,asignatura)VALUES (?,?,?,?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($data['nombres'],$data['apellidopaterno'],$data['apellidomaterno'],$data['sexo'],$data['fechanacimiento'],$data['asignatura']));
            Database::disconnect(); 
}
}

?>

