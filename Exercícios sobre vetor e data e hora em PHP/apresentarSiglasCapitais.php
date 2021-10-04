<?php

    $vetor = array(
        $sigla = $_POST['txtSigla'], $_POST['txtSigla2'],$_POST['txtSigla3'],$_POST['txtSigla4'],$_POST['txtSigla5']
        ,$_POST['txtSigla6'],$_POST['txtSigla7'],$_POST['txtSigla8'],$_POST['txtSigla9'],$_POST['txtSigla10'],
    );

    $vetor2 = array(
        $capital = $_POST['txtCapital'],$_POST['txtCapital2'],$_POST['txtCapital3'],$_POST['txtCapital4'],$_POST['txtCapital5']
        ,$_POST['txtCapital6'],$_POST['txtCapital7'],$_POST['txtCapital8'],$_POST['txtCapital9'],$_POST['txtCapital10'],
     
    );

    for($i=0;$i<10;$i++) {
        print($vetor[$i])." - ";
        print($vetor2[$i])."</br>";
    }
?>