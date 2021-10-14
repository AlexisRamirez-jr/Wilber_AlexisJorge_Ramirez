/*=============================================
CARGAR LA TABLA DINÁMICA 
=============================================*/
$('.tablaArticulos').DataTable({
  "ajax": "ajax/tablaarticulos.ajax.php",
  "deferRender": true,
  "retrieve": true,
  "processing": true,
  "language": {
      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar _MENU_ registros",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ningún dato disponible en esta tabla",
      "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
      "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix": "",
      "sSearch": "Buscar:",
      "sUrl": "",
      "sInfoThousands": ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
      },
      "oAria": {
          "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
  }
});


/*=============================================
EDITAR 
=============================================*/


$(".tablaArticulos tbody").on("click", ".btnEditarArticulo", function(){

	var id_articulo = $(this).attr("id_articulo");
	var datos = new FormData();

    datos.append("id_articulo", id_articulo);

    $.ajax({

      url:"ajax/articulos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

        $("#modalEditarArticulo .id_articulo").val(respuesta[0]["idArticulo"]);
        $("#modalEditarArticulo .editarCodigo").val(respuesta[0]["codigo"]);
        $("#modalEditarArticulo .editarDescripcion").val(respuesta[0]["descripcion"]);
        $("#modalEditarArticulo .editarLinea").val(respuesta[0]["linea"]);
        $("#modalEditarArticulo .editarPrecio").val(respuesta[0]["precio"]);
        $("#modalEditarArticulo .editarProveedor").val(respuesta[0]["proveedor"]);
    
      /*
		$("#id_articulo").val(respuesta["idArticulo"]);
	  $("#editarCodigo").val(respuesta["codigo"]);
	  $("#editarDescripcion").val(respuesta["descripcion"]);
	  $("#editarLinea").val(respuesta["linea"]);
	  $("#editarPrecio").val(respuesta["precio"]);
	  $("#editarProveedor").val(respuesta["proveedor"]);
    
*/


$("#guardarCambiosArticulo").click(function() {
  var id_articulo = $("#modalEditarArticulo .id_articulo").val();
  var codigo = $("#modalEditarArticulo .editarCodigo").val();
  var descripcion = $("#modalEditarArticulo .editarDescripcion").val();
  var linea = $("#modalEditarArticulo .editarLinea").val();
  var precio = $("#modalEditarArticulo .editarPrecio").val();
  var proveedor = $("#modalEditarArticulo .editarProveedor").val();
  var datosArticulo = new FormData();
  datosArticulo.append("idArticulo", id_articulo);
  datosArticulo.append("codigo", codigo);
  datosArticulo.append("descripcion", descripcion);
  datosArticulo.append("linea", linea);
  datosArticulo.append("precio", precio);
  datosArticulo.append("proveedor", proveedor);
  $.ajax({
      url: "ajax/articulos.ajax.php",
      method: "POST",
      data: datosArticulo,
      cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta) {
          if (respuesta == "ok") {
              swal({
                  type: "success",
                  title: "El articulo ha sido cambiado correctamente",
                  showConfirmButton: true,
                  confirmButtonText: "Cerrar"
              }).then(function(result) {
                  if (result.value) {
                      window.location = "articulos";
                  }
              })
          }
      }
  })
})


	  }

  	})

})




/*=============================================
ELIMINAR 
=============================================*/
/*=============================================
ELIMINAR 
=============================================*/
$('.tablaArticulos tbody').on("click", ".btnEliminarArticulo", function() {
  var id_articulo = $(this).attr("id_articulo");
  swal({
      title: '¿Está seguro de borrar el articulo?',
      text: "¡Si no lo está puede cancelar la accíón!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar articulo'
  }).then(function(result) {
      if (result.value) {
          window.location = "index.php?ruta=articulos&idArticulo=" + id_articulo;
      }
  })
})