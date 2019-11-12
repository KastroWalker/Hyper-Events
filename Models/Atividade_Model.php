<?php
class Atividade_Model
{
	private $atividade_id;
	private $evento_id;
	private $idTipoAtividade;
	private $idConvidado;
	private $qtde_vagas_atividade;
	private $valor;
	private $titulo_atividade;
	private $descricao;
	private $data;
	private $local_id;
	private $inicio;
	private $fim;

	function __construct()
	{
		$this->atividade_id = 0;
		$this->evento_id = 0;
		$this->idTipoAtividade = 0;
		$this->idConvidado = 0;
		$this->qtde_vagas_atividade = 0;
		$this->valor = 0;
		$this->titulo_atividade = "sem título";
		$this->descricao = "sem descrição";
		$this->data = "aaaa/mm/dd";
		$this->local_id = 0;
		$this->inicio = "00:00";
		$this->fim = "00:00";
	}

	function getAtividadeId(){
		return $this->atividade_id;
	}
	function getEventoId(){
		return $this->evento_id;
	}
	function getIdTipoAtividade(){
		return $this->idTipoAtividade;
	}
	function getIdConvidado(){
		return $this->idConvidado;
	}
	function getQtdeVagasAtividade(){
		return $this->qtde_vagas_atividade;
	}
	function getValor(){
		return $this->valor;
	}
	function getTituloAtividade(){
		return $this->titulo_atividade;
	}
	function getDescricao(){
		return $this->descricao;
	}
	function getData(){
		return $this->data;
	}
	function getLocalId(){
		return $this->local_id;
	}
	function getInicio(){
		return $this->inicio;
	}
	function getFim(){
		return $this->fim;
	}

	function setAtividadeId($atividade_id){
		$this->atividade_id = $atividade_id;
	}
	function setEventoId($evento_id){
		$this->evento_id = $evento_id;
	}
}
