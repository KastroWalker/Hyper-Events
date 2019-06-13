function valida_dados() {
    /**
     * Função para validar os Dados do usuário
     */
    function valida_nome(){
        /**
         * Função para validar o Nome do usuário
         */
        var nome = document.forms['form_cadastro'].campo_nome.value;
        var nome = nome.replace( /\s/g, '' );
        var nome_invalido = document.getElementById("nome_invalido");
        if (/[^a-zA-Z]/.test(nome)) {
            nome_invalido.style.display = "block";
            form_cadastro.campo_nome.focus();
            /*alert("O campo nome deve possuir apenas letras");*/
            return false;
        } else {
            nome_invalido.style.display = "none";
        }

        return true;
    }

    function valida_sexo(){
        /**
         * Função para validar o sexo do usuário
         */
        var campo_sexo = document.forms["form_cadastro"].campo_sexo;
        var sexo = false;
        var sexo_invalido = document.getElementById("sexo_invalido");
        for (var i = 0; i < campo_sexo.length; i++) {
            if (campo_sexo[i].checked == true) {
                sexo = campo_sexo[i].value;
                break;
            }
        }
        if (sexo == false) {
            sexo_invalido.style.display = "block";
            //alert("O campo 'sexo' deve ser preenchido.");
            return false;
        }else{
            sexo_invalido.style.display = "none";
        }

        return true;
    }

    function valida_email() {
        /**
         * Função para verificar se os e-mails passados são iguais
         */
        var email = document.forms['form_cadastro'].campo_email.value;
        var conf_email = document.forms['form_cadastro'].campo_conf_email.value;
        var email_diferente = document.getElementById("conf_email_invalido");
        if (email != conf_email) {
            email_diferente.style.display = "block";
            form_cadastro.campo_email.focus();
            return false;
        } else {
            email_diferente.style.display = "none";
        }

        return true;
    }

    function valida_user() {
        /**
         * Função para validar o nome de usuário
         */
        var user = document.forms['form_cadastro'].campo_user.value;
        var user_invalido = document.getElementById("user_invalido");
        
        function isNumeric(str) {
            var er = /^[0-9]+$/;
            return (er.test(str));
        }
        
        var number = user.substring(0,1);
        var number = isNumeric(number);

        if(number) {
            user_invalido.style.display = "block";
            form_cadastro.campo_user.focus();
            return false;
        } else {
            user_invalido.style.display = "none";
        }

        return true;
    }

    function valida_senha() {
        /**
         * Função para verificar se a senha do usuário são iguais
         */
        var senha = document.forms['form_cadastro'].campo_senha.value;
        var conf_senha = document.forms['form_cadastro'].campo_conf_senha.value;
        var senha_diferente = document.getElementById("conf_senha_invalido");
        if (senha != conf_senha) {
            senha_diferente.style.display = "block";
            form_cadastro.campo_senha.focus();
            return false;
        } else {
            senha_diferente.style.display = "none";
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

    var teste = erro.indexOf(false);

    console.log(teste);

    if (erro.indexOf(false) == '-1') {
        return true;
    } else {
        return false;
    }
    
}