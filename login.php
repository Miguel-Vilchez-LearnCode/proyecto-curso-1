<?php
    // iniciar una session
    session_start();

    // aqui defino las variables vacias por cada mensaje que valla a mostrar en esta pagina
    $mensajeError='';
    $mensajeUserNot='';
    $mensajelogin='';

    // condicionales para validar la existencia de las SUPER_GLOBALES o SUPER_VARIABLES de tipo -> $_SESSION['']
    if (isset($_SESSION['sesion'])) {

        $mensajeError='no vacio';
        unset($_SESSION['sesion']);

    }

    if (isset($_SESSION['noUsuario'])) {

        $mensajeUserNot='no vacio';
        unset($_SESSION['noUsuario']);

    }

    if (isset($_SESSION['Correcto'])){
        $mensajelogin='no vacio';
        unset($_SESSION['Correcto']);
    }

    // esta es una funcion que me devuelve el nombre del archivo en el que me encuentro.... y almaceno su nombre en la variable: -> $namePage 
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
        <form action="db/registro.db.php" method="post" class="form-login">
            <div style="width: 100%; flex-direction: column;display: flex;justify-content: center; align-items: center;">
                <h1 style="color:#000000; text-align: center;">Inicio de Sesion</h1>
                <input type="text" name="user" placeholder="Nombre de Usuario" required><br>
                <input type="password" placeholder="Contraseña" name="clave" required><br>
                <div class="d-flex">
                    <button type="submit" name="boton" style="color:black" class="boton-amarillo boton mx-1">Iniciar Sesion</button>
                    <a href="registro.form.php" style="color:black" class="boton-oro boton mx-1">Registrarse</a>
                </div><br>
                <div class="d-flex">
                    <a href="index.php">Volver al Inicio</a>
                </div>
            </div>
        </form>
    </section>

    <!-- 
        condicionales php dentro de codigo html: 
            -> validar si las variables de los mensajes no estan vacias.
            -> ejecutar una alerta de JavaScript con el mensaje deseado si la variable no esta vacia. 
    -->
    <?php if(!empty($mensajeError)){  ?>
        <script>
            alert('Credenciales incorrectas');
        </script>
    <?php }?>

    <?php if(!empty($mensajeUserNot)){  ?>
        <script>
            alert('Usuario no existe en la base de datos');
        </script>
    <?php }?>

    <?php if(!empty($mensajelogin)){  ?>
        <script>
            alert('El registro fue exitoso');
        </script>
    <?php }?>


    <script src="JavaScript/js.js"></script>
</body>
</html>