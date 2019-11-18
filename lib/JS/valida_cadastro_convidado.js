function valida_nome() {
    /**
     * Função para validar o Nome do usuário
     * Criada por Victor Castro
     */
    var name_class_nome = document.forms['form_cadastro'].campo_nome.className;

    if (name_class_nome.match(/is-invalid/)) {
        document.forms['form_cadastro'].campo_nome.className = name_class_nome.replace('is-invalid', ' ');
    }

    var nome = document.forms['form_cadastro'].campo_nome.value;
    var nome = nome.replace(/\s/g, '');
    var name_class = document.forms['form_cadastro'].campo_nome.className;
    if (/[^a-zA-Z]/.test(nome)) {
        var new_name_class = name_class + ' is-invalid';
        document.forms['form_cadastro'].campo_nome.className = new_name_class;
        form_cadastro.campo_nome.focus();
        return false;
    }
    return true;
}