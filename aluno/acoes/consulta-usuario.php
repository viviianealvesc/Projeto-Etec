<?php 

session_start();
require_once 'conexao.php';
include_once 'verifica-logado.php';
$id_logado = $_SESSION['id_aluno'];

$sql = "SELECT * FROM alunos WHERE id_aluno = '$id_logado'";

$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_assoc($resultado);

$id_aluno  = $dados['id_aluno'];
$nome      = $dados['nome'];
$rm        = $dados['rm'];
$data_nasc = $dados['data_nasc'];
$email     = $dados['email'];
$senha     = $dados['senha'];

$_SESSION['nome']      = $nome;
$_SESSION['rm']        = $rm;
$_SESSION['data_nasc'] = $data_nasc;
$_SESSION['email']     = $email;
$_SESSION['senha']     = $senha;

?>