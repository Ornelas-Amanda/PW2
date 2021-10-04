<?php
    // $nome = $_POST['txtNome'];
    // $cpf = $_POST['txtCpf'];
    // $datenasc = $_POST['txtDateNasc'];

    // $vetor = array (
    //     0 => $nome,
    //     1 => $cpf,
    //     2 => $datenasc
    // );
    $vetor = array(
        $nome = $_POST['txtNome'] ,
        $cpf = $_POST['txtCpf'], 
        $datenasc = $_POST['txtDateNasc']
    );

    $dia = $datenasc[8] . $datenasc[9];
    $mes = $datenasc[5] . $datenasc[6];
    $ano = $datenasc[0] . $datenasc[1] . $datenasc[2] . $datenasc[3];

    echo("<br>");
    echo("<br>");

    if(checkdate($mes,$dia,$ano)) {
        echo("DATA VALIDA!");
    }else {
        echo("DATA INVALIDA!");

    }
    
    echo("<br>");
    echo("<br>");

    echo("Nome: ".$vetor[0]." / "."CPF: ".$vetor[1]." / "."Data de nascimento: ".$vetor[2]);





   


?>