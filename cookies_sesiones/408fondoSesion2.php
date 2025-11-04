<?php
session_start(); 
$colorFondo = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2 con sesión</title>
</head>

<body <?php if ($colorFondo) echo 'bgcolor="' . htmlspecialchars($colorFondo) . '"'; ?>>
    <h1>Pàgina 2</h1>
      

    <a href="408fondoSesion1.php">Volver a la página 1</a>
    <a href="vaciarSesion.php">Vaciar sesion</a>
</body>
</html>
