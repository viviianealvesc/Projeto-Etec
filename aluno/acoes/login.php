<?php

session_start();
require_once 'conexao.php'; 

 if(isset($_POST['bt_entrar'])) {

    $rm = mysqli_real_escape_string($con, $_POST['rm']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    $sql = "SELECT * FROM alunos WHERE rm = '$rm' AND senha = '$senha';";

    $resultado = mysqli_query($con, $sql);


    if(mysqli_query($con, $sql)){
         $_SESSION['mensagem']  = "<p style='color:green; padding:0.7rem; text-align:center;'
                                  >Usuário logado com sucesso!</p>";
         $_SESSION['status']    = "success";
             
             header('Location: ../painel.php'); // REDIRECIONAR PARA O PAINEL
          } else {
              // CRIAR VARIAVEIS DE SESSAO
              $_SESSION['mensagem'] = "Erro no login! E-mail ou senha incorretos";
              $_SESSION['status'] = "danger";
              header('Location: ../login-aluno.php'); // REDIRECIONAR PARA O INDEX
          }
          mysqli_close($con); // fechar conexao
      }
    
 