<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';


if ($usuario === 'usuario' && $password === 'usuario') {
    $_SESSION['usuario'] = $usuario;

    $_SESSION['peliculas'] = ['El Padrino', 'Matrix', 'Titanic'];
    $_SESSION['series'] = ['Breaking Bad', 'Friends', 'The Office'];

    header('Location: 412peliculas.php');
    exit;
} else {
    header('Location: 410index.php?error=1');
    exit;
}
