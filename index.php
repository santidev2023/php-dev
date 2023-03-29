<?php

require_once "controlador/plantilla.controlador.php";
require_once "controlador/usuario.controlador.php";
require_once "controlador/roles.controlador.php";

require_once "modelo/usuario.modelo.php";
require_once "modelo/roles.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();