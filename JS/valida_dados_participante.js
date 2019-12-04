function valida_dados() {
    /**
     * Função para validar os Dados do usuário
     * Criada por Victor Castro
     */

     var name_class_nome = document.forms['form_cadastro'].campo_nome.className;
     var name_class_sexo = document.forms['form_cadastro'].campo_sexo.className;
     var name_class_user = document.forms['form_cadastro'].campo_user.className;
     var name_class_cpf = document.forms['form_cadastro'].campo_cpf.className;
     var name_class_tipo_user = document.forms['form_cadastro'].tipo_user.className;
     var name_class_data_nasc = document.forms['form_cadastro'].campo_data_nasc.className;

     if(name_class_nome.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_nome.className = name_class_nome.replace('is-invalid', ' ');
    }
    if(name_class_cpf.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_cpf.className = name_class_cpf.replace('is-invalid', ' ');
    }
    if(name_class_data_nasc.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_data_nasc.className = name_class_data_nasc.replace('is-invalid', ' ');
    }
    if(name_class_sexo.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_sexo.className = name_class_sexo.replace('is-invalid', ' ');
    }
    if(name_class_user.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_user.className = name_class_user.replace('is-invalid', ' ');
    }
    if(name_class_tipo_user.match(/is-invalid/)){
        document.forms['form_cadastro'].tipo_user.className = name_class_tipo_user.replace('is-invalid', ' ');
    }

    function valida_nome(){
        /**
         * Função para validar o Nome do usuário
         * Criada por Victor Castro
         */
         var nome = document.forms['form_cadastro'].campo_nome.value;
         var nome = nome.replace( /\s/g, '' );
         var name_class = document.forms['form_cadastro'].campo_nome.className;
         if (/[^a-zA-Z]/.test(nome)) {
            var new_name_class = name_class + ' is-invalid';
            document.forms['form_cadastro'].campo_nome.className = new_name_class;
            form_cadastro.campo_nome.focus();
            return false;
        }
        return true;
    }
    
    function valida_sexo(){
        /**
         * Função para validar o sexo do usuário
         * Criada por Victor Castro
         */
         var sexo = document.forms["form_cadastro"].campo_sexo.selectedIndex;
         var name_class = document.forms['form_cadastro'].campo_sexo.className;
         if (sexo == 0) {
            var new_name_class = name_class + ' is-invalid';
            document.forms['form_cadastro'].campo_sexo.className = new_name_class;
            return false;
        } else {
            document.forms['form_cadastro'].campo_sexo.className = name_class;
        }
        return true;
    }

    function valida_cpf() {
        var Soma;
        var Resto;
        var cpf = document.forms['form_cadastro'].campo_cpf.value;
        var cpf = cpf.replace('.', '');
        var cpf = cpf.replace('.', '');
        var cpf = cpf.replace('-', '');
        var name_class = document.forms['form_cadastro'].campo_cpf.className;
        Soma = 0;
        if (cpf == "00000000000") return false;

        for (i=1; i<=9; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
          Resto = (Soma * 10) % 11;

      if ((Resto == 10) || (Resto == 11)){
        Resto = 0;
    }
    if (Resto != parseInt(cpf.substring(9, 10)) ){
        var new_name_class = name_class + ' is-invalid';
        document.forms['form_cadastro'].campo_cpf.className = new_name_class;
        return false;      
    } 

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)){  
        Resto = 0;
    }
    if (Resto != parseInt(cpf.substring(10, 11) ) ){
        var new_name_class = name_class + ' is-invalid';
        document.forms['form_cadastro'].campo_cpf.className = new_name_class;
        return false;
    }
    return true;
    }

    function valida_data_nasc(){
        /**
          * Função para validar a data de nascimento
          */

          document.getElementById("data_invalida").innerHTML = "Data inválida";
          var name_class = document.forms['form_cadastro'].campo_data_nasc.className;
          var new_name_class = name_class + ' is-invalid';

        // Pegando a data de nascimento do usuario
        var data_passada = document.forms['form_cadastro'].campo_data_nasc.value;

        // Pegando a data atual
        var data = new Date()
        var ano = data.getFullYear();
        var mes = data.getMonth() + 1;
        var dia = data.getDate();

        // Verificando se a data é valida
        if(data_passada.length > 10 || data_passada.length < 10){
            document.forms['form_cadastro'].campo_data_nasc.className = new_name_class;
            return false;
        }

        // Separando a data em ano, mes e dia
        var ano_passado = data_passada.substring(0, 4);
        var mes_passado = data_passada.substring(5, 7);
        var dia_passado = data_passada.substring(8, 11);

        // Convertendo a data para numero
        var ano_passado = Number(ano_passado);
        var mes_passado = Number(mes_passado);
        var dia_passado = Number(dia_passado);
        
        // Calculando a idade
        idade = ano - ano_passado;

        // Verificando se a idade esta correta
        if (mes < mes_passado || mes == mes_passado && dia < dia_passado) {
            idade--;
        }

        // Pega o valor do tipo de usuario
        var e = document.getElementById("tipo_user");
        var tipo_user = e.options[e.selectedIndex].value;

        // Verifica se o dia é valido
        if(ano_passado > ano) {
            document.forms['form_cadastro'].campo_data_nasc.className = new_name_class;
            return false;
        }

        // Verificando se a idade do organizador é valida
        if(idade < 16 && tipo_user == 'org'){
            document.getElementById("data_invalida").innerHTML = "No mínimo 16 anos";
            document.forms['form_cadastro'].campo_data_nasc.className = new_name_class;
            return false;
        }

        // Verificando se a idade do participante é valida
        if(idade < 8 && tipo_user == 'part'){
            document.getElementById("data_invalida").innerHTML = "Participante tem que ter no minino 8 anos";
            document.forms['form_cadastro'].campo_data_nasc.className = new_name_class;
            return false;
        }
        
        return true;
    }

    var nome = valida_nome();
    var sexo = valida_sexo();
    var cpf = valida_cpf();
    var data_nasc = valida_data_nasc();

    var erro = [];
    var lista = [nome, sexo, user, cpf, data_nasc];
    for (i in lista){
        erro.push(lista[i]);
    }

    if (erro.indexOf(false) == '-1') {
        return true;
    } else {
        return false;
    }
}