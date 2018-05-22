<?php
session_start();
include "db.php";
?>
<html>
<head><title>Buscar contato</title></head>
<body>
<h1>Buscar contato</h1>
<table>
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>email</th>
    </tr>

<?php
$conexao = connect();
if ($conexao){
  $nome = $_POST['nome'];
  $consulta = "SELECT * FROM Contato WHERE nome = '$nome'";
  $resultado = $conexao->query($consulta);
  while ($linha = $resultado->fetch_assoc()){
    printf("<tr>\n<td>%s</td>\n<td>%s</td>\n<td>%s</td>\n</tr>\n", $linha['cId'],$linha['nome'],$linha['email']);
  }
  $resultado->close();
  $conexao->close();
}
?>
</table>
<p><a href="index.php">voltar</a>
</body>
</html>
