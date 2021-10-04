<?php
   
   $nota1 = 10;
   $nota2 = 10;
   $nota3 = 10;
   $nota4 = 10;


   $media =  ($nota1 + $nota2 + $nota3 + $nota4) /4;

   if ($media > 0.0 && $media < 4.9){
       echo("A média é ".$media." = Aluno retido");       
   }else if ($media > 5.0 && $media < 6.9){
       echo("A média é ".$media." = Aluno em exame");  
   }else {
       echo("A média é ".$media." = Aluno promovido");  
   }

   echo("<br><br><a href=index.php>Voltar</a>");
    
?>
