<?php include __DIR__ . '/inicio-html.php'; ?>

<div class="px-4 py-5 my-5 text-center">
    
    <h1 class="display-5 fw-bold"> <?= $titulo ?> </h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Sistema Gerenciador de Clientes. Veja a listagem de clientes, cadastre novos clientes. Veja também a lista de usuários.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="/listar-clientes" class="btn btn-primary btn-lg px-4 gap-3">Clientes</a>
        <a href="/listar-usuarios" class="btn btn-outline-secondary btn-lg px-4">Usuários</a>
      </div>
    </div>
  </div>

  <?php include __DIR__ . '/fim-html.php'; ?>