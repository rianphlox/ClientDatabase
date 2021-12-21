-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 05:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `diploma_courses`
--

CREATE TABLE `diploma_courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `credit_load` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diploma_courses`
--

INSERT INTO `diploma_courses` (`id`, `course_id`, `course_code`, `credit_load`, `course_name`) VALUES
(1, '1.1', '605', 2, 'Who knows');

-- --------------------------------------------------------

--
-- Table structure for table `eng1101234_table`
--

CREATE TABLE `eng1101234_table` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `score` int(11) NOT NULL,
  `grade` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eng1109810_table`
--

CREATE TABLE `eng1109810_table` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `score` int(11) NOT NULL,
  `grade` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eng1109819_table`
--

CREATE TABLE `eng1109819_table` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `score` int(11) NOT NULL,
  `grade` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eng1109819_table`
--

INSERT INTO `eng1109819_table` (`id`, `course_code`, `course_name`, `course_id`, `score`, `grade`) VALUES
(1, '806', 'Who Cares?', '1.1', 89, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `eng1207619_table`
--

CREATE TABLE `eng1207619_table` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `score` int(11) NOT NULL,
  `grade` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eng1207619_table`
--

INSERT INTO `eng1207619_table` (`id`, `course_code`, `course_name`, `course_id`, `score`, `grade`) VALUES
(1, '701', 'Workshop Practice & Lab I', '1.1', 0, ''),
(2, '711', 'Manufacturing Technology', '1.1', 0, ''),
(3, '721', 'Engineering Drawing', '1.1', 0, ''),
(4, '731', 'Applied Material Science', '1.1', 0, ''),
(5, '741', 'Electrical Engineering', '1.1', 0, ''),
(6, '741', 'Electrical Engineering', '1.1', 0, ''),
(7, '751', 'Engineering Mathematics', '1.1', 0, ''),
(8, '702', 'Workshop Practice & Lab II', '1.2', 0, ''),
(9, '712', 'Applied Statistics', '1.2', 0, ''),
(10, '722', 'Engineering Mathematics', '1.2', 0, ''),
(11, '732', 'Design of Machine Elements and Materials Selection', '1.2', 0, ''),
(12, '742', 'Strength of Materials', '1.2', 0, ''),
(13, '752', 'Engineering Mathematics II', '1.2', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `eng1709876_table`
--

CREATE TABLE `eng1709876_table` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `score` int(11) NOT NULL,
  `grade` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eng1709876_table`
--

INSERT INTO `eng1709876_table` (`id`, `course_code`, `course_name`, `course_id`, `score`, `grade`) VALUES
(1, '701', 'Workshop Practice & Lab I', '1.1', 76, 'A'),
(2, '711', 'Manufacturing Technology', '1.1', 75, 'A'),
(3, '721', 'Engineering Drawing', '1.1', 67, 'B'),
(4, '731', 'Applied Material Science', '1.1', 50, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `eng2192754_table`
--

CREATE TABLE `eng2192754_table` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `score` int(11) NOT NULL,
  `grade` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eng2192754_table`
--

INSERT INTO `eng2192754_table` (`id`, `course_code`, `course_name`, `course_id`, `score`, `grade`) VALUES
(1, '605', 'Who knows', '1.1', 65, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `masters_courses`
--

CREATE TABLE `masters_courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `credit_load` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters_courses`
--

INSERT INTO `masters_courses` (`id`, `course_id`, `course_code`, `credit_load`, `course_name`) VALUES
(1, '1.1', '701', 2, 'Workshop Practice & Lab I'),
(2, '1.1', '711', 2, 'Manufacturing Technology'),
(3, '1.1', '721', 2, 'Engineering Drawing'),
(4, '1.1', '731', 2, 'Applied Material Science'),
(5, '1.1', '741', 3, 'Electrical Engineering'),
(6, '1.1', '751', 2, 'Engineering Mathematics'),
(7, '1.2', '702', 2, 'Workshop Practice & Lab II'),
(8, '1.2', '712', 2, 'Applied Statistics'),
(9, '1.2', '722', 2, 'Engineering Mathematics'),
(10, '1.2', '732', 2, 'Design of Machine Elements and Materials Selection'),
(11, '1.2', '742', 2, 'Strength of Materials'),
(12, '1.2', '752', 2, 'Engineering Mathematics II');

-- --------------------------------------------------------

--
-- Table structure for table `part_time_courses`
--

CREATE TABLE `part_time_courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `credit_load` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `part_time_courses`
--

INSERT INTO `part_time_courses` (`id`, `course_id`, `course_code`, `credit_load`, `course_name`) VALUES
(1, '1.1', '806', 2, 'Who Cares?');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `mat_no` text NOT NULL,
  `department` text NOT NULL,
  `course` text NOT NULL,
  `score` int(11) NOT NULL,
  `grade` text NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `programme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `mat_no`, `department`, `course`, `score`, `grade`, `course_id`, `programme`) VALUES
(1, 'Folake Maris', 'ENG1109819', 'PRE', '', 0, '', '', 'part_time'),
(2, 'Awolabi Idowu', 'ENG2192754', 'PRE', '', 0, '', '', 'diploma'),
(3, 'Emeka Osagie', 'ENG1709876', 'PRE', '', 0, '', '', 'masters'),
(4, 'Osagie Igbinosa', 'ENG1207619', 'PRE', '', 0, '', '', 'masters'),
(5, 'Emeka Osagie', 'ENG1101234', 'PRE', '', 0, '', '', 'masters'),
(6, 'Ovie', 'ENG1109810', 'PRE', '', 0, '', '', 'part_time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diploma_courses`
--
ALTER TABLE `diploma_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eng1101234_table`
--
ALTER TABLE `eng1101234_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eng1109810_table`
--
ALTER TABLE `eng1109810_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eng1109819_table`
--
ALTER TABLE `eng1109819_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eng1207619_table`
--
ALTER TABLE `eng1207619_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eng1709876_table`
--
ALTER TABLE `eng1709876_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eng2192754_table`
--
ALTER TABLE `eng2192754_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters_courses`
--
ALTER TABLE `masters_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `part_time_courses`
--
ALTER TABLE `part_time_courses`
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
-- AUTO_INCREMENT for table `diploma_courses`
--
ALTER TABLE `diploma_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eng1101234_table`
--
ALTER TABLE `eng1101234_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eng1109810_table`
--
ALTER TABLE `eng1109810_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eng1109819_table`
--
ALTER TABLE `eng1109819_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eng1207619_table`
--
ALTER TABLE `eng1207619_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `eng1709876_table`
--
ALTER TABLE `eng1709876_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eng2192754_table`
--
ALTER TABLE `eng2192754_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masters_courses`
--
ALTER TABLE `masters_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `part_time_courses`
--
ALTER TABLE `part_time_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
