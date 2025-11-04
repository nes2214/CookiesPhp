<?php

$accesosPagina = 1;
if (isset($_COOKIE['accesos'])) {
    $accesosPagina = $_COOKIE['accesos'] + 1;
    
}   
if (isset($_POST['borrarCookies'])) {
    setcookie('accesos', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
setcookie('accesos', $accesosPagina);
echo "<p>Has accedido a esta página <strong>$accesosPagina</strong> veces.</p>";
?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <h1>Subida de archivo al servidor</h1>

    <form action="405subidaImagen.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="archivo">Selecciona un archivo:</label><br>
            <input type="file" name="archivo" id="archivo" required>
        </p>

        <p>
            <label for="anchura">Anchura:</label><br>
            <input type="number" name="anchura" id="anchura" required>
        </p>

        <p>
            <label for="altura">Altura:</label><br>
            <input type="number" name="altura" id="altura" required>
        </p>
           
        <button type="submit" name="btnSubir" value="Subir">Subir archivo</button>
        
    </form>
    <form method="post">
 
    </form>
    
    <form method="post">
        <button type="submit" name="borrarCookies">Borrar cookies</button>
    </form>
    
</body>
</html>
