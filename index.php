<?php
$nome = 'Gabriel';



/*if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade\n";
} */

$nomeCompleto = $nome ?? "Visitante";
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : "";

$nomeCompleto .= $sobrenome ?? '';


// $maiorDeIdade = ($idade < 18) ? false : true; // operador tcleernário: if de uma linha

// echo $maiorDeIdade;

echo $nomeCompleto;