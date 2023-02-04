-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 06:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `transway` varchar(30) NOT NULL,
  `transid` varchar(25) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`name`, `email`, `phone`, `transway`, `transid`, `date`) VALUES
('newtond', 'newton@gmail.com', 129, 'atm', '0', '0000-00-00'),
('rrrrrr', 'rrrrrrrr@gm.com', 3434, 'mobile-banking', '434', '2023-02-09'),
('miraz', 'miraz@gmail.com', 1212, 'atm', '4343423', '2023-02-15'),
('rrrrrrrr', 'ffff@m.com', 66666, 'atm', '434343', '2023-03-02'),
('newtond', 'newton@gmail.com', 129, 'atm', '6655', '2023-02-13'),
('newtond', 'newton@gmail.com', 129, 'mobile-banking', '665545443', '2022-12-27'),
('Nurullah', 'Nurulla51@gmail.com', 2434, 'mobile-banking', 'hfjfje343', '2023-02-04'),
('miraz', 'miraz@gmail.com', 1212, 'atm', 'JTJRKJRKJ3434', '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `email` varchar(45) NOT NULL,
  `password` varchar(30) NOT NULL,
  `retype_password` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`email`, `password`, `retype_password`, `category`) VALUES
('hasanur@gmail.com', '55', '55', 'Electrician'),
('miraz@gmail.com', '44', '44', 'Farmer'),
('hasanur@gmail.com', '55', '55', 'Electrician'),
('newton@gmail.com', '44', '44', 'worker'),
('newton@gmail.com', '44', '44', 'worker'),
('newtond@gmail.com', 'd', 'd', 'Fisherman'),
('newton@gmail.com', 'd', 'd', 'Farmer'),
('miraz@gmail.com', '22', '22', 'Farmer'),
('miraz@gmail.com', 'dd', '33', 'Farmer'),
('nuru@gmail.com', 'm', 'f', 'Farmer');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `repassword` varchar(40) NOT NULL,
  `holdno` int(11) NOT NULL,
  `wnum` int(11) NOT NULL,
  `pcode` int(10) NOT NULL,
  `upazila` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `people` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `mstatus` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `password`, `repassword`, `holdno`, `wnum`, `pcode`, `upazila`, `district`, `division`, `category`, `people`, `name`, `fname`, `mname`, `mstatus`, `religion`, `nid`, `phone`) VALUES
('hasanur@gmail.com', '5555', '5555', 88, 888, 55, 'hhh', 'hhh', 'hhh', 'Electrician', 'village', 'Shanto', 'hh', 'hh', 'married', 'islam', 5555, 5555),
('miraz@gmail.com', 'd', 'd', 1, 1, 0, 'F', 'F', 'F', 'Farmer', 'village', 'Miraz', 'H', 'R', 'non-married', 'islam', 0, 0),
('newton@gmail.com', '444', '444', 88, 888, 44, 'hhh', 'hhh', 'hhh', 'worker', 'city', 'Newton', 'hh', 'hh', 'married', 'islam', 666, 6666666),
('nuru@gmail.com', 'd', 'd', 13, 13, 3, 'F', 'F', 'F', 'Farmer', 'village', 'Nurullah', 'H', 'R', 'non-married', 'islam', 55, 0),
('shanto@gmail.com', '444', '444', 88, 888, 44, 'hhh', 'hhh', 'hhh', 'Fisherman', 'village', 'Shanto', 'hh', 'hh', 'married', 'islam', 555, 555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`transid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
