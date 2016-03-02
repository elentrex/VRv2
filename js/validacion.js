function validacion(){
	nombre=document.getElementById("nombre").value;
	if (nombre == null || nombre.length==0 || /^\s+$/.test(nombre)) {
		alert("Error: Debe introducir el nombre")
		document.formular.nombre.focus()
		return false;
	};

	email=document.getElementById("email").value;
	expr=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!expr.test(email)) {
		alert("Error: La dirección de correo "+email+"es incorrecta.");
		document.formular.email.focus()
		return false;
	};

	/*telefono=document.getElementById("telefono").value;
	if (!(/^\d{9}$/.test(telefono))) {
		alert("Error: El numero de telefono es incorrecto");
		document.formular.telefono.focus()
		return false;
	};*/

	alert("Se realizo exitosamente su registro");
	location.href="../VRv2.3/index.php";
}