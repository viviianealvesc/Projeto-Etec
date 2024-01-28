<?php 

session_start();
require_once 'conexao.php';

if(isset($_POST['bt_cadastrar'])) {
  
    $nome      = mysqli_real_escape_string($con, $_POST['nome']);
    $rm        = mysqli_real_escape_string($con, $_POST['rm']);
    $data_nasc = mysqli_real_escape_string($con, $_POST['data_nasc']);
    $email     = mysqli_real_escape_string($con, $_POST['email']);
    $senha     = md5(mysqli_real_escape_string($con, $_POST['senha']));
  
    $sql = mysqli_query($con, "INSERT INTO alunos(nome, rm, data_nasc ,email, senha) VALUES ('$nome', '$rm', '$data_nasc', '$email', '$senha')");

    $resultado = mysqli_query($con, $sql);

    // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
    if(mysqli_affected_rows($con)) {
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
        $_SESSION['status']   = "success";//sucesso
        header('Location: ../login-aluno.php');
    } else {
        $_SESSION['mensagem'] = "Não foi possível cadastrar";
        $_SESSION['status']   = "danger";//não teve sucesso
        header('Location: ../login-aluno.php');
    }
    // FECHAR CONEXAO
    mysqli_close($con);
}

?>