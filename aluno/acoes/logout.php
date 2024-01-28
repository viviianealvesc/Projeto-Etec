<?php   

session_start();

unset($_SESSION['id']);
unset($_SESSION['rm']);
unset($_SESSION['senha']);

header('Location: ../login-aluno.php');

?>