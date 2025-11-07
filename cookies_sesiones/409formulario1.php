<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
<head>
  <meta charset="UTF-8">
  <title>409 - Formulario 1</title>
</head>
<body>
  <?php include 'navbar.php'; ?>
  <h1>Formulario 1</h1>
  <form action="409formulario2.php" method="post">
    <p><label>Nombre y apellidos:
      <input type="text" name="nombre" required>
    </label></p>

    <p><label>Email:
      <input type="email" name="email" required>
    </label></p>

    <p><label>URL personal:
      <input type="url" name="url">
    </label></p>

    <p>Sexo:
      <label><input type="radio" name="sexo" value="Hombre" required> Hombre</label>
      <label><input type="radio" name="sexo" value="Mujer"> Mujer</label>
      <label><input type="radio" name="sexo" value="Otro"> Otro</label>
    </p>

    <p><input type="submit" value="Siguiente"></p>
  </form>
</body>
</html>
