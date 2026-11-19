<?php
    require 'configdb.php';

    $sql = 'SELECT * FROM ciudades';
    $resultado = $conexion->query($sql);
    
    if ($resultado->rowCount() > 0) {

        // Fila a fila (while)
        echo 'Ciudades guardadas: <br/>';
        while ($ciudad = $resultado->fetch()) {
            echo $ciudad[0] . '. ' . $ciudad["nombre"];
            echo '<br>';
        }
        
        // Todas las filas de golpe (foreach)
        /*$filas = $resultado->fetchAll();

        foreach ($filas as $ciudad) {
            echo $ciudad[0] . '. ' . $ciudad["nombre"];
            echo "<br/>";
        }*/
    }

    else {
        echo "No hay ciudades guardadas";
    }
?>