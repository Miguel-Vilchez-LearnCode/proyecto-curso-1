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
<body>

    <!-- <button id="boton-tema" class="tema-oscuro" type="button">Oscurecer</button> -->

    <?php include('navBar.html'); ?>  

    <!-- titulo -->
    <div style="background-image:url(img/sabana.jpg); background-size: cover; height: 100vh; background-repeat:no-repeat; background-attachment:fixed;">
        
    <br><br><br><br><br><br>

        <h1 style="margin-top:0;color:#000000; text-align: center; font-size: 30pt; font-family: cursive; font-weight: normal;">¿Existe solo un Rey en la Sabana?</h1>

        <hr style="width: 20%; margin-top: 10px; margin-bottom: 50px;">    

        <div class="versus">
            <img src="img/lobo6.png" alt="lobo feros">
            <img src="img/vs.png" alt="versus">
            <img src="img/leon6.png" alt="leon feros">
        </div>
        
    </div>
    
    <script src="JavaScript/js.js"></script>
    <script src="prueba.js"></script>
</body>
</html>