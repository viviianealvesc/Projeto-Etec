<?php
    // INICIAR SESSÃO
    session_start();

    include_once 'acoes/voto.php';
  
   // require_once 'acoes/verifica-logado.php';
  // require_once '../consulta-cardapio.php'; // consulta para pegar dados do usuario logado
    // faz com que o usuario não consiga navegar por essa página se ele não estiver logado.

    include_once 'acoes/conexao.php';
    

     $sql = "SELECT * FROM cardapios ORDER BY id ASC";
    
     $cardapios = $con->query($sql);


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
          background: blue;
          text-decoration: none;
          border-radius: 10px;
          color: #fff;
          translate: 2s;
          list-style-type: none;
        }

        .btn-sair:hover{
          background: #436EEE;
        }

        h2 {
          margin-bottom: 50px;
          margin-top: 50px;
          text-align: center;
        }

        .conteiner {
          display: flex;
          align-items: center;
          justify-content: space-around;
        }


   

    </style>
  </head>

<body>    
<header>
  <nav class="navbar">
    <div class="container">
      <img class="logo img-responsive" src="img/logo.png" alt="Logo" width="180px">
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
        <a href="acoes/logout.php" name="bt_sair" class="btn-sair">Sair</a>
      </div>
    </div>
  </nav>
</header>

  <main>
    <div>
      <div class="container-custom">

        <h2 class="text-center">CARDAPIO DA SEMANA</h2>
        <?php 
           if(isset($_SESSION['linhas'])){
            echo $_SESSION['linhas'];
            unset($_SESSION['linhas']);
          }

          if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
          }
        ?>

        <?php  
            while($cardapio = mysqli_fetch_assoc($cardapios)) {

              echo "<div>";

                    echo "<div class='conteiner'>";
                     echo "<p>" . date('d/m', strtotime($cardapio['data_refeicao'])) . "</p>";
                     echo "<a class='btn btn-primary' href='cardapio.php?id=$cardapio[id]'>VER</a>";
                    echo "</div>";
                   echo "<hr>"; 

                echo "</div> ";

              } ?>
    </div>

    
  </main>
  
</body>
</html>