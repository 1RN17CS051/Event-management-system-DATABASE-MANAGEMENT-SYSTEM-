-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 09:52 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms project`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `compute` (IN `e` INT)  MODIFIES SQL DATA
BEGIN
INSERT INTO result(EID,WINNER,POINTS)
SELECT 
   r.EID,r.USN,r.POINTS
FROM 
 records r
WHERE
r.EID=e  AND r.POINTS=(SELECT MAX(POINTS) FROM records WHERE EID=e);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `OID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DID`, `NAME`, `OID`) VALUES
(1, 'CSE', 1),
(2, 'ECE', 2),
(3, 'ISE', 3),
(4, 'EEE', 4);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `TYPE` varchar(45) NOT NULL,
  `OID` int(11) NOT NULL,
  `DESC` varchar(100) NOT NULL,
  `SDATE` date NOT NULL,
  `EDATE` date NOT NULL,
  `LID` int(11) NOT NULL,
  `DID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EID`, `NAME`, `TYPE`, `OID`, `DESC`, `SDATE`, `EDATE`, `LID`, `DID`) VALUES
(2, 'cricket', 'sports', 2, 'sportive', '2019-12-17', '2019-12-19', 2, 2);

--
-- Triggers `event`
--
DELIMITER $$
CREATE TRIGGER `DELETE_C` AFTER DELETE ON `event` FOR EACH ROW delete from records where EID=OLD.EID
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_r` AFTER DELETE ON `event` FOR EACH ROW delete from result where EID=OLD.EID
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LID`, `NAME`) VALUES
(1, 'BANGALORE'),
(2, 'TUMKUR');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `OID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `DID` varchar(45) NOT NULL,
  `PHONE` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`OID`, `NAME`, `DID`, `PHONE`, `EMAIL`, `PASSWORD`) VALUES
(1, 'SUHAIL', '1', '8197696344', 'mohammedsuhailz01@gmail.com', '1234'),
(2, 'zabi', '2', '9108904866', 'mohammedsuhailz01@gmail.com', '1234'),
(3, 'Fares', '3', '8105269810', 'mohammedfares@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `RID` int(11) NOT NULL,
  `EID` int(11) NOT NULL,
  `USN` varchar(45) NOT NULL,
  `POINTS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`RID`, `EID`, `USN`, `POINTS`) VALUES
(42, 2, '1RN17CS050', 20),
(44, 2, '1RN17CS051', 100),
(45, 2, '1RN17CS052', 50);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `EID` int(11) NOT NULL,
  `WINNER` varchar(45) NOT NULL,
  `POINTS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`EID`, `WINNER`, `POINTS`) VALUES
(2, '1RN17CS051', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USN` varchar(45) NOT NULL,
  `FNAME` varchar(45) NOT NULL,
  `LNAME` varchar(45) NOT NULL,
  `DOB` date NOT NULL,
  `DID` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `PHONE` varchar(45) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USN`, `FNAME`, `LNAME`, `DOB`, `DID`, `EMAIL`, `PHONE`, `PASSWORD`) VALUES
('1RN17CS050', 'Mohammed', 'fares', '2000-10-30', '1', 'mohammedsuhailz01@gmail.com', '08197696344', '$1$1f4d5f9c$zqwu8mnFy6umkD2bITmlx/'),
('1RN17CS051', 'Mohammed', 'Suhail', '1998-07-26', '1', 'mohammedsuhailz01@gmail.com', '08197696344', '$1$1f4d5f9c$zqwu8mnFy6umkD2bITmlx/'),
('1RN17CS052', 'Mohammed', 'Zabi', '2000-10-15', '1', 'mohammedsuhailz01@gmail.com', '08197696344', '$1$1f4d5f9c$zqwu8mnFy6umkD2bITmlx/'),
('1RN17CS054', 'SURYA', 'M', '1999-11-10', '1', 'mohammedsuhailz01@gmail.com', '08197696344', '$1$1f4d5f9c$zqwu8mnFy6umkD2bITmlx/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LID`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `LID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
