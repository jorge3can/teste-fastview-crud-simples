<?php include __DIR__ . '/../inicio-html.php'; ?>

    <h1> <?= $titulo ?> </h1>
    <ul class="list-group">
      <?php foreach ($usuarios as $usuario): ?>
        <li class="list-group-item d-flex justify-content-between">
            <?= $usuario->getEmail() ?>
        </li>
      <?php endforeach; ?>
    </ul>

<?php include __DIR__ . '/../fim-html.php'; ?>