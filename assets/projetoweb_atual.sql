CREATE DATABASE `projetoweb`;

USE `projetoweb`;

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `endereco` varchar(45) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;