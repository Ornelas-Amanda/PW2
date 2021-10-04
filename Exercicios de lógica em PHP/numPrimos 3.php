<?php

    $num = 5;
    $divisores = 0;
    $i = 1;

    while($i<=$num) {
        if($num%$i==0){
            $divisores = $divisores + $i;
        }
        $i++; 
    }

    if($divisores == $num + 1) {
        echo("Numero " . $num . " É PRIMO!");
    }else {
        echo("Numero " . $num . " NÃO É PRIMO!");
    }

    echo("<br><br><a href=index.php>Voltar</a>");
?>