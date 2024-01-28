<?php

session_start();
require_once 'conexao.php';

if(isset($_POST['bt_cardapio'])) {

    $data_refeicao   = mysqli_real_escape_string($con, $_POST['data_refeicao']);
    $cardapio_do_dia = mysqli_real_escape_string($con, $_POST['cardapio_do_dia']);
    $complemento     = mysqli_real_escape_string($con, $_POST['complemento']);

    $sql = "INSERT INTO cardapios (data_refeicao, cardapio_do_dia, complemento) VALUES ('$data_refeicao', '$cardapio_do_dia', '$complemento')";

    $resultado = mysqli_query($con, $sql);

    

      // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
      if($resultado) {
        $_SESSION['mensagem'] = "<p style='color:green; text-align:center;'>Cadastro realizado com sucesso!</p>"; "<a style='color=green' href='../painel.php'>X</a>";
        $_SESSION['status']   = "success";//sucesso
        header('Location: ../painel.php');
    } else {
        $_SESSION['mensagem'] = "<p style='color:green; text-align:center;'>Nao foi possivel cadastrar!</p>";
        $_SESSION['status']   = "danger";//não teve sucesso
        header('Location: ../painel.php');
        print_r($sql);
    }
    // FECHAR CONEXAO
    mysqli_close($con);
}

?>
