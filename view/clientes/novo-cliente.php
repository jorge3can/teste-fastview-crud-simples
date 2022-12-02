<?php include __DIR__ . '/../inicio-html.php'; ?>

    <h1> <?= $titulo ?> </h1>

    <form action="/salvar-cliente<?= isset($cliente) ? '?id=' .$cliente->getId() : ''; ?>"
        method="POST">
        <div class="mb-3">
            <label for="nomeCliente" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" id="nomeCliente" name="nomeCliente"
            value="<?= isset($cliente) ? $cliente->getNome() : ''; ?>"
            autofocus >
        </div>

        <div class="mb-3">
            <label for="telefoneCliente" class="form-label">Telefone do Cliente</label>
            <input type="number" class="form-control" id="telefoneCliente" name="telefoneCliente" value="<?= isset($cliente) ? $cliente->getTelefone() : ''; ?>">
        </div>
        
        <div class="mb-3">
            <label for="enderecoCliente" class="form-label">Endereço do Cliente</label>
            <input type="text" class="form-control" id="enderecoCliente" name="enderecoCliente" value="<?= isset($cliente) ? $cliente->getEndereco() : ''; ?>">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary" id="btnSalvar">Salvar</button>
        </div>
    
    </form>

<?php include __DIR__ . '/../fim-html.php'; ?>