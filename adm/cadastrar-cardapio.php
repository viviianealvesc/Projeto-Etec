<?php
    // INICIAR SESSÃO
       session_start();
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
 
    <!-- Bootstrap core CSS 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

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

        .container-fluid {
          display: flex;
          align-items: center;
          justify-content: space-between; 
          padding: 0.3rem;
        }

        .logo {
            width: 9rem;
        }

        .container {
          width: 70%;
          margin: 50px auto;
        }

        textarea {
          font-size: 16px; 
          color: #333; 
          width: 98%; 
          height: 200px; 
          background-color: #f7f7f7; 
          border-radius: 5px; 
          padding: 10px; 
          transition: border 0.2s;
          margin-top: 0.5rem;
          margin-bottom: 0.5rem;
        }

        .btn {
          width: 100%;
          padding: 0.9rem;
          border-radius: 10px;
          background: green;
          color: #fff;
          border: none;
          translate: 2s;
        }

        .btn:hover {
          background: #43CD80;
        }

        .btn-sair {
          color: #fff;
          text-decoration: none;
          list-style: none;
          margin-right: 0.5rem;
        }

        .calendario {
          padding: 0.4rem;
          border-radius: 10px;
          margin-bottom: 5px;
        }

    </style>
  </head>

<body>    
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

  <main>
      <div class="container">
        <form action="acoes/cadastra-cardapio.php" method="POST">
        <input class="calendario" type="date" name="data_refeicao" id="data">
            <div class="box">
              <h3>PRATO DO DIA</h3>
                <textarea type="text" name="cardapio_do_dia" id="cardapio" cols="30" rows="10" placeholder="Digite o cardapio do dia..."></textarea>
            </div>
            <div class="box">
              <h3>COMPLEMENTO</h3>
                <textarea type="text" name="complemento" id="cardapio" cols="30" rows="10" placeholder="Digite o complemento..."></textarea>
            </div>
            <button class="btn" type="submit" name="bt_cardapio">
              Cadastrar
            </button>
        </form>
    </div>
  </main>
  
</body>
</html>