<?php

namespace Fastview\CrudSimples\Controller;

use Fastview\CrudSimples\Entity\Usuario;
use Fastview\CrudSimples\Infra\EntityManagerCreator;
use Fastview\CrudSimples\Helper\FlashMessagesTrait; // ADICIONEI

class RealizarLogin implements InterfaceControladoraRequisicao
{
    use FlashMessagesTrait; // ADICIONEI
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioDeUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeUsuarios = $entityManager
            ->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        if (is_null($email) || $email === false) {
            $this->defineMensagem('danger', "O e-mail digitado não é um e-mail válido.");
            // $_SESSION['tipo_mensagem'] = "danger";
            // $_SESSION['mensagem']      = "O e-mail digitado não é um e-mail válido.";
            header('Location: /login');
            return;
        }

        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );

        /** @var Usuario $usuario */
        $usuario = $this->repositorioDeUsuarios
            ->findOneBy(['email' => $email]);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
            $this->defineMensagem('danger',"E-mail ou senha inválidos");
            //$_SESSION['tipo_mensagem'] = "danger";
            //$_SESSION['mensagem']      = "E-mail ou senha inválidos";
            header('Location: /login');
            return;
        }

        // INDICAR NA SESSAO QUE ESTA LOGADO, ARMAZENAR O EMAIL NA SESSAO
        $_SESSION['logado'] = true;
        $_SESSION['email']  = $usuario->getEmail();
        $this->defineMensagem('success',"Usuário(a) logado(a) com sucesso!");
        //$_SESSION['tipo_mensagem'] = 'success';
        //$_SESSION['mensagem'] = 'Usuário(a) logado(a) com sucesso!';

        header('Location: /'); // redirecionar para a nossa pagina index
    }
}
