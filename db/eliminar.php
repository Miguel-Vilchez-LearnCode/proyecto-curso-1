<?php
    session_start();
    include('conn.php');

    if (isset($_POST['id'])) { 
        
        $id = $_POST['id'];

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