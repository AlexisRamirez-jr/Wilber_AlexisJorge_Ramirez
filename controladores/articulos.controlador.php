<?php

class ControladorArticulos{

	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarArticulos($item, $valor){

		$tabla = "articulos";

		$respuesta = ModeloArticulos::mdlMostrarArticulos($tabla, $item, $valor);

		return $respuesta;

	}



	/*=============================================
	CREAR ARTICULO
	=============================================*/

	static public function ctrCrearArticulo(){

		if(isset($_POST["nuevoCodigo"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCodigo"]) &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"])  &&
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaLinea"])  &&
			
			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoProveedor"]) ){

			   	$tabla = "articulos";

			   	$datos = array("codigo"=>$_POST["nuevoCodigo"],
					           "descripcion"=>$_POST["nuevaDescripcion"],
					           "linea"=>$_POST["nuevaLinea"],
					           "precio"=>$_POST["nuevoPrecio"],
					           "proveedor"=>$_POST["nuevoProveedor"]);

			   	$respuesta = ModeloArticulos::mdlIngresarArticulo($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "articulos";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "articulos";

							}
						})

			  	</script>';



			}

		}

	}



	static public function ctrEditarArticulos($datos){

		//if(isset($_POST["editarCodigo"])){
			if (isset($datos["id_articulo"])) {
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $datos["codigo"]) 
				&& preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcion"])
				&& preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $datos["linea"]) 
				&& preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $datos["proveedor"]) 
				){
		//	if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCodigo"]) &&
		//	preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
			//preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarLinea"]) && 
			//preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarProveedor"])
			//   ){

			   	$tabla = "articulos";

			   	$datosArticulo = array("idArticulo"=>$_POST["id_articulo"],
				   "codigo"=>$_POST["editarCodigo"],
				   "descripcion"=>$_POST["editarDescripcion"],
				   "linea"=>$_POST["editarLinea"],
				   "precio"=>$_POST["editarPrecio"],
				   "proveedor"=>$_POST["editarProveedor"]);

			   	$respuesta = ModeloArticulos::mdlEditarArticulos($tabla, $datosArticulo);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "articulos";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "articulos";

							}
						})

			  	</script>';



			}

		}

	}


	

	/*=============================================
	BORRAR 
	=============================================*/
	static public function ctrEliminarArticulo(){

		if(isset($_GET["id_articulo"])){

		//	$tabla ="articulos";
			$datos = $_GET["id_articulo"];

			$respuesta = ModeloArticulos::mdlEliminarArticulo("articulos", $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El registro ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "articulos";

								}
							})

				</script>';

			}		

		}

	}





}