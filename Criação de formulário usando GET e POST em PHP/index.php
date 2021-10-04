<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Aluno</title>
</head>
<body>
    
    <h1>Cadastro de Aluno</h1>

    <form method="post" action="cadastrarAluno.php">
        <label for="txtNome">Nome:</label>
        <input type="text" id="txtNome" name="txtNome" required><br>

        <label for="numIdade">Idade:</label>
        <input type="number" id="numIdade" name="numIdade" required><br>

        <label for="dateNasc">Data de Nascimento:</label>
        <input type="date" id="dateNasc" name="dateNasc" required><br>
        
        <label for="#">Genero:</label>
        <input type="radio"  id="masculino" name="radioSexo" value="M" required>
        <label for="masculino">Masculino</label>
        <input type="radio"  id="feminino" name="radioSexo" value="F" required>
        <label for="feminino">Feminino</label>
        <input type="radio"  id="outro" name="radioSexo" value="OUTRO" required>
        <label for="outro">Outro</label><br>
        
        <label for="slTurma">Turma:</label>
        <select id="slTurma" name="slTurma" required>
            <option disabled selected></option>
            <option value="A">Turma A</option>
            <option value="B">Turma B</option>
            <option value="C">Turma C</option>
        </select><br><br>

        <input type="submit" value="Cadastrar"> 
    </form>
  
</body>
</html>