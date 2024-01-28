<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['bt_editar']))
    {
        $id = $_POST['id'];
        $data_refeicao = $_POST['data_refeicao'];
        $cardapio_do_dia = $_POST['cardapio_do_dia'];
        $complemento = $_POST['complemento'];
        
        $sql = "UPDATE cardapios 
        SET data_refeicao='$data_refeicao',cardapio_do_dia='$cardapio_do_dia',complemento='$complemento'
        WHERE id='$id'";
        
        $result = $con->query($sql);
    }
    $_SESSION['msg'] = "<p align='center' style='color:green;'>Cardapio editado com sucesso</p>";
    header('Location: ../painel.php');

?>