-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 08:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--
CREATE DATABASE IF NOT EXISTS `blood_bank` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blood_bank`;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `p_id` int(10) NOT NULL,
  `d_date` date NOT NULL,
  `d_time` time NOT NULL,
  `d_quantity` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `p_phone` char(10) NOT NULL,
  `p_dob` date NOT NULL,
  `p_address` varchar(100) DEFAULT NULL,
  `p_gender` char(1) NOT NULL,
  `p_blood_group` varchar(3) NOT NULL,
  `p_med_issues` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receive`
--

CREATE TABLE `receive` (
  `p_id` int(10) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `r_quantity` int(1) NOT NULL,
  `r_hospital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `s_blood_group` varchar(3) NOT NULL,
  `s_quantity` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`s_blood_group`, `s_quantity`) VALUES
('A+', 0),
('A-', 0),
('AB+', 0),
('AB-', 0),
('B+', 0),
('B-', 0),
('O+', 0),
('O-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('SuperAdmin', '12345678'),
('test_user', 'qwertyuiop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`p_id`,`d_date`,`d_time`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `receive`
--
ALTER TABLE `receive`
  ADD PRIMARY KEY (`p_id`,`r_date`,`r_time`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`s_blood_group`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `Donation_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`p_id`);

--
-- Constraints for table `receive`
--
ALTER TABLE `receive`
  ADD CONSTRAINT `Receive_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
