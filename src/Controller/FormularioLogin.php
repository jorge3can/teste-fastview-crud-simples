<?php

namespace Fastview\CrudSimples\Controller;

class FormularioLogin extends ControllerComHtml implements InterfaceControladoraRequisicao
{
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('login/formulario-login.php', [
            'titulo' => 'Login'
        ]);
    }
}
