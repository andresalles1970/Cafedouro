-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cafedouro
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carrinho` (
  `idcarrinho` int NOT NULL AUTO_INCREMENT,
  `cliente` varchar(45) DEFAULT NULL,
  `idProduto` varchar(45) DEFAULT NULL,
  `idUser` varchar(45) DEFAULT NULL,
  `quantidade` varchar(45) DEFAULT NULL,
  `idVenda` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `TipoPg` varchar(45) DEFAULT NULL,
  `dtvenda` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcarrinho`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho`
--

LOCK TABLES `carrinho` WRITE;
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
INSERT INTO `carrinho` VALUES (1,NULL,'1',NULL,NULL,'24241212010159','pago','pix','01/12/24'),(2,NULL,'1',NULL,NULL,'24241212010132','pago','pix','01/12/24'),(3,NULL,'2',NULL,NULL,'24241212010132','pago','pix','01/12/24'),(4,NULL,'2',NULL,NULL,'24241212010109','pago','dinheiro','01/12/24'),(5,NULL,'1',NULL,NULL,'24241212020201','pago','pix','02/12/24'),(6,NULL,'2',NULL,NULL,'24241212020201','pago','pix','02/12/24');
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria_produto`
--

DROP TABLE IF EXISTS `categoria_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria_produto` (
  `idCategoria` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_produto`
--

LOCK TABLES `categoria_produto` WRITE;
/*!40000 ALTER TABLE `categoria_produto` DISABLE KEYS */;
INSERT INTO `categoria_produto` VALUES (1,'Bebidas'),(2,'Sanduiches');
/*!40000 ALTER TABLE `categoria_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil` (
  `idPerfil` int NOT NULL,
  `NomePerfil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'teste');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idProduto` int NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(45) DEFAULT NULL,
  `categoria_produto_idCategoria` int NOT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `fk_Produto_categoria_produto_idx` (`categoria_produto_idCategoria`),
  CONSTRAINT `fk_Produto_categoria_produto` FOREIGN KEY (`categoria_produto_idCategoria`) REFERENCES `categoria_produto` (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Capuccino',1,'15','capuccino.jpg'),(2,'Espresso',1,'5','espresso.jpeg'),(3,'Folheados',2,'7','folhados.webp'),(4,'Croissants',2,'10','Croissants.webp');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `idPerfil` int NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `fk_usuários_Perfil1_idx` (`idPerfil`),
  CONSTRAINT `fk_usuários_Perfil1` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'atendente','atendente','$2y$10$gj7R6ijvmPWlOUbTYbStAe3H9yOOPjtVHWrKtb8/tj63lftJ5A9yq',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venda`
--

DROP TABLE IF EXISTS `venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `venda` (
  `idvenda` int NOT NULL AUTO_INCREMENT,
  `cliente` varchar(45) DEFAULT NULL,
  `quantidade` varchar(45) DEFAULT NULL,
  `dtvenda` datetime DEFAULT NULL,
  `usuarios_iduser` varchar(2) DEFAULT NULL,
  `Produto_idProduto` int NOT NULL,
  `total` varchar(45) DEFAULT NULL,
  `tipopg` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idvenda`,`Produto_idProduto`),
  KEY `fk_venda_usuários1_idx` (`usuarios_iduser`),
  KEY `fk_venda_Produto1_idx` (`Produto_idProduto`),
  CONSTRAINT `fk_venda_Produto1` FOREIGN KEY (`Produto_idProduto`) REFERENCES `produto` (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venda`
--

LOCK TABLES `venda` WRITE;
/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
INSERT INTO `venda` VALUES (1,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(2,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(3,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(4,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(5,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(6,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(7,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(8,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(9,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(10,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(11,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(12,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(13,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(14,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(15,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(16,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(17,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(18,'24241212010124',NULL,NULL,NULL,1,NULL,NULL),(19,'24241212010153',NULL,NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-02 15:44:59
