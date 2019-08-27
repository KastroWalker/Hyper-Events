<?php 
	session_start();
	include 'conexao.php';

	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
	$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$contato = mysqli_real_escape_string($conexao, $_POST['contato']);
	$data_nasc = mysqli_real_escape_string($conexao, $_POST['data_nasc']);
	$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);

	echo "$nome<br>";
	echo "$cpf<br>";
	echo "$sexo<br>";
	echo "$email<br>";
	echo "$contato<br>";
	echo "$data_nasc<br>";
	echo "$descricao<br>";

	$cpf = str_replace('.', '', $cpf);
	$cpf = str_replace('-', '', $cpf);

	$ano = substr($data_nasc, 0, 4);
	$mes = substr($data_nasc, 5, 2);
	$dia = substr($data_nasc, 8, 2);
	
	$ano_atual = date('Y');
	$mes_atual = date('m');
	$dia_atual = date('d');

	$idade = $ano_atual - $ano;

	if ($mes_atual < $mes || $mes_atual == $mes && $dia_atual < $dia) {
        $idade--;
    }

    /*
	ministrante_id int not null auto_increment,
    nome varchar(200) not null,
    cpf varchar(11) not null,
    sexo char(1) not null,
    email varchar(100) not null,
    contato varchar(12),
    idade int not null,
    data_nasc date not null,
    descricao varchar(500), 
	*/

	$sql = "insert into ministrantes (nome, cpf, sexo, email, contato, idade, data_nasc, descricao) values ('{$nome}', '{$cpf}', '{$sexo}', '{$email}', '{$contato}', '{$idade}', '{$data_nasc}', '{$descricao}'); ";
	
	mysqli_error($conexao);

	if($conexao->query($sql) === TRUE){
		$_SESSION['status_cadastro'] = true;
		echo "cadastrado";
	}else{
		$_SESSION['Não_foi_cadastrado'] = true;
		echo "não cadastrado".mysqli_error($conexao);
	}

	$conexao->close();

	header('Location: ../views/cadastro_ministrante.php');
	exit();
?>