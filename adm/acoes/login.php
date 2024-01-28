<?php 
 // INICIAR SESSÃO
 session_start();

 if (isset($_POST['bt_entrar']) && isset($_POST['email']) && isset($_POST['senha'])) {
  
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if ($email === 'etec@etec' && $senha === 'adm') {
  
      header('Location: ../painel.php');
      
      exit(); // Encerre o script após o redirecionamento.

  }else {
    $_SESSION['acesso'] = "<p style='color:red; text-align:center;'>Email ou Senha incorretos!</p>";
    header('Location: ../login-adm.php');

  }
}




?>
 