<?php


session_start();

if (isset($_POST['colorFondo'])) {
    $_SESSION['colorFondo'] = $_POST['colorFondo'];
}

if (isset($_POST['borrarColor'])) {
    unset($_SESSION['colorFondo']);
}

$colorFondo = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selección de color de fondo</title>
</head>


<body bgcolor="<?= htmlspecialchars($colorFondo) ?>">
    <h1>Selecciona el color de fondo de la página</h1>

    <form method="post">              
        <label for="colorFondo">Elige un color:</label>  
        <select name="colorFondo" id="colorFondo" onchange="this.form.submit()">
            <option value="" disabled <?= $colorFondo == '' ? 'selected' : '' ?>>-- Selecciona un color --</option>
            <option value="white" <?= $colorFondo == "white" ? 'selected': '' ?>>Blanco</option>
            <option value="blue" <?= $colorFondo == "blue" ? 'selected': '' ?>>Azul</option>
            <option value="green" <?= $colorFondo == "green" ? 'selected': '' ?>>Verde</option>
            <option value="yellow"<?= $colorFondo == "yellow" ? 'selected': '' ?>>Amarillo</option>
            <option value="pink" <?= $colorFondo == "pink" ? 'selected': '' ?>>Rosa</option>
            <option value="gray" <?= $colorFondo == "gray" ? 'selected': '' ?>>Gris</option>
        </select>
    </form>
    <a href="408fondoSesion2.php">Pagina 408fondoSesion2</a>
    
</body>
</html>
