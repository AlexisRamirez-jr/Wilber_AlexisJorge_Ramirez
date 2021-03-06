

$(".tablaPerfiles").on("click", ".btnActivar", function() {
    //alert("hola");
    var idPerfil = $(this).attr("idPerfil");
    var estadoPerfil = $(this).attr("estadoPerfil");
    var datos = new FormData();
    datos.append("activarId", idPerfil);
    datos.append("activarPerfil", estadoPerfil);
    $.ajax({
        url: "ajax/administrador.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {
            //alert(respuesta);
            console.log("respuesta", respuesta);
        }
    })
    if (estadoPerfil == 0) {
        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html('Desactivado');
        $(this).attr('estadoPerfil', 1);
    } else {
        $(this).addClass('btn-success');
        $(this).removeClass('btn-danger');
        $(this).html('Activado');
        $(this).attr('estadoPerfil', 0);
    }
})
/*=============================================
EDITAR PERFIL
=============================================*/
$(".tablaPerfiles").on("click", ".btnEditarPerfil", function() {
    var idPerfil = $(this).attr("idPerfil");
    var datos = new FormData();
    datos.append("idPerfil", idPerfil);
    $.ajax({
        url: "ajax/administrador.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#editarNombre").val(respuesta["nombre"]);
            $("#idPerfil").val(respuesta["id"]);
            $("#editarEmail").val(respuesta["email"]);
            $("#editarPerfil").html(respuesta["perfil"]);
            $("#editarPerfil").val(respuesta["perfil"]);
            $("#fotoActual").val(respuesta["foto"]);
            $("#passwordActual").val(respuesta["password"]);
            if (respuesta["foto"] != "") {
                $(".previsualizar").attr("src", respuesta["foto"]);
            }
        }
    })
})
/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".tablaPerfiles").on("click", ".btnEliminarPerfil", function() {
    var idPerfil = $(this).attr("idPerfil");
    var fotoPerfil = $(this).attr("fotoPerfil");
    swal({
        title: '??Est?? seguro de borrar el perfil?',
        text: "??Si no lo est?? puede cancelar la acc????n!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar perfil!'
    }).then(function(result) {
        if (result.value) {
            window.location = "index.php?ruta=perfil&idPerfil=" + idPerfil + "&fotoPerfil=" + fotoPerfil;
        }
    })
})