-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 05:23 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sagarmatha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `image` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `author`, `image`, `content`, `date`) VALUES
(12, 'MoU with Leapfrog Technology Inc. ', 'abc', '2017-09-16 06.33.59 ', 'On 7th of June,SCST signed the official MoU with Leapfrog Technology Inc. \r\nLeapfrog Technology Inc. is one of the leading IT company in Nepal.  ', '18.06.18'),
(13, 'Sagarmathians- Winner of TechTrix Hackathon', 'xyz', '2017-09-16 06.33.59 ', 'Team Sagarmathians won Hackathon organized by Tech-Trix 2018. The hackthon was on for two days. Students from first year, Mr. Prashant Acharya, Mr. Minav Adhikari, Mr.Sailesh karki and Mr.Vipul Chaudary performed brilliantly. ', '18.06.18'),
(14, 'This is News 1', 'aditi acharya', '', 'This news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi Achis given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. en by Miss. Aditi AcharyaThis news iis given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi Acharya', '18-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `author` text NOT NULL,
  `files` varchar(500) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `filePath` varchar(500) NOT NULL,
  `fileType` varchar(200) NOT NULL,
  `fileSize` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `batch`, `subject`, `author`, `files`, `description`, `date`, `filePath`, `fileType`, `fileSize`) VALUES
(25, '071', 'java', 'aditi acharya', '5b46204dd38fb4.65378957.zip', 'this is npthing', '18.07.11', 'uploads/5b46204dd38fb4.65378957.zip', ' application/x-zip-compressed', ' 3823'),
(26, '073', 'hh', 'mr.kd', '5b46206e20eba1.97858758.png', 'testing testing', '18.07.11', 'uploads/5b46206e20eba1.97858758.png', ' image/png', ' 45655');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batch` text NOT NULL,
  `gender` text NOT NULL,
  `registerdate` varchar(255) NOT NULL,
  `imagename` varchar(500) NOT NULL,
  `imagepath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user`, `password`, `email`, `batch`, `gender`, `registerdate`, `imagename`, `imagepath`) VALUES
(3, 'aarash', '12345', 'aarash.shrestha@sagarmatha.edu.np', '071', 'Male', '2018-07-11', '36823170_2153557211340312_6270790777740197888_n.jpg', '../student_image/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
