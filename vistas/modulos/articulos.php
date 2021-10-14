
<div class="content-wrapper">

      <section class="content-header">

        <h3>
          Administrar Articulos
        </h3>

        <ol class="breadcrumb">

          <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>

          <li class="active"> Administrar Articulos</li>

        </ol>

      </section>
</div>



<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-header">

                              <div class="row">
                                  <div class="col-md-9">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArticulo">
                                            Nuevo Articulo
                                      </button>
                                  </div>
                                
                              </div>



                              <div class="col-md-10">
                                <center><strong class="card-title">Articulos</strong></center>
                              </div>
                            </div>
                            <div class="card-body">
                                <table  class="table table-striped table-bordered tablaArticulos" id="tablaArticulos">
                                      <thead>
                                            <tr>
                                              <th style="width:10px">#</th>
                                              <th>Código</th>
                                              <th>Descripción</th>
                                              <th>Linea</th>
                                              <th>Precio</th>
                                              <th>Proveedor</th>
                                              <th>Acciones</th>
                                            </tr>
                                      </thead>

                                      <tbody>

                                      </tbody>
                                      
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
</div><!-- .content -->



<!--=====================================
MODAL AGREGAR 
======================================-->
<div class="modal fade modalAgregarArticulo" id="modalAgregarArticulo" name="modalAgregarArticulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar articulo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL CODIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar codigo" required>

              </div>

            </div>

            <!-- ENTRADA PARA DESCRIPCION -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-bars"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripcion" required>

              </div>

            </div>


            <!-- ENTRADA PARA LINEA -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-star"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaLinea" placeholder="Ingresar linea" required>

              </div>

            </div>

              <!-- ENTRADA PARA EL PRECIO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-usd"></i></span> 

                <input type="decimal" class="form-control input-lg" name="nuevoPrecio" placeholder="Ingresar precio" required>

              </div>

            </div>
  
              <!-- ENTRADA PARA PROVEEDOR -->
            
              <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-plus"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoProveedor" placeholder="Ingresar proveedor" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar articulo</button>

        </div>

      </form>

        <?php

        $crearArticulo = new ControladorArticulos();
        $crearArticulo -> ctrCrearArticulo();

        ?>
    </div>
  </div>
</div>




<!-- MODAL EDIATAR PRODUCTO-->
<div class="modal fade modalEditarArticulo" id="modalEditarArticulo" name="modalEditarArticulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <center><h5 class="modal-title" id="exampleModalLabel">Editar articulo</h5></center>
      </div>
      <div class="modal-body">
       <form method="post">


         <input type="hidden" class="id_articulo"  id="id_articulo" name="id_articulo">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Codigo</span>
          </div>
          <input type="text" class="form-control editarCodigo" placeholder="Codigo" aria-label="Username" aria-describedby="basic-addon1" id="editarCodigo">
        </div>

         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Descripcion</span>
          </div>
          <input type="text" class="form-control editarDescripcion" id="editarDescripcion" name="descripcion" placeholder="Descripcion" aria-label="Username" aria-describedby="basic-addon1">
        </div>

         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Linea</span>
          </div>
          <input type="text" class="form-control editarLinea" id="editarLinea" name="editarLinea" placeholder="Linea" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text precio" id="basic-addon3">Precio</span>
          </div>
          <input type="decimal" class="form-control editarPrecio" name="editarPrecio" id="editarPrecio" aria-describedby="basic-addon3">
        </div>
        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Proveedor</span>
          </div>
          <input type="text" class="form-control editarProveedor" name="editarProveedor" id="editarProveedor" placeholder="Proveedor" aria-label="Username" aria-describedby="basic-addon1">
        </div>
       
       </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary guardarCambiosArticulo" id="guardarCambiosArticulo">Guardar</button>
      </div>
    </div>
  </div>
</div>



<?php

$eliminarArticulo = new ControladorArticulos();
$eliminarArticulo -> ctrEliminarArticulo();

?>