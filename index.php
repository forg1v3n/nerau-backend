<!doctype html>
<html lang="en">
  <head>
    <title>Nerau</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php require_once "process.php"; ?>

<?php 
    $mysqli = new mysqli('localhost', 'root', '', 'tabela') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM tabela") or die ($mysqli->error);
    ?>

  <div class="row justify-content-center">
      <form action="process.php" method="POST">
      <div class="form-group">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control" placeholder="Insira seu nome">
      </div>
      <div class="form-group">
      <label>E-mail</label>
      <input type="text" name="email" class="form-control" placeholder="Insira seu E-Mail">
      </div>
      <div class="form-group">
      <label>Telefone</label>
      <input type="number" name="telefone" class="form-control"  placeholder="Insira seu Telefone">
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
      </div>
  </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>