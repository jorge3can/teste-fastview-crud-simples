<!DOCTYPE html>
<html lang="pt-br" class="h-100">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- favicon -->
  <link rel="icon" type="image/png" href="images/favicon.png" />
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/layout.css" />

  <title> <?= $titulo ?> </title>
</head>
<body class="d-flex flex-column h-100">

<?php if (isset($_SESSION['logado'])) { ?>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">FastView</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/listar-clientes">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/listar-usuarios">Usuários</a>
            </li>
          </ul>

          <span>
            <span class="text-muted"> <?= $_SESSION['email']; ?> </span>
            <a href="/logout" class="btn btn-danger">Sair</a>
          </span>
        </div>
      </div>
    </nav>
  </header>

<?php } // Fim do IF ?>

<main class="flex-shrink-0">

<div class="container">

<?php if(isset($_SESSION['mensagem'])) { ?>
  <div class="mt-3 alert alert-<?= $_SESSION['tipo_mensagem'] ?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['mensagem'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php } // Fim do IF
  unset($_SESSION['mensagem']);      // Limpar variavel de sessao
  unset($_SESSION['tipo_mensagem']); // Limpar variavel de sessao
?>
