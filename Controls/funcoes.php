<?php
	function escreve_linha($titulo, $atributo){
		$linha = "
			<tr>
				<td>
					<dt class='col-sm-3'>$titulo</dt>
				</td>
				<td>
					<dd class='col-sm-9'>$atributo</dd>
				</td>
			</tr>
		";
		echo $linha;
	}
?>