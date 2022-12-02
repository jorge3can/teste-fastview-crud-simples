<?php

namespace Fastview\CrudSimples\Controller;

class Inicio implements InterfaceControladoraRequisicao
{

    public function processaRequisicao(): void
    {
        $titulo = "Teste Gerenciador de Clientes";
        include_once __DIR__ . "/../../view/inicio.php";
    }

}