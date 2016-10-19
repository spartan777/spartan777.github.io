function confirmarDeleteJefeCarrera(clave_acceso) {
	document.getElementById("tituloEliminarJefe").innerHTML = "Eliminar " + clave_acceso;
	document.getElementById("cuerpoEliminarJefe").innerHTML = "¿Desea eliminar el jefe de carrera: "
			+ clave_acceso + "?";
	document.getElementById("rutaEliminarJefe").href = "delete_jefe_carrera/" + clave_acceso + "";
	$('#modalDeleteJefeCarrera').modal('show');
}

function confirmarCambiarPasJefe(clave_acceso) {
	document.getElementById("tituloCambiarJefe").innerHTML = "Cambiar contraseña del jefe " + clave_acceso;
	document.getElementById("cuerpoCambiarJefe").innerHTML = "Ingrese la nueva contraseña del jefe de carrera: "
			+ clave_acceso + "";
	document.getElementById("rutaCambiarJefe").action = "cambiar_pass_jefe/" + clave_acceso + "";
	$('#modalCambiarJefeCarrera').modal('show');
}

