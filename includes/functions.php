<?php

function carregarDados() {
    $arquivos = glob(__DIR__ . '/../data/*.php');
    $dados = [];

    foreach ($arquivos as $arquivo) {
        $conteudo = include $arquivo;
        if (is_array($conteudo)) {
            $dados = array_merge($dados, $conteudo);
        }
    }

    return $dados;
}
