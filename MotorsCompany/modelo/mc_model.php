<?php
	class mc_model {
		private $DB;
		
		function __construct() {
            $this->DB=Database::connect();
		}
	}
?>