function valida_cadastro() {
	function valida_data() {
		// Pega a data do evento
        var data_passada = document.forms['form_cadastro'].inicio.value;

		// Separando a data em ano, mes e dia
        var ano_passado = data_passada.substring(0, 4);
        var mes_passado = data_passada.substring(5, 7);
        var dia_passado = data_passada.substring(8, 11);

        // Convertendo a data para numero
        var ano_passado = Number(ano_passado);
        var mes_passado = Number(mes_passado);
        var dia_passado = Number(dia_passado);

		// Pegando a data atual
		var data = new Date();
		var ano  = data.getFullYear();
		var mes  = data.getMonth() + 1;
		var dia  = data.getDay();

		// Verificando se a data é valida
        if(data_passada.length > 10 || data_passada.length < 10){
            // document.forms['form_cadastro'].campo_data_nasc.className = new_name_class;
            return false;
        }

        // Verifica se o dia é valido
        if(ano_passado < ano || mes_passado < mes || (mes == mes_passado && dia_passado < dia)) {
            // document.forms['form_cadastro'].campo_data_nasc.className = new_name_class;
            return false;
        }

        return true;
	}

	var data_inicio = valida_data();

	alert(data_inicio);

	if(data_inicio == false){
		return false;
	}
	return true;
}