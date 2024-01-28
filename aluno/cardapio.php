<?php 

include_once 'acoes/conexao.php';

$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);

$sqlSelect = "SELECT id, data_refeicao, cardapio_do_dia, complemento FROM cardapios WHERE id = '$id';";

$resultado = $con->query($sqlSelect);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="Viviane Alves">

    <title>Etec - Cantina</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 
    <!-- Bootstrap core CSS 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->

    <style>
       @import url('https://fonts.googleapis.com/css2? family= Roboto & display=swap');

        * {
          margin: 0;
          padding: 0;
          font-family: 'Roboto', sans-serif;
        }

        header {
          background: red;
        }

        .container {
          display: flex;
          align-items: center;
          justify-content: space-between; 
          padding: 0.3rem;
        }

        .logo {
            width: 9rem;
        }

        .box {
          display: flex;
          align-items: center;
          justify-content: space-around;
          margin: 0.5rem;
          padding: 0.5rem;
        }

        .btn-sair {
          padding: 0.6rem;
          text-decoration: none;
          color: #fff;
          list-style-type: none;
        }

        h2 {
          margin-bottom: 50px;
          margin-top: 50px;
          text-align: center;
        }

        .d-flex {
          margin-top: 50px;
          display: flex;
          align-items: center;
          justify-content: end;
          margin-right: 0.7rem;
        }


        p {
          margin: 15px;
        }

        .container1 {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          height: 50%;
        }

        fieldset {
            width: 45%;
            margin: 30px auto;
            border: 2px solid black;
            padding: 0.5rem;
            border-radius: 15px 50px; 
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
        }

        legend {
            text-align: center;
            background: red;
            color: #fff;
            width: 10%;
            padding: 0.5rem;
            font-size: 15px;
        }

        .btn-almocar{
          text-decoration: none;
          background: green;
          padding: 0.5rem;
          color: #fff;
          border-radius: 10px;
          margin-right: 10px;
          border: none;
        }

        form {
          display: flex;
          align-items: center;
          justify-content: center;
        }

    </style>
  </head>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
      <img class="logo img-responsive" src="img/logo.png" alt="Logo" width="170px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="justify-content-center navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formacoes.php">Formações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cursos.php">Cursos</a>
          </li>
        </ul> -->
        <a href="painel.php" class="btn-sair">X</a>
      </div>
    </div>
  </nav>
</header>

<body>

  <?php 
    while($cardapio = mysqli_fetch_assoc($resultado)) {
      echo "  <div>
      <fieldset class='container1'> ";
      echo "<legend>" . date('d/m', strtotime($cardapio['data_refeicao'])) . "</legend>";

       echo "<p><strong>PRATO DO DIA</strong></p>";
       echo "<p>" . $cardapio['cardapio_do_dia'] . "</p>";

       echo "<p><strong>COMPLEMENTO</strong></p>";
       echo "<p>" . $cardapio['complemento'] . "</p>";

        echo "<form method='post' action='acoes/voto.php?id=$cardapio[id]'>";
        echo " <button class='btn-almocar' name='voto' data-id='$cardapio[id]'>Vou almoçar</button>";
        echo "</form>"; 
    
      echo "</fieldset>";

      echo "</div>";
  echo "</div> "; 
    }
  
  
  ?>

<script src="./assets/js/sweetalert2.js"></script>

<!-- JANELA MODAL -->

<script>
$('.btn-almocar').click(function() {
var cardapioId = $(this).data('id'); // Obter o ID do cardápio

$.ajax({
url: 'acoes/voto.php',
type: 'POST',
data: { id: cardapioId },
success: function(response) {
// Exibir um alerta de sucesso com SweetAlert
Swal.fire({
  icon: 'success',
  title: 'Voto registrado com sucesso!',
  text: 'Ficha de identificação gerada.',
  showConfirmButton: true, // Mostra o botão "OK"
});
},
error: function() {
// Exibir um alerta de erro com SweetAlert
Swal.fire({
  icon: 'error',
  title: 'Erro ao registrar o voto.',
  text: 'Tente novamente.',
  confirmButtonText: 'OK'
});
}
});
});


</script>

    
</body>
</html>