<?php

    $base = 5; 
    $expoente = 4;
    $potencia = $base;

    while($expoente>1) {  
        $potencia = $base * $potencia;
        $expoente--;
    }

    echo("Potencia é igual a " . $potencia);

    echo("<br><br><a href=index.php>Voltar</a>");


    

?>

