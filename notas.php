<?php
if (isset($_POST['submit'])){


include_once('setup.php');


$nome = $_POST['nome']; 
$av1 =$_POST['av1'];
$av2 = $_POST['av2'];
$media = ($av1 + $av2)/2;
$sql = "INSERT INTO s1(nome, av1, av2, media) VALUES('$nome', '$av1', '$av2','$media');";

$result = mysqli_query($conn,$sql);

}

?>  

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

echo "LANÇAR NOTAS"; 

?>
</h1>

<nav>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="notas.php">LANÇAR NOTAS</a></li>
    <li><a href="visualizar.php">VISUALIZAR BOLETINS</a></li>
  </ul>
</nav>
<div class="container">
    <form class="form" method="POST" action="notas.php">
    
        <Fieldset>
            <label>ALUNO:</label>
            <input class="field" name="nome" placeholder="Digite o nome do aluno"><br>
    
            <label>AVALIAÇÃO 1:</label>
            <input class="field" name="av1" placeholder="Digite a primeira nota"><br>
    
            <label>AVALIAÇÃO 2:</label>
            <input class="field" name="av2" placeholder="Digie a segunda nota"><br>
        
         <button class="btn" onclick='alert("dados enviados com sucesso")' type="submit" name="submit">Enviar</button>
        </Fieldset>
    </form>
    
</div>

           

<script></script>
</body>
</html>