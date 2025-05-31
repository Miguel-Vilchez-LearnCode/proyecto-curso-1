<?php
    // incluir conexion
    include('db/conn.php');

    $sql = 'SELECT * FROM galeria';
    $ejecutar = $conn->query($sql);
    $imagenes = $ejecutar->fetchAll(PDO::FETCH_ASSOC);
    
    $namePage = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>


<?php include('navBar.html'); ?>  
<br><br><br><br><hr>
    <!-- titulo -->
    <h1 style="color:#b48400; text-align: center; font-size: 30pt; font-family: cursive; font-weight: normal;">Galeria</h1>

    <hr style="width: 5%; margin-top: 20px;">    

    <!-- galeria -->
    <section class="contenido-galeria">

    <?php foreach($imagenes as $imagen){  ?>
        <div class="item">
            <img src="<?= $imagen['imgRut'] ?>" class="img" alt="imagen 1">
            <h3><?= $imagen['nombre'] ?></h3>
            <p><?= $imagen['descrip'] ?></p>
        </div>
    <?php } ?>

    </section>
    

</body>
</html>