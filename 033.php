<?php

/*
$numeros = [10, 20, 24, 91, 18];

array_pop($numeros);
print_r($numeros); */

/*
$numeros = [10, 20, 24, 91, 18];

array_shift($numeros);
print_r($numeros); */


$numeros = [10, 20, 24, 91, 18];

if (in_array(91, $numeros)) {
    echo "EXISTE!!";
} else {
    echo "NÃO EXISTE!!";
}