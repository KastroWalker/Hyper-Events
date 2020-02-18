<?php 
	class InscricaoModel {
		private $inscricao_id;
		private $atividade_id;
		private $participante_id;

		function __construct(){
			$this->inscricao_id = 0;
			$this->atividade_id = 0;
			$this->participante_id = 0;
		}

		public function getInscricaoId(){
		    return $this->inscricao_id;
		}
		public function setInscricaoId($inscricao_id){
		    return $this->inscricao_id = $inscricao_id;
		}

		public function getAtividade(){
		    return $this->atividade_id;
		}
		public function setAtividade($atividade_id){
		    return $this->atividade_id = $atividade_id;
		}

		public function getParticipante(){
		    return $this->participante_id;
		}
		public function setParticipante($participante_id){
		    return $this->participante_id = $participante_id;
		}
	}
?>