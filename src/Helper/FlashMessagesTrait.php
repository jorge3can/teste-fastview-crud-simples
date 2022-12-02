<?php

namespace Fastview\CrudSimples\Helper;

trait FlashMessagesTrait
{
    public function defineMensagem(string $tipo, string $mensagem): void
    {
        $_SESSION['tipo_mensagem'] = $tipo;
        $_SESSION['mensagem']      = $mensagem;
    }
}
