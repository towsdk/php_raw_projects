-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 10:50 AM
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
-- Database: `moderna`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `btn_txt` varchar(50) DEFAULT NULL,
  `btn_url` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `btn_txt`, `btn_url`, `status`) VALUES
(1, 'I am number one 11', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus', 'Give hand', 'show more', 0),
(2, 'Tahmid dentre on acception', 'Reprehenderit volup', 'easy', 'charte.com', 0),
(9, 'FlowDash supports all of Bootstraps default form s', 'FlowDash supports all of Bootstraps default form styling in addition to a handful of new input types and features. Please read the official documentation for a full list of options from Bootstraps cor', 'Read more', 'www.bdhosttech.com', 1),
(10, 'styling in addition to a handful of new', 'styling in addition to a handful of new', 'styling in addition to a handful of new', 'styling in addition to a handful of new', 1),
(11, 'FlowDash supports all of Bootstraps default form s', 'FlowDash supports all of Bootstraps default form styling in addition to a handful of new input types and features. Please read the official documentation for a full list of options from Bootstraps cor', 'Read More', 'GOTOSCHOOL.COM', 1),
(12, 'FlowDash supports all of Bootstraps default form s', 'FlowDash supports all of Bootstraps default form styling in addition to a handful of new input types and features. Please read the official documentation for a full list of options from Bootstraps cor', 'rEad', 'fsdf', 1),
(13, 'fdsff', 'sdfdf', 'fsd', 'sfdf', 1),
(14, 'FlowDash supports all of Bootstraps default form s', '', '', '', 1),
(15, 'FlowDash supports all of Bootstraps default form s', '', '', '', 1),
(16, 'FlowDash supports all of Bootstraps default form s', '', '', '', 0),
(17, 'FlowDash supports all of Bootstraps default form s', 'FlowDash supports all of Bootstraps default form s', 'FlowDash supports all of Bootstraps default form s', 'FlowDash supports all of Bootstraps default form s', 1),
(18, 'form styling in addition to a handf', 'form styling in addition to a handf', 'form styling in addition to a handf', 'form styling in addition to a handf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Molly Bender', 'sexuh@mailinator.com', 'Quo sint quis maxime', 'Sint commodo magna c'),
(2, 'jewel', 'zuha@mailinator.com', 'Debitis ratione fugi', 'Dolores illum error'),
(3, 'Scarlet Collins', 'jyruge@mailinator.com', 'Ad esse et facilis e', 'Eum cumque anim dolo');

-- --------------------------------------------------------

--
-- Table structure for table `contact_show`
--

CREATE TABLE `contact_show` (
  `id` int(11) NOT NULL,
  `icon_1` varchar(30) NOT NULL,
  `title_1` varchar(50) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `icon_2` varchar(30) NOT NULL,
  `title_2` varchar(50) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `contact_2` varchar(100) DEFAULT NULL,
  `icon_3` varchar(30) NOT NULL,
  `title_3` varchar(50) NOT NULL,
  `address_3` varchar(100) NOT NULL,
  `contact_3` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_show`
--

INSERT INTO `contact_show` (`id`, `icon_1`, `title_1`, `address_1`, `icon_2`, `title_2`, `address_2`, `contact_2`, `icon_3`, `title_3`, `address_3`, `contact_3`, `status`) VALUES
(1, 'bx-map', 'Our Address', 'A108 Adam Street, New York, NY 535022', 'bx-envelope', 'Email Us', 'info@example.com', 'contact@example.com', 'bx-phone-call', 'Call Us', '+1 5589 55488 55-89', '+1 6678 254445 41-901', 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `photo`, `status`) VALUES
(1, 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', '&lt;p class=&quot;fst-italic&quot;&gt;\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;\r\n&lt;p class=&quot;fst-italic&quot;&gt;\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;', '1665594495.svg', 1),
(3, 'Corporis temporibus maiores provident', '&lt;p class=&quot;fst-italic&quot;&gt;\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;\r\n&lt;ul&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.&lt;/li&gt;\r\n            &lt;/ul&gt;', '1665594660.svg', 1),
(4, 'Corporis temporibus maiores provident', '&lt;p class=&quot;fst-italic&quot;&gt;\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            &lt;/p&gt;\r\n&lt;ul&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Ullamco laboris nisi ut aliquip ex ea commodo consequat.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Duis aute irure dolor in reprehenderit in voluptate velit.&lt;/li&gt;\r\n              &lt;li&gt;&lt;i class=&quot;bi bi-check&quot;&gt;&lt;/i&gt; Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.&lt;/li&gt;\r\n            &lt;/ul&gt;', '1665594791.jpg', 1),
(5, 'jg uhkj', 'allahummak fini bihalalika an haramika hadith', '1665854455.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_email`
--

CREATE TABLE `home_email` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_email`
--

INSERT INTO `home_email` (`id`, `email`) VALUES
(1, 'md@gmail.com'),
(2, 'nuxylytal@mailinator.com'),
(3, 'nuxylytal@mailinator.com'),
(4, 'md@gmail.com'),
(5, 'oolo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `url` varchar(70) DEFAULT NULL,
  `icon_box` varchar(60) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `url`, `icon_box`, `status`) VALUES
(1, 'tsdk 1 345', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bxl-dribbble 5', 'Gohome.con', 'icon-box-pink', 1),
(4, 'towhid', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'bxs-color', 'https://www.youtube.com/', 'icon-box-green', 0),
(5, 'jewel old 1', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'bxs-lemon', 'tobo.com', 'icon-box-cyan', 1),
(6, '4324', 'styling in', 'bxs-castle', 'styling in', 'icon-box-cyan', 1),
(7, 'form styling in addition to a handf', 'form styling in addition to a handf', 'bxs-castle', 'form styling in addition to a handf', 'icon-box-cyan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `description`, `email`, `password`, `photo`, `status`) VALUES
(1, 'Kessie Livingston', NULL, 'cigidopasi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(2, 'towhid_siddiqui', NULL, 'towsdk@gmail.com', 'd93591bdf7860e1e4ee2fca799911215', NULL, 1),
(3, 'Molly Cobb', NULL, 'kusa@mailinator.com', '202cb962ac59075b964b07152d234b70', NULL, 0),
(4, 'Micah Chaney', NULL, 'gasesajewu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(5, 'Giacomo Stephenson', NULL, 'rorunisiwo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(6, 'towhid_siddiqui', NULL, 'leo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1),
(7, 'towhid_siddiqui', NULL, 'towsdk@gmail.com', 'e034fb6b66aacc1d48f445ddfb08da98', NULL, 1),
(8, 'towhid_siddiqui', NULL, 'towsdk@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 1),
(9, 'towhid_siddiqui', NULL, 'towsdk@gmail.com', 'cb70ab375662576bd1ac5aaf16b3fca4', NULL, 1),
(10, 'towhid_siddiqui', NULL, 'safega@mailinator.com', '202cb962ac59075b964b07152d234b70', NULL, 1),
(11, 'Urielle Richmond', NULL, 'xybofahy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(12, 'Lars Pennington', NULL, 'gosy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(13, 'Jordan English', NULL, 'nihyh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(14, 'Gavin Chase', NULL, 'borenego@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(15, 'Russell Clark', NULL, 'liherehi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(16, 'Ralph Sharp', NULL, 'hiqiny@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(17, 'Jenette Bowen', NULL, 'zixofil@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(18, 'Jordan Hoffman', NULL, 'soqumi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(19, 'Constance Stephenson', NULL, 'kavexyfeme@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(20, 'Idola Fitzpatrick', NULL, 'qemuvugu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(21, 'Declan Leonard', NULL, 'fypunala@mailinator.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 1),
(22, 'Nevada Bean', NULL, 'bocydik@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(23, 'Kalia Holloway', NULL, 'hutyw@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(24, 'Jane Roberts', NULL, 'womijas@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(25, 'Lucian Dale', NULL, 'fexojewe@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(26, 'Jeanette Langley', NULL, 'vubyzab@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', NULL, 1),
(27, 'towhid_siddiqui', NULL, 'moderna@gmail.com', '5e9cf9408e6a89f2649792d0ca5fcd7d', NULL, 1),
(28, 'Md. Towhid Siddiqui', NULL, 'md@gmail.com', '29d233ae0b83eff6e5fbd67134b88717', NULL, 1),
(29, 'towhid_siddiqui 1', 'hispop', 'tow@gmail.com', 'ba1fa7e7999dd72ff18d0e6d5d6e6c93', 'towhid_siddiqui 1-634d8ffbc2afa.jpg', 1),
(30, 'Carol Mullins', 'Velit nisi in proid', 'xobe@mailinator.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Carol Mullins-634d930606e2e.jpg', 1),
(31, 'Giacomo Barton', 'Quis explicabo Qui', 'noryzilyri@mailinator.com', '024d7f84fff11dd7e8d9c510137a2381', 'Giacomo Barton-634d9552c89ce.jpg', 1),
(32, 'Quyn Dudley', 'Cillum culpa omnis e', 'kure@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Quyn Dudley-634eef95146e5.png', 1),
(33, 'Fritz Byrd', 'Corrupti sunt enim', 'xumyxegune@mailinator.com', 'e10adc3949ba59abbe56e057f20f883e', 'Fritz Byrd-634eefd5e837e.png', 1),
(34, 'Dana Horton', 'Labore voluptatibus', 'tows@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Dana Horton-634fa302ca526.png', 1),
(35, 'Anthony Guzman', 'Qui excepturi archit', 'myqemejoje@mailinator.com', '99c5e07b4d5de9d18c350cdf64c5aa3d', 'Anthony Guzman-635189a8856ee.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `photo` varchar(420) DEFAULT NULL,
  `video_link` varchar(100) DEFAULT NULL,
  `title_1` varchar(200) DEFAULT NULL,
  `description_1` varchar(500) DEFAULT NULL,
  `icon_1` varchar(30) DEFAULT NULL,
  `title_2` varchar(150) DEFAULT NULL,
  `description_2` varchar(500) DEFAULT NULL,
  `icon_2` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`photo`, `video_link`, `title_1`, `description_1`, `icon_1`, `title_2`, `description_2`, `icon_2`, `id`) VALUES
('whyus.jpg', 'https://www.youtube.com/watch?v=he5S2CCrQus&amp;list=RDhe5S2CCrQus&amp;start_radio=1', 'LOREM IPSUM', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bx-fingerprint', 'NEMO ENIM', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 'bx-gift', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_show`
--
ALTER TABLE `contact_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_email`
--
ALTER TABLE `home_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_show`
--
ALTER TABLE `contact_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_email`
--
ALTER TABLE `home_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
