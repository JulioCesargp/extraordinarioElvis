<?php 

require_once "controller/plantilla-controller.php";

require_once "controller/formularios-controlador.php";
require_once "model/formularios.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla -> TraerPlantilla();