function validar() {
	"use strict";
  var nombres, apellidos, email, usuario, password, telefono, expresion = "";
	
	nombres = document.getElementById("nombres").value;
	apellidos = document.getElementById("apellidos").value;
	email = document.getElementById("email").value;
	usuario = document.getElementById("usuario").value;
	password = document.getElementById("password").value;
	telefono = document.getElementById("telefono").value;
	
	if (nombres === "") {
		alert("falta nombres. Todos los campos son obligados, alguno esta vacio!");
		return false;
	} else if (apellidos === "") {
		alert("El campo apellidos es requerido");
		return false;
	}
}