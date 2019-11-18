function verSenha(){
	var tipo = document.getElementById("field_pass");
	if (tipo.type == "password") {
		tipo.type = "text";
		document.getElementById('btn-ver_senha').src = "../img/icons/baseline-visibility_off-24px.svg";
	}else {
		tipo.type = "password";
		document.getElementById('btn-ver_senha').src = "../img/icons/baseline-visibility-24px.svg";
	}
}