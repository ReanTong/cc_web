-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 08:05 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `images_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `parent_comment_id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image_comment_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`, `image_comment_key`) VALUES
(9, 0, 'SAO!!!!', 'rean', '2019-09-29 05:24:21', '\r\n              d41d8cd98f00b204e9800998ecf8427e'),
(11, 0, 'qwert', 'rean', '2019-09-29 05:29:36', '\r\n              d41d8cd98f00b204e9800998ecf8427e'),
(12, 0, 'qwert', 'rean', '2019-09-29 05:46:38', '\r\n              d41d8cd98f00b204e9800998ecf8427e'),
(13, 0, 'qwerty', 'rean', '2019-09-29 06:01:29', '\r\n              d41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `images_name` varchar(255) NOT NULL,
  `images_title` varchar(255) NOT NULL,
  `images_caption` varchar(255) NOT NULL,
  `images_tag` varchar(255) NOT NULL,
  `images_comment_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `images_name`, `images_title`, `images_caption`, `images_tag`, `images_comment_key`) VALUES
(58, '6e047db06f2f7b49a0e98c2dbe7c64101506828478_full.jpg', 'Sword Art Online', 'sao!!', 'fun, other, ', 'd41d8cd98f00b204e9800998ecf8427e'),
(59, '22-16062G31102311.jpg', 'Kirito', 'Profile', 'foods, fun, ', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `labproject`
--

CREATE TABLE `labproject` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `profileimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labproject`
--

INSERT INTO `labproject` (`firstname`, `lastname`, `password`, `email`, `contactnumber`, `id`, `username`, `profileimage`) VALUES
('mok', 'li hao', 'lihaomok', 'lihaomok@gmail.com', '0167645645', 123456, '', ''),
('', '', 'asfaf', '', '', 123457, 'afasf', ''),
('', '', 'asfafsaf', '', '', 123458, 'dfaf', ''),
('', '', 'sdfsdf', '', '', 123459, 'sfdf', ''),
('', '', 'qsdqsddqsdqs', '', '', 123460, 'wdqwd', ''),
('', '', 'pangtong123', '', '', 123461, 'reat', ''),
('', '', 'pangtong123', '', '', 123462, 'tong dd', ''),
('', '', 'pangtong123', '', '', 123463, 'tong dd', ''),
('', '', 'pangtong123', '', '', 123464, 'tong dd', ''),
('', '', 'wqqeqwe', '', '', 123465, 'ewqe', ''),
('', '', 'wqqeqwe', '', '', 123466, 'ewqe', ''),
('tong li fong', 'otue', 'qwert1234', 'qwer', 'f12415151', 123467, 'rean', ''),
('', '', 'pangtong123', '', '', 123468, 'rean.tong@digitalblowfish.com', ''),
('', '', '', '', '', 123469, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labproject`
--
ALTER TABLE `labproject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `labproject`
--
ALTER TABLE `labproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123470;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
