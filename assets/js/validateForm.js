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

    $("#cerrarModalAdd").click(function () {
        validatorAdd.resetForm();
        $('#modalAgregar').modal('hide');
        document.getElementById("claveAdd").value = "";
        document.getElementById("nombreAdd").value = "";
        document.getElementById("ubicacionAdd").value = "";
        document.getElementById("telefonoAdd").value = "";
    });
});