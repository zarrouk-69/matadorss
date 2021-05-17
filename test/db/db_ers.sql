-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 09:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ers`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_member`
--

CREATE TABLE `reg_member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `c_number` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `age` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_member`
--

INSERT INTO `reg_member` (`member_id`, `firstname`, `lastname`, `address`, `email`, `c_number`, `gender`, `date`, `age`) VALUES
(1, 'Jade', 'Jarabelo', 'Bacolod City', 'jade22@gmail.com', '09248572583', 'Male', '2016-06-13 15:34:17', 22),
(2, 'Andrea', 'Soriano', 'Bacolod City', 'andrea20@gmail.com', '09364346842', 'Female', '2016-06-13 15:34:49', 20),
(3, 'Rocky', 'Abapo', 'Bacolod City', 'rocky21@gmail.com', '09346138742', 'Male', '2016-06-13 15:35:36', 21),
(4, 'Iris', 'Policarpo', 'Bacolod City', 'iris29@gmail.com', '09456124638', 'Female', '2016-06-13 15:36:28', 29);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'John', 'Doe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_member`
--
ALTER TABLE `reg_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_member`
--
ALTER TABLE `reg_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
