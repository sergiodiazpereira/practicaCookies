<?php
    require_once __DIR__ . '/../modelos/mMinijuego.php';

    class CMinijuego {
        public $vista;
        private $modelo;

        public function __construct() {
            $this->modelo = new MMinijuego();
        }

        public function cargarPagina() {
            $this->vista = "vMinijuego.php"; 
        }

        public function registrarAccion() {
            if (isset($_COOKIE['ultimosJuegos'])){
                $ultimosJuegos = json_decode($_COOKIE['ultimosJuegos'], true); // El true del final indica que queremos que devuelva un array asociativo en lugar de un objeto
            } else{
                $ultimosJuegos = [];  // Si este juego es el primero (no hay juegos jugados recientemente), se crea el array
            }

            $minijuego = $this->modelo->obtenerNombreMinijuego($_GET["id"]);

            array_unshift($ultimosJuegos, ['idMinijuego' => $_GET["id"], 'nombreMinijuego' => $minijuego["nombreMinijuego"]]); // Se añade el minijuego al inicio del array

            $ultimosJuegos = array_slice($ultimosJuegos, 0, 3); // Limite de 3 (los más recientes)

            setcookie('ultimosJuegos', json_encode($ultimosJuegos), time() + 86400, "/"); // Cookie que caduca en 1 hora (3600 segundos)
            header("Location: index.php");
        }
    }
?>