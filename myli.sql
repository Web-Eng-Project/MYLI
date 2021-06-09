-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 03:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myli`
--

-- --------------------------------------------------------

--
-- Table structure for table `logbookprogress`
--

CREATE TABLE `logbookprogress` (
  `Logbook_Id` varchar(10) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Logbook_Details` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbookprogress`
--

INSERT INTO `logbookprogress` (`Logbook_Id`, `Student_Id`, `Logbook_Details`, `Date`) VALUES
('', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `qr`
--

CREATE TABLE `qr` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qr`
--

INSERT INTO `qr` (`id`, `username`, `password`) VALUES
(16, 'luqmanlatif77@gmail.', 'oi'),
(17, 'cb19100', 'abu');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Total_Mark` int(10) NOT NULL,
  `Comment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `List_ID` varchar(10) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Phone_Num` varchar(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Company_Name` varchar(20) NOT NULL,
  `Company_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`List_ID`, `Student_Id`, `Name`, `Phone_Num`, `Email`, `Company_Name`, `Company_Address`) VALUES
('L0001', 'CB18000', 'Luqman	', '01131075750', 'lookman98@gmail.com', 'Pro Tech Sdn Bhd', 'Senawang'),
('L0002', 'CA19000	', 'Chong', '0133438937', 'Chong21@yahoo.com', 'Cresendo Sdn Bhd', 'Pasir Mas'),
('L0003', 'CB17031', 'Rahman Lew', '01131075750', 'rahmanlew77@gmail.co', 'Pro Tech Sdn Bhd', 'Kuala Lumpur'),
('L0004', 'CA17132', 'Farid Kami', '0116547632', 'FaridKamil77@gmail.c', 'Grand Ltd.', 'Teluk Intan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbookprogress`
--
ALTER TABLE `logbookprogress`
  ADD PRIMARY KEY (`Logbook_Id`);

--
-- Indexes for table `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`List_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qr`
--
ALTER TABLE `qr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
