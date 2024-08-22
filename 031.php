<?php
/*
$nomeCompleto = "Gabriel Sena ";

$posicao = strpos($nomeCompleto, "n");

echo $posicao;  */

/*
$nomeCompleto = "gabriel sena";
echo ucfirst($nomeCompleto) . "\n";
echo ucwords($nomeCompleto); */

/*
$nomeCompleto = "gabriel de sena nascimento";

$nomes = explode(" ", $nomeCompleto);
print_r($nomes); */

$numero = 12913.12;

echo "R$ " . number_format($numero, 2, ",", "");