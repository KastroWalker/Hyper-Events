function validaCadastro() {
    var name_class_data = document.forms['form_cadastro_atividade'].data.className;

    if (name_class_data.match(/is-invalid/)) {
        document.forms['form_cadastro_atividade'].data.className = name_class_data.replace('is-invalid', ' ');
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

    var data = valida_data();

    var erro = [];
    var lista = [data];
    for (i in lista) {
        erro.push(lista[i]);
    }

    if (erro.indexOf(false) == '-1') {
        return true;
    } else {
        return false;
    }
}