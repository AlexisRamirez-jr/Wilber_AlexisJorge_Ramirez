<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="vistas/img/plantilla/logo.jpg" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post">
                        <div class="form-group">
                            <label class="fa fa-envelope"> Usuario</label>
                            <input type="email" class="form-control" id="ingresousuario" name="ingresousuario" placeholder="Ingrese su usuario" required>
                        </div>
                        <div class="form-group">
                            <label class="fa fa-lock"> Contraseña</label>
                            <input type="password" class="form-control" id="ingresarContrasenia" name="ingresarContrasenia" placeholder="Ingrese su contraseña" required>
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Ingresar</button>
                        <?php
        $login = new ControladorAdministrador();
        $login->ctrIngresoAdministrador();

        ?>
            <br>
            <br>
        
        </form>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPerfil">
          Registrarse
        </button>
      <!--=====================================
      MODAL AGREGAR ADMINISTRADOR
      ======================================-->

      <div id="modalAgregarPerfil" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <div class="modal-content">

          <form role="form" method="post" enctype="multipart/form-data">

            <!--=====================================
            CABEZA DEL MODAL
            ======================================-->

            <div class="modal-header" style="background:#CAC7C7; color:white">

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              <h4 class="modal-title">Agregar Usuario</h4>

            </div>

            <!--=====================================
            CUERPO DEL MODAL
            ======================================-->

            <div class="modal-body">

              <div class="box-body">

                <!-- ENTRADA PARA EL USUARIO -->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                    <input type="email" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" id="nuevoUsuario" required>

                  </div>

                </div>

                <!-- ENTRADA PARA LA CONTRASEÑA -->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                    <input type="password" class="form-control input-lg" name="nuevaContraseña" placeholder="Ingresar contraseña" required>

                  </div>

                </div>

            <!--=====================================
            PIE DEL MODAL
            ======================================-->

            <div class="modal-footer">

              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

              <button type="submit" class="btn btn-primary">Guardar Usuario</button>

            </div>

            <?php

      $crearPerfil = new ControladorAdministrador();
      $crearPerfil->ctrCrearPerfil();
      ?>

                    </form>



                </div>
            </div>
        </div>
    </div>
