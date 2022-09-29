<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'boletins';
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
         die("Não foi possível estabelecer uma conexão. " . $conn->connect_error);
     
   
    }
   

    


?>