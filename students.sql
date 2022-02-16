-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 05:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";


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
(1, '1.1', '811', 4, 'Computer Programming & Application'),
(2, '1.1', '812', 3, 'Operators Research I'),
(3, '1.1', '813', 3, 'Engineering Economics'),
(4, '1.2', '821', 3, 'Operations Research II'),
(5, '1.2', '822', 3, 'Industrial Maintenance and Reliability Management'),
(6, '1.2', '823', 3, 'Applied Engineering Statistics'),
(7, '1.2', '824', 2, 'Human Factors Engineering'),
(8, '2.1', '831', 3, 'Production Management'),
(9, '2.1', '832', 2, 'Management of Human Resources'),
(10, '2.1', '833', 3, 'Planning & Control of Projects'),
(11, '2.1', '834', 3, 'Quality Engineering Management'),
(12, '2.2', '841', 2, 'Materials Management'),
(13, '2.2', '842', 2, 'Manufacturing Systems Analysis OR'),
(14, '2.2', '843', 2, 'Construction Management'),
(15, '2.2', '844', 2, 'Work System Design & Measurement'),
(16, '2.2', '899', 3, 'Project');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `diploma_courses`
--
ALTER TABLE `diploma_courses`
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
-- AUTO_INCREMENT for table `masters_courses`
--
ALTER TABLE `masters_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `part_time_courses`
--
ALTER TABLE `part_time_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
