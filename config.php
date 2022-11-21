<?php
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $db = "db_star";
    
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Falha na conexao: %s\n". $conn -> error);
     if(!$conn){
      echo 'erro de conexao: ' . mysqli_connect_error();
     }
    
     return $conn;
     

   
?>