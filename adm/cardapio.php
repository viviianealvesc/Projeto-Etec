<?php 

include_once 'acoes/conexao.php';

$sql = "SELECT * FROM cardapios WHERE id_cardapio";

$cardapios = $con->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>

    <style>
        .container1 {
            margin-top: 50px;
        }

        fieldset {
            width: 60%;
            margin: 30px auto;
            border-radius: 10px;
            padding: 0.5rem;
            text-align: center;
        }

        legend {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require_once 'menu-secundario.php'; ?>

   <?php  if($data_refeicao == $da) : ?> 
    <?php while($cardapio = mysqli_fetch_assoc($cardapios)) : ?>

        <div>
            <fieldset class="container1">
                <legend>PRATO DO DIA</legend>
                <p><?= $cardapio['cardapio_do_dia']; ?></p>
                <h3>COMPLEMENTO</h3>
                <p><?= $cardapio['complemento']; ?></p>
            </fieldset>
        </div>
        

    <?php endwhile ?>
    <?php endif ?>
    
</body>
</html>