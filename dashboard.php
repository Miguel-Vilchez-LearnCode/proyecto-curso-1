<?php
    session_start();
    if(isset($_SESSION['sesion'])){
        $_SESSION['sesion'] = true;
    }else{
        header('location:login.php');
    }
    $namePage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <!-- <button id="boton-tema" class="tema-oscuro" type="button">Oscurecer</button> -->

    <?php include('navBarDash.html'); ?>
    <br><br><br><br><hr>

    <!-- titulo -->
    <h1 style="color:#b18a00; text-align: center;">Tabla de contenido</h1>

    <div class="input-buscar">
        <input type="search" name="buscar" id="buscador" placeholder="Buscar">
    </div>

    <!-- tabla de contenido -->
    <table class="tabla-contenido">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th style="width: 25%;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Imagen 1</td>
                <td>Descripcion de la imagen 1</td>
                <td>2025-03-15</td>                
                <td class="boton-center">
                    <button class="mx-1 boton boton-oro negro">Editar</button>
                    <button class="mx-1 boton boton-amarillo negro">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
    
    <script src="JavaScript/js.js"></script>
</body>
</html>