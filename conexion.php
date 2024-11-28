<?php

class db{
    public function conexion(){
        
        $contraseña= "";
        $usuario= "";
        $basedatos= "";
        $servidor= "localhost";

        try {
            $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos", $usuario, $contraseña);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (Exception $e) {
            echo "Error en la base de datos: ".$e->getMessage();
        }
    }
}
?>