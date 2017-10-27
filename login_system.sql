-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 09:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_gender` varchar(250) NOT NULL,
  `user_username` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_music` varchar(1) NOT NULL,
  `user_dancing` varchar(1) NOT NULL,
  `user_reading` varchar(1) NOT NULL,
  `user_partying` varchar(1) NOT NULL,
  `user_sleeping` varchar(1) NOT NULL,
  `user_question` varchar(500) NOT NULL,
  `user_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_gender`, `user_username`, `user_email`, `user_password`, `user_music`, `user_dancing`, `user_reading`, `user_partying`, `user_sleeping`, `user_question`, `user_answer`) VALUES
(16, 'Naman Gupta', 'Male', 'Admin', 'kungfunaman@gmail.com', '$2y$10$EHgeDLkzYBNkd7gSy89kh.n9IwIsqq6lDdgGPtvKlfn80KqXO6HGa', '1', '1', '0', '1', '0', 'What is your blood group?', 'B+'),
(17, 'Dharmesh Sharma', 'Male', 'Dharmesh4', 'dharmesh@gmail.com', '$2y$10$edxtkmh53Y35ZNYPW800M.vNsKTsWczF8hzBknnMpEhK.I6FfvS0G', '0', '1', '0', '1', '1', 'What is your favourite hero?', 'Emraan hashmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
