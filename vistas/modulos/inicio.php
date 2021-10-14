<div class="content-wrapper">

  <section class="content-header">

    <h3>
    Articulos
    </h3>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>

      <li class="active"> Articulos</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaArticulos" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Código</th>
           <th>Descripción</th>
           <th>Linea</th>
           <th>Precio</th>
           <th>Proveedor</th>
           
         </tr>

        </thead>

        <tbody>

<?php


  $item = null;
  $valor = null;
  $orden = "idArticulo";

  $articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor, $orden);

  foreach ($articulos as $key => $value) {
    

    echo '<tr>

            <td>'.($key+1).'</td>

            <td>'.$value["codigo"].'</td>

            <td>'.$value["descripcion"].'</td>

            <td>'.$value["linea"].'</td>    
            
            <td>$ '.number_format($value["precio"],2).'</td>

            <td>'.$value["proveedor"].'</td>

            <td>
            </td>

          </tr>';
  
    }

?>


</tbody>

       </table>
      </div>
    </div>




  </section>

</div>
