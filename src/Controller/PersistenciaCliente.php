<?php

namespace Fastview\CrudSimples\Controller;

use Fastview\CrudSimples\Infra\EntityManagerCreator;
use Fastview\CrudSimples\Entity\Cliente;
use Fastview\CrudSimples\Helper\FlashMessagesTrait; // ADICIONEI

class PersistenciaCliente implements InterfaceControladoraRequisicao
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
        // pegar dados do formulario $_POST, usando filtros
        $nomeCliente = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_STRING);
        $telefoneCliente   = filter_input(INPUT_POST, 'telefoneCliente', FILTER_VALIDATE_INT);
        $enderecoCliente = filter_input(INPUT_POST, 'enderecoCliente', FILTER_SANITIZE_STRING);
        
        // montar modelo cliente
        $cliente = new Cliente;
        $cliente->setNome($nomeCliente);
        $cliente->setTelefone($telefoneCliente);
        $cliente->setEndereco($enderecoCliente);

        // ATUALIZAR
        // pegar dados do formulario $_GET, usando filtros
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if(!is_null($id) && $id !== false) {
            // posso atualizar
            $cliente->setId($id);
            // Como já temos o id, não precisa fazer o find,
            // basta fazer um merge (juntar) ja tenho um entidade montada, so que una
            $this->entityManager->merge($cliente);
            $this->defineMensagem('success',"Cliente atualizado com sucesso");
            //$_SESSION['mensagem'] = 'Cliente atualizado com sucesso';
        } else {
            // Inserir no Banco
            $this->entityManager->persist($cliente);
            $this->defineMensagem('success',"Cliente inserido com sucesso");
            //$_SESSION['mensagem'] = 'Cliente inserido com sucesso';
        }
        //$_SESSION['tipo_mensagem'] = 'success';
        
        $this->entityManager->flush();

        // redirecionar para outra pagina, false significa nao substituir o header, 302 movido temporaria
        header('Location: /listar-clientes', false, 302);

    }

}
