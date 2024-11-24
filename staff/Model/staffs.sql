-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2023 at 03:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskName` varchar(250) NOT NULL,
  `assignedTo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskName`, `assignedTo`) VALUES
('Clean Garden', 'Rabbi'),
('Clean all the tables', 'Ramin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `roles` varchar(250) NOT NULL,
  `phonumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `gender`, `address`, `dob`, `roles`, `phonumber`) VALUES
(1, 'Rabbi', 'ra@email.com', 'rabbi', 'sg56$ewb!', 'male', 'Baridhara, Dhaka', '1991-08-06', 'hskeep', '01321453873'),
(2, 'Ramin', 'trefscd@email.com', 'ramin', 'sdhkfnsk$kdjd', 'male', 'Khulna', '1993-11-29', 'hskeep', '01312765890'),
(3, 'Jabbs', 'sjdhs@email.com', 'jabbs', 'jabbs$123', 'male', 'Dhaka', '1992-12-10', 'manager', '01728234398'),
(4, 'Razen', 'shdjsgajd@email.com', 'razen', 'kjahkjads$sjkadh', 'male', 'Kustia', '1994-06-24', 'catering', '01325362837'),
(5, 'Kain', 'Kabla@email.com', 'kain', 'gst56$fsv', 'male', 'Cumilla', '1995-02-23', 'waiter', '01573627954'),
(6, 'Jami', 'sgain@email.com', 'jami', 'tuggb#sjdn990', 'male', 'Bogura', '1994-01-11', 'guard', '01826370453'),
(7, 'Shawn', 'sfrfshaw@email.com', 'shawn', 'gadg536352#dhr', 'male', 'Mymensingh', '1996-03-21', 'waiter', '01324546398'),
(10, 'Hujaifa', 'huf@email.com', 'hujaifa', 'gafhgfahgd$teywg', 'male', 'Jamalpur', '1995-03-22', 'guard', '01742517832'),
(11, 'Rouf', 'ru@email.com', 'rouf', 'afsag#erefw!', 'male', 'Bagherhat', '1995-08-06', 'catering', '01523142873');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
