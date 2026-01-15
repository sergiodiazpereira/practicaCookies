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



        public function generarPDF() {
            $datos = $this->modelo->obtenerDatosMinijuegos();

            define('FPDF_FONTPATH','fpdf186/font/');
            require('fpdf186/fpdf.php');

            $pdf=new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',16);
            $pdf->Write(20, 'Lista de minijuegos en la base de datos:');

            
            $pdf->Ln(50); // Salto de línea para separar el título de la tabla

            foreach($datos as $minijuego){
                $pdf->Cell(40, 8, $minijuego["idMinijuego"], 1, 0, 'C');
                $pdf->Cell(150, 8, utf8_decode($minijuego["nombreMinijuego"]), 1, 1, 'L'); // utf8 decode para que acepte las tildes
            }
            
            $pdf->Output("Lista de minijuegos", "I");
        }
    }
?>