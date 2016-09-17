-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 12:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `id_customer` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `mobileno` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`id_customer`, `name`, `email`, `gender`, `mobileno`) VALUES
(2, 'f', 'f@gmail.com', 'Male', '1234'),
(3, 'Dhunrei P. Capili', 'dhunreic@gmail.com', 'Male', '09351714024'),
(4, 'Dhunrei P. Capili', 'dhunreic@gmail.com', 'Male', 'q23132123'),
(5, 'sad', 'dhunreic@gmail.com', 'Male', '123123314'),
(6, 'sad', 'dhunreic@gmail.com', 'Male', '123'),
(7, 'Dhunrei P. Capili', 'dhunreic@gmail.com', 'Male', '123'),
(8, 'sad', '', 'Male', '123123'),
(9, '123', 'dhunreic@gmail.com', 'Male', '123123'),
(10, 'Dhunrei P. Capili', 'asdasd@gmail.com', 'Male', '123123'),
(11, 'pogi', 'z@gmail.com', 'Male', '123123'),
(12, 'qweqweqwe', 'drei123@gmail.com', 'Male', '123123'),
(13, 'Dhunrei Capili', 'drei123@gmail.com', 'Male', '09351714024'),
(14, 'sad', 'dhunreic@gmail.com', 'Male', '123123'),
(15, 'Dhunrei P. Capili', 'asdasd@gmail.com', 'Male', '123123'),
(16, 'Dhunrei P. Capili', 'asdasd@gmail.com', 'Male', '123123312'),
(17, 'sad', 'asdasd@gmail.com', 'Female', '123'),
(18, 'Dhunrei P. Capili', 'asdasd@gmail.com', 'Female', '123'),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, 'Capili Drei', 'asdasd@gmail.com', 'Female', '123123'),
(22, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id_customer` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id_customer`, `username`, `password`) VALUES
(14, 'Dhunrei', '123'),
(15, 'Dhunrei', '12345'),
(16, 'Dhunrei', '123123'),
(17, 'Dhunrei', '123123'),
(18, 'asdasd', '123123'),
(19, 'Dhunrei', '123'),
(20, '', ''),
(21, '', ''),
(22, 'asdasdasd', ''),
(23, '', ''),
(24, 'Admin', '123'),
(25, '', ''),
(26, 'Dhunrei', ''),
(27, 'Dhunrei', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `id_customer` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id_customer` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
