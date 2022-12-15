-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 10:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev_2204`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `photo`, `status`) VALUES
(1, 'Dexter Chambers', 'Amaya Bennett', 'xozyza@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Dexter Chambers-632ddfaa783d7.jpg', 1),
(4, 'Timothy Dodson', 'Nolan Glenn', 'kigasa@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Timothy Dodson-632de564759ef.jpeg', 1),
(5, 'Alexander Rivers e', 'Danielle Chandler', 'dijape@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Alexander Rivers e-632efb2feaab7.jpeg', 2),
(6, 'Lucas Shaffer', 'Rhea Giles', 'zadybumedu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Lucas Shaffer-632efab88f6bb.jpg', 1),
(8, 'news hook', 'Driscoll Cole', 'wifevax@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Rogan Cook-6331302d4a902.jpeg', 2),
(9, 'jewel new', 'Katelyn Dotson', 'hupihasoq@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'jewel new-633135bfdab86.jpg', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
