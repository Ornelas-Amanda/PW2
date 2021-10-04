<?php
    $a = 0;
    $b = 1;    
    $c = 0;
    $i = 0;

    while($i< 10){
        if($i < 9){
            echo("<br>" . $a);
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }else {
            echo("<br>" . $a);
        }
        $i++;
    }

    echo("<br><br><a href=index.php>Voltar</a>");

?>