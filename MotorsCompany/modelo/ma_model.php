<?php
    
    class ma_model{
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

        function CodSucursal($sucursal) {
            $sqlCod = "SELECT UBICACION FROM sucursales WHERE UBICACION=$sucursal";
            $nfilas = $this->DB->query($sqlCod);
            return $nfilas;
        }
        /* SECCIÓN DE ADMINISTRADORES */
        function NuevoAdmin($datos) {
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO administradores(USUARIO,CLAVE,SUCURSAL,EMAIL) VALUES(?,?,?,?)";
            $query = $this->DB->prepare($sql);
            $query->execute(array($datos[0],$datos[1],$datos[2],$datos[3]));
            Database::disconnect();
        }

        function IngresoAdmin($datos) {
            $usuario = $datos[0];
            $clave = $datos[1];
            $sql = "SELECT COD_ADMIN FROM administradores WHERE USUARIO='$usuario' AND CLAVE='$clave'";
            $query = $this->DB->query($sql);
            $row = $query->rowCount();
            if($row > 0) {
                $aDatos = [$usuario,$clave];
                return $aDatos;
            }
            /*if($query->fetchColumn()>0) {
                foreach ($query as $row) {
                    $cod = $row["COD_ADMIN"];
                    echo "<script> alert($cod) </script>"; 
                }
            }*/ 
            else { 
                return null;
            } 
        }
    }

?>

