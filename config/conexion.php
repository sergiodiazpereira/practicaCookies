<?php
    require_once __DIR__.'/../config/configdb.php';

    class Conexion{
        protected $conexion;

        function __construct(){

            try{
                $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
            }catch(mysqli_sql_exception $e){
                echo $e->getMessage();
            }
            
        }
    }
?>