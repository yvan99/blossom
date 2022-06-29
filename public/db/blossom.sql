-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 02:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blossom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `admin_names` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `admin_names`) VALUES
(1, 'admin@blossom.com', '$2y$10$TkVr4kLm0YjOoCYhYlPcOuBUtBwS0uoMLF29Ox2W4pwanQTCx8jiq', 'ISHIMWE IVAN');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answ_id` int(10) NOT NULL,
  `answ_title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answ_id`, `answ_title`) VALUES
(2, 'Yes'),
(3, 'No'),
(4, 'Maybe'),
(5, 'I don\'t know');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE `counsellor` (
  `counsellor_id` int(10) NOT NULL,
  `couns_fullnames` varchar(40) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `couns_telephone` text NOT NULL,
  `counse_status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`counsellor_id`, `couns_fullnames`, `email`, `password`, `couns_telephone`, `counse_status`) VALUES
(1, 'Stephanie Gaines', 'vajovehi@mailinator.com', '$2y$10$7bnVry.9outMr7330ICiROrglF3J.RQqT.ELukD06OJWsQluzOMF.', '+1 (196) 515-4652', 0),
(2, 'Kibo Tyson', 'rekel@mailinator.com', '$2y$10$TkVr4kLm0YjOoCYhYlPcOuBUtBwS0uoMLF29Ox2W4pwanQTCx8jiq', '+1 (981) 912-1946', 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `quest_id` int(10) NOT NULL,
  `quest_question` text NOT NULL,
  `quest_status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quest_id`, `quest_question`, `quest_status`) VALUES
(1, 'what is this ?', 0),
(2, 'when ?', 0),
(3, 'then ?', 0),
(4, 'this ?', 0),
(5, 'cool ?', 0),
(6, 'damn ?', 0),
(7, 'Molestiae libero sol', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(15) NOT NULL,
  `student_username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `student_province` varchar(15) NOT NULL,
  `student_district` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_username`, `password`, `gender`, `student_province`, `student_district`) VALUES
(1, 'STUDENT10524', '$2y$10$TkVr4kLm0YjOoCYhYlPcOuBUtBwS0uoMLF29Ox2W4pwanQTCx8jiq', 'female', 'East', 'Kirehe');

-- --------------------------------------------------------

--
-- Table structure for table `student_answers`
--

CREATE TABLE `student_answers` (
  `st_ans_id` int(10) NOT NULL,
  `st_ans_date` text NOT NULL,
  `answ_id` int(10) NOT NULL,
  `quest_id` int(10) NOT NULL,
  `student_id` int(15) NOT NULL,
  `st_ans_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suggestion_box`
--

CREATE TABLE `suggestion_box` (
  `sugg_id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `sugg_message` varchar(255) NOT NULL,
  `sugg_date` text NOT NULL,
  `sugg_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answ_id`);

--
-- Indexes for table `counsellor`
--
ALTER TABLE `counsellor`
  ADD PRIMARY KEY (`counsellor_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`quest_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_answers`
--
ALTER TABLE `student_answers`
  ADD PRIMARY KEY (`st_ans_id`);

--
-- Indexes for table `suggestion_box`
--
ALTER TABLE `suggestion_box`
  ADD PRIMARY KEY (`sugg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answ_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counsellor`
--
ALTER TABLE `counsellor`
  MODIFY `counsellor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `quest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_answers`
--
ALTER TABLE `student_answers`
  MODIFY `st_ans_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggestion_box`
--
ALTER TABLE `suggestion_box`
  MODIFY `sugg_id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
