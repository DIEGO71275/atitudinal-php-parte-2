<?php
function atualizarPagamento(array $dadosPagamento): array {
    $dataPagamento = DateTime::createFromFormat('d/m/Y', $dadosPagamento['data_pagamento']);
    $dataLimite = DateTime::createFromFormat('d/m/Y', '02/02/2024');

    if ($dataPagamento < $dataLimite) {
        $dadosPagamento['pago'] = true;
    } else {
        $dadosPagamento['pago'] = false;
    }

    return $dadosPagamento;
}

$dadosOriginais = [
    "produto" => "Camisa DnD - Tamanho M",
    "data_pagamento" => "01/02/2024",
    "pago" => false
];

$dadosAtualizados = atualizarPagamento($dadosOriginais);

print_r($dadosAtualizados);
?>
