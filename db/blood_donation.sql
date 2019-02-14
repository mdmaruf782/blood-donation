-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 11:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor list`
--

CREATE TABLE `donor list` (
  `id` int(255) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `nid` varchar(25) NOT NULL,
  `division` varchar(30) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `birthday` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor list`
--

INSERT INTO `donor list` (`id`, `admin`, `date`, `name`, `email`, `phone`, `nid`, `division`, `blood_group`, `birthday`, `photo`, `status`, `massage`) VALUES
(7, 'maruf', '2018-12-06', 'maruf', 'mohammadmruf695@gmail.com', '34234234', '234234', 'Chittagong', 'B+', '2018-12-18', 'IMG_1096.jpg', 'active', ''),
(9, 'maruf', '2018-12-09', 'MD Maruf', 'mdmaruf782@gmail.com', '01830617500', '83757845374873', 'Chittagong', 'B+', '1999-10-18', 'ab95daebf9.jpg', 'active', 'hi i am maruf'),
(11, 'maruf', '2018-12-10', 'Rifath', 'rifath@g.com', '0182357236', '435345345345', 'Dhaka', 'A+', '2018-12-17', '086c0427a1.jpg', 'active', 'hello'),
(12, 'maruf', '2018-12-10', 'Sakawat', 'Sakawat@gmail.com', '0193467256347', '34564564', 'Dhaka', 'O+', '2018-12-18', '2c7cbb83ac.jpg', 'active', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `admin` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` text NOT NULL,
  `massage` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`id`, `date`, `admin`, `name`, `email`, `phone`, `subject`, `massage`, `status`) VALUES
(1, '0000-00-00', '', 'name', 'eml', 'phone', 'subject', 'msg', 'unread'),
(2, '2018-12-08', '', '', '', '01830617500', 'subjects', '', 'unread'),
(3, '2018-12-08', '', 'mdmaruf', 'mohammadmruf695@gmail.com', '01830617500', 'subjects', '', 'unread'),
(4, '2018-12-08', '', 'mdmaruf', 'mohammadmruf695@gmail.com', '01830617500', 'subjects', '', 'unread'),
(5, '2018-12-08', '', 'mdmaruf', 'mohammadmruf695@gmail.com', '01830617500', 'subjects', 'hello', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `admin` text NOT NULL,
  `title` varchar(30) NOT NULL,
  `discription` text NOT NULL,
  `number` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `date`, `admin`, `title`, `discription`, `number`, `image`) VALUES
(1, '0000-00-00', 'admin', 'title', 'discrptn', 'nmbr', 'img'),
(2, '2018-12-06', 'maruf', 'test title', 'hello world hello world hello world hello world hello world hello world hello world hello world ', '01830617500', 'mockup1.jpg'),
(3, '2018-12-06', 'maruf', 'Donate Blood Save Life', 'Donate Blood And Inspire Others.', '01830617500', 'OK2OLC1.jpg'),
(4, '2018-12-06', 'maruf', 'Donate Blood Save Life', 'Donate Blood And Inspire Others.', '01830617500', 'mockup3.jpg'),
(5, '2018-12-07', 'maruf', 'Donate Blood Save Life', 'Donate Blood And Inspire Others', '01830617500', 'home_1_slider_1.jpg'),
(6, '2018-12-07', 'maruf', 'Donate Blood Save Life', 'Donate Blood And Inspire Others', '01830617500', 'about_feat_bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ui`
--

CREATE TABLE `ui` (
  `id` int(250) NOT NULL,
  `date` date NOT NULL,
  `admin` varchar(20) NOT NULL,
  `loader_name` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ui`
--

INSERT INTO `ui` (`id`, `date`, `admin`, `loader_name`, `status`) VALUES
(2, '2018-12-07', 'maruf', 'loade3r.gif', 'deactivate'),
(3, '2018-12-07', 'maruf', 'loader 4.gif', 'deactivate'),
(4, '2018-12-07', 'maruf', 'loader.gif', 'deactivate'),
(5, '2018-12-07', 'maruf', 'loader2.gif', 'deactivate'),
(6, '2018-12-07', 'maruf', 'loader5.gif', 'activated'),
(7, '2018-12-07', 'maruf', 'loader6.gif', 'deactivate'),
(8, '2018-12-07', 'maruf', 'loader7.gif', 'deactivate'),
(10, '2018-12-07', 'maruf', 'loader9.gif', 'deactivate'),
(11, '2018-12-07', 'maruf', 'loader10.gif', 'deactivate'),
(12, '2018-12-07', 'maruf', 'loader11.gif', 'deactivate'),
(13, '2018-12-07', 'maruf', 'loader12.gif', 'deactivate'),
(14, '2018-12-07', 'maruf', 'loader13.gif', 'deactivate'),
(15, '2018-12-07', 'maruf', 'loader14.gif', 'deactivate'),
(17, '2018-12-08', 'maruf', 'aad8af661b.gif', 'deactivate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor list`
--
ALTER TABLE `donor list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui`
--
ALTER TABLE `ui`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor list`
--
ALTER TABLE `donor list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ui`
--
ALTER TABLE `ui`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
