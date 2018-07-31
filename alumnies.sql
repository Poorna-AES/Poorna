-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 08:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnies`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `ac_id` int(11) NOT NULL,
  `achi` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`ac_id`, `achi`) VALUES
(13, 'AICTE approval'),
(14, 'NBA Accredations'),
(16, 'Swayam : MOOCS Courses '),
(17, 'Autonomy'),
(18, 'ISO Certified');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(100) NOT NULL,
  `e_event` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_event`) VALUES
(63, 'International conference on Sustainable Waste Management through Design'),
(64, '\r\nWeekly Schedule of FM Community Radio'),
(65, 'Felicitations to College Men & Women Athletics Team'),
(66, 'For any type of suggestions regarding Institution, kindly mail us at \"suggestions@gndec.ac.in\"'),
(67, 'For any type of suggestions/complaints, students can email at \"studentcouncil@gndec.ac.in\"'),
(68, 'NCC camp');

-- --------------------------------------------------------

--
-- Table structure for table `pri_word`
--

CREATE TABLE `pri_word` (
  `p_id` int(100) NOT NULL,
  `p_word` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pri_word`
--

INSERT INTO `pri_word` (`p_id`, `p_word`) VALUES
(1, 'The perseverance and dedication of the entire staff is so high that it is effervescent to evolve problem- solving strategies for the betterment of the students. Numerous ongoing projects by AICTE,MHRD,CSIR, TEQIP-II/FIST etc. further enrich the faculty and the institution.'),
(2, 'xdfcvgbhjnkm,l'),
(3, 'The perseverance and dedication of the entire staff is so high that it is effervescent to evolve problem- solving strategies for the betterment of the students. Numerous ongoing projects by AICTE,MHRD,CSIR, TEQIP-II/FIST etc. further enrich the faculty and the institution.'),
(4, 'The perseverance and dedication of the entire staff is so high that it is effervescent to evolve problem- solving strategies for the betterment of the students.'),
(5, 'The perseverance and dedication of the entire staff is so high that it is effervescent to evolve problem- solving strategies for the betterment of the students. Numerous ongoing projects by AICTE,MHRD,CSIR, TEQIP-II/FIST etc. further enrich the faculty and the institution.'),
(6, 'The perseverance and dedication of the entire staff is so high that it is effervescent to evolve problem- solving strategies for the betterment of the students. '),
(7, 'The perseverance and dedication of the entire staff is so high that it is effervescent to evolve problem- solving strategies for the betterment of the students. Happy Holiday');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(100) NOT NULL,
  `u_fname` varchar(20) DEFAULT NULL,
  `u_mname` varchar(20) NOT NULL,
  `u_lname` varchar(20) DEFAULT NULL,
  `gender` enum('m','f','o') DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `yop` int(11) DEFAULT NULL,
  `branch` varchar(2) DEFAULT NULL,
  `u_pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_mname`, `u_lname`, `gender`, `u_email`, `yop`, `branch`, `u_pwd`) VALUES
(1, 'Xyz', '', 'ln', 'o', 'xyzl@gmail.com', 2000, 'IT', '123456'),
(2, 'Sonu', '', 'Kr', 'm', 'sonu@gmail.com', 1945, 'PE', 'qwerty'),
(3, 'njn', '', 'lmo', 'm', 'njn@gmail.com', 1945, 'PE', 'qwerty'),
(4, 'Ganesh ', 'Shankar', 'Baranwal', 'm', 'ganeshshankarbaranwal@gmail.com', 2015, 'IT', '16048119'),
(5, 'Shubham', '', 'Baranwal', 'm', 'sbaranwal1001@outlook.com', 2016, 'PE', 'zxcvbnm'),
(6, 'asa', '', 'asd', 'm', 'asa@gmail.com', 1945, 'PE', 'zxcvb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `pri_word`
--
ALTER TABLE `pri_word`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `pri_word`
--
ALTER TABLE `pri_word`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
