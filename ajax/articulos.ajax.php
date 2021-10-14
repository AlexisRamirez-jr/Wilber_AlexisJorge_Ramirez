<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulo.modelo.php";


class AjaxArticulos
{

			/*=============================================
			TRAER ARTICULOS
			=============================================*/

			public $id_articulo;

			public function ajaxTraerArticulo()
			{

				$item  = "idArticulo";
				$valor = $this->id_articulo;

				$respuesta = ControladorArticulos::ctrMostrarArticulos($item, $valor);

				echo json_encode($respuesta);

			}

			/*=============================================
			EDITAR 
			=============================================*/	

			public function ajaxEditarArticulo()
			{
		
				$datos = array(
					"codigo"  => $this->codigo,
					"descripcion" => $this->descripcion,
					"linea"  => $this->linea,
					"precio"   => $this->precio,
					"proveedor" => $this->proveedor,
				
				);
		
				$respuesta = ControladorArticulos::ctrEditarArticulos($datos);
		
				echo $respuesta;
		
			}

}

if (isset($_POST["id_articulo"])) {

    $traerArticulo = new AjaxArticulos();
    $traerArticulo->id_articulo = $_POST["id_articulo"];
    $traerArticulo->ajaxTraerArticulo();

}




/*=============================================
EDITAR 
=============================================*/
if (isset($_POST["idArticulo"])) {

    $editarArticulo = new AjaxArticulos();
    $editarArticulo->idArticulo = $_POST["idArticulo"];
    $editarArticulo->codigo = $_POST["codigo"];
    $editarArticulo->descripcion = $_POST["descripcion"];
    $editarArticulo->linea  = $_POST["linea"];
    $editarArticulo->precio = $_POST["precio"];
    $editarArticulo->proveedor = $_POST["proveedor"];
    $editarArticulo->ajaxEditarArticulo();

}