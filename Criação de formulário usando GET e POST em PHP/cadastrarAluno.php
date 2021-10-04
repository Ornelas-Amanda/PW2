<?php

    $nome = $_POST['txtNome'];
    $dtNasc = $_POST['dateNasc'];
    $idade = $_POST['numIdade'];
    $sexo = $_POST['radioSexo'];
    $slturma = $_POST['slTurma'];

    switch($sexo) {
        case "M";
            $genero = "Masculino";
            break;
        case "F";
            $genero = "Feminino";
            break;
        case "OUTRO";
            $genero = "Outro";
            break;
    }


    switch($slturma) {
        case "A";
            $turma = "Turma A";
            break;
        case "B";
            $turma = "Turma B";
            break;
        case "C";
            $turma = "Turma C";
            break;
    }

    echo("<h1>ALUNO(A) CADASTRADO(A) COM SUCESSO!</h1>");
    echo("<h2>Dados do aluno(a):</h2>");
    echo("<strong>Nome:</strong> ".$nome."</br>");
    echo("<strong>Data de Nascimento:</strong> ".$dtNasc."</br>");
    echo("<strong>Idade:</strong> ".$idade."</br>");
    echo("<strong>Genero:</strong> ".$genero."</br>");
    echo("<strong>Turma:</strong> ".$turma."</br></br>");

    echo("<a href=index.php>Voltar</a>");
    

?>