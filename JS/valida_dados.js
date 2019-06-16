function valida_dados() {
    /**
     * Função para validar os Dados do usuário
     * Criada por Victor Castro
     */

    var name_class_nome = document.forms['form_cadastro'].campo_nome.className;
    var name_class_sexo = document.forms['form_cadastro'].campo_sexo.className;
    var name_class_email = document.forms['form_cadastro'].campo_conf_email.className;
    var name_class_user = document.forms['form_cadastro'].campo_user.className;
    var name_class_cpf = document.forms['form_cadastro'].campo_cpf.className;
    var name_class_tipo_user = document.forms['form_cadastro'].tipo_user.className;
    var name_class_senha = document.forms['form_cadastro'].campo_conf_senha.className;
        
    if(name_class_nome.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_nome.className = name_class_nome.replace('is-invalid', ' ');
    }
    if(name_class_nome.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_cpf.className = name_class_cpf.replace('is-invalid', ' ');
    }
    if(name_class_sexo.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_sexo.className = name_class_sexo.replace('is-invalid', ' ');
    }
    if(name_class_email.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_conf_email.className = name_class_email.replace('is-invalid', ' ');
    }
    if(name_class_user.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_user.className = name_class_user.replace('is-invalid', ' ');
    }
    if(name_class_tipo_user.match(/is-invalid/)){
        document.forms['form_cadastro'].tipo_user.className = name_class_tipo_user.replace('is-invalid', ' ');
    }
    if(name_class_senha.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_conf_senha.className = name_class_senha.replace('is-invalid', ' ');
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
        } else {
            document.forms['form_cadastro'].campo_nome.className = name_class;
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
    
    function valida_email() {
        /**
         * Função para verificar se os e-mails passados são iguais
         * Criada por Victor Castro
         */
        var email = document.forms['form_cadastro'].campo_email.value;
        var conf_email = document.forms['form_cadastro'].campo_conf_email.value;
        var name_class = document.forms['form_cadastro'].campo_conf_email.className;
        if (email != conf_email) {
            var new_name_class = name_class + ' is-invalid';
            document.forms['form_cadastro'].campo_conf_email.className = new_name_class;
            form_cadastro.campo_email.focus();
            return false;
        } else {
            document.forms['form_cadastro'].campo_conf_email.className = name_class;
        }

        return true;
    }

    function valida_user() {
        /**
         * Função para validar o nome de usuário
         * Criada por Victor Castro
         */
        var user = document.forms['form_cadastro'].campo_user.value;
        
        function isNumeric(str) {
            var er = /^[0-9]+$/;
            return (er.test(str));
        }
        
        var number = user.substring(0,1);
        var number = isNumeric(number);

        var name_class = document.forms['form_cadastro'].campo_user.className;

        if(number) {
            var new_name_class = name_class + ' is-invalid';
            document.forms['form_cadastro'].campo_user.className = new_name_class;
            form_cadastro.campo_user.focus();
            return false;
        } else {
            document.forms['form_cadastro'].campo_user.className = name_class;
        }

        return true;
    }

    function valida_senha() {
        /**
         * Função para verificar se a senha do usuário são iguais
         * Criada por Victor Castro
         */
        var senha = document.forms['form_cadastro'].campo_senha.value;
        var conf_senha = document.forms['form_cadastro'].campo_conf_senha.value;
        var name_class = document.forms['form_cadastro'].campo_conf_senha.className;
        if (senha != conf_senha) {
            var new_name_class = name_class + ' is-invalid';
            document.forms['form_cadastro'].campo_conf_senha.className = new_name_class;
            form_cadastro.campo_senha.focus();
            return false;
        } else {
            document.forms['form_cadastro'].campo_conf_senha.className = name_class;
        }

        return true;
    }

    function valida_tipo_user(){
        /**
         * Função para validar o sexo de usuário
         * Criada por Victor Castro
         */
        var tipo_user = document.forms["form_cadastro"].tipo_user.selectedIndex;
        var name_class = document.forms['form_cadastro'].tipo_user.className;
        if (tipo_user == 0) {
            var new_name_class = name_class + ' is-invalid';
            document.forms['form_cadastro'].tipo_user.className = new_name_class;
            return false;
        } else {
            document.forms['form_cadastro'].tipo_user.className = name_class;
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
        document.forms['form_cadastro'].campo_cpf.className = new_name_class; return false;      
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
        var data = new Date()
        var ano = data.getFullYear();
        var mes = data.getMonth();
        var dia = data.getDate();
        mes = mes + 1;
        var data_passada = document.forms['form_cadastro'].campo_data_nasc.value;
        var ano_passado = data_passada.substring(0, 4);
        var ano_passado = Number(ano_passado);
        var mes_passado = data_passada.substring(5, 7);
        var mes_passado = Number(mes_passado);
        var dia_passado = data_passada.substring(8, 11);
        var dia_passado = Number(dia_passado);

        if((ano_passado - ano) < 16){
            return false;
        }else {
            if(){

            }
        }
        return str_data;
    }

    var erro = [];
    var nome = valida_nome();
    erro.push(nome);
    var sexo = valida_sexo();
    erro.push(sexo);
    var email = valida_email();
    erro.push(email);
    var user = valida_user();
    erro.push(user);
    var senha = valida_senha();
    erro.push(senha);
    var tipo_user = valida_tipo_user();
    erro.push(tipo_user);
    var cpf = valida_cpf();
    erro.push(cpf);

    var teste = erro.indexOf(false);

    console.log(teste);

    if (erro.indexOf(false) == '-1') {
        return true;
    } else {
        return false;
    }
}