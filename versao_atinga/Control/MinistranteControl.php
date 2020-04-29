<?php 
	session_start();
	include "../DB/Conexao.php";
	include "../Model/MinistranteModel.php";
	
	class MinistranteControl {
		private $data;
		private $connection;
	
		function __construct(){
			$this->data = new MinistranteModel();
			$this->connection = new Conexao();
		}
	
		function Create($nome, $descricao, $email){
			$this->data->setNome($nome);
			$this->data->setDescricao($descricao);
			$this->data->setEmail($email);
	
			$sql = "INSERT INTO Ministrante (nome, descricao, email) VALUES (:nome, :descricao, :email)";
			$d = $this->connection->connect();
			
			$data = $d->prepare($sql);
			$data->bindValue(":nome", $this->data->getNome());
			$data->bindValue(":descricao", $this->data->getDescricao());
			$data->bindValue(":email", $this->data->getEmail());
	
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
			$this->data->setMinistranteId($id);
	
			$sql = "SELECT * FROM Ministrante WHERE ministrante_id = :id";
			$d = $this->connection->connect();
	
			$data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getMinistranteId());
	
	        try {
		        $data->execute();
		        return $data;
	        } catch (Exception $ex) {
	        	echo "Erro ao Carregar: ".$ex->getMessage(); 
	        }
		}
	
		function Update($id, $nome, $descricao, $email){
			$this->data->setMinistranteId($id);
			$this->data->setNome($nome);
			$this->data->setDescricao($descricao);
			$this->data->setEmail($email);
	
			$sql = "UPDATE Ministrante SET nome = :nome, descricao = :descricao, email = :email WHERE ministrante_id = :id";
			$d = $this->connection->connect();
			
			$data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getMinistranteId());
			$data->bindValue(":nome", $this->data->getNome());
			$data->bindValue(":descricao", $this->data->getDescricao());
			$data->bindValue(":email", $this->data->getEmail());	
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
			$this->data->setMinistranteId($id);
	
			$sql = "DELETE FROM Ministrante WHERE ministrante_id = :id";
	        $d = $this->connection->connect();
	
	        $data = $d->prepare($sql);
			$data->bindValue(":id", $this->data->getMinistranteId());
	
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

	$obj_ministrante = new MinistranteControl();

	// $obj_ministrante->Create("Emilly", "Tecnica em informatica pelo IFPI", "emily@gmail.com");
	// $dados = $obj_ministrante->Read("1");

	// foreach ($dados as $d) {
	// 	echo $d['ministrante_id']."<br>";
	// 	echo $d['nome']."<br>";
	// 	echo $d['descricao']."<br>";
	// 	echo $d['email']."<br>";
	// }

	// $obj_ministrante->Update("1", "Emilly", "Tecnica em informatica pelo IFPI Granduanda em S.I pela Nassau", "emily@gmail.com");
	// $obj_ministrante->Delete("1");
?>