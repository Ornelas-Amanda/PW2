 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Exercicios - Vetores</title>
     <style type="text/css">
        * {
            font-family: Arial, Helvetica, sans-serif;
        }    
     </style>
 </head>
 <body>
     <h2>Informe seus dados - Exercicio 1</h2>

     <form action="apresentarDados.php" method="post">
        <label for="txtNome">Nome:</label>
        <input type="text" name="txtNome" id="txtNome"> <br><br>

        <label for="txtCpf">CPF:</label>
        <input type="text" name="txtCpf" id="txtCpf"> <br><br>

        <label for="txtDateNasc">Data de Nascimento:</label>
        <input type="date" name="txtDateNasc" id="txtDateNasc"> <br><br>

        <input type="submit" value="Cadastrar"> 
     </form>

     <hr>

     <h2>Siglas e Capitais - Exercicio 2</h2>

     <form action="apresentarSiglasCapitais.php" method="post">
        <label for="txtSigla">Sigla 1:</label>
        <input type="text" name="txtSigla" id="txtSigla"> 

        <label for="txtCapital">Capital 1:</label>
        <input type="text" name="txtCapital" id="txtCapital"> <br><br><br>

        <label for="txtSigla2">Sigla 2:</label>
        <input type="text" name="txtSigla2" id="txtSigla2"> 

        <label for="txtCapital2">Capital 2:</label>
        <input type="text" name="txtCapital2" id="txtCapital2"> <br><br><br>

        <label for="txtSigla3">Sigla 3:</label>
        <input type="text" name="txtSigla3" id="txtSigla3"> 

        <label for="txtCapital3">Capital 3:</label>
        <input type="text" name="txtCapital3" id="txtCapital3"> <br><br><br>

        <label for="txtSigla4">Sigla 4:</label>
        <input type="text" name="txtSigla4" id="txtSigla4"> 

        <label for="txtCapital4">Capital 4:</label>
        <input type="text" name="txtCapital4" id="txtCapital4"> <br><br><br>

        <label for="txtSigla5">Sigla 5:</label>
        <input type="text" name="txtSigla5" id="txtSigla5"> 

        <label for="txtCapital5">Capital 5:</label>
        <input type="text" name="txtCapital5" id="txtCapital5"> <br><br><br>

        <label for="txtSigla6">Sigla 6:</label>
        <input type="text" name="txtSigla6" id="txtSigla6"> 

        <label for="txtCapital6">Capital 6:</label>
        <input type="text" name="txtCapital6" id="txtCapital6"> <br><br><br>

        <label for="txtSigla7">Sigla 7:</label>
        <input type="text" name="txtSigla7" id="txtSigla7"> 

        <label for="txtCapital7">Capital 7:</label>
        <input type="text" name="txtCapital7" id="txtCapital7"> <br><br><br>

        <label for="txtSigla8">Sigla 8:</label>
        <input type="text" name="txtSigla8" id="txtSigla8"> 

        <label for="txtCapital8">Capital 8:</label>
        <input type="text" name="txtCapital8" id="txtCapital8"> <br><br><br>

        <label for="txtSigla9">Sigla 9:</label>
        <input type="text" name="txtSigla9" id="txtSigla9"> 

        <label for="txtCapital9">Capital 9:</label>
        <input type="text" name="txtCapital9" id="txtCapital9"> <br><br><br>

        <label for="txtSigla10">Sigla 10:</label>
        <input type="text" name="txtSigla10" id="txtSigla10"> 

        <label for="txtCapital10">Capital 10:</label>
        <input type="text" name="txtCapital10" id="txtCapital10"> <br><br><br>

        <input type="submit" value="Armazenar">        
     </form>

     <hr>
    
    <h2>Informe seu CPF - Exercicio 3</h2>

    <form action="apresentarValidacaoCpf.php" method="post">
        <label for="txtCPF">CPF:</label>
        <input type="text" name="txtCPF" id="txtCPF" placeholder="XXX.XXX.XXX-XX" maxlength="14" minlength="14"> <br><br>
        <input type="submit" value="Verificar"> 
    </form>

    <hr>

    <h2>Apresentando datas - Exercicio 4</h2>

 </body>
 </html>

 <?php
    
    $dia = date('d');
    $mes = date('F');
    $ano = date('Y');

    echo("a. "."São paulo, ".$dia." de ".$mes." de ".$ano);

    echo("<br>");

    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');

    echo("b. ".$dia."/".$mes."/".$ano);

    echo("<br>");

    $dia = date('d');
    $mes = date('M');
    $ano = date('Y');

    echo("c. ".$dia." ".$mes." ".$ano);

    echo("<br>");
    
    $semana = date('l');
    $dia = date('d');
    $mes = date('M');
    $ano = date('Y');
    

    echo("d. ".$semana.", ".$dia." de ".$mes." de ".$ano);

    echo("<br>");

    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    
    $agora = getdate();
    echo("e. ". $agora['mday']."/".$agora['mon']."/".$agora['year']." ".$agora['hours']."h".$agora['minutes']);
?>

