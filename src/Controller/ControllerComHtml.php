<?php

namespace Fastview\CrudSimples\Controller;

abstract class ControllerComHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados): string
    {
        extract($dados); // extrair as variaveis do array
        ob_start();      // iniciar o buffer de saida para guardar o conteudo do html
        require __DIR__ . '/../../view/' . $caminhoTemplate; // require do arquivo html
        $html = ob_get_clean(); // pegar o html que esta no buffer e depois limpar o buffer

        return $html; // retornar o html
    }
}
