function valida_dados() {
    /**
     * Função para validar os Dados do usuário
     */

    var name_class_nome = document.forms['form_cadastro'].campo_nome.className;
    var name_class_sexo = document.forms['form_cadastro'].campo_sexo.className;
    var name_class_email = document.forms['form_cadastro'].campo_conf_email.className;
    var name_class_user = document.forms['form_cadastro'].campo_user.className;
    var name_class_tipo_user = document.forms['form_cadastro'].tipo_user.className;
    var name_class_senha = document.forms['form_cadastro'].campo_conf_senha.className;
        
    if(name_class_nome.match(/is-invalid/)){
        document.forms['form_cadastro'].campo_nome.className = name_class_nome.replace('is-invalid', ' ');
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

    var teste = erro.indexOf(false);

    console.log(teste);

    if (erro.indexOf(false) == '-1') {
        return true;
    } else {
        return false;
    }
    
}