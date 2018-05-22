<?php
session_start();

$nome= "buscar nome no DB";
$email= "buscar email no DB";

?>
<html>
<head><title>Editar</title></head>
<body>
<h1>Editar</h1>
<form name="contato" action="a_editar.php" method="POST">
    <p>Id: <? echo $_GET['id'];?>
    <p>Nome<BR>
        <input type="text" name="nome" value="<? echo $nome; ?>" />
    <p>Email:<BR>
    <input type="text" name="email" value="<? echo $email; ?>" />
    <input type="submit" value="Enviar" />
</form>
<p><a href="index.php">voltar</a>
</body>
</html>
