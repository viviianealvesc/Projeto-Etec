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
          width: 90%;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
        }

        .btn-sair {
          color: #fff;
          text-decoration: none;
          list-style: none;
          margin-right: 0.5rem;
        }

    </style>

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
        <a href="login-aluno.php" class="btn-sair">X</a>
      </div>
    </div>
  </nav>
</header>

