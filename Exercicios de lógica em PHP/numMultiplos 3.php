<?php
    
    $num = 30;
    $i = 1; 

    echo("<h2>Os multiplos de $num são: </h2> <br>");

    while($i<=$num) {
        if ($num % $i == 0) {
            echo($i . "<br>");
        }
        $i++;

    }

    echo("<br><br><a href=index.php>Voltar</a>");


?>