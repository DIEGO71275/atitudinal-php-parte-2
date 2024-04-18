<?php
$usuariosCadastrados = [
    [
        "nome" => "Alice",
        "email" => "alice@example.com",
        "idade" => 25,
        "senha" => "senha123"
    ],
];

function validarCadastro(array $novoUsuario, array &$usuariosCadastrados): void {
    if (strlen($novoUsuario['nome']) <= 3) {
        echo "Erro: O nome deve ter mais de 3 caracteres.\n";
        return;
    }

    if ($novoUsuario['idade'] <= 18) {
        echo "Erro: A idade deve ser maior que 18 anos.\n";
        return;
    }

    if (strlen($novoUsuario['email']) <= 10) {
        echo "Erro: O email deve ter mais de 10 caracteres.\n";
        return;
    }

    if (strlen($novoUsuario['senha']) <= 8) {
        echo "Erro: A senha deve ter mais de 8 caracteres.\n";
        return;
    }

    foreach ($usuariosCadastrados as $usuario) {
        if ($usuario['email'] === $novoUsuario['email']) {
            echo "Erro: Este email já está cadastrado.\n";
            return;
        }
    }

    $usuariosCadastrados[] = $novoUsuario;
    echo "Usuário cadastrado com sucesso!\n";
}

$novoUsuario = [
    "nome" => "Carlos",
    "email" => "carlos@example.com",
    "idade" => 20,
    "senha" => "minhasenha123"
];

validarCadastro($novoUsuario, $usuariosCadastrados);
?>
