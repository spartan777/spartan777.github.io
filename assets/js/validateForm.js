$(document).ready(function () {
    var validatorAdd = $('#formRegAlumno').validate({
        rules: {
            nombre: {
                required: true
            },
            apellidoPaterno: {
                required: true
            },
            apellidoMaterno: {
                required: true
            },
            carrera: {
                required: true
            },
            numero_control: {
                required: true
            },
            domicilio: {
                required: true
            },
            email: {
                required: true
            },
            ciudad_residente: {
                required: true
            },
            telefono_residente: {
                required: true
            },
            seguridad_social: {
                required: true
            },
            numero_social: {
                required: true
            },
            password: {
                required: true
            },
            password2: {
                equalTo: "#password"
            }

        }
    });
    
    var validatorAddJefe = $('#formRegJefeCarrera').validate({
        rules: {
            nombre: {
                required: true
            },
            apellidoPaterno: {
                required: true
            },
            apellidoMaterno: {
                required: true
            },
            carrera: {
                required: true
            },
            numero_control: {
                required: true
            },
            email: {
                required: true
            },
            telefono_residente: {
                required: true
            },
            password: {
                required: true
            },
            password2: {
                equalTo: "#password"
            }

        }
    });
    
    var validatorCambiarJefe = $('#rutaCambiarJefe').validate({
        rules: {
            password2: {
                equalTo: "#passwordCambiar"
            }

        }
    });
    
    $("#closeModalCambiarJefe").click(function(){
        validatorCambiarJefe.resetForm();
	$('#modalCambiarJefeCarrera').modal('hide');
        document.getElementById("passwordCambiar").value = "";
        document.getElementById("password2Cambiar").value = "";
    });
    
    var validatorEnvioCorreo = $('#rutaEnviarCorreo').validate({
        rules: {
            asunto:{
               required: true
           },
           mensaje:{
               required: true
           }
        }
    });
    
    $("#cerrarEnvioCorreo").click(function(){
        validatorEnvioCorreo.resetForm();
	$('#modalEnviarCorreo').modal('hide');
        document.getElementById("asunto").value = "";
        document.getElementById("mensaje").value = "";
        document.getElementById("mensaje_succes").innerHTML = "";
        document.getElementById("mensaje_error").innerHTML = "";
    });
    
    var validatorDatosEmpresa = $('#guardarDatosEmpresa').validate({
       rules:{
           nombre_empresa:{
               required: true
           },
           giro_ramo_sector:{
               required: true
           },
           rfc:{
               required: true
           },
           domicilio:{
               required: true
           },
           colonia:{
               required: true
           },
           codigo_postal:{
               required: true
           },
           fax:{
               required: true
           },
           ciudad:{
               required: true
           },
           telefono:{
               required: true
           },
           mision_empresa:{
               required: true
           },
           nombre_titular:{
               required: true
           },
           puesto_titular:{
               required: true
           },
           asesor_externo:{
               required: true
           },
           puesto_asesor:{
               required: true
           },
           nombre_acuerdo_trabajo:{
               required: true
           },
           puesto_acuerdo_trabajo:{
               required: true
           }
       }    
    });
    var validatorDatosProyecto = $('#guardarDatosProyecto').validate({
       rules:{
           lugar:{
               required: true
           },
           fecha:{
               required: true
           },
           jefe_division:{
               required: true
           },
           nombre_proyecto:{
               required: true
           },
           opcion_proyecto:{
               required: true
           },
           periodo:{
               required: true
           },
           numero_residentes:{
               required: true
           }
       }    
    });
});