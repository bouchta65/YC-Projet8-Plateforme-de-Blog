-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: blog_projet
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `archive`
--

DROP TABLE IF EXISTS `archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `archive` (
  `Id_Archive` int NOT NULL AUTO_INCREMENT,
  `Id_Article` int DEFAULT NULL,
  `Date_Archivage` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Archive`),
  KEY `Id_Article` (`Id_Article`),
  CONSTRAINT `archive_ibfk_1` FOREIGN KEY (`Id_Article`) REFERENCES `article` (`Id_Article`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archive`
--

LOCK TABLES `archive` WRITE;
/*!40000 ALTER TABLE `archive` DISABLE KEYS */;
/*!40000 ALTER TABLE `archive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `Id_Article` int NOT NULL AUTO_INCREMENT,
  `Titre_Article` varchar(100) DEFAULT NULL,
  `Contenu_Article` text,
  `Image_Article` varchar(255) DEFAULT NULL,
  `Date_Posting` datetime DEFAULT NULL,
  `Article_Confirme` tinyint(1) DEFAULT NULL,
  `Id_User` int DEFAULT NULL,
  PRIMARY KEY (`Id_Article`),
  KEY `Id_User` (`Id_User`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_tags`
--

DROP TABLE IF EXISTS `article_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article_tags` (
  `Id_Tags` int NOT NULL,
  `Id_Article` int NOT NULL,
  PRIMARY KEY (`Id_Tags`,`Id_Article`),
  KEY `Id_Article` (`Id_Article`),
  CONSTRAINT `article_tags_ibfk_1` FOREIGN KEY (`Id_Tags`) REFERENCES `tags` (`Id_Tags`),
  CONSTRAINT `article_tags_ibfk_2` FOREIGN KEY (`Id_Article`) REFERENCES `article` (`Id_Article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_tags`
--

LOCK TABLES `article_tags` WRITE;
/*!40000 ALTER TABLE `article_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `black_liste`
--

DROP TABLE IF EXISTS `black_liste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `black_liste` (
  `Id_Liste` int NOT NULL AUTO_INCREMENT,
  `Raison` text,
  `Id_User` int DEFAULT NULL,
  PRIMARY KEY (`Id_Liste`),
  KEY `Id_User` (`Id_User`),
  CONSTRAINT `black_liste_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `black_liste`
--

LOCK TABLES `black_liste` WRITE;
/*!40000 ALTER TABLE `black_liste` DISABLE KEYS */;
/*!40000 ALTER TABLE `black_liste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentaire` (
  `Id_Commentaire` int NOT NULL AUTO_INCREMENT,
  `Contenu` text,
  `Id_User` int DEFAULT NULL,
  `Id_Article` int DEFAULT NULL,
  `Date_Posting` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_Commentaire`),
  KEY `Id_User` (`Id_User`),
  KEY `Id_Article` (`Id_Article`),
  CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`Id_Article`) REFERENCES `article` (`Id_Article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaire`
--

LOCK TABLES `commentaire` WRITE;
/*!40000 ALTER TABLE `commentaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `likes` (
  `Id_Likes` int NOT NULL AUTO_INCREMENT,
  `Id_Article` int DEFAULT NULL,
  `Id_User` int DEFAULT NULL,
  PRIMARY KEY (`Id_Likes`),
  KEY `Id_Article` (`Id_Article`),
  KEY `Id_User` (`Id_User`),
  CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`Id_Article`) REFERENCES `article` (`Id_Article`),
  CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `Id_Tags` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) DEFAULT NULL,
  `Description` text,
  PRIMARY KEY (`Id_Tags`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `Id_User` int NOT NULL AUTO_INCREMENT,
  `Nom_User` varchar(50) DEFAULT NULL,
  `Prenom_User` varchar(50) DEFAULT NULL,
  `Age_User` int DEFAULT NULL,
  `Email_User` varchar(100) DEFAULT NULL,
  `Role_User` enum('Admin','User') DEFAULT NULL,
  `Password_User` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_User`),
  UNIQUE KEY `Email_User` (`Email_User`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Admin','default',21,'admin@gmail.com','Admin','1234');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'blog_projet'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-16 22:47:10
