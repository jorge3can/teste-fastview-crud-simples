<?php

use Fastview\CrudSimples\Controller\{
    FormularioLogin,
    RealizarLogin,
    Inicio,
    Deslogar,
    ListarUsuarios,
    ListarClientes,
    FormularioInsercaoCliente,
    PersistenciaCliente,
    ExclusaoCliente,
    FormularioEdicaoCliente
};

return [
    ''                  => Inicio::class,
    '/'                 => Inicio::class,
    '/index'            => Inicio::class,
    '/listar-clientes'  => ListarClientes::class,
    '/novo-cliente'     => FormularioInsercaoCliente::class,
    '/salvar-cliente'   => PersistenciaCliente::class,
    '/excluir-cliente'  => ExclusaoCliente::class,
    '/alterar-cliente'  => FormularioEdicaoCliente::class,
    '/login'            => FormularioLogin::class,
    '/realiza-login'    => RealizarLogin::class,
    '/logout'           => Deslogar::class,
    '/listar-usuarios'  => ListarUsuarios::class,

];
