<?php 
	class AtividadeModel {
		private $atividade_id;
		private $ministrante_id;
		private $tipo_atividade;
		private $nome;
		private $descricao;
		private $vagas;
		private $local;
		private $data_inicial;
		private $data_final;
		private $hora_inicial;
		private $hora_final;

		function __construct(){
			$this->atividade_id = 0;
			$this->tipo_atividade = 0;
			$this->ministrante_id =0;
			$this->nome = "";
			$this->descricao = "";
			$this->vagas = 0;
			$this->local = "";
			$this->data_final = "";
			$this->data_inicial = "";
			$this->hora_inicial = "";
			$this->hora_final = "";
		}

		public function getAtividadeId(){
		    return $this->atividade_id;
		}
		public function setAtividadeId($atividade_id){
		    $this->atividade_id = $atividade_id;
		}

		public function getTipoAtividade(){
		    return $this->tipo_atividade;
		}
		public function setTipoAtividade($tipo_atividade){
		    $this->tipo_atividade = $tipo_atividade;
		}

		public function getMinistrante(){
		    return $this->ministrante_id;
		}
		public function setMinistrante($ministrante){
		    $this->ministrante_id = $ministrante;
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

		public function getVagas(){
		    return $this->vagas;
		}
		public function setVagas($vagas){
		    $this->vagas = $vagas;
		}

		public function getLocal(){
		    return $this->local;
		}
		public function setLocal($local){
		    $this->local = $local;
		}

		public function getDataInicial(){
		    return $this->data_inicial;
		}
		public function setDataInicial($data_inicial){
		    $this->data_inicial = $data_inicial;
		}

		public function getDataFinal(){
		    return $this->data_final;
		}
		public function setDataFinal($data_final){
		    $this->data_final = $data_final;
		}

		public function getHoraInicial(){
		    return $this->hora_inicial;
		}
		public function setHoraInicial($hora_inicial){
		    $this->hora_inicial = $hora_inicial;
		}

		public function getHoraFinal(){
		    return $this->hora_final;
		}
		public function setHoraFinal($hora_final){
		    $this->hora_final = $hora_final;
		}
	}
?>