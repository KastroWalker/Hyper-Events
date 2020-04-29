<?php 
	session_start();
	include "../DB/Conexao.php";
	include "../Model/AtividadeModel.php";

	class AtividadeControl {
		private $data;
		private $connection;

		function __construct(){
			$this->data = new AtividadeModel();
			$this->connection = new Conexao();
		}

		function Create($tipo_ativadade, $ministrante, $nome, $descricao, $vagas, $local, $data_inicial, $data_final, $hora_inicial, $hora_final){
			$this->data->setTipoAtividade($tipo_ativadade);
			$this->data->setMinistrante($ministrante);
			$this->data->setNome($nome);
			$this->data->setDescricao($descricao);
			$this->data->setVagas($vagas);
			$this->data->setLocal($local);
			$this->data->setDataInicial($data_inicial);
			$this->data->setDataFinal($data_final);
			$this->data->setHoraInicial($hora_inicial);
			$this->data->setHoraFinal($hora_final);

			$sql = "INSERT INTO Atividade (tipo_atividade_id, ministrante_id, nome, descricao, qtde_vagas, local, data_inicial, data_final, hora_inicial, hora_final) VALUES (:tipo, :ministrante, :nome, :descricao, :vagas, :local, :data_inicial, :data_final, :hora_inicial, :hora_final)";
			$d = $this->connection->connect();
			
			$data = $d->prepare($sql);
			$data->bindValue(":tipo", $this->data->getTipoAtividade());
			$data->bindValue(":ministrante", $this->data->getMinistrante());
			$data->bindValue(":nome", $this->data->getNome());
			$data->bindValue(":descricao", $this->data->getDescricao());
			$data->bindValue(":vagas", $this->data->getVagas());
			$data->bindValue(":local", $this->data->getLocal());
			$data->bindValue(":data_inicial", $this->data->getDataInicial());
			$data->bindValue(":data_final", $this->data->getDataFinal());
			$data->bindValue(":hora_inicial", $this->data->getHoraInicial());
			$data->bindValue(":hora_final", $this->data->getHoraFinal());

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
			$this->data->setAtividadeId($id);

			$sql = "SELECT * FROM Atividade WHERE atividade_id = :id";
			$d = $this->connection->connect();

			$data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getAtividadeId());

	        try {
		        $data->execute();
		        return $data;
	        } catch (Exception $ex) {
	        	echo "Erro ao Carregar: ".$ex->getMessage(); 
	        }
		}

		function Update($id, $tipo_ativadade, $ministrante, $nome, $descricao, $vagas, $local, $data_inicial, $data_final, $hora_inicial, $hora_final){
			$this->data->setAtividadeId($id);
			$this->data->setTipoAtividade($tipo_ativadade);
			$this->data->setMinistrante($ministrante);
			$this->data->setNome($nome);
			$this->data->setDescricao($descricao);
			$this->data->setVagas($vagas);
			$this->data->setLocal($local);
			$this->data->setDataInicial($data_inicial);
			$this->data->setDataFinal($data_final);
			$this->data->setHoraInicial($hora_inicial);
			$this->data->setHoraFinal($hora_final);

			$sql = "UPDATE Atividade SET tipo_atividade_id = :tipo, ministrante_id = :ministrate, nome = :nome, descricao = :descricao, qtde_vagas = :vagas, local = :local, data_inicial = :data_inicial, data_final = :data_final, hora_inicial = :hora_inicial, hora_final = :hora_final WHERE atividade_id = :id";
			$d = $this->connection->connect();
			
			$data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getAtividadeId());
			$data->bindValue(":tipo", $this->data->getTipoAtividade());
			$data->bindValue(":ministrante", $this->data->getMinistrante());
			$data->bindValue(":nome", $this->data->getNome());
			$data->bindValue(":descricao", $this->data->getDescricao());
			$data->bindValue(":vagas", $this->data->getVagas());
			$data->bindValue(":local", $this->data->getLocal());
			$data->bindValue(":data_inicial", $this->data->getDataInicial());
			$data->bindValue(":data_final", $this->data->getDataFinal());
			$data->bindValue(":hora_inicial", $this->data->getHoraInicial());
			$data->bindValue(":hora_final", $this->data->getHoraFinal());

			try {
				$data->execute();
				$_SESSION['editou'] = true;
				echo "editou";
			} catch (PDOException $ex) {
				echo "Erro ao Editar: ".$ex->getMessage();
				$_SESSION['nao_editou'] = true;
			}
		} 

		function Delete($id){
			$this->data->setAtividadeId($id);

			$sql = "DELETE FROM Atividade WHERE atividade_id = :id";
	        $d = $this->connection->connect();

	        $data = $d->prepare($sql);
	        $data->bindValue(":id", $this->data->getAtividadeId());

	        try {
	            $data->execute();
	            $_SESSION['deletou'] = true;
				echo "deletou";
	        } catch (PDOException $ex) {
	            echo "Erro ao apagar: " . $ex->getMessage();
	            $_SESSION['nao_deletou'] = true;
	        }
		}
	}

	$obj_atividade = new AtividadeControl();

	// $obj_atividade->Create("1", "2", "Introdução a Python", "Como programar com Python <3", "10", "L2", "2019-08-10", "2019-08-10", "08:00", "12:00");
	// $dados = $obj_atividade->Read("2");

	// foreach ($dados as $d) {
	// 	echo $d['atividade_id']."<br>";
	// 	echo $d['tipo_atividade_id']."<br>";
	// 	echo $d['ministrante_id']."<br>";
	// 	echo $d['nome']."<br>";
	// 	echo $d['descricao']."<br>";
	// 	echo $d['qtde_vagas']."<br>";
	// 	echo $d['local']."<br>";
	// 	echo $d['data_inicial']."<br>";
	// 	echo $d['data_final']."<br>";
	// 	echo $d['hora_inicial']."<br>";
	// 	echo $d['hora_final']."<br>";
	// }
	$obj_atividade->Update("2", "1", "2", "Python e WebScraping", "Como programar com Python <3", "10", "L2", "2019-08-10", "2019-08-10", "08:00", "12:00");
	// $obj_atividade->Delete("2");
?>