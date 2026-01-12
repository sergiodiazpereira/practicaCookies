<?php
    require_once __DIR__.'/../config/conexion.php';

    class MInicio extends Conexion{

        function __construct(){
            parent::__construct();
            
        }

        public function obtenerDatosMinijuegos(){
            $sql = 'SELECT * FROM minijuegos';
            $resultado = $this->conexion->query($sql);
            
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }
?>