<?php

    include('conn.php');

    if ($_POST['nombre']) {
        
        $id = null;
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $user = $_POST['user'];
        $password = $_POST['clave'];

        $sql = 'INSERT INTO user VALUES (:id, :nombre, :apellido, :user, :pass)';
        $ejecutarSql = $conn->prepare($sql);
        $ejecutarSql->bindParam(':id',$id);
        $ejecutarSql->bindParam(':nombre',$nombre );
        $ejecutarSql->bindParam(':apellido',$apellido );
        $ejecutarSql->bindParam(':user',$user );
        $ejecutarSql->bindParam(':pass',$password );
        $ejecutarSql->execute();

        if ($ejecutarSql) {
            session_start();
            $_SESSION['Correcto']= true;

            header('location:../login.php');
        }
        else {
            echo 'Error al ejecutar la consulta SQL';
        }
    }

?>