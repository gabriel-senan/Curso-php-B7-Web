<?php

/*  Loop While
$numero = 0;
while($numero <= 10) {
    echo "N: ".$numero."\n";

    $numero += 1;
}   */

 /* for($numero = 0; $numero < 10; $numero+= 1) {
    echo "N: ".$numero."\n";
} */

$ingredientes = [
    'Açúcar',
    'Farinha de trigo',
    'Leite',
    'Fermento em pó'
];
foreach($ingredientes as $chave => $valor) {
    echo "Item: ".($chave + 1).": ".$valor."\n";
}