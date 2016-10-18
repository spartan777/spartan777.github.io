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

});