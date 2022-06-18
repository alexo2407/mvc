<?php 

/* controladores */
require_once "controlador/plantilla.php";
require_once "controlador/enlaces.php";

/* modelos */
require_once "modelo/enlaces.php";
require_once "modelo/articulo.php";



//instanciamos la clase plantilla para invocarla

$plantilla = new PlantillaController();
//aqui se muestra la plantilla principal
$plantilla->plantilla();



