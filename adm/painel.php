<?php
    // INICIAR SESSÃO
    session_start();
  
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

        h2 {
          margin-bottom: 50px;
          text-align: center;
        }

        .btn-cardapio {
          padding: 0.6rem;
          background: blue;
          text-decoration: none;
          border-radius: 10px;
          color: #fff;
          translate: 2s;
        }

        .d-flex {
          margin-top: 50px;
          display: flex;
          align-items: center;
          justify-content: end;
          margin-right: 0.7rem;
        }

        .btn-sair:hover, .btn-cardapio:hover {
          background: #436EEE;
        }

        .btn-ver {
          padding: 0.5rem;
          background: green;
          text-decoration: none;
          border-radius: 10px;
          color: #fff;
          border: none;
          cursor: pointer;
          translate: 2s;
        }

        .btn-ver:hover {
          background: #008B00;
        }

        p {
          margin: 25px;
        }

        .container1 {
            margin-top: 50px;
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
            padding: 0.5rem;
        }

        .btn-editar {
          text-decoration: none;
          background: green;
          padding: 0.5rem;
          color: #fff;
          border-radius: 10px;
          margin-right: 10px;
        }

        .btn-excluir {
          text-decoration: none;
          background: red;
          padding: 0.5rem;
          color: #fff;
          border-radius: 10px;
        }

        .botoes {
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .alunos {
          display: flex;
          align-items: center;
          justify-content: center;
          background: #CFCFCF;
          border-radius: 20px;
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
        <a href="login-adm.php" class="btn-sair">Sair</a>
      </div>
    </div>
  </nav>
</header>

  <main>
    <div>
      <div class="container-custom">
        <div class="d-flex">
           <a class="btn-cardapio" href="cadastrar-cardapio.php">Cadastrar cardapio</a>
        </div>

        <?php include_once 'escreve-mensagem.php'; ?>


        <h2 class="text-center">CARDAPIO DA SEMANA</h2>

        <?php
          if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
          }
        ?>

      <?php 

            while($cardapio = mysqli_fetch_assoc($cardapios)) {

      echo "  <div>
            <fieldset class='container1'> ";
            echo "<legend>" . date('d/m', strtotime($cardapio['data_refeicao'])) . "</legend>";
             
            echo "<div class='alunos'>";
            echo "<p> Alunos que vao almoçar:  " . $cardapio['voto'] . "</p>";
            echo "</div>";

             echo "<p><strong>PRATO DO DIA</strong></p>";
             echo "<p>" . $cardapio['cardapio_do_dia'] . "</p>";

             echo "<p><strong>COMPLEMENTO</strong></p>";
             echo "<p>" . $cardapio['complemento'] . "</p>";

             echo "<div class='botoes'>";
             echo "<a class='btn-editar' href='edita-cardapio.php?id=$cardapio[id]'>Editar</a>";
             echo "<a class='btn-excluir' href='acoes/excluir-cardapio.php?id=" . $cardapio['id'] . "'>Excluir</a>";
            echo "</div>";
            echo "</fieldset>";
        echo "</div> ";
      } ?>

    </div>
  </main>
  
</body>
</html>