<?php
include 'includes/header.php';
?>

<div class="container py-5">
  <div class="row g-4">

    <div class="col-12">
      <div class="card text-bg-dark border-secondary shadow-sm">
        <div class="card-body">
          <h1 class="card-title h4 text-primary">Formularios</h1>
          <p class="card-text">En aquest apartat hem après a crear formularis amb HTML i processar-los amb PHP.
            Hem treballat amb <strong>mètodes GET i POST</strong>, validació de dades i
            enviament d’informació entre pàgines. També hem practicat la
            <strong>gestió d’errors i missatges</strong> per millorar l’experiència de l’usuari.</p>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card text-bg-dark border-secondary shadow-sm">
        <div class="card-body">
          <h1 class="card-title h4 text-info">Cookies y Sesiones</h1>
          <p class="card-text">En aquesta secció hem treballat amb la <strong>persistència de dades</strong> a través de
            <strong>cookies</strong> i <strong>sessions</strong>. Hem vist com guardar informació temporal d’un usuari,
            com per exemple el seu nom, fons de pantalla o preferències,
            i com recuperar-la quan l’usuari torna a visitar la pàgina.</p>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card text-bg-dark border-secondary shadow-sm">
        <div class="card-body">
          <h1 class="card-title h4 text-warning">Autenticación</h1>
          <p class="card-text">En l’apartat d’autenticació hem creat sistemes bàsics de <strong>login i logout</strong>.
            Hem après a verificar credencials d’usuari, protegir pàgines amb sessions
            i mostrar contingut diferent segons si l’usuari està identificat o no.
            També hem fet proves de seguretat bàsica per evitar accessos no autoritzats.</p>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
