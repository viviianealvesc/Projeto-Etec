<?php
 session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Cadastrar Usuário </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="assets/css/tema-curriculo.css" />
  <link rel="stylesheet" href="assets/css/form-validation.css" />

  <style>
    img {
      width: 180px;
    }

    .navbar {
      background: red;
    }

    form {
      margin-top: 0.7rem;
    }


  </style>
</head>
<body>

<!-- barra de navegacao -->
 <?php include_once 'menu-secundario.php'; ?>

<!-- container fluido 100% -->
<div class="container-fluid bg-ligth" id="quem">

<?php include_once '../escreve-mensagem.php'; ?>
  
  <!--Inicio do form-->
  <form action="acoes/cria-usuario.php" method="POST" class="needs-validation container" novalidate onSubmit="return validaCampoSenha()">

    <div class="row g-12">

      <div class="col-sm-12">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" autofocus required>
        <div class="invalid-feedback">
          Digite o seu nome completo.
        </div>
      </div>

      <div class="col-sm-12">
        <label for="nacionalidade" class="form-label">RM</label>
        <input type="number" class="form-control" id="rm" name="rm" placeholder="" required>
        <div class="invalid-feedback">
          Digite o seu RM.
        </div>
      </div>

      <div class="col-md-12">
        <label for="date" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data" name="data_nasc" required>
        <div class="invalid-feedback">
          Informe a sua idade.
        </div>
      </div>

      <div class="col-12">
        <label for="email" class="form-label">E-mail institucional</label>
        <div class="input-group has-validation">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="email" name="email" placeholder="email@provedor.com" required>
        <div class="invalid-feedback">
            Digite o seu e-mail.
          </div>
        </div>
      </div>

      <div class="col-12">
        <label for="senha" class="form-label">Senha</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
        <div class="invalid-feedback">
            Digite uma senha.
          </div>
        </div>
      </div>

      </div>
      <br>
      <button class="w-100 btn btn-success btn-lg" type="submit" name="bt_cadastrar">
      Cadastrar
      </button>
  
  </form>
</div>

<!-- bootstrap.js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validation.js"></script>
  <script>
    function validaCampoSenha(){
      var campo = document.getElementById('senha');
      var txt   = document.getElementById('senha').value;
      var n     = txt.length;
      if(n < 6) {
        alert("A senha tem apenas " + n + " caracteres, precisa ter 6 ou mais");
        return false;
        campo.focus();
      }
        return true;
    }
  </script>
</body>
</html>