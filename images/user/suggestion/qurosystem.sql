-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 09:34 AM
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
-- Database: `qurosystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(20) NOT NULL,
  `aname` varchar(40) NOT NULL,
  `aemail` varchar(40) NOT NULL,
  `apass` varchar(40) NOT NULL,
  `amno` varchar(15) NOT NULL,
  `aimg` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apass`, `amno`, `aimg`, `stamp`) VALUES
('9999', 'Mr.Developer', 'admin@BajarangDal.com', '123', '7285052158', 'nirgav.JPEG', '2021-04-17 09:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `cid` varchar(50) NOT NULL,
  `ctitle` varchar(150) NOT NULL,
  `cdesc` varchar(500) NOT NULL,
  `oid` varchar(30) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `type` varchar(50) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`cid`, `ctitle`, `cdesc`, `oid`, `img`, `id`, `name`, `email`, `mno`, `type`, `stamp`) VALUES
('3cc5ed', 'Never', 'dkfgjhsdf', '', 'Appointment_255.pdf', '1619442203677', 'Vishal Vasoya', 'vasoyavishal33@gmail.com', '7285052158', 'USER', '2021-05-05 08:17:03'),
('9fcf22', 'Never', 'dkfgjhsdf', '', 'Appointment_255.pdf', '1619442203677', 'Vishal Vasoya', 'vasoyavishal33@gmail.com', '7285052158', 'USER', '2021-05-04 10:33:01'),
('ea699b', 'Vishal', 'Love With Time ', '455645', '', '1619442203677', 'Vishal Vasoya', 'vasoyavishal33@gmail.com', '7285052158', 'USER', '2021-05-04 10:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `did` varchar(25) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `vacancy` varchar(5) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`did`, `dname`, `vacancy`, `stamp`) VALUES
('71e11c', 'Purchase Managers', '23', '2021-05-01 06:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `eemail` varchar(100) NOT NULL,
  `emno` varchar(15) NOT NULL,
  `epass` varchar(30) NOT NULL,
  `egender` varchar(10) NOT NULL,
  `eimg` varchar(200) NOT NULL,
  `eoccupation` varchar(150) NOT NULL,
  `eexp` int(5) NOT NULL,
  `eskills` varchar(150) NOT NULL,
  `esalary` varchar(7) NOT NULL,
  `etime` varchar(5) NOT NULL,
  `otime` varchar(5) NOT NULL,
  `aadharno` varchar(15) NOT NULL,
  `aadhar1` varchar(150) NOT NULL,
  `aadhar2` varchar(150) NOT NULL,
  `resume` varchar(150) NOT NULL,
  `account_status` varchar(5) NOT NULL,
  `stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `eemail`, `emno`, `epass`, `egender`, `eimg`, `eoccupation`, `eexp`, `eskills`, `esalary`, `etime`, `otime`, `aadharno`, `aadhar1`, `aadhar2`, `resume`, `account_status`, `stamp`) VALUES
('1620117534780', 'Vishal Vasoya', 'contact@msquareinfotech.com', '7285052158', '123', 'Male', 'IMG_1573.jpeg', 'Purchase Manager', 3, 'Stock Handling', '23000', '8', '2', '785634561234', 'IMG_1459.jpeg', 'IMG_1460.jpeg', 'Appointment_255.pdf', '1', '2021-05-04 14:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `sid` varchar(25) NOT NULL,
  `stitle` varchar(100) NOT NULL,
  `sdesc` varchar(250) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `id` varchar(30) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`sid`, `stitle`, `sdesc`, `img`, `id`, `name`, `email`, `mno`, `desig`, `stamp`) VALUES
('36379a', 'Please Make Clean', 'This is Covid Position', '', '1619442203677', 'Vishal Vasoya', 'vasoyavishal33@gmail.com', '7285052158', 'USER', '2021-05-05 09:39:51'),
('b3c9ed', 'Covid Help', 'If you want to donate please call me', 'WhatsApp Image 2021-04-26 at 9.07.01 PM.jpeg', '1619442203677', 'Vishal Vasoya', 'vasoyavishal33@gmail.com', '7285052158', 'USER', '2021-05-05 09:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `uid` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `umno` varchar(15) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `uimg` varchar(100) NOT NULL,
  `account_status` int(11) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`uid`, `uname`, `uemail`, `umno`, `upass`, `gender`, `uimg`, `account_status`, `stamp`) VALUES
('1619442203677', 'Vishal Vasoya', 'vasoyavishal33@gmail.com', '7285052158', '123', 'Male', 'face28.JPG', 1, '2021-04-26 13:03:23'),
('1619682480345', 'Rutik Vaholiya', 'rutik123@gmail.com', '9638202259', '123', 'Male', 'WhatsApp Image 2021-04-26 at 9.07.01 PM.jpeg', 1, '2021-04-29 07:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
