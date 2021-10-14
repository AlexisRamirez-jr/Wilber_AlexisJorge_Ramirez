<?php

require_once "../controladores/administrador.controlador.php";
require_once "../modelos/administrador.modelo.php";

class AjaxAdministrador
{

  
   
    /*=============================================
    EDITAR PERFIL
    =============================================*/

    public $id;

    public function ajaxEditarPerfil()
    {

        $item  = "idUsuario";
        $valor = $this->id;

        $respuesta = ControladorAdministrador::ctrMostrarAdministrador($item, $valor);

        echo json_encode($respuesta);

    }
}

/*=============================================
EDITAR PERFIL
=============================================*/
if (isset($_POST["idPerfil"])) {

    $editar           = new AjaxAdministrador();
    $editar->idPerfil = $_POST["idPerfil"];
    $editar->ajaxEditarPerfil();

}
