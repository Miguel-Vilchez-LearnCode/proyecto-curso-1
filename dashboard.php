<?php
    session_start();

    if(isset($_SESSION['sesion'])){
        $_SESSION['sesion'] = true;
    }else{
        header('location:login.php');
    }

    if(isset($_SESSION['mensaje-exito'])){
        echo 'bien';
    }

    // incluimos conexion a la base de datos
    include('db/conn.php');

    // consulta sql
    $sql = 'SELECT * FROM galeria';

    //ejecutar la consulta sql
    $ejecutar = $conn->query($sql);

    //crear array
    $galeria = $ejecutar->fetchAll(PDO::FETCH_ASSOC);

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
            <?php foreach($galeria as $campo){ ?>
                <tr>
                    <td><?= $campo['nombre'] ?></td>
                    <td><?= $campo['descrip'] ?></td>
                    <td><?= $campo['fecha'] ?></td>                
                    <td class="boton-center">
                        <form action="editar.php" method="post">
                            <input type="hidden" name="id" value="<?= $campo['id'] ?>">
                            <button class="mx-1 boton boton-oro negro">Editar</button>
                        </form>
                        <form action="db/eliminar.php" method="post" id="eliminar<?= $campo['id'] ?>">
                            <input type="hidden" name="id" value="<?= $campo['id'] ?>">
                            <button id="botonEliminar" type="button" class="mx-1 boton boton-amarillo negro">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <script src="JavaScript/js.js"></script>
    <script>
        const botonEliminar = document.querySelector('#botonEliminar');
        const formulario = document.querySelector('#eliminar<?= $campo['id'] ?>');

        botonEliminar.addEventListener('click', ()=>{
            let confirmacion = confirm('Seguro de Eliminar este Registro!?');
            if (confirmacion == true) {
                formulario.submit();
            }
            else{
                alert('Accion cancelada!');
            }
        });

    </script>
</body>
</html>