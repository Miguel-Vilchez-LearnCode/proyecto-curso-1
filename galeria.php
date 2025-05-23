<?php

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

        <div class="item">
            <img src="img/lobo1.png" class="img" alt="imagen 1">
            <h3>Imagen 1</h3>
            <p>descripcion completa de esta foto</p>
        </div>

        <div class="item">
            <img src="img/leon3.png" class="img" alt="imagen 4">
            <h3>Imagen 6</h3>
            <p>descripcion completa de esta foto</p>
        </div>

        <div class="item">
            <img src="img/lobo2.png" class="img" alt="imagen 4">
            <h3>Imagen 2</h3>
            <p>descripcion completa de esta foto</p>
        </div>

        <div class="item">
            <img src="img/leon4.png" class="img" alt="imagen 2">
            <h3>Imagen 7</h3>
            <p>descripcion completa de esta foto</p>
        </div>

        <div class="item">
            <img src="img/leon7.png" class="img" alt="imagen 4">
            <h3>Imagen 6</h3>
            <p>descripcion completa de esta foto</p>
        </div>

        <div class="item">
            <img src="img/lobo3.png" class="img" alt="imagen 2">
            <h3>Imagen 3</h3>
            <p>descripcion completa de esta foto</p>
        </div>

        <div class="item">
            <img src="img/lobo4.png" class="img" alt="imagen 3">
            <h3>Imagen 4</h3>
            <p>descripcion completa de esta foto</p> 
        </div>

        <div class="item">
            <img src="img/leon2.png" class="img" alt="imagen 1">
            <h3>Imagen 5</h3>
            <p>descripcion completa de esta foto</p>
        </div>

        <div class="item">
            <img src="img/leon10.png" class="img" alt="imagen 3">
            <h3>Imagen 8</h3>
            <p>descripcion completa de esta foto</p>
        </div>

    </section>
    

</body>
</html>