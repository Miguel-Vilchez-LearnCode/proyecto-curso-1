<?php
    session_start();

    if(isset($_SESSION['sesion'])){
        $id = $_SESSION['sesion'];
    }else{
        header('location:login.php');
    }

    include('db/conn.php');

    $sqlUsuario = 'SELECT * FROM user WHERE id ='.$id;
    $ejecutarUser = $conn->query($sqlUsuario);
    $Usuario = $ejecutarUser->fetch(PDO::FETCH_ASSOC);

    $namePage = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <?php include('navBarDash.html'); ?>  
    <br><br><br><br><hr>
    <!-- titulo -->
    <h1 style="color:#b48400; text-align: center; font-size: 30pt; font-family: cursive; font-weight: normal;">Formulario</h1>

    <hr style="width: 5%; margin-top: 10px;">    

    <!-- formulario -->
    <section class="contenido-formulario" style="width:100%">

        <img src="img/lobo7.png" class="img-fluid" alt="">

        <form action="db/editar.php" method="post" class="contenido-center">

            <label>Nombre:</label>
            <input required type="text" name="nombre" placeholder="Nombre"><br>    
            <label>Apellido:</label>
            <input required type="text" placeholder="Apellido" name="apellido"><br>
            <label>Nombre de Usuario:</label>
            <input required type="text" placeholder="Nombre de Usuario" name="user"><br>
            <label>Contrasenha:</label>
            <input required type="password" placeholder="Contrasenha" name="clave"><br>
            <center><button type="submit" class="boton-oro negro boton">Editar</button></center>

        </form>

        <img src="img/leon1.png" class="img-fluid" alt="">
        
    </section>

    <?php if(!empty($mensajeExito)){ ?>    
        <script>
            alert('Registro Exitoso');
        </script>
    <?php } ?>
    
    <?php if(!empty($mensajeError)){ ?>    
        <script>
            alert('No se pudo Registrar la Imagen');
        </script>
    <?php } ?>

</body>
</html>