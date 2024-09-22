<?php
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$idade = filter_input(INPUT_POST, "idade");

if($nome) {
    echo 'NOME: ' . $nome . "<br/>";
    echo 'EMAIL: ' . $email . "<br/>";
    echo 'IDADE: ' . $idade;
} else {
    header("Location: 038_index.php");
    exit;
}