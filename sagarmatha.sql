-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 12:13 PM
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
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `aid` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `batch_id` int(11) UNSIGNED NOT NULL,
  `file` text NOT NULL,
  `description` text NOT NULL,
  `due_date` date NOT NULL,
  `teacher_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) UNSIGNED NOT NULL,
  `batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch`) VALUES
(1, '071'),
(2, '072');

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
(14, 'This is News 1', 'aditi acharya', 'light-green-color-bo', 'This news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi Achis given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. en by Miss. Aditi AcharyaThis news iis given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi AcharyaThis news is given by Miss. Aditi Acharya', '18-07-16'),
(15, 'ahahha', '123', '20180605_114625.jpg', 'nothing here', '18-07-16'),
(16, 'Intake and Chlorination tank -Angel Acharya Group 1', 'mr.keshab', '14599801_11099830690', 'ahahaaaaaaaaaahhhhhhhhhhhhhhhhh', '18.07.16');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `batch_id` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `teacher_name` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subject`, `batch_id`, `file`, `teacher_name`, `date`) VALUES
(25, '', '071', '', '', '0000-00-00'),
(26, '', '073', '', '', '0000-00-00'),
(27, '', '072', '', '', '0000-00-00'),
(28, '', '073', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `batch_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `teacher_name` text NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `batch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `batch_id`) VALUES
(1, 'admin', 'admin@admin.com', '12345', 'admin', 0),
(3, 'aarash', 'aarash@mail.com', '12345', 'student', 1),
(4, 'keshav', 'keshav@mail.com', '12345', 'teacher', 0),
(5, 'aditi', 'aditi@mail.com', '12345', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `aid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
