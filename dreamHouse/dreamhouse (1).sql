-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 02:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` varchar(5) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `b_add` varchar(100) NOT NULL,
  `b_tel` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_add`, `b_tel`) VALUES
('b_01', 'Cyberjaya', 'Crescent-1, Cyberia, Cyberjaya', '11223344556'),
('b_02', 'Kualalumpur', 'klcc, KL sentral, Kualalumpur', '12345678901'),
('b_03', 'Penang', 'George Town, Jhonkar Street, Penang', '12312345678'),
('b_04', 'Johor', 'Mount Pulai, Johor', '12312312345');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` varchar(5) NOT NULL,
  `b_id` varchar(5) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_add` varchar(50) NOT NULL,
  `c_tel` varchar(15) NOT NULL,
  `c_email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `b_id`, `c_name`, `c_add`, `c_tel`, `c_email`) VALUES
('c_01', 'b_01', 'Tanvir Ahmed', 'C1-5-9,Cyberia Smarthomes', '12312231', 'tanv@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `o_id` varchar(5) NOT NULL,
  `b_id` varchar(5) NOT NULL,
  `o_name` varchar(20) NOT NULL,
  `o_add` varchar(50) NOT NULL,
  `o_tel` varchar(15) NOT NULL,
  `o_email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`o_id`, `b_id`, `o_name`, `o_add`, `o_tel`, `o_email`) VALUES
('o_01', 'b_01', 'Zahid Hasan', 'C1-5-9,Cyberia Smarthomes', '32432143124', 'zahid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `p_id` varchar(5) NOT NULL,
  `b_id` varchar(5) NOT NULL,
  `o_id` varchar(5) NOT NULL,
  `c_id` varchar(5) DEFAULT NULL,
  `s_id` varchar(5) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postcode` int(7) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `no_rooms` int(10) NOT NULL,
  `rent` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`p_id`, `b_id`, `o_id`, `c_id`, `s_id`, `p_name`, `street`, `area`, `city`, `postcode`, `room_type`, `no_rooms`, `rent`, `status`) VALUES
('p_01', 'b_01', 'o_01', 'NO', 's_02', 'Nadayu Property', 'Fona', 'Cyberia', 'Cyberjaya', 630000, 'flat', 4, 1200, 'Not Rented'),
('p_02', 'b_01', 'o_01', 'c_01', 's_02', 'Nadayu Property', 'Fona', 'Cyberia', 'Cyberjaya', 630000, 'flat', 4, 1400, 'Rented');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` varchar(5) NOT NULL,
  `b_id` varchar(5) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_add` varchar(50) NOT NULL,
  `s_tel` varchar(15) NOT NULL,
  `s_designation` varchar(10) NOT NULL,
  `s_email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `b_id`, `s_name`, `s_add`, `s_tel`, `s_designation`, `s_email`) VALUES
('s_01', 'b_01', 'Ashiqur Rahman', 'C1-5-9,Cyberia Smarthomes', '13241234', 'Manager', 'ashiq@gmail.com'),
('s_02', 'b_01', 'Masood ', 'C1-5-9,Cyberia Smarthomes', '123123', 'Supervisor', 'mass@g.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `fk_b_id` (`b_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `fk_b_id` (`b_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fk_b_id` (`b_id`),
  ADD KEY `fk_o_id` (`o_id`),
  ADD KEY `fk_c_id` (`c_id`),
  ADD KEY `fk_s_id` (`s_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `fk_b_id` (`b_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
