<h1>Cabeçalho</h1>
<?php
if($_COOKIE['nome']){
    $nome = $_COOKIE['nome'];
    echo '<h2>'.$nome.'</h2>';
}
?>
<hr/>