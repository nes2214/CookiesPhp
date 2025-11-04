<?php
session_start();

// Si no hay usuario logueado, redirigir
if (!isset($_SESSION['usuario'])) {
    header('Location: 410index.php');
    exit;
}

// Recuperar las películas de la sesión
$peliculas = $_SESSION['peliculas'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Películas</title>
</head>
<body>
  <h1>Listado de Películas</h1>

  <nav>
    <a href="412peliculas.php">Películas</a> |
    <a href="414series.php">Series</a> |
    <a href="413logout.php">Cerrar sesión</a>
  </nav>

  <ul>
    <?php foreach ($peliculas as $peli): ?>
      <li><?= htmlspecialchars($peli) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
