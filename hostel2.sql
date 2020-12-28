-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2020 at 03:23 PM
-- Server version: 8.0.22
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `Permission_ID` varchar(10) NOT NULL,
  `Faculty_ID` char(9) NOT NULL,
  `Status_of_Approval` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`Permission_ID`, `Faculty_ID`, `Status_of_Approval`) VALUES
('1002', '123456789', ''),
('18', 'F1234', 'Waitlisted'),
('19', '', 'Approved'),
('20', '', 'Denied'),
('21', '', 'Approved'),
('22', 'F1234', 'Waitlisted'),
('23', '000', 'No-otp'),
('24', '000', 'No-otp'),
('25', '000', 'Denied'),
('9', 'F1234', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `Furniture_Name` char(255) NOT NULL,
  `Room_ID` varchar(10) NOT NULL,
  `Quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `Hostel_Name` char(255) NOT NULL,
  `Location` char(255) NOT NULL,
  `No_of_Floors` int NOT NULL,
  `No_of_Rooms` int NOT NULL,
  `Elevator` binary(1) DEFAULT NULL,
  `Capacity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel faculty`
--

CREATE TABLE `hostel faculty` (
  `Faculty_ID` char(9) NOT NULL,
  `Position` char(255) NOT NULL,
  `Department` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `Parent_ID` int NOT NULL,
  `Parent_Name` char(255) NOT NULL,
  `Parent_Contact_No` char(255) DEFAULT NULL,
  `Parent_Email` varchar(511) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Recent_OTP` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`Parent_ID`, `Parent_Name`, `Parent_Contact_No`, `Parent_Email`, `Recent_OTP`) VALUES
(7, 'Deepa Sony', '7559955747', 'deepasony134@gmail.com', NULL),
(8, 'Donkey Kong', '8899001122', 'nothing@gmail.com', NULL),
(9, 'COMEON', '88888888888', 'fiweuhrifhu@gmasi.com', NULL),
(10, 'COMEON', '88888888888', 'fiweuhrifhu@gmasi.com', NULL),
(11, 'Wang Ikku', '9934221155', 'wang@ikku.com', 109257),
(12, 'Lmao', '8888888888', 'defrw@gmail.com', NULL),
(13, 'Nope Dunno', '9900112233', 'somethingIG@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `Permission_ID` int NOT NULL,
  `Student_Roll_No` char(9) NOT NULL,
  `Initiaiton_Date` date NOT NULL,
  `Priority` char(255) NOT NULL,
  `No_of_Days` int NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Vacate_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  `OTP_Sent` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`Permission_ID`, `Student_Roll_No`, `Initiaiton_Date`, `Priority`, `No_of_Days`, `Description`, `Vacate_Date`, `Return_Date`, `OTP_Sent`) VALUES
(9, 'B180999CS', '2020-12-28', 'high', 0, 'Home sick', '2021-01-02', '2021-01-02', 0),
(18, 'B180999CS', '2020-12-28', 'high', 11, 'Home sick', '2020-12-29', '2021-01-09', 0),
(19, 'B180999CS', '2020-12-28', 'high', 1, 'Home sick', '2020-12-31', '2020-12-30', 0),
(20, 'B180999CS', '2020-12-28', 'high', 10, 'Home sick', '2020-12-30', '2021-01-09', 0),
(21, 'B180999CS', '2020-12-28', 'high', 3, 'Home sick', '2020-12-29', '2021-01-01', 0),
(22, 'B180999CS', '2020-12-28', 'high', 0, 'Home sick', '2020-12-31', '2020-12-31', 0),
(23, '', '2020-12-28', 'high', 29, 'Home sick', '2020-12-02', '2020-12-31', 0),
(24, '', '2020-12-28', 'high', 9, 'Home sick', '2020-12-31', '2021-01-09', 0),
(25, 'B180999CS', '2020-12-28', 'high', 1, 'Home sick', '2021-01-08', '2021-01-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_ID` varchar(10) NOT NULL,
  `Hostel_Name` char(255) NOT NULL,
  `No_of_Inmates` int NOT NULL,
  `No_of_Outlets` int NOT NULL,
  `Inmate1` varchar(10) NOT NULL,
  `Inmate2` varchar(10) NOT NULL,
  `Inmate3` varchar(10) NOT NULL,
  `Inmate4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_ID`, `Hostel_Name`, `No_of_Inmates`, `No_of_Outlets`, `Inmate1`, `Inmate2`, `Inmate3`, `Inmate4`) VALUES
('12', 'MLH', 0, 5, 'B180491CS', 'B180191CS', 'B180291CS', 'B180222CS'),
('122', 'MLH', 0, 5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_req`
--

CREATE TABLE `room_req` (
  `Roll_no1` varchar(10) NOT NULL,
  `Roll_no2` varchar(10) NOT NULL,
  `Roll_no3` varchar(10) NOT NULL,
  `Roll_no4` varchar(10) NOT NULL,
  `status_of_room` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room_req`
--

INSERT INTO `room_req` (`Roll_no1`, `Roll_no2`, `Roll_no3`, `Roll_no4`, `status_of_room`) VALUES
('B180491CS', 'B180191CS', 'B180291CS', 'B180222CS', 'Waitlisted');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Roll_No` char(9) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Year_of_Study` int NOT NULL,
  `Department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Hostel_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Room_ID` int NOT NULL,
  `Parent_ID` int DEFAULT NULL,
  `Phone_Number` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Roll_No`, `Name`, `Year_of_Study`, `Department`, `Hostel_Name`, `Room_ID`, `Parent_ID`, `Phone_Number`) VALUES
('B180222CS', 'Lmao What', 3, 'CSE', 'MBH', 150, 9, NULL),
('B180293CS', 'Test', 3, 'CSE', 'LH', 423, 12, NULL),
('B180297CS', 'Dev Sony', 3, 'CSE', 'MBH', 158, 7, NULL),
('B180333CS', 'Monkey Wings', 3, 'CSE', 'MBH', 199, 8, NULL),
('B180614CS', 'Soujanya Namburi', 3, 'CSE', 'MLH', 111, 13, NULL),
('B180999CS', 'Epic Bruh', 3, 'CSE', 'MBH', 133, 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` char(9) NOT NULL,
  `Email` char(50) NOT NULL,
  `Password` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ForS` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Email`, `Password`, `ForS`) VALUES
('B180297CS', 'devsony52@gmail.com', '9495923271Dev', 'S'),
('B180222CS', 'djwieuh@gheir.com', 'f80b4c47f440761b2e65e1e1dfe19e9f', 'S'),
('B180999CS', 'somethingwong@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'S'),
('B180293CS', 'something@gmail.com', 'f80b4c47f440761b2e65e1e1dfe19e9f', 'S'),
('B180614CS', 'lolidk@gmail.com', '590d8bb26f56b05331be61257b3c8f28', 'S'),
('F1234', 'faculty@nitc.ac.in', '25f9e794323b453885f5181f1b624d0b', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`Permission_ID`,`Faculty_ID`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`Furniture_Name`,`Room_ID`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`Hostel_Name`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`Parent_ID`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`Permission_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Roll_No`),
  ADD KEY `Parent_ID` (`Parent_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `Parent_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `Permission_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Parent_ID`) REFERENCES `parent` (`Parent_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
