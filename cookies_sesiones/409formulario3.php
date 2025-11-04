<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['convivientes'] = $_POST['convivientes'] ?? '';
    $_SESSION['aficiones'] = $_POST['aficiones'] ?? [];
    $_SESSION['menu'] = $_POST['menu'] ?? [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>409 - Resumen</title>
</head>
<body>
  <h1>Resumen de datos</h1>
  <table border="1" cellpadding="6">
    <tr><th>Campo</th><th>Valor</th></tr>
    <tr><td>Nombre y Apellidos</td><td><?= htmlspecialchars($_SESSION['nombre']) ?></td></tr>
    <tr><td>Email</td><td><?= htmlspecialchars($_SESSION['email']) ?></td></tr>
    <tr><td>URL</td><td><?= htmlspecialchars($_SESSION['url']) ?></td></tr>
    <tr><td>Sexo</td><td><?= htmlspecialchars($_SESSION['sexo']) ?></td></tr>
    <tr><td>Convivientes</td><td><?= htmlspecialchars($_SESSION['convivientes']) ?></td></tr>
    <tr><td>Aficiones</td><td><?= implode(', ', array_map('htmlspecialchars', $_SESSION['aficiones'])) ?></td></tr>
    <tr><td>Menú favorito</td><td><?= implode(', ', array_map('htmlspecialchars', $_SESSION['menu'])) ?></td></tr>
  </table>

  <p><a href="409formulario1.php">Volver a empezar</a></p>
</body>
</html>
