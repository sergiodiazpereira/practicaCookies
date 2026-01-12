<?php
    require_once __DIR__.'/config/constantes.php';

    $controlador = $_GET["c"] ?? CONDEF; // Si no se envía controlador por URL, se aplica el controlador por defecto
    $metodo = $_GET["m"] ?? METDEF;  // Lo mismo que el anterior

    $rutaControlador = CONTROLADOR."c".$controlador.".php"; 
    require_once $rutaControlador;

    $instanciaControlador = "C".$controlador; 

    $objContro = new $instanciaControlador();

    $datos=$objContro->$metodo();
    include VISTAS.$objContro->vista;
?>