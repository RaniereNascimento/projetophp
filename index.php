





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   

<h1><br><br><?php 

echo "HOME"; 

?>
</h1>

<nav>
  <ul>
    <li><a href="index.php">CADASTRO DE ALUNOS</a></li>
    <li><a href="notas.php">LANÇAR NOTAS</a></li>
    <li><a href="visualizar.php">VISUALIZAR BOLETINS</a></li>
  </ul>
</nav>
<div class="container">
    <form class="form" method="POST" action="index.php">
    
        <Fieldset>
            <label name="nome">Aluno:</label>
            <input class="field" name="nome" placeholder="nome"><br>
    
            <label name="email">e-mail:</label>
            <input type="field" class="field" name="email" placeholder="email"><br>
    
            <button class="btn" onclick='alert("dados enviados com sucesso")' type="submit" name="submit">Enviar</button>
        </Fieldset>
    </form>
    
</div>

           

<script></script>
</body>
</html>