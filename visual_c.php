<?php
include_once "conexion.php";

class Datos extends db {
    function obtenerDatosUltimos15Dias() {
        // Calcular la fecha de inicio (hoy - 15 días) y la fecha de fin (hoy).
        $fechaFin = date('Y-m-d'); // Fecha actual
        $fechaInicio = date('Y-m-d', strtotime('-15 days', strtotime($fechaFin)));

        $query = $this->conexion()->prepare("SELECT * FROM clientes_sql WHERE fecha BETWEEN :fechaInicio AND :fechaFin");
        
        // Asigna los valores de las fechas a los parámetros de la consulta.
        $query->bindParam(':fechaInicio', $fechaInicio);
        $query->bindParam(':fechaFin', $fechaFin);

        // Ejecuta la consulta preparada.
        $query->execute();

        // Retorna el resultado.
        return $query;
    }
}

// Ejemplo de uso:
$datos = new Datos();
$resultado = $datos->obtenerDatosUltimos15Dias();

?>
