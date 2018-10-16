<?php
session_start();
$jacadastrado = 0;
include_once("banco_de_dados.php");
$arrayUsuarios = select("SELECT * FROM usuarios");
if (isset($_POST["inputnome"])) {
  foreach ($arrayUsuarios as $key => $value) {
    if ($value["nome"] == $_POST["inputnome"] || $value["email"] == $_POST["inputemail"]) {
      $jacadastrado += 1;
      header("Location: http://localhost/desafio/teste.php?erro=2");
      exit();
      break;
    }
  }
  $data_atual = date('Y/m/d H:i:s');
  $cadastrou = php_insert("INSERT INTO usuarios VALUES (DEFAULT,'{$_POST['inputnome']}','{$_POST['inputsobrenome']}','{$_POST['inputemail']}','{$_POST['inputsenha']}','{$_POST['inputdatanasc']}')");
  if ($cadastrou == 1) {
    echo "<script>alert('Cadastrado com sucesso')</script>";
    header("Location: http://localhost/desafio/index.php");
  }else{
    echo "<script>alert('Erro ao cadastrar')</script>";
  }
}
?>
