-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2016 at 09:24 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 5.6.29-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiitube_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(2, 'C#'),
(4, 'Java'),
(1, 'JavaScript'),
(3, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comm_id` int(11) NOT NULL,
  `comm_text` text COLLATE utf8_unicode_ci,
  `comm_video_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comm_user_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comm_id`, `comm_text`, `comm_video_id`, `comm_user_id`) VALUES
(1, 'jnsjkdnsk', '1', '1'),
(2, '', 'site', '1'),
(3, 'text', 'site', '1'),
(4, 'text', '1', '1'),
(5, 'hello', '1', '1'),
(6, 'hello', '1', '1'),
(7, 'hello', '1', '1'),
(8, 'hi', '1', '1'),
(9, 'test', '1', '1'),
(10, 'test', '1', '1'),
(11, 'lol', '1', '1'),
(12, 'blah', '1', '1'),
(13, 'blah', '1', '1'),
(14, 'hi', '2', '1'),
(15, 'my comment', '2', '1'),
(16, 'my name', '2', 'chemiloshan@modernie.com'),
(17, 'my name', '2', 'chemiloshan@modernie.com'),
(18, 'my name', '2', 'chemiloshan@modernie.com'),
(19, 'my name', '2', 'chemiloshan@modernie.com'),
(20, 'my name', '2', 'chemiloshan@modernie.com'),
(21, 'my name', '2', 'chemiloshan@modernie.com');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1482361151),
('m161221_225654_create_category_table', 1482361156),
('m161221_230036_create_comments_table', 1482361423);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `authkey` varchar(100) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `authkey`, `user_id`, `first_name`, `last_name`) VALUES
(1, 'chemiloshan@modernie.com', 'test', 'testkey', '', '', ''),
(2, 'chemiloshan@modernie.com', 'test', '', '', '', ''),
(3, 'chemiloshan@modernie.com', 'test', '4lM3QrJwf_47iMpkjXDSJjGdqFdCex48', '', '', ''),
(4, 'chemiloshan@moderie.com', 'test', 'ZAA-mwMR2DBWo3w-258RMtM1dt-4Zx-a', '', '', ''),
(5, 'chemiloshan@modernie.io', 'test', 'vHFAnse42kLYNlIM6Srf9FxU8csCi8tY', 'st001', 'chemil', 'oshan'),
(6, 'chemiloshan@ernie.com', 'test', 'C8g4HlWm-ZG06CD1op4cJhsXos_izv9a', 'st001', 'chemil', 'oshan'),
(7, 'chemiloshan@ernie.co', '$2y$13$O9lfvSd6MkqsL4rGetFL.eW/QKkAvXpQneLpCp3Km68BmDYyiQdWS', 'TDgqhT4uNR1VFnaRPXekRwUXA_YAt-EX', 'st001', 'chemil', 'oshan');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(10) NOT NULL,
  `video_title` varchar(50) NOT NULL,
  `video_description` varchar(500) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `video_added_user_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_description`, `video_url`, `video_added_user_id`, `category_id`) VALUES
(1, 'Google Wifi: Home Wi-Fi, simply solved', 'Google Wifi is a new approach to home Wi-Fi. Wifi points work together to provides a fast signal to every room, the app puts you in control of your Wi-Fi, and Network Assist manages your network so you never have to.', 'https://www.youtube.com/embed/vPqslcwZ8Kk', 1, 1),
(2, 'How to Work at Google: Example Coding/Engineering ', 'Watch our video to see two Google engineers demonstrate a mock interview question. After they code, our engineers highlight best practices for interviewing at Google. Learn more about how we hire at http://goo.gl/xSD7jo, then head over to http://goo.gl/6M5KCG to find your role.', 'https://www.youtube.com/embed/XKu_SEDAykw', 1, 1),
(3, 'Google and NASA\'s Quantum Artificial Intelligence ', 'A peek at the early days of the Quantum AI Lab: a partnership between NASA, Google, USRA, and a 512-qubit D-Wave Two quantum computer. Learn more at http://google.com/+QuantumAILab', 'https://www.youtube.com/embed/CMdHDHEuOUE', 1, 1),
(4, 'How Search Works', 'http://www.google.com/howgoogleworks | The life span of a Google query is less then 1/2 second, and involves quite a few steps before you see the most relevant results. Here\'s how it all works.', 'https://www.youtube.com/embed/BNHR6IQJGZs', 1, 1),
(5, 'What Most Schools Don\'t Teach', 'What Most Schools Don\'t Teach', 'https://www.youtube.com/embed/nKIu9yen5nc', 1, 2),
(6, 'What is the Internet?', 'What is the internet? Short answer: a distributed packet-switched network. This is the introduction video to the series, "How the Internet Works". Vint Cerf, one of the "fathers of the internet" explains the history of how the net and how no one person or organization is really in charge of it. Watch the rest of the series to learn more: ', 'https://www.youtube.com/embed/Dxcc6ycZ73M', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
