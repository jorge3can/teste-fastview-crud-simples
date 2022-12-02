<?php

namespace Fastview\CrudSimples\Controller;

use Fastview\CrudSimples\Infra\EntityManagerCreator;
use Fastview\CrudSimples\Entity\Cliente;
use Fastview\CrudSimples\Helper\FlashMessagesTrait; // ADICIONEI

class ExclusaoCliente implements InterfaceControladoraRequisicao
{
    use FlashMessagesTrait; // ADICIONEI
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
             ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        // pegar dados do formulario $_GET, usando filtros
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        
        // redirecionar
        if(is_null($id) || $id === false) {
            $this->defineMensagem('danger',"Cliente inexistente");
            //$_SESSION['tipo_mensagem'] = 'danger';
            //$_SESSION['mensagem']      = "Cliente inexistente";
            header('Location: /listar-clientes');
            return; // para interromper a execucao
        }

        // Pegar a referencia por id usando o Doctrine ORM
        $cliente = $this->entityManager->getReference(Cliente::class, $id);

        // Apagar do Banco
        $this->entityManager->remove($cliente);
        $this->entityManager->flush();
        $this->defineMensagem('success',"Cliente excluído com sucesso");
        //$_SESSION['tipo_mensagem'] = 'success';
        //$_SESSION['mensagem']      = "Cliente excluído com sucesso";

        // redirecionar para outra pagina
        header('Location: /listar-clientes');

    }

}
