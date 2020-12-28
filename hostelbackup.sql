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
INSERT INTO `approve` VALUES ('1002','123456789',''),('18','F1234','Approved'),('19','','Approved'),('20','','Approved'),('21','','Approved'),('22','','Approved'),('23','Fac2','Waitlisted'),('24','000','Waitlisted'),('25','000','Waitlisted'),('26','000','Waitlisted'),('27','000','Waitlisted'),('28','000','Waitlisted'),('29','000','Waitlisted'),('30','000','No-otp'),('31','000','No-otp'),('32','000','No-otp'),('33','000','No-otp'),('9','F1234','Approved');
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
  `Room_capacity` int NOT NULL,
  PRIMARY KEY (`Hostel_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hostel`
--

LOCK TABLES `hostel` WRITE;
/*!40000 ALTER TABLE `hostel` DISABLE KEYS */;
INSERT INTO `hostel` VALUES ('MBH','Kattangal Down',7,312,_binary '',2),('MLH','Kattangal',9,345,_binary '',2);
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
  `Recent_OTP` int DEFAULT NULL,
  PRIMARY KEY (`Parent_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parent`
--

LOCK TABLES `parent` WRITE;
/*!40000 ALTER TABLE `parent` DISABLE KEYS */;
INSERT INTO `parent` VALUES (7,'Deepa Sony','7559955747','deepasony134@gmail.com',NULL),(8,'Donkey Kong','8899001122','nothing@gmail.com',NULL),(9,'COMEON','88888888888','fiweuhrifhu@gmasi.com',830585),(10,'COMEON','88888888888','fiweuhrifhu@gmasi.com',NULL),(11,'Wang Ikku','9934221155','wang@ikku.com',316778),(12,'Lmao','8888888888','defrw@gmail.com',NULL),(13,'Nope Dunno','9900112233','somethingIG@gmail.com',NULL),(14,'Dev','8921710467','devsony52@gmail.com',NULL),(15,'Souju','7559955747','devsony52@gmail.com',NULL),(16,'Lmao Work Shit','7559955747','devsony52@gmail.com',NULL),(17,'Lmao Work Shit','7559955747','devsony52@gmail.com',NULL),(18,'Dev Sony Second','8921710467','devsony52@gmail.com',653951);
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
  `OTP_Sent` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`Permission_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (9,'B180999CS','2020-12-28','high',0,'Home sick','2021-01-02','2021-01-02',0),(18,'B180999CS','2020-12-28','high',11,'Home sick','2020-12-29','2021-01-09',0),(19,'B180999CS','2020-12-28','high',1,'Home sick','2020-12-31','2020-12-30',0),(20,'B180999CS','2020-12-28','high',10,'Home sick','2020-12-30','2021-01-09',0),(21,'B180999CS','2020-12-28','high',3,'Home sick','2020-12-29','2021-01-01',0),(22,'B180999CS','2020-12-28','high',0,'Home sick','2020-12-31','2020-12-31',0),(24,'B180222CS','2020-12-28','Med',3,'Treeeeeeeeeeeeeee','2021-01-06','2021-01-09',0),(25,'B180666EP','2020-12-28','High',10,'This is nice','2020-12-31','2021-01-10',0),(26,'B180491CS','2020-12-28','High',9,'THis is a test and I want to pass','2021-01-01','2021-01-10',0),(28,'','2020-12-28','High',15,'Random Request','2020-12-26','2021-01-10',0),(29,'B180666EP','2020-12-28','Med',24,'Lmao','2020-12-17','2021-01-10',0),(30,'B180666EP','2020-12-28','High',11,'This is a test','2020-12-30','2021-01-10',0),(31,'B180666EP','2020-12-28','High',11,'This is a test','2020-12-30','2021-01-10',0),(32,'B180666EP','2020-12-28','Med',27,'Cmon why arent u showing up','2020-12-14','2021-01-10',0),(33,'B180222CS','2020-12-28','High',2,'This is a test','2021-01-05','2021-01-07',0);
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
INSERT INTO `room` VALUES ('158','MBH',0,3),('177','MLH',0,5);
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
  `Phone_Number` varchar(20) NOT NULL,
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
INSERT INTO `student` VALUES ('B180099CT','Tester',3,'CT','PG',100,17,'9988776655'),('B180222CS','Lmao What',3,'CSE','MBH',150,9,'0'),('B180293CS','Test',3,'CSE','LH',423,12,'0'),('B180297CS','Dev Sony',3,'CSE','MBH',158,7,'0'),('B180333CS','Monkey Wings',3,'CSE','MBH',199,8,'0'),('B180491CS','Soujanya Namburi Second',3,'CSE','MLH',725,18,'9391183665'),('B180614CS','Soujanya Namburi',3,'CSE','MLH',111,13,'0'),('B180999CS','Epic Bruh',3,'CSE','MBH',133,11,'0');
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
INSERT INTO `user` VALUES ('B180297CS','devsony52@gmail.com','9495923271Dev','S'),('B180222CS','djwieuh@gheir.com','f80b4c47f440761b2e65e1e1dfe19e9f','S'),('B180999CS','somethingwong@gmail.com','25f9e794323b453885f5181f1b624d0b','S'),('B180293CS','something@gmail.com','f80b4c47f440761b2e65e1e1dfe19e9f','S'),('B180614CS','lolidk@gmail.com','590d8bb26f56b05331be61257b3c8f28','S'),('F1234','faculty@nitc.ac.in','25f9e794323b453885f5181f1b624d0b','F'),('Fac2','facu@gmail.com','f80b4c47f440761b2e65e1e1dfe19e9f','F'),('B180666EP','dev_b180297cs@nitc.ac.in','7efc857addf4ec853d5d19337e046566','S'),('B180123BT','devsony52@gmail.com','7efc857addf4ec853d5d19337e046566','S'),('B180099CT','devsony52@gmail.com','25f9e794323b453885f5181f1b624d0b','S'),('B180099CT','devsony52@gmail.com','25f9e794323b453885f5181f1b624d0b','S'),('B180491CS','devsony52@gmail.com','7efc857addf4ec853d5d19337e046566','S');
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

-- Dump completed on 2020-12-28 22:06:01
