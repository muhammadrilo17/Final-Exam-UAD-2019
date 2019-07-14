-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 02:15 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorappointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorsakura`
--

CREATE TABLE `doctorsakura` (
  `id_user` int(11) NOT NULL,
  `appointmentdate` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `age` int(2) NOT NULL,
  `complaints` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctorwonwo`
--

CREATE TABLE `doctorwonwo` (
  `id_user` int(11) NOT NULL,
  `appointmentdate` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `age` int(2) NOT NULL,
  `complaints` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsakura`
--
ALTER TABLE `doctorsakura`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `doctorwonwo`
--
ALTER TABLE `doctorwonwo`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorsakura`
--
ALTER TABLE `doctorsakura`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctorwonwo`
--
ALTER TABLE `doctorwonwo`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
