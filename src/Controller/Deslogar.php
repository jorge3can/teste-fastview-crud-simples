<?php

namespace Fastview\CrudSimples\Controller;

use Fastview\CrudSimples\Controller\InterfaceControladoraRequisicao;

class Deslogar implements InterfaceControladoraRequisicao
{

    public function processaRequisicao(): void
    {
        session_destroy(); // destruir a sessao atual
        header('Location: /login'); // redirecionar para a pagina de login
    }

}