<?php 
	session_start();
	include "../DB/Conexao.php";
	include "../Model/TipoAtividadeModel.php";
	
	class TipoAtividadeControl {
		private $data;
		private $connection;
	
		function __construct(){
			$this->data = new TipoAtividadeModel();
			$this->connection = new Conexao();
		}
	
		function Create($nome){
			$this->data->setNome($nome);
	
			$sql = "INSERT INTO TipoAtividade (nome) VALUES (:nome)";
			$d = $this->connection->connect();
			
			$data = $d->prepare($sql);
			$data->bindValue(":nome", $this->data->getNome());
	
			try {
				$data->execute();
				$_SESSION['cadastrado'] = true;
				echo "cadastrado";
			} catch (PDOException $ex) {
				echo "Erro ao Cadastrar: ".$ex->getMessage();
				$_SESSION['nao_cadastrado'] = true;
			}
		}
		
		function Read($id){
			$this->data->setTipoAtividadeId($id);
	
			$sql = "SELECT * FROM TipoAtividade WHERE tipo_atividade_id = :id";
			$d = $this->connection->connect();
	
			$data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getTipoAtividadeId());

	        try {
		        $data->execute();
		        return $data;
	        } catch (Exception $ex) {
	        	echo "Erro ao Carregar: ".$ex->getMessage(); 
	        }
		}
	
		function Update($id, $nome){
			$this->data->setTipoAtividadeId($id);
			$this->data->setNome($nome);
	
			$sql = "UPDATE TipoAtividade SET nome = :nome WHERE tipo_atividade_id = :id";
			$d = $this->connection->connect();
			
			$data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getTipoAtividadeId());
			$data->bindValue(":nome", $this->data->getNome());
	
			try {
				$data->execute();
				$_SESSION['editado'] = true;
				echo "editado";
			} catch (PDOException $ex) {
				echo "Erro ao Editar: ".$ex->getMessage();
				$_SESSION['nao_editado'] = true;
			}
		} 
	
		function Delete($id){
			$this->data->setTipoAtividadeId($id);
	
			$sql = "DELETE FROM TipoAtividade WHERE tipo_atividade_id = :id";
	        $d = $this->connection->connect();
	
	        $data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getTipoAtividadeId());
	
	        try {
	            $data->execute();
	            $_SESSION['deletado'] = true;
				echo "deletado";
	        } catch (PDOException $ex) {
	            echo "Erro ao apagar: " . $ex->getMessage();
	            $_SESSION['nao_deletado'] = true;
	        }
		}
	}

	// $obj_tipo_atividade = new TipoAtividadeControl();

	// $obj_tipo_atividade->Create("Minicurso");
	// $dados = $obj_tipo_atividade->Read("1");

	// foreach ($dados as $d) {
	// 	echo $d['tipo_atividade_id']."<br>";
	// 	echo $d['nome']."<br>";
	// }

	// $obj_tipo_atividade->Update("1", "Palestra");
	// $obj_tipo_atividade->Delete("1");
?>