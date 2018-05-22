<?php
session_start();
include "db.php";
?>
<html>
<head><title>Listar</title></head>
<body>
<h1>Listar</h1>
<table>
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>email</th>
    </tr>

<?php
$conexao = connect();
if ($conexao){
  $consulta = "SELECT * FROM Contato";
  $resultado = $conexao->query($consulta);
  while ($linha = $resultado->fetch_assoc()){
    printf("<tr>\n<td><a href='editar.php?id=%s'>%s</a></td>\n<td>%s</td>\n<td>%s</td>\n</tr>\n", $linha['cId'],$linha['cId'],$linha['nome'],$linha['email']);
  }
  $resultado->close();
  $conexao->close();
}
?>
</table>
<p><a href="index.php">voltar</a>
</body>
</html>
