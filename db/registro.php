<?php
    // incluir conexion
    include('conn.php');

    // condicional -> validar desde un formulario
    if ($_POST['nombre']) {
        
        // recibir campos del formulario de registro
        $id = null;
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $user = $_POST['user'];
        $password = $_POST['clave'];

        // variable -> consulta sql
        $sql = 'INSERT INTO user VALUES (:id, :nombre, :apellido, :user, :pass)';
        
        // Ejecucion de la consulta Sql
        $ejecutarSql = $conn->prepare($sql);
        // Limpiar los Parametros o argumentos
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