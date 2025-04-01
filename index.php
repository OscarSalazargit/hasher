<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];

    // Hasheamos con SHA-256
    $hash = hash('sha256', $texto);

    $resultado = "Texto ha codificar: " . htmlspecialchars($texto) . "<br>";
    $resultado .= "Hash SHA-256: " . $hash . "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasher</title>
</head>
<body>
    <h1 class="title">El Hash</h1>
    <form action="" method="post">
        <label for="texto">Texto</label>
        <input type="text" name="texto" id="texto">
        <button type="submit">Hashear</button>
    </form>
    <?php
        if(isset($hash) ){
            echo "<h2>$resultado</h2>";
        }
    ?>
</body>
</html>