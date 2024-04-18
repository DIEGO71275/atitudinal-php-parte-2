<?php
function calcularMedia(array $dadosAluno): float {
    $notas = $dadosAluno['notas'];
    $somaNotas = array_sum($notas);
    $quantidadeNotas = count($notas);
    $media = $somaNotas / $quantidadeNotas;
    return $media;
}

$dadosAluno = [
    "nome" => "João",
    "notas" => [
        "prova1" => 8,
        "prova2" => 7,
        "prova3" => 6,
        "prova4" => 9
    ]
];

$mediaNotas = calcularMedia($dadosAluno);

echo "Média das notas de {$dadosAluno['nome']}: {$mediaNotas}\n";
?>