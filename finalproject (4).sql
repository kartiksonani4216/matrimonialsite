-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 05:59 AM
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
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `abuse_report`
--

CREATE TABLE `abuse_report` (
  `aid` varchar(50) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `auid` varchar(100) NOT NULL,
  `auname` varchar(100) NOT NULL,
  `report` varchar(500) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `aid` int(11) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `apass` varchar(100) NOT NULL,
  `aimg` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `aname`, `aemail`, `apass`, `aimg`, `stamp`) VALUES
(4, 'Kartik Sonani', 'kartiksonani2821@gmail.com', 'Kartik&2821', 'favicon.png', '2021-04-19 09:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `block_user`
--

CREATE TABLE `block_user` (
  `bid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `buid` varchar(100) NOT NULL,
  `buname` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cid` varchar(50) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(600) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cid`, `uid`, `uname`, `mno`, `email`, `msg`, `stamp`) VALUES
('e7e31b', '1623141903628', 'Nirgav Diyora', '9998787412', 'diyoranirgav2472000@gmail.com', 'hello plese unblock my friends id', '2021-06-12 09:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` varchar(50) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `rid` text NOT NULL,
  `message` varchar(500) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `uid`, `rid`, `message`, `stamp`) VALUES
('c404fa', '1623141903628', '1623208625646', 'Hiiiii', '2021-06-12 08:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `success_story`
--

CREATE TABLE `success_story` (
  `uid` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `title` varchar(100) NOT NULL,
  `story` varchar(700) NOT NULL,
  `img` text NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `success_story`
--

INSERT INTO `success_story` (`uid`, `sid`, `fname`, `mno`, `title`, `story`, `img`, `stamp`) VALUES
('1623141903628', '1623298376494', 'Nirgav Diyora', '9998787412', 'About our  story ', 'with the help of your site i find perfect partner.', 'f1.jpg', '2021-06-10 04:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_album`
--

CREATE TABLE `user_album` (
  `uid` varchar(100) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_album`
--

INSERT INTO `user_album` (`uid`, `pid`, `img`, `stamp`) VALUES
('1623141903628', '1623211741942', 'IMG_2391.JPG', '2021-06-09 04:09:01'),
('1623141903628', '1623211811784', 'IMG_2432.JPG', '2021-06-09 04:10:11'),
('1623141903628', '1623211876037', 'IMG_2371.JPG', '2021-06-09 04:11:16'),
('1623141903628', '1623211933523', 'IMG_2452.JPG', '2021-06-09 04:12:13'),
('1623141903628', '1623211986396', 'IMG_2470.JPG', '2021-06-09 04:13:06'),
('1623141903628', '1623212028040', 'IMG_2389.JPG', '2021-06-09 04:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_block`
--

CREATE TABLE `user_block` (
  `bid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `buid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_like_photo`
--

CREATE TABLE `user_like_photo` (
  `lid` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `rlid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration1`
--

CREATE TABLE `user_registration1` (
  `uid` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `action` varchar(10) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `dob` date NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mtongue` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mno` varchar(100) NOT NULL,
  `mstatus` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `fstatus` varchar(100) NOT NULL,
  `ftype` varchar(100) NOT NULL,
  `fvalue` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `subcast` varchar(100) NOT NULL,
  `dosh` varchar(100) NOT NULL,
  `heducation` varchar(100) NOT NULL,
  `employeed` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `account` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `salary` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `atype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration1`
--

INSERT INTO `user_registration1` (`uid`, `fname`, `email`, `pass`, `action`, `stamp`, `dob`, `religion`, `mtongue`, `gender`, `mno`, `mstatus`, `height`, `weight`, `fstatus`, `ftype`, `fvalue`, `disability`, `cast`, `subcast`, `dosh`, `heducation`, `employeed`, `qualification`, `degree`, `account`, `about`, `hobby`, `salary`, `address`, `state`, `city`, `img`, `atype`) VALUES
('1623141903628', 'Nirgav Diyora', 'diyoranirgav2472000@gmail.com', '$2y$10$V3Lq3yTiHBaFBki.lefVHO6Mwkhm55er2xDFvdoTQ1mM6/wt9urAa', '7', '2021-06-08 09:03:19', '2000-06-20', 'Hindu', 'Gujrati', 'Male', '9998787412', 'Never Married', '5.2', '75', 'Upper Middle Class', 'Joint', 'Moderate', 'normal', 'patel', 'levuapatel', 'no', 'mca', 'private', 'mca', 'mca', 'active', 'I am nirgav diyora.i love dhara .we have two child.sun and moon.that\'s why people say sooryavanshi.', 'cricket,android', 100000, '76,natvar nagar soc,simada naka,mota varachha,surat', 'Gujarat', 'surat', 'IMG_2391.JPG', 'real'),
('1623208067936', 'Kartik Sonani', 'kartiksonani2821@gmail.com', '$2y$10$BsMY2vkY4hyWvXIkrQ/lwOc1ymCLWVEeDB6/rqKUOqgNBrOoTzFJi', '7', '2021-06-09 03:11:35', '2001-02-28', 'Hindu', 'Gujrati', 'Male', '6352984684', 'Never Married', '5.2', '75', 'Upper Middle Class', 'Joint', 'Traditional', 'normal', 'patel', 'levuapatel', 'yes', 'Mca', 'private', 'Mca', 'Mca', 'active', 'i am kartik sonani.', 'cricket', 12000, 'a-403,priyank rec,mota varachha ,surat', 'Gujarat', 'surat', 'IMG_2392.JPG', 'real'),
('1623208365716', 'Rutik Vaholiya', 'rutik123@gmail.com', '$2y$10$4MGTrtC6PA80bikVylbE1u2aILvSecqILQn4UoxFMYsP5T.Hj3fnS', '7', '2021-06-09 03:16:25', '2000-06-06', 'Hindu', 'Gujrati', 'Male', '9565784578', 'Never Married', '5.2', '75', 'Middle Class', 'Joint', 'Traditional', 'normal', 'patel', 'levuapatel', 'no', 'bcom', 'Government/PSU', 'bcom', 'bcom', 'active', 'i am rutik vaholiya.i love to speak english.my fav language is english.', 'acting,reading book', 100000, '13,kiranchowk,yogichowk', 'Gujarat', 'surat', 'IMG_2405.JPG', 'real'),
('1623208625646', 'Kriti Kharbanda', 'kritikharbanda@gmail.com', '$2y$10$cvdABheBDOs0P/ghjAll/.Xnpp5UBU0Be1TNeiokbokWC7tAsC.wW', '7', '2021-06-09 03:20:05', '1998-10-06', 'Sikh', 'Marathi', 'Female', '7878787878', 'Never Married', '6.0', '50', 'Upper Middle Class', 'Nuclear', 'Traditional', 'normal', 'patel', 'levuapatel', 'no', 'bsc', 'Self Employeed', 'bsc', 'bsc', 'active', 'i am kriti. i love nirgav diyora', 'acting,reading book', 10000000, '12,opera buisness hub,mota varachha', 'Maharashtra', 'mumbai', 'Untitled.png', 'real'),
('1623208865008', 'Urvashi Reutela', 'urvashireutela@gmail.com', '$2y$10$QingNbfso48IU.czZxglNud85dI5D7KXsByChWNTc3yDKReyHJ1eu', '7', '2021-06-09 03:26:05', '1999-06-15', 'Buddh', 'Bengali', 'Female', '9456247878', 'Widowed', '5.9', '90', 'Affluent', 'Nuclear', 'Moderate', 'normal', 'sikh', 'sikh', 'no', '12', 'Buisness', '12', 'i have no degree', 'active', 'i am urvashi reutela.i need jemin', 'acting,modaling', 1500000, '76,natvar nagar soc', 'Haryana', 'haryana', '74508858.jpg', 'real'),
('1623209219397', 'Dipika Padukon', 'dipika@gmail.com', '$2y$10$gos3Ce4zpSwAyifzMmPl8eLMGxAmqP3UuZrj7OdAcN02hMIthPNPW', '7', '2021-06-09 03:36:41', '2000-06-13', 'Jain', 'Tamil', 'Female', '9785421356', 'Never Married', '6.0', '80', 'Rich', 'Joint', 'Moderate', 'normal', 'jain', 'Jain', 'no', '10', 'Buisness', '10', 'no degree', 'active', 'i am dipika.i love ranveer', 'acting,reading book', 100000, '123,kapoor rec,mumbai', 'Maharashtra', 'mumbai', 'd.png', 'real'),
('1623209885328', 'Shraddha kapoor', 'shraddhakapoor@gmail.com', '$2y$10$QiqPRvirR.jSrq1f0xtkn.fVBJSKZdovC5nkfOh9g13egrFqYVlXS', '7', '2021-06-09 03:42:01', '1996-07-16', 'Hindu', 'Marathi', 'Female', '7878787845', 'Never Married', '5.8', '68', 'Rich', 'Joint', 'Traditional', 'normal', 'patel', 'levuapatel', 'dont\'know', 'bsc', 'Not Working', 'bsc', 'bsc', 'active', 'i am shraddha kapoor.', 'acting', 100000, '12,opera buisness hub,mota varachha', 'Himachal Pradesh', 'shrinagar', '16.jpeg', 'real'),
('1623237515439', 'himanshu zadafiya', 'himanshu123@gmail.com', '$2y$10$LkvJL2./.BXbV1KiET6fIuVeuTy8jhLk2CxrerNHDeXKTLwZ8h6Nm', '7', '2021-06-09 11:37:25', '2001-06-25', 'Christian', 'Telugu', 'Male', '9878457865', 'Widowed', '6.0', '50', 'Middle Class', 'Joint', 'Traditional', 'normal', 'patel', 'levuapatel', 'no', 'mca', 'Buisness', 'bca', 'bcom', 'active', 'i am shraddha kapoor.', 'acting,reading book', 12000, 'A/60,NATVARNAGAR SOCIETY', 'Himachal Pradesh', 'shrinagar', 'IMG_2307-1.JPG', 'fake');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `rid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `ruid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `blockedby` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_request_answer`
--

CREATE TABLE `user_request_answer` (
  `aid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visit_profile`
--

CREATE TABLE `visit_profile` (
  `vid` varchar(50) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `uname` text NOT NULL,
  `vuid` text NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit_profile`
--

INSERT INTO `visit_profile` (`vid`, `uid`, `uname`, `vuid`, `stamp`) VALUES
('1e1b7b', '1623141903628', 'Nirgav Diyora', '1623209885328', '2021-06-09 04:15:20'),
('3c37ee', '1623208865008', 'Urvashi Reutela', '1623141903628', '2021-06-09 04:29:29'),
('4a927a', '1623208625646', 'Kriti Kharbanda', '1623141903628', '2021-06-09 12:08:59'),
('6348c1', '1623141903628', 'Nirgav Diyora', '1623208625646', '2021-06-09 12:19:11'),
('73efbf', '1623141903628', 'Nirgav Diyora', '1623209219397', '2021-06-09 12:19:26'),
('8bb07a', '1623141903628', 'Nirgav Diyora', '1623208625646', '2021-06-09 12:20:18'),
('a25182', '1623208865008', 'Urvashi Reutela', '1623141903628', '2021-06-09 04:42:40'),
('a4c9ea', '1623141903628', 'Nirgav Diyora', '1623208625646', '2021-06-09 12:21:19'),
('c3b518', '1623208865008', 'Urvashi Reutela', '1623208067936', '2021-06-09 04:29:25'),
('e25197', '1623208625646', 'Kriti Kharbanda', '1623141903628', '2021-06-09 12:22:21'),
('ecd3d0', '1623141903628', 'Nirgav Diyora', '1623209885328', '2021-06-09 12:19:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abuse_report`
--
ALTER TABLE `abuse_report`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_album`
--
ALTER TABLE `user_album`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_block`
--
ALTER TABLE `user_block`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_like_photo`
--
ALTER TABLE `user_like_photo`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_registration1`
--
ALTER TABLE `user_registration1`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_request_answer`
--
ALTER TABLE `user_request_answer`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `visit_profile`
--
ALTER TABLE `visit_profile`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abuse_report`
--
ALTER TABLE `abuse_report`
  ADD CONSTRAINT `abuse_report_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `success_story`
--
ALTER TABLE `success_story`
  ADD CONSTRAINT `success_story_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_album`
--
ALTER TABLE `user_album`
  ADD CONSTRAINT `user_album_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_block`
--
ALTER TABLE `user_block`
  ADD CONSTRAINT `user_block_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_like_photo`
--
ALTER TABLE `user_like_photo`
  ADD CONSTRAINT `user_like_photo_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_request`
--
ALTER TABLE `user_request`
  ADD CONSTRAINT `user_request_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_request_answer`
--
ALTER TABLE `user_request_answer`
  ADD CONSTRAINT `user_request_answer_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visit_profile`
--
ALTER TABLE `visit_profile`
  ADD CONSTRAINT `visit_profile_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_registration1` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
