<?php
$idade = 15;

/*if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade\n";
} */

$maiorDeIdade = ($idade < 18) ? false : true; // operador tcleernário: if de uma linha

echo $maiorDeIdade;