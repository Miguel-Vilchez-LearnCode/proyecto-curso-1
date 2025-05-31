<?php
    session_start();

    $mensajeError = '';
    $mensajeExito = '';

    if (isset($_SESSION['mensaje-exito'])) {
        $mensajeExito = $_SESSION['mensaje-exito'];
        unset($_SESSION['mensaje-exito']);
    }
    
    if (isset($_SESSION['mensaje-error'])) {
        $mensajeError = $_SESSION['mensaje-error'];
        unset($_SESSION['mensaje-error']);
    }

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

    <?php include('navBar.html'); ?>  
    <br><br><br><br><hr>
    <!-- titulo -->
    <h1 style="color:#b48400; text-align: center; font-size: 30pt; font-family: cursive; font-weight: normal;">Formulario</h1>

    <hr style="width: 5%; margin-top: 10px;">    

    <!-- formulario -->
    <section class="contenido-formulario" style="width:100%">

        <img src="img/lobo7.png" class="img-fluid" alt="">

        <form action="db/registro.galeria.php" method="post" class="contenido-center" enctype="multipart/form-data">

            <input type="text" value="" name="name" placeholder="nombre" id="nombre"><br><br>
            <input type="text" placeholder="descripcion" name="desc"><br><br>
            <input type="date" placeholder="fecha" name="date"><br><br>
            <center><label for="img" class="boton-oro negro boton" style="cursor: pointer; ">Cargar Imagen</label></center>
            <input type="file" id="img" placeholder="Cargar Imagen" style="display: none;" name="img" accept="image/*" multiple><br><br>
            <center><button type="submit" class="boton-oro negro boton">Enviar</button></center>

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