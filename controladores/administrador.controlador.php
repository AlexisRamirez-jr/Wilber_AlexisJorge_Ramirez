<?php

class ControladorAdministrador
{


    
    public function ctrIngresoAdministrador()
    {
        if (isset($_POST["ingresousuario"])) {

            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["ingresousuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresarContrasenia"])) {

                $encriptarnew = crypt($_POST["ingresarContrasenia"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $tabla = "Usuarios";
                $item  = "usuario";
                $valor = $_POST["ingresousuario"];

                $respuesta = ModeloAdministrador::mdlMostrarAdministrador($tabla, $item, $valor);
                $user = $respuesta["usuario"];
                if ($respuesta != Null) {
                    if ($respuesta["usuario"] == $_POST["ingresousuario"] && $respuesta["contrasenia"] == $encriptarnew) {

                    $_SESSION["validarSesionBackend"] = "ok";
                    $_SESSION["usuario"] = $user;

                        echo '<script>

                            window.location = "inicio";

                        </script>';

                    } else {

                        echo '<br>
                        <div class="alert alert-warning">Error al ingresar vuelva a intentarlo</div>';

                    }

                } else {

                    echo '<br>
                    <div class="alert alert-danger">No hay usuarios Registrados</div>';

                }


            }
        }
    }

    /*=============================================
    MOSTRAR ADMINISTRADORES
    =============================================*/

    public static function ctrMostrarAdministrador($item, $valor)
    {

        $tabla = "Usuarios";

        $respuesta = ModeloAdministrador::mdlMostrarAdministrador($tabla, $item, $valor);

        return $respuesta;
    }

/*=============================================
REGISTRO DE NUEVO ADMINISTRADOR
=============================================*/

    public static function ctrCrearPerfil()
    {

        if (isset($_POST["nuevoUsuario"])) {

           // if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevaContraseña"])) {
            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoUsuario"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevaContraseña"])) {

                $tabla = "Usuarios";

                $encriptar = crypt($_POST["nuevaContraseña"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $datos = array("usuario" => $_POST["nuevoUsuario"],
                    "contrasenia" => $encriptar);

                $respuesta = ModeloAdministrador::mdlIngresarPerfil($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

                    swal({

                        type: "success",
                        title: "¡El perfil ha sido guardado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value){

                            window.location = "login";

                        }

                    });


                    </script>';

                }

            } else {

                echo '<script>

                    swal({

                        type: "error",
                        title: "¡El perfil no puede ir vacío o llevar caracteres especiales!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value){

                            window.location = "login";

                        }

                    });


                </script>';

            }

        }

    }
}
