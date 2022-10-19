-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 10:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` int(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `section` varchar(2) NOT NULL,
  `specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course`, `section`, `specialization`) VALUES
(1, 'BSIT', '4', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `doc_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `group_code` varchar(7) NOT NULL,
  `file` varchar(255) NOT NULL,
  `title_def_status` varchar(20) DEFAULT NULL,
  `rc_status` varchar(20) DEFAULT NULL,
  `fod_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`doc_id`, `title`, `group_code`, `file`, `title_def_status`, `rc_status`, `fod_status`) VALUES
(1, 'Online Car Rental', '12345', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `research_type`
--

CREATE TABLE `research_type` (
  `rt_id` int(11) NOT NULL,
  `r_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research_type`
--

INSERT INTO `research_type` (`rt_id`, `r_type`) VALUES
(1, 'Undergrad'),
(2, 'Graduate'),
(3, 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `system_id` int(11) NOT NULL,
  `group_code` varchar(7) NOT NULL,
  `file` varchar(255) NOT NULL,
  `rc_status` varchar(20) DEFAULT NULL,
  `fod_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pword` varchar(100) NOT NULL,
  `groupcode` varchar(7) NOT NULL,
  `course_id` int(10) NOT NULL,
  `ut_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `f_name`, `m_name`, `l_name`, `email`, `username`, `pword`, `groupcode`, `course_id`, `ut_id`) VALUES
(1, 'John', 'Doe', 'Luna', 'abc@gmail.com', 'johndoe', 'pass12345', '12345', 1, 4),
(4, 'Mary', 'Doe', 'Luna', 'abcd@gmail.com', 'marydoe', 'pass12345', '1', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `ut_id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`ut_id`, `type`) VALUES
(1, 'Admin'),
(2, 'Dean'),
(3, 'Panel'),
(4, 'Group Member'),
(5, 'RIUH'),
(6, 'Chairperson'),
(7, 'MIT'),
(8, 'Faculty'),
(9, 'Capstone Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `research_type`
--
ALTER TABLE `research_type`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`system_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `groupcode` (`groupcode`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`ut_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `research_type`
--
ALTER TABLE `research_type`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `system_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `ut_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
