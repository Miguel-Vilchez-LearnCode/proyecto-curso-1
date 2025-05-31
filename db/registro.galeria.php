<?php
    session_start();
    // incluir Conexion
    include('conn.php');

    // validar Acceso solo desde el formulario
    if (isset($_POST['name'])) {
        
        //recibir valores del formulario
        $id = null;
        $nombre = $_POST['name'];
        $descripcion = $_POST['desc'];
        $fecha = $_POST['date'];

        if (isset($_FILES['img']) && $_FILES['img'] !== '') {
    
            // sintaxis para obtener el archivo del formulario
            $tmp_name = $_FILES['img']["tmp_name"];
        
            // obtener nombre original del archivo
            $nombreFoto = $_FILES['img']['name'];
        
            // dar nombre y obtener solo la extension del archivo original
            $foto = $nombre.'_'.date('d-m-Y').'.'.pathinfo($nombreFoto, PATHINFO_EXTENSION);
        
            // guardar archivo en un directorio
            if ( move_uploaded_file($tmp_name, "../img/galeria/".$foto)) {
        
                //obtener ruta
                $rutafoto = "img/galeria/".$foto;
            }
            if (empty($rutafoto)) {
                $rutafoto = "img/alumnos/no_foto.png";
            }
        
        }

        //Crear variable que almecene la consulta Sql
        $sql = 'INSERT INTO galeria VALUES (:id, :nombre, :descripcion, :fecha, :img)';
        //Procesar Consulta => $conn->prepare(consulta);
        $ejecutar = $conn->prepare($sql);
        //Limpiar Parametros ->bindParam(':parametro', $dato);
        $ejecutar->bindParam(':id', $id);
        $ejecutar->bindParam(':nombre', $nombre);
        $ejecutar->bindParam(':descripcion', $descripcion);
        $ejecutar->bindParam(':fecha', $fecha);
        $ejecutar->bindParam(':img', $rutafoto);
        //Ejecutar Consulta
        $ejecutar->execute();

        //Validar Ejecucion y Redireccionar
        if ($ejecutar) {

            $_SESSION['mensaje-exito'] = 'Registro Exitoso'; 
            header('location:../formulario.php');
        
        }
        else{
            $_SESSION['mensaje-error'] = 'Registro Fallido'; 
            header('location:../formulario.php');
        }
 }

?>



