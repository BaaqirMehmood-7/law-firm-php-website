-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2026 at 04:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samoonlaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4');

-- --------------------------------------------------------

--
-- Table structure for table `knowledgebase`
--

CREATE TABLE `knowledgebase` (
  `Id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knowledgebase`
--

INSERT INTO `knowledgebase` (`Id`, `Title`, `doc`) VALUES
(21, 'CONSUMER COMPLAINT Under Section 12 Consumer Protection Act', 'CONSUMER COMPLAINT Under Section 12 Consumer Protection Act.pdf'),
(23, 'Marriage Affidavit-Ladli Beti Scheme 1- S&A', 'Marriage Affidavit-Ladli Beti Scheme 1- S&A.pdf'),
(32, 'Petition for Appointment of Guardian', 'Petition for Appointment of Guardian.pdf'),
(33, 'RELEASE OF A GUARDIAN BY A MINOR ON ATTAINING MAJORITY - S&A', 'RELEASE OF A GUARDIAN BY A MINOR ON ATTAINING MAJORITY - S&A.pdf'),
(34, 'Petition for Appointment of Guardian', 'Marriage Affidavit-Ladli Beti Scheme 1- S&A.pdf'),
(35, 'RELEASE OF A GUARDIAN BY A MINOR ON ATTAINING MAJORITY - S&A', 'RELEASE OF A GUARDIAN BY A MINOR ON ATTAINING MAJORITY - S&A.pdf'),
(36, 'Complaint Withdrawal Under Section 200 CRPC - Srinagar Court - J&K- S&A', 'Marriage Affidavit-Ladli Beti Scheme 1- S&A.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledgebase`
--
ALTER TABLE `knowledgebase`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `knowledgebase`
--
ALTER TABLE `knowledgebase`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
