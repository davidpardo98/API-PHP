<?php
include_once "conexion.php";

class Datos extends db {
    function obtenerDatos() {
        // Consulta para obtener todos los registros de la tabla.
        $query = $this->conexion()->prepare("SELECT * FROM clientes_sql");

        // Ejecuta la consulta.
        $query->execute();

        // Retorna el resultado.
        return $query;
    }
}

// Ejemplo de uso:
$datos = new Datos();
$resultado = $datos->obtenerDatos();

?>
