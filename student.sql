-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 02:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `age`, `gender`, `address`) VALUES
(1, 'Jane Smith', 'jane.smith@example.com', 22, 'Female', '456 Oak Avenue, Metropolis, USA'),
(2, 'Alice Johnson', 'alice.johnson@example.com', 30, 'Female', '789 Maple Lane, Gotham, USA'),
(3, 'Bob Brown', 'bob.brown@example.com', 28, 'Male', '101 Pine Road, Smallville, USA'),
(4, 'Charlie Adams', 'charlie.adams@example.com', 26, 'Other', '202 Birch Street, Star City, USA'),
(5, 'Mohammad Ripon', 'riponmahmudrj79@gmail.com', 18, 'Male', 'Sirajgonj'),
(6, 'Sumaiya Khatun', 'sumaiya@gmail.com', 21, 'Female', 'Sirajgonj'),
(7, 'md. Ahaduzzaman', 'riponmahmudrj79@gmail.com', 18, 'Male', 'Salanga'),
(8, 'Rohmot Ali', 'rohmat@gmail.com', 45, 'Male', 'Sirajgonj'),
(9, 'Meheli', 'meheli@gmail.com', 23, 'Female', 'Narayanganj\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
