-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 10:41 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `package_status` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `publication_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `package_status`, `comment`, `publication_status`) VALUES
(4, 'rasel', 'ahmed', 'rasel.bu.37@gmail.com', '01786879164', 'solimullah road', 'Comilla (TK 8000/-)', 'hjghjghjkhkh', 'Except'),
(5, 'Himel', 'Howlader', 'himelhowlader121@gmail.com', '01747307373', 'Charfashion, bhola', 'Comilla (TK 8000/-)', 'Want to go', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `phone_number`, `email_address`, `message`) VALUES
(7, 'Rasel Ahmed', '01815547037', 'rase.bu.37@gmail.com', 'Update The website...');

-- --------------------------------------------------------

--
-- Table structure for table `guideed`
--

CREATE TABLE `guideed` (
  `id` int(10) NOT NULL,
  `guide_name` varchar(100) NOT NULL,
  `guide_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guideed`
--

INSERT INTO `guideed` (`id`, `guide_name`, `guide_description`, `publication_status`, `image`) VALUES
(19, 'Himel Howlader', 'excellent communication skills.\r\nthe ability to present information in an interesting way.\r\na good memory for facts, figures and events.\r\norganisational skills for planning tours.', 1, 'guide_images/profile.jpg'),
(20, 'Azizur Rahman', 'Excellent communication skills.\r\nthe ability to present information in an interesting way.\r\na good memory for facts, figures and events.\r\norganisational skills for planning tours.', 1, 'guide_images/profile4.jpg'),
(21, 'Khadimul Rashid', 'Excellent communication skills.\r\nthe ability to present information in an interesting way.\r\na good memory for facts, figures and events.\r\norganisational skills for planning tours.', 1, 'guide_images/profile2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guidehire`
--

CREATE TABLE `guidehire` (
  `id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `package_status` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `publication_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guidehire`
--

INSERT INTO `guidehire` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `package_status`, `comment`, `publication_status`) VALUES
(5, 'RASEL', 'AHMED', 'rasel.bu.37@gmail.com', '+8801815547037', 'solimullah road', 'Rangamati (TK 10000/-)', 'nothing is bad', 'pending'),
(6, 'kamrul', 'AHMED', '2013nazmulhossain@gmail.com', '01786879164', 'solimullah road', 'Rangamati (TK 10000/-)', 'hi jhgjgjh', 'Except'),
(7, 'Nil', 'Akash', 'nil.akash@gmail.com', '01679321807', 'dhaka 1207', 'Please select your packages', 'All plan is good', 'Except'),
(8, 'Himel', 'Howlader', 'himelhowlader121@gmail.com', '01747307373', 'solimullah road', 'Saint Martin (TK 15000/-)', 'i want to go', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(10) NOT NULL,
  `location_title` varchar(200) NOT NULL,
  `location_description` text NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_title`, `location_description`, `publication_status`, `image`) VALUES
(5, 'Bandarban', 'Bisanakandi is situated at Bangladesh-India border in Sylhet. Bichanakandi is a village situated in Rustompur Union under Guainghat Upazilla.This is where many layers of the Khasi mountain meet at a single point from both sides.', 1, 'location_images/bandarban.jpg'),
(6, 'Comiila', 'Comilla is a metropolitan city in eastern Bangladesh, located along the Dhaka-Chittagong Highway. It is the administrative centre of the Comilla District, part of the Chittagong Division', 1, 'location_images/comilla.jpg'),
(7, 'Sajek Vally', 'Comilla is a metropolitan city in eastern Bangladesh, located along the Dhaka-Chittagong Highway. It is the administrative centre of the Comilla District, part of the Chittagong Division', 1, 'location_images/sajek.jpg'),
(8, 'à¦¨à§€à¦²à¦¾à¦¦à§à¦°à¦¿', 'à¦¢à¦¾à¦•à¦¾ à¦¥à§‡à¦•à§‡ à¦¶à§à¦¯à¦¾à¦®à¦²à§€/à¦®à¦¾à¦®à§à¦¨/à¦à¦¨à¦¾ à¦à¦¬à¦‚ à¦†à¦°à§‹ à¦•à¦¿à¦›à§ à¦¬à¦¾à¦¸ à¦¯à¦¾à§Ÿ à¦¸à§à¦¨à¦¾à¦®à¦—à¦žà§à¦œà§‡, à¦¯à§‡à¦•à§‹à¦¨ à¦à¦•à¦Ÿà¦¾à¦¤à§‡ à¦‰à¦ à§‡ à¦ªà§œà§à¦¨,  à¦­à¦¾à§œà¦¾ à¦ªà§œà¦¬à§‡ à¦œà¦¨à¦ªà§à¦°à¦¤à¦¿ à§«à§«à§¦ à¦Ÿà¦¾à¦•à¦¾ à¥¤ à¦¸à§à¦¨à¦¾à¦®à¦—à¦žà§à¦œ à¦¥à§‡à¦•à§‡ à¦¨à¦¤à§à¦¨ à¦¬à§à¦°à§€à¦œ à¦ªà¦¾à¦° à¦¹à§Ÿà§‡ à¦®à§‹à¦Ÿà¦° à¦¸à¦¾à¦‡à¦•à§‡à¦² à¦¨à¦¿à§Ÿà§‡ à¦¯à§‡à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦šà¦¾à¦‡à¦²à§‡ à¦Ÿà§‡à¦•à§‡à¦°à¦˜à¦¾à¦Ÿ à¦ªà¦°à§à¦¯à¦¨à§à¦¤ à¦¸à¦°à¦¾à¦¸à¦°à¦¿ à¦®à§‹à¦Ÿà¦° à¦¸à¦¾à¦‡à¦•à§‡à¦² à¦°à¦¿à¦œà¦¾à¦°à§à¦­ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤ à¦à¦•à§à¦·à§‡à¦¤à§à¦°à§‡ à¦­à¦¾à§œà¦¾ à§©à§¦à§¦-à§«à§¦à§¦ à¦Ÿà¦¾à¦•à¦¾ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‡ à¦†à¦° à¦®à¦¾à¦à¦ªà¦¥à§‡ à¦¯à¦¾à¦¦à§à¦•à¦¾à¦Ÿà¦¾ à¦¨à¦¦à§€ à¦ªà¦¾à¦° à¦¹à¦¤à§‡ à¦œà¦¨à¦ªà§à¦°à¦¤à¦¿ à¦­à¦¾à§œà¦¾ à§« à¦Ÿà¦¾à¦•à¦¾ à¦†à¦° à¦®à§‹à¦Ÿà¦° à¦¸à¦¾à¦‡à¦•à§‡à¦² à¦à¦° à¦­à¦¾à§œà¦¾ à§¨à§¦ à¦Ÿà¦¾à¦•à¦¾ à¦•à¦°à§‡ à¦ªà§œà¦¬à§‡ à¥¤', 1, 'location_images/563841_p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) NOT NULL,
  `package_title` varchar(200) NOT NULL,
  `package_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_title`, `package_description`, `publication_status`, `image`) VALUES
(49, 'Saint Martin', 'Bisanakandi is situated at Bangladesh-India border in Sylhet. Bichanakandi is a village situated in Rustompur Union under Guainghat Upazilla.This is where many layers of the Khasi mountain meet at a single point from both sides.', 1, 'pack_images/sundarban.jpg'),
(50, 'Sajek Vally', 'Bisanakandi is situated at Bangladesh-India border in Sylhet. Bichanakandi is a village situated in Rustompur Union under Guainghat Upazilla.This is where many layers of the Khasi mountain meet at a single point from both sides.', 1, 'pack_images/sylhet.jpg'),
(51, 'Saint Martin', 'Bisanakandi is situated at Bangladesh-India border in Sylhet. Bichanakandi is a village situated in Rustompur Union under Guainghat Upazilla.This is where many layers of the Khasi mountain meet at a single point from both sides.', 1, 'pack_images/saint.jpg'),
(52, 'Comilla', 'Bisanakandi is situated at Bangladesh-India border in Sylhet. Bichanakandi is a village situated in Rustompur Union under Guainghat Upazilla.This is where many layers of the Khasi mountain meet at a single point from both sides.', 1, 'pack_images/sajek.jpg'),
(55, 'Bichanakandi', 'Bisanakandi is situated at Bangladesh-India border in Sylhet. Bichanakandi is a village situated in Rustompur Union under Guainghat Upazilla.This is where many layers of the Khasi mountain meet at a single point from both sides', 1, 'pack_images/banner.jpg'),
(56, 'Sylhet', '1. Dhaka - Sylhet - Dhaka  Ac Bus\r\n\r\n2. AC hotel Accommodation (3/4 Sharing) (Couple room extra 500 per person applicable)\r\n\r\n3. 2 Breakfast, 2 Lunch & 1 Dinner\r\n\r\n4. AC transport for sightseeing\r\n\r\n5. Experienced Guide facilities', 1, 'pack_images/876403_62d17-1-compressor.jpg'),
(57, 'Bichanakandi', 'Excellent communication skills. the ability to present information in an interesting way. a good memory for facts, figures and events. organisational skills for planning tours.\r\n\r\n\r\n', 0, 'pack_images/563841_p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'najmul', 'najmul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Rasel', 'rasel.bu.37@gmail.com', '730b571c8c0df67bc44634bfd9d6923f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guideed`
--
ALTER TABLE `guideed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guidehire`
--
ALTER TABLE `guidehire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `guideed`
--
ALTER TABLE `guideed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `guidehire`
--
ALTER TABLE `guidehire`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
