<?php
    header("Location: index.php");

    $categoria = $_POST['selectCategoria'];

    setcookie('codigoCategoria', $categoria);

?>