<?php

namespace Fastview\CrudSimples\Controller;

use Fastview\CrudSimples\Entity\Cliente;
use Fastview\CrudSimples\Controller\InterfaceControladoraRequisicao;
use Fastview\CrudSimples\Infra\EntityManagerCreator;

class FormularioEdicaoCliente extends ControllerComHtml implements InterfaceControladoraRequisicao
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioClientes;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioClientes = $entityManager
            ->getRepository(Cliente::class);
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            header('Location: /listar-clientes');
            return;
        }

        $cliente = $this->repositorioClientes->find($id);
        //$titulo = "Atualizar cliente " . $cliente->getNomeCliente();
        //require __DIR__ . '/../../view/clientes/novo-cliente.php';
        echo $this->renderizaHtml('/clientes/novo-cliente.php',
        [
            'cliente'  => $cliente,
            'titulo' => "Atualizar cliente " . $cliente->getNome()
        ]);
        
    }
}
