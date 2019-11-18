function validaCadastro() {
    var name_class_data = document.forms['form_cadastro_atividade'].data.className;
    var name_class_hora_fim = document.forms['form_cadastro_atividade'].hora_fim.className;

    if (name_class_data.match(/is-invalid/)) {
        document.forms['form_cadastro_atividade'].data.className = name_class_data.replace('is-invalid', ' ');
    }

    if (name_class_hora_fim.match(/is-invalid/)) {
        document.forms['form_cadastro_atividade'].hora_fim.className = name_class_data.replace('is-invalid', ' ');
    }

    function valida_data() {

        var name_class = document.forms['form_cadastro_atividade'].data.className;
        var new_class_name = name_class + ' is-invalid';

        // Pega a data do evento
        var data_passada = document.forms['form_cadastro_atividade'].data.value;

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
        var ano = data.getFullYear();
        var mes = data.getMonth() + 1;
        var dia = data.getDate();

        // Verificando se a data é valida
        if (data_passada.length > 10 || data_passada.length < 10) {
            document.forms['form_cadastro_atividade'].data.className = new_class_name;
            return false;
        }

        // Verifica se o ano é válidos
        if (ano_passado < ano) {
            document.forms['form_cadastro_atividade'].data.className = new_class_name;
            //alert ("Ano de inicio inválido");
            return false;
        }

        // Verifica se o mês é válido
        else if (ano_passado == ano && mes_passado < mes) {
            document.forms['form_cadastro_atividade'].data.className = new_class_name;
            //alert ("Mês de inicio inválido");
            return false;
        }

        // Verificando se o dia é válido
        else if (ano_passado == ano && mes_passado == mes && dia_passado < dia) {
            document.forms['form_cadastro_atividade'].data.className = new_class_name;
            //alert ("Dia de inicio inválido");
            return false;
        }
        return true;
    }

    function validaHoras() {
        var name_class = document.forms['form_cadastro_atividade'].hora_fim.className;
        var new_class_name = name_class + ' is-invalid';

        //Pegando o horário inicial
        var horario_inicial = document.forms['form_cadastro_atividade'].hora_inicio.value;

        //Pegando o horário final
        var horario_final = document.forms['form_cadastro_atividade'].hora_fim.value;

        //Separando o horário inicial em horas e minutos
        var horas_inicio = horario_inicial.substring(0, 2);
        var minutos_inicio = horario_inicial.substring(3, 6);

        //Separando o horário final em horas e minutos
        var horas_fim = horario_final.substring(0, 2);
        var minutos_fim = horario_final.substring(3, 6);

        //Convertendo o horário inicial para números
        var horas_inicio = Number(horas_inicio);
        var minutos_inicio = Number(minutos_inicio);

        //Convertendo o horário final para números
        var horas_fim = Number(horas_fim);
        var minutos_fim = Number(minutos_fim);

        //Verificando se a hora é válida
        if (horas_fim < horas_inicio) {
            document.forms['form_cadastro_atividade'].hora_fim.className = new_class_name;
            return false;
        }

        //Verificando se os minutos são válidos
        else if (horas_fim == horas_inicio && minutos_fim < minutos_inicio) {
            document.forms['form_cadastro_atividade'].hora_fim.className = new_class_name;
            return false;
        }
        else if (horas_fim == horas_inicio && minutos_fim == minutos_inicio) {
            document.forms['form_cadastro_atividade'].hora_fim.className = new_class_name;
            return false;
        }
        
        return true;
    }

    var data = valida_data();
    var hora = validaHoras();

    var erro = [];
    var lista = [data, hora];
    for (i in lista) {
        erro.push(lista[i]);
    }

    if (erro.indexOf(false) == '-1') {
        return true;
    } else {
        return false;
    }
}