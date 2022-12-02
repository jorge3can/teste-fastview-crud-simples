<?php

require __DIR__ . '/../vendor/autoload.php';

use Fastview\CrudSimples\Controller\InterfaceControladorRequisicao;

$caminho = @$_SERVER['PATH_INFO'];
$rotas   = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

session_start(); // INICIAR A SESSAO importante para o Sistema de Login

// PROTEGER O ACESSO
$ehRotaDeLogin = stripos($caminho, 'login');
if(!isset($_SESSION['logado']) && $ehRotaDeLogin === false) {
//if(!isset($_SESSION['logado']) && $caminho !== "/login" && $caminho !== "/realiza-login") {
    header('Location: /login'); // redirecionar para login
    exit();                     // parar execucao
}
// PROTEGER O ACESSO

$classeControladora = $rotas[$caminho];
/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
