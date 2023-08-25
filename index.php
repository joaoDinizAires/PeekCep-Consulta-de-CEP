
<?php include_once ("processar.php")?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PeekCep - Consulta de CEP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/combinedStyles.css">
</head>
<body>
  <header class="header-navbar">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <i class="fas fa-map-marker-alt"></i> PeekCep
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="form-container">
    <form action="index.php" method="POST">
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-search"></i></button>
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" class="form-control" required value="<?php echo $cepData['cep'] ?? ''; ?>">
      </div>
      <div class="form-group">
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" class="form-control" readonly value="<?php echo $cepData['logradouro'] ?? ''; ?>">
      </div>
      <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" class="form-control" readonly value="<?php echo $cepData['bairro']?? ''; ?>">
      </div>
      <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" class="form-control" readonly value="<?php echo $cepData['localidade']?? ''; ?>">
      </div>
      <div class="form-group">
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" class="form-control" readonly value="<?php echo $cepData['uf'] ?? ''; ?>">
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>