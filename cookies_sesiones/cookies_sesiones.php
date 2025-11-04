<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body class="">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/project/index.php"> Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/project/cookies_sesiones/406contadorVisitas.php">Contador visitas</a></li>
        <li class="nav-item"><a class="nav-link" href="/project/cookies_sesiones/408fondoSesion1.php">Fondo sesión</a></li>
        <li class="nav-item"><a class="nav-link" href="/project/cookies_sesiones/409formulario1.php">Formulario 409</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="row g-4">

    <div class="col-12">
      <div class="card text-bg-dark border-secondary shadow-sm">
        <div class="card-body">
          <h1 class="card-title h4 text-primary">Contador visitas</h1>
          <p class="card-text">Página per que compta visites</p>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card text-bg-dark border-secondary shadow-sm">
        <div class="card-body">
          <h1 class="card-title h4 text-info">Fondo sesión</h1>
          <p class="card-text">En l'apartat de cookies i sessions hi han exercicis relacionats amb la gestió de dades.</p>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card text-bg-dark border-secondary shadow-sm">
        <div class="card-body">
          <h1 class="card-title h4 text-warning">Formulario 409</h1>
          <p class="card-text">En aquest apartat trobaràs exercicis d'autenticació i permisos d'usuari.</p>
        </div>
      </div>
    </div>

  </div>
</div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
