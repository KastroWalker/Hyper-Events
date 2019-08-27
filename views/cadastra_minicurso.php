<?php
	$sql = "select * from ministrantes;";

	include "../Controls/conexao.php";
?>
	<form action="../Controls/cadastra_atividade.php?tipo=palestra" method="POST">
		<input type="hidden" name="id_evento" value="">
			
		<div class="form-group">
			<label for="palestrante">Palestrante:</label>
			<select name="palestrante" id="palestrante" class="form-control" required>
				<?php
					$result = mysqli_query($conexao, $sql);
					while ($tlb = mysqli_fetch_array($result)) {
						$id = $tlb['ministrante_id'];
						$nome = $tlb['nome'];
						echo"<option value='$id'>$nome</option>";
					}
				?>
			</select>
			<a href="cadastro_ministrante.php?tipo_mini=palestrante">Cadastrar palestrante</a>
		</div>

		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="descricao">Descrição</label>
			<textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" required></textarea>
		</div>
		
		<div class="form-group">
			<label for="data_init">Data inicio</label>
			<input type="date" name="data_init" id="data_init" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="data_end">Data fim</label>
			<input type="date" name="data_end" id="data_end" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="time_init">Hora inicio</label>
			<input type="time" name="time_init" id="time_init" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="time_end">Hora fim</label>
			<input type="time" name="time_end" id="time_end" class="form-control" required>
		</div>	