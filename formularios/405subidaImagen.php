<?php
if($_SERVER['REQUEST_METHOD'] == POST){
    if(isset($_POST['altura']) && isset($_POST['anchura'])){
        $altura = filter_input(INPUT_POST, 'altura', FILTER_SANITIZE_NUMBER_FLOAT);
        $anchura = filter_input(INPUT_POST, 'anchura', FILTER_SANITIZE_NUMBER_FLOAT);
        echo "<p>Anchura: $anchura px</p>";
        echo "<p>Altura: $altura px</p>";
    } else {
        echo "<p style='color:red'> Error: los valores de anchura o altura no son válidos.</p>";
    }

    if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
    if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        $nombre = $_FILES['archivo']['name'];
        
        
        $tipo = $_FILES['archivo']['type'];
        $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (in_array($tipo, $tiposPermitidos)) {

               
                $destino = "uploads/" . $nombre;

                
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
                    echo "<p style='color:green'>Archivo <strong>$nombre</strong> subido con éxito </p>";
                    
                    
                    echo "<img src='$destino' alt='Imagen subida' style='max-width:{$anchura}px; max-height:{$altura}px;'>";
                } else {
                    echo "<p style='color:red'>Error al mover el archivo al directorio de destino.</p>";
                }

            } else {
                echo "<p style='color:red'><strong>Error:</strong> El archivo debe ser una imagen (JPEG, PNG, GIF o WEBP).</p>";
            }

        } else {
            echo "<p style='color:red'>No se ha subido ningún archivo.</p>";
        }
        

    }
    function setFondo(){
        if(isset($_POST['colorFondo'])){
        $color = $_POST['colorFondo'];
         $css = "body { background-color: $color; }\n";

  
        file_put_contents("style.css", $css);

    }
    }
    
}
    
    




?>