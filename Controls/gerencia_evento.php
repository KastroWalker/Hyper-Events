<?php 
	session_start();

	include_once 'conexao.php';
	include_once '../Controls/verifica_login.php';

	$acao = $_REQUEST['acao'];

	/*
	echo "<strong>Titulo: </strong>".$titulo."<br/>";
	echo "<strong>Descrição: </strong>".$descricao."<br/>";
	echo "<strong>Hora: </strong>".$hora."<br/>";
	echo "<strong>Data_inicio: </strong>".$data_inicio."<br/>";
	echo "<strong>Data_fim: </strong>".$data_fim."<br/>";
	echo "<strong>Email: </strong>".$email."<br/>";
	echo "<strong>Site: </strong>".$site."<br/>";
	echo "<strong>Id: </strong>".$id."<br/>";
	

	*/

	$titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
	$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
	$hora_inicio = mysqli_real_escape_string($conexao, trim($_POST['hora_inicio']));
	$hora_fim = mysqli_real_escape_string($conexao, trim($_POST['hora_fim']));
	$data_inicio = mysqli_real_escape_string($conexao, trim($_POST['inicio']));
	$data_fim = mysqli_real_escape_string($conexao, trim($_POST['fim']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$site = mysqli_real_escape_string($conexao, trim($_POST['site']));

	if($acao == "cadastrar"){
		$id = $_SESSION['id'];

		$sql = "select count(*) as total from eventos where nome = '$titulo';";

		$result = mysqli_query($conexao, $sql);
		$row = mysqli_fetch_assoc($result);

		mysqli_error($conexao);
		print_r($row);
		echo $row['total'];	

		if ($row['total'] >= 1) {
			echo "Evento cadastrado".mysqli_error($conexao);
			$_SESSION['evento_ja_cadastrado'] = true;
			header('Location: ../views/cadastro_de_evento.php');
			exit();
		} else {
			$sql = "insert into eventos (user_id, titulo, descricao, url_evento, data_inicio, data_fim, hora_inicio, hora_fim, email) values ('$id', '$titulo', '$descricao', '$site', '$data_inicio', '$data_fim', '$hora_inicio', '$hora_fim', '$email');";

			if ($conexao->query($sql) === TRUE) {
				$_SESSION['evento_cadastrado'] = true;
				header('Location: ../views/cadastro_de_evento.php');
				exit();
				echo "Cadastrado com sucesso";
			} else {
				$_SESSION['erro_cadastrado'] = true;
				#header('Location: ../views/cadastro_de_evento.php');
				#exit();
				echo "não cadastrado".mysqli_error($conexao);
			}
		}

		$conexao->close();
	} elseif ($acao == "editar") {
		$id = $_POST['id'];

		/*
		echo "ID: $id<br>";	
		echo "Titulo: ".$titulo."<br>";
		echo "Descrição: ".$descricao."<br>";
		echo "Hora: ".$hora."<br>";
		echo "Data inicio: ".$data_inicio."<br>";
		echo "Data fim: ".$data_fim."<br>";
		echo "Email: ".$email."<br>";
		echo "Site: ".$site."<br>";	
		*/

		$sql = "update eventos set titulo = '{$titulo}', descricao = '{$descricao}', data_inicio = '{$data_inicio}', data_fim = '{$data_fim}', hora_inicio = '{$hora_inicio}', hora_fim = '{$hora_fim}', email = '{$email}', url_evento = '{$site}' where evento_id = '{$id}';";

		$result = mysqli_query($conexao, $sql);

		if (!$result) {
			die('Erro: '.mysqli_error($conexao));
			$_SESSION['erro_alterar'] = true;
			header('Location: ../views/lista_eventos.php');
			exit();
		}else {
			echo "A operação foi realizado com sucesso";
			$_SESSION['alterado'] = true;
			header('Location: ../views/lista_eventos.php');
			exit();
		}
	} elseif ($acao == "deletar") {
		$id = $_REQUEST['id'];
		
		$sql = "delete from eventos where evento_id = $id";

		$result = mysqli_query($conexao, $sql);

		if(!$result){
			$_SESSION['erro_excluir'] = true;
			die('Erro: '.mysqli_error($conexao));
			header('Location: ../views/lista_eventos.php');
			exit();
		}else{
			$_SESSION['sucesso_excluir'] = true;
			header('Location: ../views/lista_eventos.php');
			exit();
		}
	}
?>