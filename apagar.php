<?php
setcookie('nome', '', time() - 3600);

header("Location: 038_index.php");
exit;
