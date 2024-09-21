<?php
$nome = filter_input(INPUT_GET, "nome");

if($nome) {
    echo 'NOME: ' . $nome;
} else {
    echo "NÃO ENVIOU!";
}