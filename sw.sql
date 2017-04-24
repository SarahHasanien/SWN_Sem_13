-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 11:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw`
--
CREATE DATABASE sw;
-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `AchID` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `pillar` varchar(10) NOT NULL,
  `BU` varchar(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `Currency` varchar(10) NOT NULL,
  `description` int(11) NOT NULL,
  `EID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `CID` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `industry` varchar(10) NOT NULL,
  `CIH` varchar(10) NOT NULL,
  `Reference link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_achievement`
--

CREATE TABLE `client_achievement` (
  `CID` int(10) NOT NULL,
  `AchID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dno` int(2) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dno`, `Name`) VALUES
(1, 'SPS'),
(2, 'Research'),
(3, 'Marketing'),
(4, 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EID` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(10) NOT NULL,
  `certificate` text NOT NULL,
  `password` int(20) NOT NULL,
  `DNO` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `approved` varchar(50) DEFAULT NULL,
  `Ejobtitle` varchar(100) DEFAULT NULL,
  `Eimg` blob,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `NewDno` int(11) DEFAULT NULL,
  `joinDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `email`, `country`, `certificate`, `password`, `DNO`, `username`, `approved`, `Ejobtitle`, `Eimg`, `lastname`, `firstname`, `rank`, `gender`, `NewDno`, `joinDate`) VALUES
(1, 'reham.abdallatef47@gmail.com', 'egypt', 'student', 123, 1, 'reham_abdallatef', 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'emp1@gmail.com', 'egypt', '', 123, 1, 'emp1_emp1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'emp2@gmail.com', 'egypt', '', 19961996, 1, 'emp2_emp2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'emp3@gmail.com', 'egypt', '', 19961996, 2, 'emp3_emp3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'emp4@gmail.com', 'egypt', '', 19961996, 3, 'emp4_emp4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'emp5@gmail.com', 'egypt', '', 19961996, 2, 'emp5_emp5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'emp6@gmail.com', 'egypt', '', 19961996, 3, 'emp6_emp6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'emp7@gmail.com', 'egypt', '', 19961996, 2, 'emp7_emp7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'emp8@gmail.com', 'egypt', '', 19961996, 1, 'emp8_emp8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'manager1@gmail.com', 'egypt', '', 19961996, 1, 'manager1', 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'manager2@gmail.com', 'egypt', '', 19961996, 2, 'manager2', 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'manager3@gmail.com', 'egypt', '', 19961996, 3, 'manager3', 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `MID` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `DNO` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `Mjobtitle` varchar(100) DEFAULT NULL,
  `Mimg` blob,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`MID`, `firstname`, `country`, `password`, `DNO`, `email`, `type`, `Mjobtitle`, `Mimg`, `lastname`, `gender`) VALUES
(1, 'reham', 'egypt', '123', 1, '', NULL, NULL, NULL, NULL, NULL),
(10, 'manager1', 'egypt', '123456', 1, 'manager1@gmail.com', 1, NULL, NULL, NULL, NULL),
(11, 'manager2', 'egypt', '12', 2, 'manager2@gmail.com', 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PID` int(10) NOT NULL,
  `Text` text NOT NULL,
  `MID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PID`, `Text`, `MID`) VALUES
(154, 'kxfzjgfklzf\r\n', 1),
(160, 'wejhsdfghghdfh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`AchID`),
  ADD KEY `EID` (`EID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `client_achievement`
--
ALTER TABLE `client_achievement`
  ADD KEY `CID` (`CID`),
  ADD KEY `AchID` (`AchID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dno`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EID`,`username`),
  ADD KEY `DNO` (`DNO`),
  ADD KEY `NewDno` (`NewDno`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `DNO` (`DNO`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `MID` (`MID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `AchID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `MID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`EID`) REFERENCES `employee` (`EID`);

--
-- Constraints for table `client_achievement`
--
ALTER TABLE `client_achievement`
  ADD CONSTRAINT `client_achievement_ibfk_1` FOREIGN KEY (`AchID`) REFERENCES `achievement` (`AchID`),
  ADD CONSTRAINT `client_achievement_ibfk_2` FOREIGN KEY (`CID`) REFERENCES `client` (`CID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`DNO`) REFERENCES `department` (`Dno`),
  ADD CONSTRAINT `employee_ibfk_4` FOREIGN KEY (`NewDno`) REFERENCES `department` (`Dno`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`DNO`) REFERENCES `department` (`Dno`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`MID`) REFERENCES `manager` (`MID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
