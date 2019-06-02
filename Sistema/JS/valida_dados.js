function valida_dados() {
	//Validando nome
    var nome = document.forms['form_cadastro'].campo_nome.value;
	if (/[^a-zA-Z]/.test(nome)) {
		alert("O campo nome deve possuir apenas letras");
		return false;
	}

    //Validando sexo
	var campo_sexo = document.forms["form_cadastro"].campo_sexo;
    var sexo = false;
    for (var i = 0; i < campo_sexo.length; i++) {
    	if (campo_sexo[i].checked == true) {
    		sexo = campo_sexo[i].value;
    		break;
    	}
    }
    if (sexo == false) {
    	alert("O campo 'sexo' deve ser preenchido.");
    	return false;
    }

	return true;
}


