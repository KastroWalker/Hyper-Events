<?php 
	class MinistranteModel {
		private $ministrante_id;
		private $nome;
		private $descricao;
		private $email;

		function __construct(){
			$this->ministrante_id = 0;
			$this->nome = "";
			$this->descricao = "";
			$this->email = "";
		}

		public function getMinistranteId(){
		    return $this->ministrante_id;
		}
		public function setMinistranteId($ministrante_id){
		    $this->ministrante_id = $ministrante_id;
		}

		public function getNome(){
		    return $this->nome;
		}
		public function setNome($nome){
		    $this->nome = $nome;
		}

		public function getDescricao(){
		    return $this->descricao;
		}
		public function setDescricao($descricao){
		    $this->descricao = $descricao;
		}

		public function getEmail(){
		    return $this->email;
		}
		public function setEmail($email){
		    $this->email = $email;
		}
	}
?>