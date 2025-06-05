<?php
    session_start();
    include('conn.php');

    if (isset($_POST['id'])) {
        
        $id = $_POST['id'];
        
        // obtener la ruta de la imagen
        $sqlImg = 'SELECT imgRut FROM galeria WHERE id ='.$id;
        $ejecutarImg = $conn->query($sqlImg);
        $img = $ejecutarImg->fetch(PDO::FETCH_ASSOC);

        unlink('../'.$img['imgRut']);
        
        $sql = 'DELETE FROM galeria WHERE id = :id';
        
        $ejecutar = $conn->prepare($sql);
        $ejecutar->bindParam(':id', $id, PDO::PARAM_INT);
        $ejecutar->execute();

        if ($ejecutar) {
            $_SESSION['eliminar'] = 'no vacio';
            header('location:../dashboard.php');
        }else{
            $_SESSION['eliminar-error'] = 'no vacio';
            header('location:../dashboard.php');
        }
    }
?>