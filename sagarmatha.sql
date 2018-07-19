-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 09:38 PM
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
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(10) UNSIGNED NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch`) VALUES
(1, '2071'),
(2, '2072'),
(3, '2073'),
(4, '2074');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2013_07_14_175825_create_batch_table', 1),
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2018_07_14_175842_create_assignment_table', 1),
(20, '2018_07_14_182631_create_submission_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `aid` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` int(10) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`aid`, `name`, `batch_id`, `file`, `category`, `teacher_name`, `date`, `due_date`) VALUES
(8, 'computer', 1, 'storage/Computer.docx', '2018-07-20', 'Sushant Nyachhyon', '0000-00-00', '0000-00-00'),
(9, 'english', 1, 'storage/english.docx', '2018-07-26', 'Razil shakya', '0000-00-00', '0000-00-00'),
(10, 'new', 1, 'storage/New.docx', '2018-07-11', 'Razil shakya', '0000-00-00', '0000-00-00'),
(11, 'computer', 2, 'storage/Computer.docx', '2018-07-16', 'Sushant Nyachhyon', '0000-00-00', '0000-00-00'),
(12, 'C prog', 1, 'storage/C prog.docx', '2018-07-20', 'ganga subba', '0000-00-00', '0000-00-00'),
(15, 'Tutorial 1', 2, 'storage/Unit 1.doc', '2018-07-20', 'Sushant Nyachhyon', '0000-00-00', '0000-00-00'),
(23, 'This is notice 1', 2, 'storage/light-green-color-boxes_14921-770x430.jpg', 'notice', 'Sushant Nyachhyon', '0000-00-00', '0000-00-00'),
(24, 'assignment is assignment ', 1, 'storage/Ecom.zip', 'assignment', 'Sushant Nyachhyon', '0000-00-00', '0000-00-00'),
(25, 'This is notice 1', 3, 'storage/index2.html', 'assignment', 'Sushant Nyachhyon', '0000-00-00', '0000-00-00'),
(26, 'ahahha', 2, 'storage/Ecom.zip', 'assignment', 'Hayes Imelda', '0000-00-00', '2018-07-21'),
(27, 'This is notice 1', 2, 'storage/Ecom.zip', 'notice', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(29, 'Something is happening. ', 4, 'storage/Ecom.zip', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(30, 'belaka ahahah', 2, 'storage/Ecom.zip', 'assignment', 'Hayes Imelda', '0000-00-00', '2018-07-26'),
(31, 'This is News 1', 3, 'storage/light-green-color-boxes_14921-770x430.jpg', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(33, 'assignment is here bitch', 3, 'storage/Ecom.zip', 'assignment', 'Hayes Imelda', '0000-00-00', '2018-07-28'),
(34, 'ok this is it', 3, 'storage/light-green-color-boxes_14921-770x430.jpg', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(35, 'why rhe heell is is not goinf to index page', 3, 'storage/Ecom.zip', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(36, 'ok this is the last time', 3, 'storage/Ecom.zip', 'notice', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(37, 'one last time', 4, 'storage/Ecom.zip', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(38, 'this is insaneeeeeeeeeeeeee', 3, 'storage/Ecom.zip', 'assignment', 'Hayes Imelda', '0000-00-00', '2018-07-12'),
(39, 'i am so stupid', 2, 'storage/light-green-color-boxes_14921-770x430.jpg', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(40, 'now it might', 2, 'storage/light-green-color-boxes_14921-770x430.jpg', 'notice', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(41, 'last time', 2, 'storage/light-green-color-boxes_14921-770x430.jpg', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00'),
(42, 'i swear i am sleeping', 2, 'storage/Ecom.zip', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `aid` int(11) NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `aname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `submitted_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`sub_id`, `aid`, `student_id`, `teacher_id`, `aname`, `file`, `feedback`, `submitted_date`) VALUES
(8, 8, 6, 1, 'Computer', 'storage/Computer.docx', '', '2018-07-16'),
(9, 9, 6, 4, 'english', 'storage/english.docx', 'well done in english', '2018-07-16'),
(10, 8, 2, 1, 'Computer', 'storage/Computer.docx', 'Good', '2018-07-16'),
(11, 9, 2, 4, 'English', 'storage/english.docx', 'Excellent', '2018-07-16'),
(12, 11, 5, 1, 'Computer', 'storage/Computer.docx', 'Bad', '2018-07-16'),
(14, 10, 6, 4, 'New', 'storage/New.docx', 'very bad', '2018-07-16'),
(15, 10, 2, 4, 'New', 'storage/New.docx', 'null', '2018-07-16'),
(16, 12, 8, 9, 'C prog', 'storage/C prog.docx', 'Very very poor.', '2018-07-19'),
(17, 12, 6, 9, 'C prog', 'storage/C prog.docx', 'null', '2018-07-19'),
(20, 15, 5, 1, 'Tutorial 1', 'storage/Unit 1.doc', 'No feedback yet', '2018-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `batch_id`) VALUES
(1, 'Sushant Nyachhyon', 'sushant@gmail.com', 'sushant123', 'teacher', 0),
(2, 'saroj khadka', 'skhadka200ns@gmail.com', 'saroj123', 'student', 1),
(3, 'Hayes Imelda', 's@gmail.com', '12345678', 'teacher', 0),
(4, 'Razil shakya', 'razil@gmail.com', 'razil', 'teacher', 0),
(5, 'prashamsa pandey', 'pandey@gmail.com', 'pandey12345', 'student', 2),
(6, 'ram', 'ram@gmail.com', 'ram12345', 'student', 1),
(7, 'Hari KC', 'hari@gmail.com', '12345678', 'admin', 0),
(8, 'prabesh pandey', 'prabesh@gmail.com', 'prabesh12345', 'student', 1),
(9, 'ganga subba', 'ganga@gmail.com', 'ganga123', 'teacher', 0),
(10, 'Sita KC', 'sita@gmail.com', '12345678', 'student', 4),
(11, 'kriti pandey', 'kriti@gmail.com', '12345678', 'student', 3);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `assignment_batch_id_foreign` (`batch_id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `assignment_batch_id_foreign` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
