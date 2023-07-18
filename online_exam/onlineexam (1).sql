-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 07:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa12`
--

CREATE TABLE `aa12` (
  `question` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `img_name` varchar(500) DEFAULT NULL,
  `marks` int(100) DEFAULT NULL,
  `op1` varchar(250) DEFAULT NULL,
  `op2` varchar(250) DEFAULT NULL,
  `op3` varchar(250) DEFAULT NULL,
  `op4` varchar(250) DEFAULT NULL,
  `answer` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aa12answer`
--

CREATE TABLE `aa12answer` (
  `email` varchar(50) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aa123`
--

CREATE TABLE `aa123` (
  `question` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `img_name` varchar(500) DEFAULT NULL,
  `marks` int(100) DEFAULT NULL,
  `op1` varchar(250) DEFAULT NULL,
  `op2` varchar(250) DEFAULT NULL,
  `op3` varchar(250) DEFAULT NULL,
  `op4` varchar(250) DEFAULT NULL,
  `answer` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aa123`
--

INSERT INTO `aa123` (`question`, `img_path`, `img_name`, `marks`, `op1`, `op2`, `op3`, `op4`, `answer`) VALUES
('adsgj', 'upload-files/650024_16.JPG', '16.JPG', 1, 'dt', 'cfcc', 'chgch', 'chgh', 2),
('sjvhbdbjl', 'upload-files/9852905_How-RedTacton-Works.png', 'How-RedTacton-Works.png', 1, 'vvjhvj', 'jhvjj', 'vjhvjhj', 'jhjvj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `aa123answer`
--

CREATE TABLE `aa123answer` (
  `email` varchar(50) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bk4`
--

CREATE TABLE `bk4` (
  `question` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `img_name` varchar(500) DEFAULT NULL,
  `marks` int(100) DEFAULT NULL,
  `op1` varchar(250) DEFAULT NULL,
  `op2` varchar(250) DEFAULT NULL,
  `op3` varchar(250) DEFAULT NULL,
  `op4` varchar(250) DEFAULT NULL,
  `answer` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bk4answer`
--

CREATE TABLE `bk4answer` (
  `email` varchar(50) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gg667`
--

CREATE TABLE `gg667` (
  `question` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `img_name` varchar(500) DEFAULT NULL,
  `marks` int(100) DEFAULT NULL,
  `op1` varchar(250) DEFAULT NULL,
  `op2` varchar(250) DEFAULT NULL,
  `op3` varchar(250) DEFAULT NULL,
  `op4` varchar(250) DEFAULT NULL,
  `answer` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gg667answer`
--

CREATE TABLE `gg667answer` (
  `email` varchar(50) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m001`
--

CREATE TABLE `m001` (
  `question` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `img_name` varchar(500) DEFAULT NULL,
  `marks` int(100) DEFAULT NULL,
  `op1` varchar(250) DEFAULT NULL,
  `op2` varchar(250) DEFAULT NULL,
  `op3` varchar(250) DEFAULT NULL,
  `op4` varchar(250) DEFAULT NULL,
  `answer` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m001`
--

INSERT INTO `m001` (`question`, `img_path`, `img_name`, `marks`, `op1`, `op2`, `op3`, `op4`, `answer`) VALUES
('sin', 'upload-files/2025146_redtacton-technology-7-638.jpg', 'redtacton-technology-7-638.jpg', 1, '3', '2', '1', '67', 1),
('cos', 'upload-files/2633361_How-RedTacton-Works.png', 'How-RedTacton-Works.png', 1, '4', '45', '80', '90', 2);

-- --------------------------------------------------------

--
-- Table structure for table `m001answer`
--

CREATE TABLE `m001answer` (
  `email` varchar(50) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m001answer`
--

INSERT INTO `m001answer` (`email`, `ans`, `total`) VALUES
('sup@gmail.com', '12', 2),
('supratimsarkar99@gmail.com', '13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `who` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn` int(250) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`who`, `name`, `email`, `phn`, `pass`) VALUES
('Student', 'ssarkar', 'supratimsarkar99@gmail.com', 12345, '777'),
('Teacher', 'kalyan223', 'kalyan@gmail.com', 2384, 'kalyan'),
('Student', 'Supratim', 'sup@gmail.com', 120012, '099');

-- --------------------------------------------------------

--
-- Table structure for table `sft2`
--

CREATE TABLE `sft2` (
  `question` varchar(500) DEFAULT NULL,
  `img_path` varchar(500) DEFAULT NULL,
  `img_name` varchar(500) DEFAULT NULL,
  `marks` int(100) DEFAULT NULL,
  `op1` varchar(250) DEFAULT NULL,
  `op2` varchar(250) DEFAULT NULL,
  `op3` varchar(250) DEFAULT NULL,
  `op4` varchar(250) DEFAULT NULL,
  `answer` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sft2`
--

INSERT INTO `sft2` (`question`, `img_path`, `img_name`, `marks`, `op1`, `op2`, `op3`, `op4`, `answer`) VALUES
('hvsac', 'upload-files/6534118_Features-of-RedTacton.jpg', 'Features-of-RedTacton.jpg', 2, 'gjy', 'ggvg', 'vhgvhv', 'hvgh', 1),
('hvahsv', 'upload-files/8171081_7.JPG', '7.JPG', 2, 'fcfc', 'vvhvj', 'vhvv', 'vhjjvj', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sft2answer`
--

CREATE TABLE `sft2answer` (
  `email` varchar(50) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sft2answer`
--

INSERT INTO `sft2answer` (`email`, `ans`, `total`) VALUES
('sup@gmail.com', '13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `number` int(30) NOT NULL,
  `marks` int(30) NOT NULL,
  `id` varchar(50) NOT NULL,
  `year` varchar(50) DEFAULT NULL,
  `endtime` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`email`, `subject`, `department`, `date`, `time`, `number`, `marks`, `id`, `year`, `endtime`) VALUES
('kalyan@gmail.com', 'math', 'computersc', '2019-05-21', '16:50:00.000000', 2, 2, 'm001', 'second', '01:00:00'),
('kalyan@gmail.com', 'software', 'computersc', '2019-05-21', '18:00:00.000000', 2, 4, 'sft2', 'third', '01:00:00'),
('sup@gmail.com', 'fggh', 'information', '2019-05-21', '19:40:00.000000', 2, 4, 'gg667', 'first', '01:00:00'),
('kalyan@gmail.com', 'bk', 'information', '2019-05-21', '21:30:00.000000', 1, 1, 'bk4', 'first', '01:00:00'),
('kalyan@gmail.com', 'aa', 'leather', '2019-05-21', '21:00:00.000000', 2, 2, 'aa12', 'second', '03:00:00'),
('kalyan@gmail.com', 'aa', 'leather', '2019-05-21', '21:00:00.000000', 2, 2, 'aa123', 'second', '03:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
