<?php 
	class ParticipanteModel {
		private $organizador_id; 
		private $nome; 
		private $email; 
		private $senha; 

		function __construct(){
			$this->organizador_id = 0;
			$this->nome = "";
			$this->email = "";
			$this->senha = "";
		}

		public function getOrganizadorId(){
		    return $this->organizador_id;
		}
		public function setOrganizadorId($organizador_id){
		    return $this->organizador_id = $organizador_id;
		}

		public function getNome(){
		    return $this->nome;
		}
		public function setNome($nome){
		    return $this->nome = $nome;
		}

		public function getEmail(){
		    return $this->email;
		}
		public function setEmail($email){
		    return $this->email = $email;
		}

		public function getSenha(){
		    return $this->senha;
		}
		public function setSenha($senha){
		    return $this->senha = $senha;
		}
	} 
?>