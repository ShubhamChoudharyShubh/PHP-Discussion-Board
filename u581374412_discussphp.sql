-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2025 at 05:43 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u581374412_discussphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(30) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `question_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `question_id`, `user_id`) VALUES
(1, 'mehnat korge to placement lgega na salo', 0, 0),
(2, 'meri jesi website bnao na bhai', 0, 0),
(3, 'mehnat korge to placement lgega na salo', 5, 0),
(4, 'mehnat korge to placement lgega na salo', 6, 0),
(5, 'mehnat korge to placement lgega na salo', 6, 0),
(6, 'mehnat korge to placement lgega na salo', 5, 1),
(7, 'its panding ', 5, 1),
(8, 'dec', 5, 1),
(9, 'yes i can help  you  contact me leas e\r\n', 7, 1),
(10, 'fv ', 8, 1),
(11, 'ye he mera answer', 9, 1),
(12, 'test delete question', 9, 1),
(13, 'test delete question', 12, 1),
(14, 'Portfolio Website', 13, 1),
(15, 'The placement percentage for the final year typically ranges between 70-85%, depending on the course and college. Top companies like TCS, Infosys, and Wipro visit frequently. The average package is around ₹3-4 LPA, with higher packages offered in technical and management roles.', 14, 13),
(16, 'The placement percentage for the final year typically ranges between 70-85%, depending on the course and college. Top companies like TCS, Infosys, and Wipro visit frequently. The average package is around ₹3-4 LPA, with higher packages offered in technical and management roles.', 21, 13),
(17, 'Mehnat kro bhai ', 22, 13),
(18, 'Mehnat kro bhai ', 22, 13),
(19, 'hi', 17, 0),
(20, 'yes', 17, 0),
(21, 'hi', 16, 18);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'placement'),
(2, 'admissions'),
(3, 'scholarships'),
(4, 'resources'),
(5, 'campus'),
(6, 'postgraduation'),
(7, 'career');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `category_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `category_id`, `user_id`) VALUES
(16, 'What scholarships are available for meritorious and economically weaker students?', 'Please share information about government or private scholarships that MP college students can apply for, including the eligibility criteria.\r\nResources', 3, 13),
(17, 'What facilities and resources are provided on campus?', 'Can someone provide insights into the library, labs, hostels, and other resources available for students?', 4, 13),
(18, 'What is the campus life like in MP colleges?', 'I’m curious about the student culture, events, clubs, and activities organized on campus. Are there opportunities for extracurricular involvement?', 5, 13),
(19, 'What are the postgraduate options after completing a degree here?', 'Can anyone guide me on postgraduate programs offered by MP colleges or popular options students pursue after graduation?', 6, 13),
(20, 'How does the college support students in career development?', 'Does the college provide career counseling, internships, or industry connections to help students with their career goals?', 7, 13),
(22, 'Manish - How to manage CGPA ?', 'pls give me Advice', 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`) VALUES
(1, 'admin', 'shubhamchoudharyshubh@gmail.com', 'VYzSka.KH2JYHwf', 'Bhopal, Madhya Pradesh'),
(10, 'shubhamchoudharyshubh@gmail.com', 'casaarev2023@gmail.com', '7225', 'Bhopal, Madhya Pradesh'),
(11, 'shubhamjiubh', 'shubhamjiubh@gmail.com', '7225', 'Bhopal, Madhya Pradesh'),
(12, 'shubhamchoudharyshubh', 'shubhamchoudharyshubh@gmail.com', '7225', 'Bhopal, Madhya Pradesh'),
(13, 'shubhamchoudharyshubh@gmail.com', 'shubhamchoudharyshubh@gmail.com', 'Shubh@7247', 'Bhaskracharya hostel , 3, RGPV, Bhopal'),
(14, 'Manish12', 'ManishR26102003@Gmail.com', 'Manish@11', 'Bhopal'),
(15, 'Manish Rajak', 'Manish@gmail.com', 'manish', 'bhopal'),
(16, 'abc', 'abc@gmail.com', 'abc', 'abc'),
(17, 'test@gmail.com', 'safwanganz@gmail.com', '36545280', 'Safwan '),
(18, 'admin', 'bgitesh0114@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
