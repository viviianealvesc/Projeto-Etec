<?php
    // iniciar sessao no arquivo que chama a consulta
    require_once 'verifica-logado.php';
    require_once "conexao.php";
    
    // PEGAR O ID DO CURSO
    if(isset($_POST['id_cardapio'])) {

        $id_formacao = mysqli_real_escape_string($con, $_POST['id_cardapio']);

    $sql = "SELECT * FROM cardapios WHERE id_cardapio";
    //echo "$sql";

    $resultado = mysqli_query($con, $sql);

    $dados = mysqli_fetch_array($resultado);
    
    // criar variaveis para cada dado do array associativo
    $id_cardapio      = $dados['id_cardapio'];
    $data_refeicao    = $dados['data_refeicao'];
    $cardapio_do_dia  = $dados['cardapio_do_dia'];
    $complemento      = $dados['complemento'];

        // escrever em tela nos campos do formulario
        
    } // fim if pegar ID
