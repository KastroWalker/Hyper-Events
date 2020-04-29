<?php 
	class EventoModel {
		private $evento_id;
		private $organizador_id;
		private $titulo;
		private $descricao;
		private $local;
		private $data_inicial;
		private $data_final;
		private $vagas;

		function __construct(){
			$this->evento_id = 0;
			$this->organizador_id = 0;
			$this->titulo = "";
			$this->descricao = "";
			$this->local = "";
			$this->data_final = "";
			$this->data_inicial = "";
			$this->vagas = 0;
		}

		public function getEventoId(){
		    return $this->evento_id;
		}
		public function setEventoId($evento_id){
		    return $this->evento_id = $evento_id;
		}

		public function getOrganizador(){
		    return $this->organizador_id;
		}
		public function setOrganizador($organizador){
		    return $this->organizador_id = $organizador;
		}

		public function getTitulo(){
		    return $this->titulo;
		}
		public function setTitulo($titulo){
		    return $this->titulo = $titulo;
		}

		public function getDescricao(){
		    return $this->descricao;
		}
		public function setDescricao($descricao){
		    return $this->descricao = $descricao;
		}

		public function getLocal(){
		    return $this->local;
		}
		public function setLocal($local){
		    return $this->local = $local;
		}

		public function getDataInicial(){
		    return $this->data_inicial;
		}
		public function setDataInicial($data_inicial){
		    return $this->data_inicial = $data_inicial;
		}

		public function getDataFinal(){
		    return $this->data_final;
		}
		public function setDataFinal($data_final){
		    return $this->data_final = $data_final;
		}

		public function getVagas(){
		    return $this->vagas;
		}
		public function setVagas($vagas){
		    return $this->vagas = $vagas;
		}
	}
?>