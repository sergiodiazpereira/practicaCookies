<?php
    require_once __DIR__ . '/../modelos/mInicio.php';

    class CInicio {
        public $vista;
        public $datos;
        private $modelo;

        public function __construct() {
            $this->modelo = new MInicio();
        }

        public function cargarPagina() {
            $minijuegos = $this->modelo->obtenerDatosMinijuegos();

            if (isset($_COOKIE['ultimosJuegos'])){
                $ultimosMinijuegos = json_decode($_COOKIE['ultimosJuegos'], true);
            } else {
                $ultimosMinijuegos = [];
            }
            
            $this->datos = [
                "minijuegosTotales" => $minijuegos,
                "ultimosJugados" => $ultimosMinijuegos
            ];

            $this->vista = "vInicio.php";
            return $this->datos; // Retorno los datos
        }
    }
?>