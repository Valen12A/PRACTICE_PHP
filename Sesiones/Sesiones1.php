<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones </title>
<body>
    
    <?php if (isset($__SESSION["id"])): ?>

        <h1>Hola <?= $__SESSION["username"]?></h1>

    <?php else : ?>

        <h1>No has iniciado sesión</h1>
    
    <?php endif; ?>

</body>
</html>