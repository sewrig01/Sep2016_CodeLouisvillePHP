CREATE DATABASE  IF NOT EXISTS `Eats` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Eats`;
-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Eats
-- ------------------------------------------------------
-- Server version	5.5.52-0+deb8u1

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
-- Table structure for table `Exercises`
--

DROP TABLE IF EXISTS `Exercises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Exercises` (
  `ExerciseName` varchar(45) DEFAULT NULL,
  `Sets` int(11) DEFAULT NULL,
  `Reps` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `LastDate` datetime DEFAULT NULL,
  `MG` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Dates` varchar(45) DEFAULT NULL,
  `Active` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Exercises`
--

LOCK TABLES `Exercises` WRITE;
/*!40000 ALTER TABLE `Exercises` DISABLE KEYS */;
INSERT INTO `Exercises` VALUES ('Bicep Curl',3,20,70,'2016-11-01 00:00:00','Arm',54,NULL,'y'),('Abdominal Bench',3,20,100,'2016-11-01 00:00:00','Leg',55,NULL,'y'),('Wide Grip Lateral Pulldown',3,20,80,'2016-11-01 00:00:00','Arm',56,NULL,'y'),('Abdominal Twist',3,20,75,'2016-11-01 00:00:00','Leg',76,'','y'),('Leg Press',3,20,160,'2016-11-01 00:00:00','Leg',77,'','y'),('Rear Deltoid',3,20,60,'2016-11-01 00:00:00','Leg',78,'','y'),('Row',3,20,85,'2016-11-01 00:00:00','Arm',79,'','y'),('Leg Extension',3,20,75,'2016-11-01 00:00:00','Leg',80,'','y'),('Tricep Extension',3,20,20,'2016-11-01 00:00:00','Arm',81,'','y'),('Lower Back Ext',3,20,60,'2016-11-01 00:00:00','Leg',82,'','y'),('Hammer Curl',3,20,20,'2016-11-01 00:00:00','Arm',87,'','y'),('Pectoral Fly',3,20,60,'2016-11-01 00:00:00','Arm',88,'','y'),('Hip Adductor',4,20,160,'2016-11-01 00:00:00','Leg',89,'','y'),('Hip Abductor',4,20,160,'2016-11-01 00:00:00','Leg',90,'','y'),('Roman Chair Abdominal',4,20,90,'2016-11-01 00:00:00','Leg',91,'','y'),('Overhead Press',4,20,25,'2016-11-01 00:00:00','Arm',92,'','y'),('Chest Press ',4,20,55,'2016-11-01 00:00:00','Arm',93,'','y'),('Leg Curl',4,20,70,'2016-11-01 00:00:00','Leg',94,'','y');
/*!40000 ALTER TABLE `Exercises` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-16 21:50:09
