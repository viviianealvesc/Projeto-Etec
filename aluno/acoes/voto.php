<?php
session_start();
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isset($_GET['id'])) {
  
   $id = $_GET['id'];
    // Atualize o voto no banco de dados
    $sql = "UPDATE cardapios SET voto = voto + 1 WHERE id = $id";
    $resultado = mysqli_query($con, $sql);

    header('Location: ../painel.php');
  
  }

?>
