function validar_vacios(tipo) {
    var aux = '';
    if (tipo == 'general') {
        if ($('#nombre_general').val() === '' || $('#nombre_general').val().trim() === '') {
            return false;
        } else if ($('#correo_general').val() === '' || $('#correo_general').val().trim() === '') {
            return false;
        } else if ($("#correo_general").val().indexOf('@', 0) == -1 || $("#correo_general").val().indexOf('.', 0) == -1) {
            return false;
        } else if ($('#mensaje_general').val() === '' || $('#mensaje_general').val().trim() === '') {
            return false;
        } else {
            return true;
        }
    }

    if (tipo == 'proyecto') {
        if ($('#nombre_proyecto').val() === '' || $('#nombre_proyecto').val().trim() === '') {
            return false;
        } else if ($('#empresa_proyecto').val() === '' || $('#empresa_proyecto').val().trim() === '') {
            return false;
        } else if ($('#telefono_proyecto').val().length > 10 || $('#telefono_proyecto').val().length < 10) {
            return false;
        } else if ($.isNumeric($('#telefono_proyecto').val()) === false) {
            return false;
        } else if ($('#correo_proyecto').val() === '' || $('#correo_proyecto').val().trim() === '') {
            return false;
        } else if ($("#correo_proyecto").val().indexOf('@', 0) == -1 || $("#correo_proyecto").val().indexOf('.', 0) == -1) {
            return false;
        } else if ($('#giro_proyecto').val() === '' || $('#giro_proyecto').val().trim() === '') {
            return false;
        } else if ($('#detalles_proyecto').val() === '' || $('#detalles_proyecto').val().trim() === '') {
            return false;
        } else {
            return true;
        }
    }
}

//Función para vaciar los campos
function vaciar() {
    $('#nombre_general').val('');
    $('#correo_general').val('');
    $('#mensaje_general').val('');
    $('#nombre_proyecto').val('');
    $('#empresa_proyecto').val('');
    $('#telefono_proyecto').val('');
    $('#correo_proyecto').val('');
    $("#correo_proyecto").val('');
    $('#giro_proyecto').val('');
    $('#detalles_proyecto').val('');
}

//Función registrar Ajax
function insertar(tabla, campos, tipo) {
    var values = '';
    $('#button').attr("disabled", true);
    $('#button-1').attr("disabled", true);
    if (validar_vacios(tipo) !== false) {
        if (tipo === 'general') {
            values = "'" + $('#nombre_general').val() + "', ";
            values = values + "'" + $('#correo_general').val() + "', ";
            values = values + "'" + $('#mensaje_general').val() + "'";
        } else {
            values = "'" + $('#nombre_proyecto').val() + "', ";
            values = values + "'" + $('#empresa_proyecto').val() + "', ";
            values = values + "'" + $('#telefono_proyecto').val() + "', ";
            values = values + "'" + $('#correo_proyecto').val() + "', ";
            values = values + "'" + $('#giro_proyecto').val() + "', "
            values = values + "'" + $('#detalles_proyecto').val() + "'";
        }
        $.ajax({
            url: "MySQL/inserta.php",
            type: "POST",
            data: {
                values: values,
                tabla: tabla,
                campos: campos,
                tipo: tipo,
                correo: true
            },
            cache: false,
            success: function(dataResult) {
                if (tipo === 'general') {
                    $("#alert-succes").css("display", "block");
                    setTimeout("$('#alert-succes').css('display', 'none');", 5000);
                } else {
                    $("#alert-succes-1").css("display", "block");
                    setTimeout("$('#alert-succes-1').css('display', 'none');", 5000);
                }
                vaciar();
                $('#button').attr("disabled", false);
                $('#button-1').attr("disabled", false);
            }
        });
    } else {
        if (tipo === 'general') {
            $("#alert-fail").css("display", "block");
            setTimeout("$('#alert-fail').css('display', 'none');", 5000);
        } else {
            $("#alert-fail-1").css("display", "block");
            setTimeout("$('#alert-fail-1').css('display', 'none');", 5000);
        }
        $('#button').attr("disabled", false);
        $('#button-1').attr("disabled", false);
    }
}