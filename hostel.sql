-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: hostel
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

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
-- Table structure for table `approve`
--

DROP TABLE IF EXISTS `approve`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `approve` (
  `Permission_ID` varchar(10) NOT NULL,
  `Faculty_ID` char(9) NOT NULL,
  `Status_of_Approval` char(255) NOT NULL,
  PRIMARY KEY (`Permission_ID`,`Faculty_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `approve`
--

LOCK TABLES `approve` WRITE;
/*!40000 ALTER TABLE `approve` DISABLE KEYS */;
INSERT INTO `approve` VALUES ('1002','123456789','');
/*!40000 ALTER TABLE `approve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `furniture`
--

DROP TABLE IF EXISTS `furniture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `furniture` (
  `Furniture_Name` char(255) NOT NULL,
  `Room_ID` varchar(10) NOT NULL,
  `Quantity` int NOT NULL,
  PRIMARY KEY (`Furniture_Name`,`Room_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `furniture`
--

LOCK TABLES `furniture` WRITE;
/*!40000 ALTER TABLE `furniture` DISABLE KEYS */;
/*!40000 ALTER TABLE `furniture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hostel`
--

DROP TABLE IF EXISTS `hostel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hostel` (
  `Hostel_Name` char(255) NOT NULL,
  `Location` char(255) NOT NULL,
  `No_of_Floors` int NOT NULL,
  `No_of_Rooms` int NOT NULL,
  `Elevator` binary(1) DEFAULT NULL,
  PRIMARY KEY (`Hostel_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hostel`
--

LOCK TABLES `hostel` WRITE;
/*!40000 ALTER TABLE `hostel` DISABLE KEYS */;
/*!40000 ALTER TABLE `hostel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hostel faculty`
--

DROP TABLE IF EXISTS `hostel faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hostel faculty` (
  `Faculty_ID` char(9) NOT NULL,
  `Position` char(255) NOT NULL,
  `Department` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hostel faculty`
--

LOCK TABLES `hostel faculty` WRITE;
/*!40000 ALTER TABLE `hostel faculty` DISABLE KEYS */;
/*!40000 ALTER TABLE `hostel faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parent` (
  `Parent_ID` int NOT NULL AUTO_INCREMENT,
  `Parent_Name` char(255) NOT NULL,
  `Parent_Contact_No` char(255) DEFAULT NULL,
  `Parent_Email` varchar(511) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Parent_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent`
--

LOCK TABLES `parent` WRITE;
/*!40000 ALTER TABLE `parent` DISABLE KEYS */;
INSERT INTO `parent` VALUES (7,'Deepa Sony','7559955747','deepasony134@gmail.com'),(8,'Donkey Kong','8899001122','nothing@gmail.com'),(9,'COMEON','88888888888','fiweuhrifhu@gmasi.com'),(10,'COMEON','88888888888','fiweuhrifhu@gmasi.com'),(11,'Wang Ikku','9934221155','wang@ikku.com'),(12,'Lmao','8888888888','defrw@gmail.com'),(13,'Nope Dunno','9900112233','somethingIG@gmail.com');
/*!40000 ALTER TABLE `parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `Permission_ID` int NOT NULL AUTO_INCREMENT,
  `Student_Roll_No` char(9) NOT NULL,
  `Initiaiton_Date` date NOT NULL,
  `Priority` char(255) NOT NULL,
  `No_of_Days` int NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Vacate_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  PRIMARY KEY (`Permission_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `Room_ID` varchar(10) NOT NULL,
  `Hostel_Name` char(255) NOT NULL,
  `No_of_Inmates` int NOT NULL,
  `No_of_Outlets` int NOT NULL,
  PRIMARY KEY (`Room_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `Student_Roll_No` char(9) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Year_of_Study` int NOT NULL,
  `Department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Hostel_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Room_ID` int NOT NULL,
  `Parent_ID` int DEFAULT NULL,
  PRIMARY KEY (`Student_Roll_No`),
  KEY `Parent_ID` (`Parent_ID`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Parent_ID`) REFERENCES `parent` (`Parent_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('B180222CS','Lmao What',3,'CSE','MBH',150,9),('B180293CS','Test',3,'CSE','LH',423,12),('B180297CS','Dev Sony',3,'CSE','MBH',158,7),('B180333CS','Monkey Wings',3,'CSE','MBH',199,8),('B180614CS','Soujanya Namburi',3,'CSE','MLH',111,13),('B180999CS','Epic Bruh',3,'CSE','MBH',133,11);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `User_ID` char(9) NOT NULL,
  `Email` char(50) NOT NULL,
  `Password` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ForS` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('B180297CS','devsony52@gmail.com','9495923271Dev','S'),('B180222CS','djwieuh@gheir.com','f80b4c47f440761b2e65e1e1dfe19e9f','S'),('B180999CS','somethingwong@gmail.com','25f9e794323b453885f5181f1b624d0b','S'),('B180293CS','something@gmail.com','f80b4c47f440761b2e65e1e1dfe19e9f','S'),('B180614CS','lolidk@gmail.com','590d8bb26f56b05331be61257b3c8f28','S'),('F1234','faculty@nitc.ac.in','7efc857addf4ec853d5d19337e046566','F');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-28  6:06:23
