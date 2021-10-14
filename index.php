<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/administrador.controlador.php";
require_once "controladores/articulos.controlador.php";


require_once "modelos/administrador.modelo.php";
require_once "modelos/articulo.modelo.php";
require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
