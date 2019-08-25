<?php 
	$tipo = $_SESSION['tipo'];
	echo "$tipo";
	if($tipo == "palestra"){
		$sql = "select * from palestra;";
		$ministrante = "Palestrante";
	}else if($tipo == "minicurso"){
		$sql = "select * from minicursos;";
		$ministrante = "Ministrante";
	}
?>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>id</th>
		<th>Titulo</th>
		<th>Descricao</th>
		<th>Hora de inicio</th>
		<th>Data de incio</th>
		<th>Data de fim</td>
		<th>Email</td>
		<th>Site</th>
		<th colspan="3">Ações</th>
	</tr>
<?php
	$result = mysqli_query($link, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		if($tipo == "palestra"){
			$id = $tlb['palestra_id'];
			$palestrante_id = $tlb['palestrante_id'];
		}else if($tipo == "minicurso"){
			$id = $tlb['minicurso_id'];
			$ministrante_id = $tlb['ministrante_id'];
		}
	}
?>