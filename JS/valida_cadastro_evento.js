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
		var dia  = data.getDate();

		// Verificando se a data é valida
        if(data_passada.length > 10 || data_passada.length < 10){
            return false;
        }

        // Verifica se o ano é válidos
        if(ano_passado < ano) {
            alert ("Ano de inicio inválido");
            return false;
        }

        // Verifica se o mês é válido
        else if (ano_passado == ano && mes_passado < mes) {
            alert ("Mês de inicio inválido");
            return false;
        }

        // Verificando se o dia é válido
        else if (ano_passado == ano && mes_passado == mes && dia_passado < dia) {
            alert ("Dia de inicio inválido");
            return false;
        }
        return true;
    }

    function valida_fim () {
        // Pega a data final e atual do evento
        var data_passada = document.forms['form_cadastro'].inicio.value;
        var data_passada_final = document.forms['form_cadastro'].fim.value;

        // Separando a data final em ano, mes e dia
        var ano_passado_final = data_passada_final.substring (0, 4);
        var mes_passado_final = data_passada_final.substring (5, 7);
        var dia_passado_final = data_passada_final.substring (8, 11);

        // Separando a data inicial em ano, mes e dia
        var ano_passado = data_passada.substring(0, 4);
        var mes_passado = data_passada.substring(5, 7);
        var dia_passado = data_passada.substring(8, 11);

        // Convertendo a data final para numero
        var ano_passado_final = Number (ano_passado_final);
        var mes_passado_final = Number (mes_passado_final);
        var dia_passado_final = Number (dia_passado_final);

        // Convertendo a data inicial para numero
        var ano_passado = Number(ano_passado);
        var mes_passado = Number(mes_passado);
        var dia_passado = Number(dia_passado);

        // Verificando o ano
        if (ano_passado_final < ano_passado) {
            alert ("Ano de encerramento inválido")
            return false;
        }
        // Verificando mês
        else if (ano_passado_final == ano_passado && mes_passado_final < mes_passado) {
            alert ("Mês de encerramento inválido");
            return false;
        }
        // Verificando dia
        else if (ano_passado_final == ano_passado && mes_passado_final == mes_passado && dia_passado_final < dia_passado) {
            alert ("Dia de encerramento inválido");
            return false;
        }
    }

    var data_inicio = valida_data();
    var data_fim = valida_fim ();

    var erro = [];
    var lista = [data_inicio, data_fim];
    for (i in lista){
        erro.push(lista[i]);
    }

    if (erro.indexOf(false) == '-1') {
        return true;
    } else {
        return false;
    }
}