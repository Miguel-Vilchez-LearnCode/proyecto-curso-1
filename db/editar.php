<?php
    session_start();
    // incluir Conexion
    include('conn.php');

    // validar Acceso solo desde el formulario
    if (isset($_POST['name'])) {
        
        //recibir valores del formulario
        $id = $_POST['id'];
        $nombre = $_POST['name'];
        $descripcion = $_POST['desc'];
        $fecha = $_POST['date'];

        //Crear variable que almecene la consulta Sql
        $sql = 'UPDATE galeria SET nombre = :nombre, descrip = :descripcion, fecha = :fecha WHERE id = :id';
        //Procesar Consulta => $conn->prepare(consulta);
        $ejecutar = $conn->prepare($sql);
        //Limpiar Parametros ->bindParam(':parametro', $dato);
        $ejecutar->bindParam(':id', $id);
        $ejecutar->bindParam(':nombre', $nombre);
        $ejecutar->bindParam(':descripcion', $descripcion);
        $ejecutar->bindParam(':fecha', $fecha);
        //Ejecutar Consulta
        $ejecutar->execute();

        //Validar Ejecucion y Redireccionar
        if ($ejecutar) {

            $_SESSION['mensaje-exito'] = 'Registro Exitoso'; 
            header('location:../dashboard.php');
        
        }
        else{
            $_SESSION['mensaje-error'] = 'Registro Fallido'; 
            header('location:../dashboard.php');
        }
 }

?>



