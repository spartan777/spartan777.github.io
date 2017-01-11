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

function confirmarDeleteDictamen(nombre_archivo) {
	document.getElementById("tituloEliminarDictamen").innerHTML = "Eliminar " + nombre_archivo;
	document.getElementById("cuerpoEliminarDictamen").innerHTML = "¿Desea eliminar el dictamen con nombre: "
			+ nombre_archivo + "?";
	document.getElementById("rutaEliminarDictamen").href = "eliminar_dictamen/" + nombre_archivo + "";
	$('#modalDeleteDictamen').modal('show');
}

function modalContacto(no_control) {
	document.getElementById("divMensaje").innerHTML = "Enviar correo a " + no_control;
        document.getElementById("rutaEnviarCorreo").action = "enviar_correo/" + no_control + "";
	$('#modalEnviarCorreo').modal('show');
}
