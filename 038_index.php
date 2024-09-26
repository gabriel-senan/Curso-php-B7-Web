<?php
session_start();
require("038_header.php");

if($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<a href="apagar.php">Apagar Cookies</a>

<form method="POST" action="038_recebedor.php">

    <label>
        Nome:
        <br />
        <input type="text" name="nome" />
    </label>
    <br />
    <br />
    <label>

    <label>
        E-mail:
        <br />
        <input type="text" name="email" />
    </label>
    <br />
    <br />
    <label>

        Idade:
        <br />
        <input type="text" name="idade" />
    </label>
    <br />
    <br />

    <input type="submit" value="Enviar" />

</form>