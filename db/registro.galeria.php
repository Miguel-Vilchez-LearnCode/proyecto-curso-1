<?php

if (isset($_FILES['foto']) && $_FILES['foto'] !== '') {
 
    // sintaxis para obtener el archivo del formulario
    $tmp_name = $_FILES['foto']["tmp_name"];

    // obtener nombre original del archivo
    $nombreFoto = $_FILES['foto']['name'];

    // dar nombre y obtener solo la extension del archivo original
    $foto = $nombre.'_'.$apellido.'_'.$cedula.'_'.date('d-m-Y').'.'.pathinfo($nombreFoto, PATHINFO_EXTENSION);

    // guardar archivo en un directorio
    if ( move_uploaded_file($tmp_name, "../img/alumnos/".$foto)) {

        //obtener ruta
        $rutafoto = "img/alumnos/".$foto;
    }
    if (empty($rutafoto)) {
        $rutafoto = "img/alumnos/no_foto.png";
    }

}
    // incluir Conexion
    // validar Acceso solo desde el formulario
    //recibir valores del formulario
    //Crear variable que almecene la consulta Sql
    //Procesar Consulta => $conn->prepare(consulta);
    //Limpiar Parametros ->bindParam(':parametro', $dato);
    //Ejecutar Consulta
    //Validar Ejecucioin y Redireccionar

?>



