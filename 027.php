<?php
$dizimo = fn($valor) =>  $valor * 0.1;

$somar = fn(int $n1, int $n2) => $n1 + $n2;

echo $somar(15, 20) . "\n";

echo $dizimo(982) . "\n";