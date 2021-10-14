<?php
require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulo.modelo.php";

class TablaArticulos
{
    /*=============================================
    MOSTRAR LA TABLA DE PRODUCTOS
    =============================================*/
    public function mostrarTablaArticulos()
    {
        $item  = null;
        $valor = null;
        $articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

        if (count($articulos)) {
            $datosJson = '{
                "data":[';
            for ($i = 0; $i < count($articulos); $i++) {

                if ($articulos[$i]["precio"] == 0) {
                    $precio = "0";
                } else {
                    $precio = "$ " . number_format($articulos[$i]["precio"], 2);
                }

                /*=============================================
                TRAER LAS ACCIONES
                =============================================*/
                $acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarArticulo' id_articulo='" . $articulos[$i]["idArticulo"] . "' data-toggle='modal' data-target='#modalEditarArticulo'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarArticulo' id_articulo='" . $articulos[$i]["idArticulo"] . "'><i class='fa fa-times'></i></button></div>";
                /*=============================================
                CONSTRUIR LOS DATOS JSON
                =============================================*/
                $datosJson .= '[
                    "' . ($i + 1) . '",
                    "' . $articulos[$i]["codigo"] . '",
                    "' . $articulos[$i]["descripcion"] . '",
                    "' . $articulos[$i]["linea"] . '",
                    "' . $precio . '",
                    "' . $articulos[$i]["proveedor"] . '",
                    "' . $acciones . '"
                ],';
        }
        $datosJson = substr($datosJson, 0, -1);
        $datosJson .= ']
        }';
       echo $datosJson;} 
     
        else {
        echo '{"data":[]}';
        return;}
    }
}

/*=============================================
ACTIVAR TABLA 
=============================================*/
$traerArticulos = new TablaArticulos();
$traerArticulos->mostrarTablaArticulos();
