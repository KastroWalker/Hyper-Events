function verSenha(){
	var tipo = document.getElementById("field_pass");
	if (tipo.type == "password") {
		tipo.type = "text";
	}else {
		tipo.type = "password";
	}
}