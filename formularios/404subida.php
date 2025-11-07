
<!DOCTYPE html>
<html lang="es">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
<head>
    <meta charset="UTF-8">
    <title>Subida de archivo (404)</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
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

    
</body>
</html>
