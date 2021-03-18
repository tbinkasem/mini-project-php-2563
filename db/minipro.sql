-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 11:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minipro`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `password`, `photo`) VALUES
(1, 'ธีระ  บินกาเซ็ม', 'tbinkasem@gmail.com', '123456', 'IMG_1616062192.jpg'),
(6, 'ธีระ  บินกาเซ็ม', 'tbinkasem@gmail.com', '123456', 'IMG_1616062192.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `id` int(11) NOT NULL,
  `idsub` varchar(15) NOT NULL,
  `namesub` varchar(255) NOT NULL,
  `credit` char(1) NOT NULL,
  `grade` varchar(4) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `idsub`, `namesub`, `credit`, `grade`, `email`) VALUES
(1, '3901-1001', 'การบริหารงานคุณภาพในองค์การ', '3', '2.0', 'tbinkasem@gmail.com'),
(2, '3901-1002', 'เทคโนโลยีสารสนเทศเพื่อการจัดการอาชีพ', '3', '3.0', 'tbinkasem@gmail.com'),
(3, '3901-1003', 'การโปรแกรมคอมพิวเตอร์เชิงโครงสร้าง', '3', '1.5', 'tbinkasem@gmail.com'),
(4, '3901-1004', 'การโปรแกรมเว็บด้วยภาษา HTML', '3', '3.5', 'tbinkasem@gmail.com'),
(7, '3901-1005', 'ระบบฐานข้อมูลและการออกแบบ', '3', '2.5', 'tbinkasem@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `due_date` datetime(6) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
