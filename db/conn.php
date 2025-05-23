<?php

    try {
        $conn = new PDO(
            'mysql: host=localhost;dbname=firstproject', 
            'root',
            ''
        );
    } catch (PDOException $e) {
        echo 'Hubo error en la conexion a la base de datos:'.$e;
    }

?>