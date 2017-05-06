-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 07:49 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `AchID` int(10) NOT NULL,
  `type` text NOT NULL,
  `Month` varchar(10) NOT NULL,
  `pillar` text NOT NULL,
  `BU` text NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `Currency` text NOT NULL,
  `description` text NOT NULL,
  `EID` int(10) NOT NULL,
  `client` text NOT NULL,
  `country` text NOT NULL,
  `industry` text NOT NULL,
  `CIH` text NOT NULL,
  `Referencelink` text NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`AchID`, `type`, `Month`, `pillar`, `BU`, `title`, `category`, `Currency`, `description`, `EID`, `client`, `country`, `industry`, `CIH`, `Referencelink`, `year`) VALUES
(14, 'hjkhkjh', 'May', 'hjkhjk', 'hkjh', 'khkh', 'hjkhkjh', 'kjhjkh', 'hkjhjkh', 2, 'hjhkjh', 'hkjhkjh', 'kjhjkh', 'hjkh', 'kjhkjh', 2017),
(15, 'sdadsa', 'May', 'sdsfsaf', 'sfasd', 'hdsajdha', 'sdasd', 'sadfdsa', 'jslkcjzxklcjszlk', 4, 'sdsdsdas', 'sfds', 'fgdgf', 'dfsdf', 'dsfdsdfs', 2017),
(17, 'ghg', 'May', 'ghg', 'ghg', 'gj', 'gh', 'ghg', 'ghg', 7, 'gh', 'ghg', 'ghg', 'ghg', 'ghg', 2017),
(18, 'Abstract', 'May', 'none', 'Cloud', 'Prepare lab', 'Events', 'none', 'dsfsf', 7, 'Egypt', 'Egypt', 'Education', 'CIH', 'hh', 2017),
(39, 'Abstract Submission', 'May', 'none', 'Cloud', 'Prepare lab for Interconnect 2017', 'Events/Conferences', 'none', 'ARC820170006 - A METHOD OF ACCURATE CHINESE SOUNDEX BASED ON FINE-GRAINED MAPPING - [MIN LI*, Sara Noeman, Yunyao Li, Marina Danilevsky]\r\n', 7, 'Egypt', 'Egypt', 'Education', 'CIH', 'the status is not clear yet', 2017),
(40, 'Abstract Submission', 'May', 'none', 'Cloud', 'Prepare lab for Interconnect 2017', 'Events/Conferences', 'none', 'ARC820170006 - A METHOD OF ACCURATE CHINESE SOUNDEX BASED ON FINE-GRAINED MAPPING - [MIN LI*, Sara Noeman, Yunyao Li, Marina Danilevsky]\r\n', 7, 'Egypt', 'Egypt', 'Education', 'CIH', 'the status is not clear yet', 2017);

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
  `joinDate` date DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `email`, `country`, `certificate`, `password`, `DNO`, `username`, `approved`, `Ejobtitle`, `Eimg`, `lastname`, `firstname`, `rank`, `gender`, `NewDno`, `joinDate`, `department`) VALUES
(1, 'reham.abdallatef47@gmail.com', 'egypt', 'student', 123, 1, 'reham_abdallatef', 'approved', NULL, NULL, 'Abdallatef', 'Reham', NULL, NULL, NULL, '2017-04-11', 'mydeptname'),
(2, 'emp1@gmail.com', 'Egypt', 'Computerce', 123, 1, 'emp1_emp1', 'approved', 'Software engineer.', NULL, 'Hasanien', 'saraaaaaaa', 30, '1', NULL, NULL, 'CMP'),
(4, 'emp3@gmail.com', 'egypt', 'SW engineer', 123, 2, 'emp3_emp3', 'approved', NULL, NULL, 'eisa', 'lina', NULL, NULL, NULL, NULL, NULL),
(5, 'emp4@gmail.com', 'egypt', '', 123, 3, 'emp4_emp4', 'approved', NULL, NULL, 'abdallatef', 'riad', NULL, NULL, NULL, NULL, NULL),
(7, 'emp6@gmail.com', 'egypt', '', 123, 3, 'emp6_emp6', 'approved', NULL, NULL, 'gira', 'reem', NULL, NULL, NULL, NULL, NULL);

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
  `gender` varchar(11) DEFAULT NULL,
  `certificate` varchar(200) DEFAULT NULL,
  `joinDate` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`MID`, `firstname`, `country`, `password`, `DNO`, `email`, `type`, `Mjobtitle`, `Mimg`, `lastname`, `gender`, `certificate`, `joinDate`, `username`) VALUES
(1, 'Reham', 'egypt', '123', 1, 'manager3@gmail.com', 1, 'SW engineer', NULL, 'Abdelatif', '1', 'CMP', '2017-04-08', NULL),
(10, 'Sara Mohamedd', 'egypt', '12', 1, 'manager1@gmail.com', 2, 'sw engineer', NULL, 'Hasanien', '0', 'CMP', NULL, NULL),
(11, 'Reem', 'egypt', '12', 2, 'manager2@gmail.com', 2, 'SW engineer', NULL, 'Gira', NULL, 'CMP', NULL, NULL),
(12, 'Mohamed ', 'egypt', '123', 3, 'manager8@gmail.com', 2, NULL, NULL, 'Mohie', 'male', 'cmp', NULL, 'ma');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `NID` int(50) NOT NULL,
  `text` varchar(100) NOT NULL,
  `AchID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`NID`, `text`, `AchID`) VALUES
(1, 'jjjjjjjjjjjj', 14),
(2, 'good', 40),
(3, 'k;lk;k', 39);

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
(201, 'sasaa', 10),
(215, 'dfjksdjsd', 10);

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
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `AchID` (`AchID`);

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
  MODIFY `AchID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `MID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `NID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`EID`) REFERENCES `employee` (`EID`);

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
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`AchID`) REFERENCES `achievement` (`AchID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`MID`) REFERENCES `manager` (`MID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
