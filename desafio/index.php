<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <script src="js/jquery.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <meta charset="utf-8">
  <title>Clientes</title>
  <script>
  function botaocadastrarcliente() {
    window.location = "http://localhost/desafio/teste.php";
  }
  </script>
</head>
<body>
  <?php
  include_once("includes/banco_de_dados.php");
  $arrayUsuarios = select("SELECT * FROM usuarios");
  $posicao = 0;
  ?>
  <h1 class="h1 mb-3 font-weight-normal newFont" id= "Clientesindex" style="color:black;">Clientes</h1>
  <table class="table" id="tabelacss">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome:</th>
        <th scope="col">Sobrenome:</th>
        <th scope="col">E-mail:</th>
        <th scope="col">Data de Nascimento:</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($arrayUsuarios as $key => $value) {
        $posicao += 1;?>
        <tr>
          <th scope="row"><?php echo $posicao ?></th>
          <td><?php echo $value["nome"] ?></td>
          <td><?php echo $value["sobrenome"] ?></td>
          <td><?php echo $value["email"] ?></td>
          <td><?php echo $value["data_nasci"] ?></td>
        </tr>
      <?php  } ?>
    </tbody>
  </table>
  <button class="btn btn-primary" id="botaoindex" type="submit" onclick="botaocadastrarcliente();">Cadastrar novo cliente</button>
</body>
</html>
