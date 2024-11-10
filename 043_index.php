<?php
session_start();

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

if($nome) {
    $espiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $espiracao);

    echo 'Olá, ' . $nome . "<br/>";
    
} else {
    $_SESSION['aviso'] = 'Preencha tudo corretamente!';

    exit;
}