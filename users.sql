-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2014 at 10:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE IF NOT EXISTS `user_information` (
  `user_name` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`user_name`, `full_name`, `email`, `password`, `user_id`, `avatar`, `roll`, `class`, `batch`, `session`) VALUES
('badrul', 'Badrul Maqsood', 'badrul.maqsood@gmail.com', '123456', '06BADECA85CBE7CC9697', 'images/member/Picture 1.jpg', '08203017', 'BSC', '12', '2012'),
('habib', 'Ahsan Habib', 'habib@gmail.com', 'habibi123', '35EED4C6AFE5C2A87570', 'images/member/9.jpg', '36', 'cse', '12', '2010-11'),
('rahul403', 'Rahul Baruri', 'rahul.baruri@yahoo.com', 'rahul123', '3754E5B6F450BF1EB05C', 'images/member/20.jpg', '', '', '', '0'),
('rahul63', 'Rahul Baruri', 'demo@gmail.com', '123456', '86AAA4F424663AE0EF38', 'images/member/13vvb_0.jpg', '', '', '', '0'),
('shimul', 'Shimul Ahmed', 'shimul@gmail.com', 'shimul123', 'A24A3C68369E16051C46', 'images/member/22_0.jpg', '', '', '', '0'),
('tarek', 'Tarek anam', 'tarek@gmail.com', '123456', '26C26E4214B58286ED59', 'images/member/r4.jpg', '1', 'BBA', '12', '2010-09'),
('User', 'Demo', 'demo@gmail.com', '123456', '7FECA07ED9BB2F27CC60', 'images/member/8.jpg', '', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
 ADD PRIMARY KEY (`user_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
