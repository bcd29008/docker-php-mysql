<?php
session_start();
?>
<html>
<head><title>Encontrar</title></head>
<body>
<h1>Inserir</h1>
<form name="encontrar" action="a_encontrar.php" method="POST">
    <p>Nome<BR>
    <input type="text" name="nome" />
    <input type="submit" value="Buscar" />
</form>
<p><a href="index.php">voltar</a>
</body>
</html>
