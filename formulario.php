<?php

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

        <form action="registro.php" method="post" class="contenido-center">

            <input type="text" value="" name="" placeholder="nombre" id="nombre"><br><br>
            <input type="text" placeholder="descripcion" name="descripcion"><br><br>
            <input type="date" placeholder="fecha" name="fecha"><br><br>
            <center><label for="img" class="boton-oro negro boton" style="cursor: pointer; ">Cargar Imagen</label></center>
            <input type="file" id="img" placeholder="Cargar Imagen" style="display: none;" name="img" accept="image/*" multiple><br><br>
            <center><button type="submit" class="boton-oro negro boton">Enviar</button></center>

        </form>

        <img src="img/leon1.png" class="img-fluid" alt="">
        
    </section>

</body>
</html>