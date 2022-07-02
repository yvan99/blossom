-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 03:36 AM
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
(1, 'admin@blossom.com', '$2y$10$TkVr4kLm0YjOoCYhYlPcOuBUtBwS0uoMLF29Ox2W4pwanQTCx8jiq', 'JOLIE');

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
(2, 'Kibo Tyson', 'rekel@mailinator.com', '$2y$10$TkVr4kLm0YjOoCYhYlPcOuBUtBwS0uoMLF29Ox2W4pwanQTCx8jiq', '+1 (981) 912-1946', 0),
(3, 'Jenette Howell', 'qikusi@mailinator.com', '$2y$10$98OWfJHhZ6BqmLPlDCc0VeLegVGYJuG6T6ClCO8/OdHN6eZLmJNLO', '+1 (472) 457-8161', 0);

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
(8, 'Do you love being a girl?', 1),
(9, 'Do you have to behave a certain way because of your  gender?', 1),
(10, 'Do you know what sex is?', 1),
(11, 'Would you have a boyfriend who is 10 years older than you?', 1),
(12, 'Can a girl get pregnant before having her first period?', 1),
(14, 'Do you know anything about sexual and reproductive health?', 1),
(15, 'Have you ever received sexual advances from older men?', 1),
(16, 'Have you ever been sexually harassed?', 1),
(17, 'We have only 3 birth control methods.', 1),
(18, 'Should you talk to your boyfriend about sexual activities?', 1),
(19, 'Is abstinence the most effective way to prevent pregnancy?', 1),
(20, 'Are Condoms a better choice?', 1),
(21, 'Do your parents talk to you about safe sex?', 1),
(22, 'Do you know what STDs are?', 1),
(23, 'Do you know anyone who have been raped/sexually assaulted?', 1),
(24, 'Should we start teaching sex education in Primary?', 1),
(25, 'Being sexually active without using protection is okay.', 1),
(26, 'Have you ever been pregnant?', 1),
(27, 'Do you think Alcohol and drugs contribute in increasing the number of teen pregnancies?', 1),
(28, 'at your age Would you feel comfortable using birth control methods?', 1),
(29, 'do you think having sex is cool?', 1),
(30, 'The most effective birth control method for preventing sexually transmitted diseases is condoms.', 1),
(31, 'Do you consider yourself sexually active?', 1),
(32, 'Is there any difference between sex and intimacy?', 1),
(33, 'Can all STDs be treated?', 1),
(34, 'Is abortion the most effective way to prevent pregnancy?', 1),
(35, 'If you got pregnant today would you keep it?', 1),
(36, 'Have you ever talked to your parents/guardians about sex?', 1),
(37, 'Do you think school should provide condoms?', 1),
(38, 'In lorem tenetur min', 1);

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
(1, 'STUDENT10524', '$2y$10$TkVr4kLm0YjOoCYhYlPcOuBUtBwS0uoMLF29Ox2W4pwanQTCx8jiq', 'female', 'East', 'Kirehe'),
(3, 'STUDENT718612', '$2y$10$nuYBgvy6.jBMYXxOUur8Le8W0eQehRs48mfpjM/TQrLER19/WDBb2', 'female', 'Kigali', 'Kicukiro');

-- --------------------------------------------------------

--
-- Table structure for table `student_answers`
--

CREATE TABLE `student_answers` (
  `st_ans_id` int(10) NOT NULL,
  `st_ans_date` text NOT NULL,
  `answ_id` text NOT NULL,
  `quest_id` text NOT NULL,
  `student_id` int(15) NOT NULL,
  `st_ans_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_answers`
--

INSERT INTO `student_answers` (`st_ans_id`, `st_ans_date`, `answ_id`, `quest_id`, `student_id`, `st_ans_status`) VALUES
(751, '2022-06-30 19:53:49', '2', '28', 1, '1'),
(752, '2022-06-30 19:53:49', '2', '35', 1, '1'),
(753, '2022-06-30 19:53:49', '2', '34', 1, '1'),
(754, '2022-06-30 19:53:49', '3', '10', 1, '1'),
(755, '2022-06-30 19:53:50', '2', '33', 1, '1'),
(756, '2022-06-30 19:53:50', '3', '36', 1, '1'),
(757, '2022-06-30 19:53:50', '4', '9', 1, '1'),
(758, '2022-06-30 19:53:50', '4', '11', 1, '1'),
(759, '2022-06-30 19:53:50', '5', '32', 1, '1'),
(760, '2022-06-30 19:53:50', '5', '14', 1, '1'),
(762, '2022-07-02 01:16:59', '3', '32', 3, '1'),
(763, '2022-07-02 01:16:59', '5', '11', 3, '1'),
(764, '2022-07-02 01:16:59', '3', '25', 3, '1'),
(765, '2022-07-02 01:16:59', '2', '33', 3, '1'),
(766, '2022-07-02 01:16:59', '5', '27', 3, '1'),
(767, '2022-07-02 01:16:59', '2', '35', 3, '1'),
(768, '2022-07-02 01:16:59', '3', '19', 3, '1'),
(769, '2022-07-02 01:16:59', '2', '22', 3, '1'),
(770, '2022-07-02 01:16:59', '3', '24', 3, '1'),
(771, '2022-07-02 01:16:59', '2', '21', 3, '1');

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
  MODIFY `counsellor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `quest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_answers`
--
ALTER TABLE `student_answers`
  MODIFY `st_ans_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=772;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
