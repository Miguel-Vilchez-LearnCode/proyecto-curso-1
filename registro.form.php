<?php

$namePage = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body style="margin:0; background-image: url(img/sabana2.jpg); background-size: cover; background-repeat: no-repeat">

    <section style="width:100vw; height:100vh; display: flex; justify-content: center; align-items: center;">
        <form action="db/registro.php" enctype="multipart/form-data" method="post" class="form-login">
            <div style="width: 100%; flex-direction: column;display: flex;justify-content: center; align-items: center;">
                <h1 style="color:#000000; text-align: center;">Registro de Usuario</h1>
                <input required type="text" name="nombre" placeholder="Nombre"><br>
                <input required type="text" placeholder="Apellido" name="apellido"><br>
                <input required type="text" placeholder="Nombre de Usuario" name="user"><br>
                <input required type="password" placeholder="Contrasenha" name="clave"><br>
                <div class="d-flex">
                    <button type="submit" style="color:black" class="boton-amarillo boton mx-1">Registrar</button>
                    <a href="login.php" style="color:black" class="boton-oro boton mx-1">Volver</a>
                </div>
            </div>
        </form>
    </section>
    
    <script src="JavaScript/js.js"></script>
</body>
</html>