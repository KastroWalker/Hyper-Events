function valida_titulo() {
	var tam_titulo = document.forms['form_cadastro'].titulo.value.lenght;
	if (tam_titulo <= 5 || tam_titulo >= 100) {
		alert("testando");
		return false;
	}
	return true;
}