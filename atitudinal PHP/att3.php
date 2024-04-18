<?php
function mostrarAlunos(array $alunos): void {
    foreach ($alunos as $aluno) {
        echo "Nome: {$aluno['nome']}, Idade: {$aluno['idade']}\n";
    }
}

$alunos = [
    [
        "nome" => "João",
        "idade" => 20
    ],
    [
        "nome" => "Maria",
        "idade" => 22
    ],
    [
        "nome" => "José",
        "idade" => 21
    ]
];

mostrarAlunos($alunos);
?>  