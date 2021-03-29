-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2021 at 07:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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

-- --------------------------------------------------------

--
-- Table structure for table `Donation`
--

CREATE TABLE `Donation` (
  `p_id` int(10) NOT NULL,
  `d_date` date NOT NULL,
  `d_time` time NOT NULL,
  `d_quantity` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Donation`
--

INSERT INTO `Donation` (`p_id`, `d_date`, `d_time`, `d_quantity`) VALUES
(1, '2021-01-07', '09:33:00', 2),
(1, '2021-01-21', '03:11:00', 1),
(2, '2021-01-07', '09:33:00', 1),
(2, '2021-01-13', '09:13:00', 3),
(2, '2021-01-20', '10:25:00', 1),
(2, '2021-01-21', '11:04:00', 3),
(3, '2021-01-07', '09:33:00', 1),
(3, '2021-01-17', '12:35:00', 1),
(3, '2021-01-20', '03:56:00', 1),
(4, '2021-01-07', '09:34:00', 2),
(5, '2021-01-07', '09:34:00', 2),
(6, '2021-01-07', '09:34:00', 1),
(7, '2021-01-07', '09:37:00', 1),
(8, '2021-01-07', '09:37:00', 2),
(8, '2021-01-10', '05:27:00', 2),
(9, '2021-01-10', '04:26:00', 3),
(10, '2021-01-14', '01:58:00', 2),
(18, '2021-01-20', '04:43:00', 2),
(21, '2021-01-20', '10:51:00', 1),
(22, '2021-01-21', '10:52:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE `Person` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(25) NOT NULL,
  `p_phone` char(10) NOT NULL,
  `p_dob` date NOT NULL,
  `p_address` varchar(100) DEFAULT NULL,
  `p_gender` char(1) NOT NULL,
  `p_blood_group` varchar(3) NOT NULL,
  `p_med_issues` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`p_id`, `p_name`, `p_phone`, `p_dob`, `p_address`, `p_gender`, `p_blood_group`, `p_med_issues`) VALUES
(1, 'Sarin Alexander', '7406661512', '2021-01-06', 'kandathil (h), parappa, kuttaparamba(po), kerala', 'm', 'B+', ''),
(2, 'sufail khalid pkc', '7994157953', '2000-08-30', 'shareefa manzil', 'm', 'O+', ''),
(3, 'Gopakumar M S', '8545632548', '2000-03-26', 'Mundaplackal (h)', 'm', 'O-', ''),
(4, 'Aanmariya', '9548653256', '2000-04-01', 'Mundaykkal (h)', 'f', 'B-', ''),
(5, 'Aaryashree', '8564257564', '2000-10-15', 'thoprankudiyil house, kottayam', 'f', 'AB-', ''),
(6, 'Minto Mohan', '7560895298', '2000-01-22', 'vengaykal(H), parappa', 'm', 'B+', ''),
(7, 'Rahul p binu', '6238762920', '2001-05-08', 'puthanpurayil house', 'm', 'A+', ''),
(8, 'VISHNU K', '9744077219', '2001-01-14', 'KOVVAPRAVAN H\r\nPAPPINISSERI WEST\r\nKANNUR\r\n', 'm', 'AB+', ''),
(9, 'muhammed midhilaj', '9745123202', '1998-10-25', 'baithul midhilaj kizhakkekara road p.o thazhechovva kannur-18', 'm', 'O+', 'astma'),
(10, 'Amal N K', '9072514472', '1999-12-29', 'Thriveni (h)\r\nperambra', 'm', 'O+', ''),
(11, 'Pranav B', '7845253645', '2000-01-15', 'payyannur', 'm', 'A-', ''),
(13, 'Tintu', '9545121436', '2000-04-01', 'koovaparambil(h)\r\nkaruvanchal', 'f', 'A-', ''),
(17, 'radhika k', '9645213536', '1995-12-25', 'udupi', 'f', 'B-', ''),
(18, 'asif jb', '855626655', '2000-01-17', 'padanna', 'm', 'B+', ''),
(19, 'manu', '7406661545', '2000-01-20', 'kannur', 'm', 'AB-', ''),
(20, 'raju', '7406661785', '1999-01-20', 'kasaragod', 'm', 'B+', ''),
(21, 'shivsai amarnath', '9061441346', '2001-01-20', 'saisivam chandera', 'm', 'AB+', ''),
(22, 'Shyam', '8547695475', '1999-10-18', 'Payyanur', 'm', 'O+', ''),
(23, 'Rahul P P', '7406661789', '2000-01-29', 'kannur, Kerala', 'm', 'O+', '');

-- --------------------------------------------------------

--
-- Table structure for table `Receive`
--

CREATE TABLE `Receive` (
  `p_id` int(10) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `r_quantity` int(1) NOT NULL,
  `r_hospital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Receive`
--

INSERT INTO `Receive` (`p_id`, `r_date`, `r_time`, `r_quantity`, `r_hospital`) VALUES
(1, '2021-01-20', '10:26:00', 1, 'Alvas Hospital, Moodbidri'),
(1, '2021-01-21', '03:12:00', 1, 'Yenepoya medical college, Mangalore'),
(2, '2021-01-10', '03:38:00', 3, 'Alvas Hospital, Moodbidri'),
(2, '2021-01-13', '09:22:00', 2, 'Yenepoya medical college, Mangalore'),
(10, '2021-01-14', '01:59:00', 3, 'Alvas Hospital, Moodbidri'),
(10, '2021-01-17', '12:41:00', 1, 'Alvas Hospital, Moodbidri'),
(19, '2021-01-21', '11:05:00', 1, 'Alvas Hospital, Moodbidri'),
(22, '2021-01-21', '10:54:00', 1, 'Alvas Hospital, Moodbidri');

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE `Stock` (
  `s_blood_group` varchar(3) NOT NULL,
  `s_quantity` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Stock`
--

INSERT INTO `Stock` (`s_blood_group`, `s_quantity`) VALUES
('A+', 1),
('A-', 0),
('AB+', 5),
('AB-', 1),
('B+', 4),
('B-', 2),
('O+', 5),
('O-', 3);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `username` varchar(10) NOT NULL,
  `usr_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`username`, `usr_password`) VALUES
('ghh', '12345678'),
('kalan', 'poiuytrewq'),
('Minto ', '12345'),
('sarin', 'sarin@123'),
('shibin', 'shibin123'),
('shobith', 'qwerty'),
('SuperAdmin', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Donation`
--
ALTER TABLE `Donation`
  ADD PRIMARY KEY (`p_id`,`d_date`,`d_time`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `Receive`
--
ALTER TABLE `Receive`
  ADD PRIMARY KEY (`p_id`,`r_date`,`r_time`);

--
-- Indexes for table `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`s_blood_group`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Person`
--
ALTER TABLE `Person`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Donation`
--
ALTER TABLE `Donation`
  ADD CONSTRAINT `Donation_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `Person` (`p_id`);

--
-- Constraints for table `Receive`
--
ALTER TABLE `Receive`
  ADD CONSTRAINT `Receive_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `Person` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
