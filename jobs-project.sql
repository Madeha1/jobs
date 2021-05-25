-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 03:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(255) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `shows` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `img`, `link`, `shows`) VALUES
(9, '/assests/adv/adv.png', 'https://courses.w3schools.com/', 0),
(8, '/assests/adv/adv.png', 'https://courses.w3schools.com/', 1),
(13, '/assests/adv/adv2.png', 'https://courses.w3schools.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobsoffering`
--

CREATE TABLE `jobsoffering` (
  `id` int(8) NOT NULL,
  `job_title` varchar(40) NOT NULL,
  `image` longtext NOT NULL DEFAULT '"../assets/img/user.png"',
  `sponsored` int(1) NOT NULL DEFAULT 0,
  `company_name` varchar(40) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `job_description` text NOT NULL,
  `job_requirements` text NOT NULL,
  `salary` varchar(10) NOT NULL,
  `teleNo` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_id` int(8) NOT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `mostview` int(255) NOT NULL,
  `approve` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobsoffering`
--

INSERT INTO `jobsoffering` (`id`, `job_title`, `image`, `sponsored`, `company_name`, `category`, `street`, `city`, `job_description`, `job_requirements`, `salary`, `teleNo`, `email`, `user_id`, `job_type`, `mostview`, `approve`) VALUES
(118, 'Medical Representative\r\n', '/assests/img/user.png', 1, 'al ahly', 'Part Time', 'street', 'hebron', 'representing', 'A Bachelor’s Degree in Pharmacy.\r\nFresh graduates are welcomed, preferably to have minimum of 2 years’ experience.\r\nHas valid driving license and car.\r\n', '2000', 34632, 'rep@gmail.com', 14, 'Medical', 4, 1),
(120, 'Computer Science Teacher\r\n', '/assests/img/prog.jpg', 0, 'school', 'Part Time', 'main str', 'hebron', 'we need techer', 'Computer Science and IT must be taught in English. A very good command of English is required to work successfully in AMS\r\n', '1234', 12345, 'techer@gmail.com', 14, 'Media & News', 1, 1),
(130, 'engineer', '../assests/img/user.png', 0, 'toBe', 'Part Time', 'hebron', 'hebron', 'blah', 'blah', '1000', 2336267, 'madehatahboub@gmail.com', 14, 'Technology', 1, 1),
(131, 'tester', '/assests/img/prog.jpg', 0, 'ourtester', 'Full Time', 'street', 'hebron', 'tester in our company', 'full stack in python', '4000', 34654745, 'madehatahboub@gmail.com', 14, 'Technology', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `telNo` int(16) NOT NULL,
  `type` int(2) NOT NULL,
  `job_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `address`, `telNo`, `type`, `job_type`) VALUES
(1, 'admin', 'admin123', '181064@ppu.edu.ps', 'Palestine ', 12345, 10, ''),
(13, 'user', 'user', 'user@gmail.com', 'hebron', 22698712, 0, 'Goverment'),
(14, 'owner', 'owner', 'owner@email.com', 'Hebron', 963325, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobsoffering`
--
ALTER TABLE `jobsoffering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobsoffering`
--
ALTER TABLE `jobsoffering`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
