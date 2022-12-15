-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 04:17 PM
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
-- Database: `towhid_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `myinfo`
--

CREATE TABLE `myinfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myinfo`
--

INSERT INTO `myinfo` (`id`, `fname`, `lname`, `email`, `password`, `photo`, `status`) VALUES
(0, 'Mr. kotob', 'Rahman', 'kotob@gmail.com', 'fc1200c7a7aa52109d762a9f005b149abef01479', 'new.jpg', 1),
(1, 'Md. Hasib', 'Rahman', 'hasib@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'new.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Id` int(11) NOT NULL,
  `Roll` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Date of birth` text NOT NULL,
  `Parents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Id`, `Roll`, `Name`, `Date of birth`, `Parents`) VALUES
(0, 1126075, 'Md. Toshid', '9th, january', 'Yesilo'),
(1, 11260765, 'mr. hasem', '10th, february', 'lilo');

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
(47, 'Hashim Crawford', 'Chelsea Sanford', 'qituhifi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Hashim Crawford-632761f8d5bbe.gif', 1),
(69, 'Isaiah Webster', 'Ima Gallagher', 'rygar@mailinator.com', 'Pa$$w0rd!', 'Isaiah Webster-632ad6eaa0927.jpg', 1),
(70, 'Lunea Mitchell', 'Alea Parks', 'mulavulo@mailinator.com', 'Pa$$w0rd!', 'Lunea Mitchell-632ad97d11596.jpg', 0),
(71, 'Hanna Moses', 'Ria Warren', 'sarowihi@mailinator.com', 'Pa$$w0rd!', 'Hanna Moses-632adbdabd4ee.jpeg', 0),
(72, 'Grace Fowler', 'Dale Garza', 'rolotola@mailinator.com', 'Pa$$w0rd!', 'Grace Fowler-632ade87dd7fe.jpg', 0),
(74, 'Wang Velasquez', 'Ferris Rojas', 'korerakep@mailinator.com', 'Pa$$w0rd!', 'Wang Velasquez-632b04665ca7c.jpeg', 0),
(75, 'Noelani West', 'Karina Wilder', 'jegi@mailinator.com', 'Pa$$w0rd!', 'Noelani West-632b0440d071f.jpg', 0),
(76, 'Towhid', 'siddiqui', 'towsdk@gmail.com', '1234', 'Towhid-632b05514716e.jpg', 0),
(77, 'Delilah Wall', 'Rebecca Workman', 'fujycuqi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Delilah Wall-632b0cf03aa34.jpeg', 1),
(78, 'jowel', 'Wyatt Goodwin', 'qusemocu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'jowel-632b0db9191a3.png', 0),
(79, 'Christine Newton', 'Neil Potts', 'wujufyky@mailinator.com', '68053af2923e00204c3ca7c6a3150cf7', 'Christine Newton-632b15ef70884.jpg', 0),
(80, 'my', 'Bruce Wiggins', 'jugyq@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'my-632b18c1e882b.jpeg', 0),
(81, 'Ina Pollard', 'Sharon Madden', 'safega@mailinator.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Ina Pollard-632b23f700e40.jpeg', 1),
(82, 'Lamar Hawkins', 'Basil Jones', 'fiqalazur@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Lamar Hawkins-6330955ccfdcb.jpg', 0),
(93, 'hsos', 'dd', 'dsn@gamil.com', '202cb962ac59075b964b07152d234b70', 'hsos-6331440961b3b.jpeg', 0),
(94, 'jwel', 'Jana Hebert', 'baxihafa@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'jwel-6331584b87375.jpeg', 0),
(102, 'Faith Livingston', 'Alea Myers', 'nekyqoh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Faith Livingston-63317ed311c78.jpeg', 0),
(103, 'Brynn Knox', 'Len York', 'lahuny@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Brynn Knox-633180f98a016.jpg', 0),
(104, 'Kabir khan', 'Brock Hurley', 'cevyl@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Hollee Mccoy-633182cf5abdf.jpg', 0),
(105, 'Grant Petty', 'Cain Hines', 'jatuwod@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Grant Petty-633189ae1c5a1.jpeg', 0),
(106, 'Demetria Blanchard', 'Nathaniel Freeman', 'piful@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Demetria Blanchard-63318a4e3205a.jpg', 1),
(107, 'Kylie Stout', 'Yeo Herring', 'kebysa@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Kylie Stout-63318c6ee9f7a.jpg', 0),
(108, 'Jeremy Vinson', 'Flavia Bowen', 'wenosexaci@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Jeremy Vinson-6331acf436ce0.jpg', 0),
(109, 'Calvin Sellers', 'Malcolm Rice', 'byzohef@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Calvin Sellers-6331dfd3981b3.jpg', 0),
(110, 'Cody Ayers', 'Karleigh Wolf', 'fanog@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Cody Ayers-6332ce7159049.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myinfo`
--
ALTER TABLE `myinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`Id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
