<?php
$traco = "-";
/*
// Com isso desenhamos 10 linhas na horizontal
for ($i = 0; $i < 10; $i++) {
    // Para cada linha na horizontal, aparece 10 traços
    for ($j = 0; $j < 10; $j++) {
        // Desenhar o traço
        echo $traco;
    }
    
    echo "\n";
}*/

// Com isso desenhamos 10 linhas na horizontal
for ($i = 0; $i <= 20; $i++) {
    // Para cada linha na horizontal, aparece os traços
    for ($j = 0; $j <= $i; $j++) {
        // Desenhar o traço
        echo $traco;
    }

    echo "\n";
}
