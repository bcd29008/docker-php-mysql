CREATE DATABASE  IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `agenda`;

DROP TABLE IF EXISTS `Contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contato` (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


INSERT INTO Contato (nome, email) VALUES ('Juca', 'j@ifsc.edu.br');
INSERT INTO Contato (nome, email) VALUES ('Joca', 'jo@ifsc.edu.br');
INSERT INTO Contato (nome, email) VALUES ('Guga', 'g@ifsc.edu.br');
INSERT INTO Contato (nome, email) VALUES ('Sofa', 's@ifsc.edu.br');
