-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 12:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancemsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(1, 'Admin', 'Liam', 'admin@mail.com', 'D00F5D5217896FB7FD601412CB890830');

-- --------------------------------------------------------

--
-- Table structure for table `tblattendance`
--

CREATE TABLE `tblattendance` (
  `Id` int(10) NOT NULL,
  `admissionNo` varchar(255) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `classArmId` varchar(10) NOT NULL,
  `sessionTermId` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `dateTimeTaken` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblattendance`
--

INSERT INTO `tblattendance` (`Id`, `admissionNo`, `classId`, `classArmId`, `sessionTermId`, `status`, `dateTimeTaken`) VALUES
(162, 'ASDFLKJ', '1', '2', '1', '1', '2020-11-01'),
(163, 'HSKSDD', '1', '2', '1', '1', '2020-11-01'),
(164, 'JSLDKJ', '1', '2', '1', '1', '2020-11-01'),
(172, 'HSKDS9EE', '1', '4', '1', '1', '2020-11-01'),
(171, 'JKADA', '1', '4', '1', '0', '2020-11-01'),
(170, 'JSFSKDJ', '1', '4', '1', '1', '2020-11-01'),
(173, 'ASDFLKJ', '1', '2', '1', '1', '2020-11-19'),
(174, 'HSKSDD', '1', '2', '1', '1', '2020-11-19'),
(175, 'JSLDKJ', '1', '2', '1', '1', '2020-11-19'),
(176, 'JSFSKDJ', '1', '4', '1', '0', '2021-07-15'),
(177, 'JKADA', '1', '4', '1', '0', '2021-07-15'),
(178, 'HSKDS9EE', '1', '4', '1', '0', '2021-07-15'),
(179, 'ASDFLKJ', '1', '2', '1', '0', '2021-09-27'),
(180, 'HSKSDD', '1', '2', '1', '1', '2021-09-27'),
(181, 'JSLDKJ', '1', '2', '1', '1', '2021-09-27'),
(182, 'ASDFLKJ', '1', '2', '1', '0', '2021-10-06'),
(183, 'HSKSDD', '1', '2', '1', '0', '2021-10-06'),
(184, 'JSLDKJ', '1', '2', '1', '1', '2021-10-06'),
(185, 'ASDFLKJ', '1', '2', '1', '0', '2021-10-07'),
(186, 'HSKSDD', '1', '2', '1', '0', '2021-10-07'),
(187, 'JSLDKJ', '1', '2', '1', '0', '2021-10-07'),
(188, 'AMS110', '4', '6', '1', '1', '2021-10-07'),
(189, 'AMS133', '4', '6', '1', '1', '2021-10-07'),
(190, 'AMS135', '4', '6', '1', '1', '2021-10-07'),
(191, 'AMS144', '4', '6', '1', '1', '2021-10-07'),
(192, 'AMS148', '4', '6', '1', '1', '2021-10-07'),
(193, 'AMS151', '4', '6', '1', '1', '2021-10-07'),
(194, 'AMS159', '4', '6', '1', '0', '2021-10-07'),
(195, 'AMS161', '4', '6', '1', '0', '2021-10-07'),
(196, 'AMS110', '4', '6', '1', '1', '2023-11-06'),
(197, 'AMS133', '4', '6', '1', '1', '2023-11-06'),
(198, 'AMS135', '4', '6', '1', '1', '2023-11-06'),
(199, 'AMS144', '4', '6', '1', '1', '2023-11-06'),
(200, 'AMS148', '4', '6', '1', '1', '2023-11-06'),
(201, 'AMS151', '4', '6', '1', '1', '2023-11-06'),
(202, 'AMS159', '4', '6', '1', '0', '2023-11-06'),
(203, 'AMS161', '4', '6', '1', '0', '2023-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `tblclassteacher`
--

CREATE TABLE `tblclassteacher` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNo` varchar(50) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `classArmId` varchar(10) NOT NULL,
  `dateCreated` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclassteacher`
--

INSERT INTO `tblclassteacher` (`Id`, `firstName`, `lastName`, `emailAddress`, `password`, `phoneNo`, `classId`, `classArmId`, `dateCreated`) VALUES
(1, 'Will', 'Williams', 'teacher@mail.com', '32250170a0dca92d53ec9624f336ca24', '09089898999', '1', '2', '2020-10-31'),
(4, 'Demola', 'Ade', 'Kumolu@gmail.com', '32250170a0dca92d53ec9624f336ca24', '09672002882', '1', '4', '2020-11-01'),
(5, 'Ryan', 'McQuie', 'ryan@mail.com', '32250170a0dca92d53ec9624f336ca24', '7014560000', '3', '5', '2021-10-07'),
(6, 'John', 'Greenwood', 'jwood@mail.com', '32250170a0dca92d53ec9624f336ca24', '0100000030', '4', '6', '2021-10-07'),
(7, 'MODINAT', 'RUFAI', 'omotoyosirufai34@gmail.com', '32250170a0dca92d53ec9624f336ca24', '08110368144', '5', '7', '2023-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `tblservicearea`
--

CREATE TABLE `tblservicearea` (
  `Id` int(10) NOT NULL,
  `serviceArea` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservicearea`
--

INSERT INTO `tblservicearea` (`Id`, `serviceArea`) VALUES
(8, 'test'),
(5, 'SOUTH WEST 1'),
(6, 'SOUTH WEST 2');

-- --------------------------------------------------------

--
-- Table structure for table `tblservicearea_arms`
--

CREATE TABLE `tblservicearea_arms` (
  `Id` int(10) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `serviceareaArms` varchar(255) NOT NULL,
  `isAssigned` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservicearea_arms`
--

INSERT INTO `tblservicearea_arms` (`Id`, `classId`, `serviceareaArms`, `isAssigned`) VALUES
(2, '1', 'S1', '1'),
(4, '1', 'S2', '1'),
(5, '3', 'E1', '1'),
(6, '4', 'N1', '1'),
(7, '5', 'SW1', '1'),
(8, '6', 'SW2', '0'),
(9, '8', 'ts', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tblsessionterm`
--

CREATE TABLE `tblsessionterm` (
  `Id` int(10) NOT NULL,
  `sessionName` varchar(50) NOT NULL,
  `termId` varchar(50) NOT NULL,
  `isActive` varchar(10) NOT NULL,
  `dateCreated` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsessionterm`
--

INSERT INTO `tblsessionterm` (`Id`, `sessionName`, `termId`, `isActive`, `dateCreated`) VALUES
(1, '2019/2020', '1', '1', '2020-10-31'),
(3, '2019/2020', '2', '0', '2020-10-31'),
(4, '2022/2023', '3', '0', '2023-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `Id` int(10) NOT NULL,
  `classId` varchar(10) NOT NULL,
  `classArmId` varchar(10) NOT NULL,
  `dateCreated` varchar(50) NOT NULL,
  `period` varchar(80) NOT NULL,
  `relativeseat` varchar(11) NOT NULL,
  `relativeseatshape` varchar(11) NOT NULL,
  `electricity` varchar(11) NOT NULL,
  `handwash` varchar(11) NOT NULL,
  `taprun` varchar(11) NOT NULL,
  `sphygmeters` varchar(11) NOT NULL,
  `sphygmetersfunc` varchar(11) NOT NULL,
  `bedspace` varchar(11) NOT NULL,
  `nets` varchar(11) NOT NULL,
  `bedshape` varchar(11) NOT NULL,
  `drugprescform` varchar(11) NOT NULL,
  `labtestform` varchar(11) NOT NULL,
  `linen` varchar(11) NOT NULL,
  `linenadequate` varchar(11) NOT NULL,
  `consumables` varchar(11) NOT NULL,
  `consumablesadequate` varchar(11) NOT NULL,
  `nurseduty` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`Id`, `classId`, `classArmId`, `dateCreated`, `period`, `relativeseat`, `relativeseatshape`, `electricity`, `handwash`, `taprun`, `sphygmeters`, `sphygmetersfunc`, `bedspace`, `nets`, `bedshape`, `drugprescform`, `labtestform`, `linen`, `linenadequate`, `consumables`, `consumablesadequate`, `nurseduty`) VALUES
(19, '5', '7', '2023-11-08', 'Morning', 'No', 'No', 'Yes', '5', 'Yes', 'No', '4', '46', 'No', 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'Yes', '5:9');

-- --------------------------------------------------------

--
-- Table structure for table `tblterm`
--

CREATE TABLE `tblterm` (
  `Id` int(10) NOT NULL,
  `termName` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblterm`
--

INSERT INTO `tblterm` (`Id`, `termName`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblattendance`
--
ALTER TABLE `tblattendance`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblclassteacher`
--
ALTER TABLE `tblclassteacher`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblservicearea`
--
ALTER TABLE `tblservicearea`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblservicearea_arms`
--
ALTER TABLE `tblservicearea_arms`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblsessionterm`
--
ALTER TABLE `tblsessionterm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblterm`
--
ALTER TABLE `tblterm`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblattendance`
--
ALTER TABLE `tblattendance`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `tblclassteacher`
--
ALTER TABLE `tblclassteacher`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblservicearea`
--
ALTER TABLE `tblservicearea`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblservicearea_arms`
--
ALTER TABLE `tblservicearea_arms`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblsessionterm`
--
ALTER TABLE `tblsessionterm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblterm`
--
ALTER TABLE `tblterm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
