<?php
session_start();          
unset($_SESSION['colorFondo']); 


header("Location: 408fondoSesion1.php");
exit;
?>