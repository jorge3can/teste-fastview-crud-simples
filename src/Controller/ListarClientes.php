<?php

namespace Fastview\CrudSimples\Controller;

use Fastview\CrudSimples\Entity\Cliente;
use Fastview\CrudSimples\Infra\EntityManagerCreator;

class ListarClientes extends ControllerComHtml implements InterfaceControladoraRequisicao
{

    private $repositorioDeClientes;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioDeClientes = $entityManager
            ->getRepository(Cliente::class);
    }

    public function processaRequisicao(): void
    {
        // PEGAR NO REPOSITORIO
        $clientes = $this->repositorioDeClientes->findAll();
        //$titulo = "Lista de Clientes";
        //include_once __DIR__ . "/../../view/clientes/listar-clientes.php";
        echo $this->renderizaHtml('/clientes/listar-clientes.php',
        [
            'clientes'  => $clientes,
            'titulo' => "Lista de Clientes"
        ]);
    }

}
