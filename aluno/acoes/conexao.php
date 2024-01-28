<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'projeto-etec';
 
  @$con = new mysqli($db_host,$db_user,$db_password,$db_db);

   // TESTAR CONEXAO
   if(mysqli_connect_error()) {
     echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
     exit;
   } else {
    // echo "<p>Conexão realizada com sucesso!</p>";
}