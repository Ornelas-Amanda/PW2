<?php
    $cpf = $_POST['txtCPF'];

    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);

     $vetor = array (
         $cpfDigitos = substr($cpf, 0, 9),
     );
     
    $contador=2;
    $soma=0;

    for($i=8;$i>=0;$i--)  {
        $soma += ($vetor[0][$i] * $contador);
        $contador++;
    }

    $divisao = $soma % 11;
    
    if($divisao<2) {
        $digito1 = 0;
    }else {
        $digito1 = 11 - $divisao;
    }

    $vetor[0][9] = $digito1;
   
    $contador=2;
    $soma=0;
    $multi2=0;
    
    for($i=9;$i>=0;$i--)  {
        $soma += ($vetor[0][$i] * $contador);
        $contador++;
    }

    $divisao = $soma % 11;

    if($divisao<2) {
        $digito2 = 0;
    }else {
        $digito2 = 11 - $divisao;

    }

    $vetor[0][10] = $digito2;

    if($vetor[0] == $cpf) {
        echo("CPF VALIDO!");
    }else {
        echo("CPF INVALIDO!");
    }









   

     

     






   




















    







?>