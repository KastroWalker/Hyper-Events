<?php 
	class Conexao {
		private $con;
		private $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		function __construct() {
			try {
				$this->con = new PDO("mysql:hostname=localhost; dbname=HyperEvents", "root", "", $this->opcoes);
			} catch (PDOException $e) {
				echo "Não foi possivel conectar ".$e;
			}
		}

		function Connect(){
			return $this->con;
		}
	}
?>