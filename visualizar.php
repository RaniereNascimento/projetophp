
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

echo "VISUALIZAR BOLETINS"; 

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
    <form class="form" method="POST" action="visualizar.php">
    
        <Fieldset>
        <label>VISUALIZAR TODOS:</label>
        <button class="btn" onclick='alert("dados encontrados")' type="submit" name="submit">Enviar</button>
        </Fieldset>
    </form>
    



</div>

           

<script></script>
<?php
if (isset($_POST['submit'])){

include_once('setup.php');



$sql = "SELECT * FROM s1";

$result = mysqli_query($conn,$sql);

while($registro = mysqli_fetch_array($result)){
$nome = $registro['nome']; 
$av1 =$registro['av1'];
$av2 = $registro['av2'];




echo "<h1>". "Nome: ".$nome. "</h1>"."<br>";
echo "<h1>". "Avaliação 1: ".$av1. "</h1>"."<br>";
echo "<h1>". "Avaliação 2: ".$av2. "</h1>"."<br>";
echo "<h1>". "MEDIA: ".$media. "</h1>"."<br>";
echo "<hr>";



}

}


?>  

</body>
</html>