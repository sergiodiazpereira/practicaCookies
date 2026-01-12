<?php
    require_once __DIR__.'/../config/conexion.php';

    class MMinijuego extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function obtenerNombreMinijuego($id){
            $sql = 'SELECT * FROM minijuegos WHERE idMinijuego = ?';
            $stmt = $this->conexion->prepare($sql);

            $stmt->bind_param("i", $id);
            $stmt->execute();

            $resultado = $stmt->get_result();
            
            return $resultado->fetch_assoc();
        }
    }
?>