[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE) 

# Simples aplicação PHP e MySQL

Aqui tem um simples exemplo (em *container* Docker) de como usar o PHP para acessar o MySQL. Sabe-se que existem diversos pontos de melhoria e organização do projeto. Por exemplo, uso adequado do *prepared statement*. Contudo, o intuito desse projeto é de ser o mais simples possível para facilitar o entendimento para quem está tendo o primeiro contato com PHP e MySQL.



#### Exemplo de *prepared statement* em PHP:

 ```php
// Exemplo com INSERT
$stmt = $conexao->prepare("INSERT INTO Contato (nome, email) VALUES (?,?)");
$stmt->bind_param("ss", $nome, $email); 
$nome = "juca";
$email = "j@ifsc";
$stmt->execute();
$stmt->close();

// Exemplo com SELECT
$cID = 10;
$stmt = $conexao->prepare("SELECT * FROM Contato WHERE cID = ?");
// argumentos podem ser i, d, s, b (integer, double, string ou blob) 
$stmt->bind_param("i", $cID);
$stmt->execute();
$resultado = $stmt->get_result();

while ($linha = $resultado->fetch_assoc()){
    echo $linha['nome'];
}
$stmt->close();
$resultado->close();
 ```



## Subindo o ambiente com docker-compose

```
docker-compose build
docker-compose up 
```

A aplicação poderá ser acessada pelo endereço: http://localhost:8080
