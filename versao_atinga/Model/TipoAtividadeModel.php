<?php 
	class TipoAtividadeModel {
		private $tipo_atividade_id; 
		private $nome; 

		function __construct(){
			$this->tipo_atividade_id = 0;
			$this->nome = "";
		}

		public function getTipoAtividadeId(){
		    return $this->tipo_atividade_id;
		}
		
		public function setTipoAtividadeId($tipo_atividade_id){
		    $this->tipo_atividade_id = $tipo_atividade_id;
		}

		public function getNome(){
		    return $this->nome;
		}
		public function setNome($nome){
		    $this->nome = $nome;
		}
	} 
?>