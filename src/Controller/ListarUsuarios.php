<?php

namespace Fastview\CrudSimples\Controller;

use Fastview\CrudSimples\Entity\Usuario;
use Fastview\CrudSimples\Infra\EntityManagerCreator;

class ListarUsuarios extends ControllerComHtml implements InterfaceControladoraRequisicao
{

    private $repositorioDeUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioDeUsuarios = $entityManager
            ->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        // PEGAR NO REPOSITORIO
        $usuarios = $this->repositorioDeUsuarios->findAll();
        echo $this->renderizaHtml('/usuarios/listar-usuarios.php',
        [
            'usuarios'  => $usuarios,
            'titulo' => "Lista de Usuários"
        ]);
    }

}
