<?php
session_start();
?>
<html>
<head><title>Inserir</title></head>
<body>
<h1>Inserir</h1>
<form name="contato" action="a_inserir.php" method="POST">
    <p>Nome<BR>
        <input type="text" name="nome" />
    <p>Email:<BR>
    <input type="text" name="email" />
    <input type="submit" value="Enviar" />
</form>
<p><a href="index.php">voltar</a>
</body>
</html>
