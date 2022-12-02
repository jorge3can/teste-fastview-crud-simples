<?php include __DIR__ . '/../inicio-html.php'; ?>

  <h1> <?= $titulo ?> </h1>

    <a href="/novo-cliente" class="btn btn-primary mb-3">Novo Cliente</a>

    <ul class="list-group">
      <?php foreach ($clientes as $cliente): ?>
        <li class="list-group-item d-flex justify-content-between">
          <?php
            echo $cliente->getNome() . " - " .
            $cliente->getTelefone() . " - " . $cliente->getEndereco() ?>

          <span>
            <a href="/alterar-cliente?id=<?= $cliente->getId(); ?>" class="btn btn-warning btn-sm">Atualizar</a> &nbsp;
            <a href="/excluir-cliente?id=<?= $cliente->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>

<?php include __DIR__ . '/../fim-html.php'; ?>