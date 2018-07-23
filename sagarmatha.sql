-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 07:34 PM
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
-- Table structure for table `anotice`
--

CREATE TABLE `anotice` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `batch_id` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anotice`
--

INSERT INTO `anotice` (`id`, `title`, `image`, `description`, `category`, `batch_id`, `date`) VALUES
(1, 'bhejaj', 'anotice.PNG', 'notice notice notice', 'teacher', '', '2018-07-22'),
(2, 'leashasha', 'news.PNG', 'bahhahsah', 'student', '', '2018-07-22'),
(4, 'Training and replacement has organized something. ', 'error.PNG', 'training and replacement unit has origanixed something and you should be atherea ast ashansy cost bleh', 'student', '', '2018-07-23');

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
(12, 'MoU with Leapfrog Technology Inc. ', 'abc', 'news.PNG', 'On 7th of June,SCST signed the official MoU with Leapfrog Technology Inc. \r\nLeapfrog Technology Inc. is one of the leading IT company in Nepal.  ', '18-07-22'),
(13, 'Sagarmathians- Winner of TechTrix Hackathon', 'xyz', 'bleh.png', 'Team Sagarmathians won Hackathon organized by Tech-Trix 2018. The hackthon was on for two days. Students from first year, Mr. Prashant Acharya, Mr. Minav Adhikari, Mr.Sailesh karki and Mr.Vipul Chaudary performed brilliantly. ', '18-07-22'),
(17, 'bleh belaha snahsahs', 'ashhasha', 'bleh.jpg', '', '18.07.21'),
(18, 'hashhashah', 'ahuiasi', 'bleh.jpg', 'meow meow meow meow meow meow v meow meow meow meow meow meow vmeow meow meow', '18.07.21'),
(20, 'bhahahahahahhahahaha', 'bhahahahahahhahahaha', 'new.jpg', 'bhahahahahahhahahahabhahahahahahhahahahabhahahahahahhahahahabhahahahahahhahahahabhahahahahahhahahahabhahahahahahhahahahabhahahahahahhahahahabhahahahahahhahahaha', '18.07.21'),
(22, 'Amnesty International Nepal', 'dj', 'news.PNG', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '18-07-22');

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
(41, 'last time', 2, 'storage/light-green-color-boxes_14921-770x430.jpg', 'note', 'Hayes Imelda', '0000-00-00', '0000-00-00');

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
(8, 8, 6, 1, 'Computer', 'storage/Computer.docx', 'do properly', '2018-07-16'),
(9, 9, 6, 4, 'english', 'storage/english.docx', 'well done in english', '2018-07-16'),
(10, 8, 2, 1, 'Computer', 'storage/Computer.docx', 'b[ajasns', '2018-07-16'),
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
  `batch_id` int(11) DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `batch_id`, `image`) VALUES
(1, 'Sushant Nyachhyon', 'sushant@gmail.com', 'sushant123', 'teacher', 0, ''),
(2, 'saroj khadka', 'skhadka200ns@gmail.com', 'saroj123', 'student', 1, ''),
(3, 'Hayes Imelda', 's@gmail.com', '12345', 'teacher', 0, ''),
(4, 'Razil shakya', 'razil@gmail.com', 'razil', 'teacher', 0, ''),
(5, 'prashamsa pandey', 'pandey@gmail.com', 'pandey12345', 'student', 2, ''),
(6, 'ram', 'ram@gmail.com', 'ram12345', 'student', 1, ''),
(7, 'Hari KC', 'hari@gmail.com', 'hello', 'admin', 0, ''),
(8, 'prabesh pandey', 'prabesh@gmail.com', 'prabesh12345', 'student', 1, ''),
(9, 'ganga subba', 'ganga@gmail.com', 'ganga123', 'teacher', 0, ''),
(10, 'Sita KC', 'sita@gmail.com', '12345678', 'student', 4, ''),
(11, 'kriti pandey', 'kriti@gmail.com', '12345678', 'student', 3, ''),
(12, 'aditical', 'pariacharya33@gmail.com', 'hello', 'admin', 0, ''),
(13, 'ayushma', 'ayu@ayushma.com', 'ayushma', 'student', 1, ''),
(14, 'adity shresath', 'adity@shrestha.com', '12345', 'teacher', 0, ''),
(15, 'Aarash Shrestha', 'aarash.shrestha@sagarmatha.edu.np', '12345', 'student', 1, ''),
(16, 'Amogh', 'amogh@amogh.com', '12345', 'teacher', 0, 'anotice.PNG'),
(17, 'amrit', 'amrit@amrit.com', '12345', 'teacher', 0, 'aarash071.PNG'),
(18, 'deepak', 'deepak@deepak.com', '12345', 'admin', 0, 'deepak.PNG'),
(19, 'Dileshwori', 'dilu@dilu.com', '12345', 'teacher', 0, 'Capture.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anotice`
--
ALTER TABLE `anotice`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `anotice`
--
ALTER TABLE `anotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
