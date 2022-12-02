<?php

namespace Fastview\CrudSimples\Controller;

class FormularioInsercaoCliente extends ControllerComHtml implements InterfaceControladoraRequisicao
{

    public function processaRequisicao(): void
    {
        //$titulo = "Cadastro de Cliente";
        //include_once __DIR__ . "/../../view/cursos/novo-cliente.php";
        echo $this->renderizaHtml('/clientes/novo-cliente.php',
        [
            'titulo' => "Cadastro de Cliente"
        ]);
    }

}
