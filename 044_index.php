<?php
$texto = file_get_contents('044_texto.txt');
$texto = explode("\n", $texto);

echo "LINHAS: ".count($texto);