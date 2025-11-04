
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h2>Iniciar sesión</h2>

  <?php
  if (isset($_GET['error'])) {
      echo "<p style='color:red;'>Usuario o contraseña incorrectos.</p>";
  }
  ?>

  <form action="411login.php" method="post">
    <p>
      <label>Usuario:
        <input type="text" name="usuario" required>
      </label>
    </p>
    <p>
      <label>Contraseña:
        <input type="password" name="password" required>
      </label>
    </p>
    <p>
      <input type="submit" value="Entrar">
    </p>
  </form>
</body>
</html>
