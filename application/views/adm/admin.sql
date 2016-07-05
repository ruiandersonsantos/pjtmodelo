-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: projetpphp
-- ------------------------------------------------------
-- Server version	5.5.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `corretores`
--

DROP TABLE IF EXISTS `corretores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `corretores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `titulosite` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `titulobiografia` varchar(255) DEFAULT NULL,
  `biografia` text,
  `linkvideo` varchar(255) NOT NULL,
  `linkgoogle` varchar(255) DEFAULT NULL,
  `linkfacebook` varchar(255) DEFAULT NULL,
  `linktwitter` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corretores`
--

LOCK TABLES `corretores` WRITE;
/*!40000 ALTER TABLE `corretores` DISABLE KEYS */;
INSERT INTO `corretores` VALUES (1,'Rui Anderson Paim Santos','Avenida Comendador Teles',1758,'Lt 03 Qd 06','Vilar dos Teles','São João de Meriti','RJ','Rui & Simone','Novo site','PHP',' Do mesmo modo, o aumento do diálogo entre os diferentes setores produtivos exige a precisão e a definição do sistema de participação geral. Por outro lado, o entendimento das metas propostas possibilita uma melhor visão global dos métodos utilizados na avaliação de resultados. Assim mesmo, a crescente influência da mídia afeta positivamente a correta previsão do sistema de formação de quadros que corresponde às necessidades. No mundo atual, a estrutura atual da organização deve passar por modificações independentemente das posturas dos órgãos.','https://www.youtube.com/embed/oph2rr53Mic','https://www.youtube.com/watch?v=oph2rr53Mic','https://www.facebook.com/ruianderson.santos','https://plus.google.com/u/0/+RuiAndersonSantos/posts','(21)4444-5555','(21) 9876-68572','ruiandersonsantos@gmail.com');
/*!40000 ALTER TABLE `corretores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'projetpphp'
--

--
-- Dumping routines for database 'projetpphp'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-17 22:54:37
