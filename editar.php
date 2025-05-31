<?php
    session_start();

    include('db/conn.php');

    $id = 2;

    $sql = 'SELECT * FROM galeria WHERE id = :id';
    $ejecutar = $conn->prepare($sql);
    $ejecutar->bindParam(':id', $id);
    $ejecutar->execute();

    $imagen = $ejecutar->fetch(PDO::FETCH_ASSOC);

    print_r($imagen);

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

            <input type="text" value="<?= $imagen['nombre'] ?>" name="name" placeholder="nombre" id="nombre"><br><br>
            <input type="text" value="<?= $imagen['descrip'] ?>" placeholder="descripcion" name="desc"><br><br>
            <input type="date" value="<?= $imagen['fecha'] ?>" placeholder="fecha" name="date"><br><br>
            <input type="hidden" value="<?= $imagen['id'] ?>" name="id">
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