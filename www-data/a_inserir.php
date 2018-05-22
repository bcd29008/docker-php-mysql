<?php
session_start();
include "db.php";

$nome  = $_POST['nome'];
$email = $_POST['email'];

$consulta = "INSERT INTO Contato (nome, email) VALUES ('$nome', '$email')";

$conexao = connect();

$resultado = $conexao->query($consulta);
if ($resultado){
  header("Location: index.php");
}else{
  header("Location: erro.php");
}
?>
