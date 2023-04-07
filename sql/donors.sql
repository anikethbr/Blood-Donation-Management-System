-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 11:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `age`, `gender`, `bloodgroup`, `mobile`, `email`) VALUES
(1, 'Aniketh', 19, 'M', 'A pos', '9999999999', 'anikethbr@gmail.com'),
(2, 'Shyam', 20, 'M', 'AB pos', '8888888888', 'shyam@gmail.com'),
(3, 'Rahul', 33, 'M', 'A pos', '9189471429', 'rah@gmail.com'),
(4, 'Prakash', 25, 'M', 'AB neg', '9365705346', 'prak@gmail.com'),
(5, 'Rohit', 37, 'M', 'A pos', '4372643061', 'roh@gmail.com'),
(6, 'Amit', 27, 'M', 'A pos', '8433192473', 'ami@gmail.com'),
(7, 'Sharath', 56, 'M', 'B pos', '7681488270', 'sharath@gmail.com'),
(8, 'Fathima', 43, 'F', 'B neg', '7529743995', 'fath@gmail.com'),
(9, 'Karan', 56, 'M', 'AB pos', '341790543', 'karan@gmail.com'),
(10, 'Pradeep', 21, 'M', 'B neg', '2212504294', 'pradeep@gmail.com'),
(11, 'Kavita', 43, 'F', 'O neg', '6699647179', 'kav@gmail.com'),
(12, 'Leela', 53, 'F', 'A neg', '8987893545', 'leela@gmail.com'),
(13, 'Kamal', 23, 'M', 'B pos', '2676076243', 'kamal@gmail.com'),
(14, 'Avinash', 23, 'M', 'O pos', '8928407466', 'avi@gmail.com'),
(15, 'Pranav', 33, 'M', 'AB pos', '1936695258', 'pranav@gmail.com'),
(16, 'Sheeba', 29, 'F', 'B pos', '1690028630', 'sheeba@gmail.com'),
(17, 'Babita', 23, 'F', 'O pos', '6587645246', 'babi@gmail.com'),
(18, 'Praveena', 30, 'F', 'B neg', '3813344898', 'pravi@gmail.com'),
(19, 'Riya', 21, 'F', 'A neg', '751613245', 'riya@gmail.com'),
(20, 'Sita', 28, 'F', 'A neg', '8462384270', 'sita@gmail.com'),
(21, 'Deepa', 33, 'F', 'AB pos', '149107172', 'deepa@gmail.com'),
(22, 'Ravi', 47, 'M', 'AB pos', '7707096023', 'ravi@gmail.com'),
(23, 'Jyoti', 24, 'F', 'O neg', '8567950763', 'jyo@gmail.com'),
(24, 'Sunil', 34, 'M', 'B pos', '9819228671', 'suni@gmail.com'),
(25, 'Ashish', 23, 'M', 'O pos', '3443280091', 'ash@gmail.com'),
(26, 'Reshma', 43, 'F', 'A pos', '8220558400', 'res@gmail.com'),
(27, 'Roopesh', 31, 'M', 'AB neg', '9332753608', 'roo@gmail.com'),
(28, 'Praveen', 29, 'M', 'B neg', '7570274971', 'praveen@gmail.com'),
(29, 'Rishi', 27, 'M', 'A neg', '8504584270', 'rishi@gmail.com'),
(30, 'Akshay', 23, 'M', 'O pos', '1812876860', 'ask@gmail.com'),
(31, 'Kiran', 47, 'M', 'O neg', '6432460709', 'kiran@gmail.com'),
(32, 'Satheesh', 24, 'M', 'AB neg', '9247616640', 'sat@gmail.com'),
(33, 'Roy', 23, 'M', 'A neg', '7777777777', 'roy@gmail.com'),
(34, 'Rajesh', 34, 'M', 'AB neg', '6323868224', 'raj@gmail.com'),
(35, 'Bharati', 35, 'F', 'O neg', '5370130603', 'bharath@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
