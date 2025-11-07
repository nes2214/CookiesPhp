<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'] ?? '';
    $_SESSION['email'] = $_POST['email'] ?? '';
    $_SESSION['url'] = $_POST['url'] ?? '';
    $_SESSION['sexo'] = $_POST['sexo'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
<head>
  <meta charset="UTF-8">
  <title>409 - Formulario 2</title>
</head>
<body>
  <?php include 'navbar.php'; ?>
  <h1>Formulario 2</h1>
  <form action="409formulario3.php" method="post">
    <p><label>Número de convivientes:
      <input type="number" name="convivientes" min="0">
    </label></p>

    <p>Aficiones:<br>
      <label><input type="checkbox" name="aficiones[]" value="Deporte"> Deporte</label><br>
      <label><input type="checkbox" name="aficiones[]" value="Lectura"> Lectura</label><br>
      <label><input type="checkbox" name="aficiones[]" value="Cine"> Cine</label><br>
      <label><input type="checkbox" name="aficiones[]" value="Viajar"> Viajar</label><br>
    </p>

    <p>Menú favorito (selección múltiple):<br>
      <select name="menu[]" multiple size="4">
        <option value="Pizza">Pizza</option>
        <option value="Pasta">Pasta</option>
        <option value="Ensalada">Ensalada</option>
        <option value="Sushi">Sushi</option>
      </select>
    </p>

    <p><input type="submit" value="Enviar"></p>
  </form>
</body>
</html>
