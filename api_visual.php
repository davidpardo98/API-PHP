<?php
include_once 'visual.php';

class ApiVisual{
    function getAll(){
        $dato = new Datos();
        $datos = array();
        //$datos['items'] = array();

        $res = $dato->obtenerDatos();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item[] = array(
                    'id' => $row['id'],
                    'num_identificacion' => $row['num_identificacion'],
                    'tipodoc' => utf8_encode($row['tipodoc']),
                    'nombre' => utf8_encode($row['nombre']),
                    'nombre2' => utf8_encode($row['nombre2']),
                    'apellido' => utf8_encode($row['apellido']),
                    'apellido2' => utf8_encode($row['apellido2']),
                    'departamento' => utf8_encode($row['departamento']),
                    'ciudad' => utf8_encode($row['ciudad']),
                    'direccion' => $row['direccion'],
                    'telefono' => $row['telefono'],
                    'email' => utf8_encode($row['email']),
                    'fecha' => $row['fecha'],
                );
                //array_push($datos, $item);

            }
            echo json_encode($item, JSON_UNESCAPED_UNICODE);

        }else{
            echo json_encode(array('mensaje'=> 'No hay datos'));
        }

    }
}

?>