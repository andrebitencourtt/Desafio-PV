<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/teste.css"/>
  <script src="js/jquery.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/bootstrap/bootstrap.js"></script>
  <meta charset="utf-8">
  <title>Cadastro</title>
  <?php
  include_once("includes/banco_de_dados.php");
  if(isset($_GET["erro"]) && $_GET["erro"] == 2){
    echo "<script>alert('Usuario ja cadastrado')</script>";
  }
  ?>
</head>
<body>
  <form class="needs-validation" action="includes/verificcadastro.php" method="post">
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <h1 class="h1 mb-3 font-weight-normal newFont" id= "Clientes" style="color:black;">Cadastro Clientes</h1>
        <input type="text" class="form-control" id="inputnome" placeholder="Nome:" name="inputnome" autofocus required>
        <div class="valid-tooltip">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <input type="text" class="form-control" id="inputsobrenome" placeholder="Sobrenome:" name="inputsobrenome" autofocus required>
        <div class="valid-tooltip">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="E-mail:" name="inputemail" autofocus required>
        <div class="invalid-tooltip">
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip03" id="tituloInformacoes">Informações de Segurança:</label>
      <input type="password" class="form-control" id="inputsenha" placeholder="Senha: até 10 Letras" required pattern="[a-z]{0-10}"  name="inputsenha" onchange="form.inputcsenha.pattern = this.value;">
      <div class="valid-tooltip">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip03">Confirmar Senha:</label>
      <input type="password" class="form-control" id="inputcsenha" placeholder="Digite sua senha novamente" required pattern="[a-z]{0-10}" name="inputcsenha" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'As senhas não conferem' : '')">
      <div class="valid-tooltip">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputdatanasc" id="dnasc_cadastro" class="col-6 col-form-label newFont">Data de nascimento:</label>
      <div class="col-6">
        <input type="date" id="inputdatanasc" class="form-control inputForm" name="inputdatanasc"  autofocus required>
      </div>
    </div>
    <button class="btn btn-primary" id="botaoenviar" type="submit">Cadastrar</button>
  </form>
</body>
</html>
