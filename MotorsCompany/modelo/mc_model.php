<?php
	class mc_model {
		private $DB;
		
		function __construct() {
            $this->DB=Database::connect();
		}

		function RegistrarAyuda($data) {
			$this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO ayuda(NOMBRE,EMAIL,ASUNTO,SUCURSAL,COMENTARIO) VALUES(?,?,?,?,?)";
            $query = $this->DB->prepare($sql);
            $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4]));
            Database::disconnect();
            if($query) { return "ok"; }
            else { return null; }
		}		
	}
?>