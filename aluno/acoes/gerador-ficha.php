<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo de Ficha de Identificação</title>
  <!-- Inclua os links para as bibliotecas Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Botão para abrir o modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#votoModal">
    Vou Almoçar
  </button>

  <!-- Modal para exibir informações e gerar ficha -->
  <div class="modal fade" id="votoModal" tabindex="-1" role="dialog" aria-labelledby="votoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="votoModalLabel">Informações do Aluno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Coloque as informações do aluno aqui (nome, turma, etc.) -->
          <p>Nome do Aluno: João da Silva</p>
          <p>Turma: 10A</p>
          <!-- Adicione outras informações do aluno aqui -->

          <hr>

          <!-- Botão para gerar a ficha -->
          <button class="btn btn-success" onclick="gerarFicha()">Gerar Ficha de Identificação</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Função para gerar a ficha (substitua com sua lógica específica)
    function gerarFicha() {
      // Aqui, você pode implementar a lógica para gerar a ficha ou redirecionar para uma página com a ficha.
      alert('Ficha de identificação gerada!');
    }
  </script>
</body>
</html>
