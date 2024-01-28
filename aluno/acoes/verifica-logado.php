<?php 

if(!isset($_SESSION['idusuario']) || !isset($_SESSION['senha'])){
    header('Location: ../login-aluno.php');
}

?>