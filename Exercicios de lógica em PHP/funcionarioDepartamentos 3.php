<?php

    $salario = 1750;
    $departamento = "Desenvolvimento";

    if($departamento == "Operacional"){
        echo("Aumento de 15%, salário = R$" . (1.15*$salario));

    }
    else if($salario >= 1500 && $salario < 1750){
        echo("Aumento de 12%, Salário = R$" . (1.12*$salario));

    }else if($salario >= 1750 && $salario < 2000){
        echo("Aumento de 10%, Salário = R$" . (1.10*$salario));

    }else if($salario >= 2000 && $salario < 3000){
        echo("Aumento de 7%, Salário = R$" . (1.07*$salario));
    }else {
        echo("Aumento de 5%, Salário = R$" . (1.05*$salario));
    }

    echo("<br><br><a href=index.php>Voltar</a>");
    
?>