<?php
/*
$numeros = [10, 20, 24, 91, 18];

array_pop($numeros);
print_r($numeros); */

/*
$numeros = [10, 20, 24, 91, 18];

array_shift($numeros);
print_r($numeros); */

/*
$numeros = [10, 20, 24, 91, 18];

if (in_array(91, $numeros)) {
    echo "EXISTE!!";
} else {
    echo "NÃO EXISTE!!";
} */

/*
$numeros = [10, 20, 24, 91, 18];
$pos = array_search(17, $numeros);

echo $pos; */

/*
$numeros = [10, 20, 24, 91, 18];
asort($numeros);
sort($numeros);     //ordem crescente 
//rsort($numeros);    //ordem decrescente

print_r($numeros); */

/*
$nome = "gabriel sena nascimento";
$nomes = explode(" ", $nome);
print_r($nomes); */


$nomes = ["gabrie", "sena", "nascimento"];

$nome= implode(" ", $nomes);

echo $nome;