-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 11:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nm_reflection`
--

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `read_more` varchar(255) NOT NULL,
  `thumbnail_img` varchar(255) NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `format` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `category`, `img`, `subject`, `content`, `read_more`, `thumbnail_img`, `posted_by`, `date_posted`, `format`) VALUES
(1, 'careers', 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/2nd-line-support-eTYH.jpg', '2nd Line Support Technician', 'SALARY: £22,000 ‐ £28,000 + Bonus & Pension Netmatters is a rapidly growing IT and website development company offering a diverse range of products and services.', '#', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/rob-george-zFWY.jpg', 'Posted by Rob George', '2019-11-21 14:34:22', 1),
(2, 'careers', 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/full-stack-web-l5m7.jpg', 'Full Stack Web Developer', 'Salary: £25,000 ‐ £36,000 per annum + Bonus (Dependant on Experience) Hours: 40 hours per week Netmatters is a rapidly growing IT and website development company offering a diverse range of products and services.', '#', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/josh-ralph-3AhE.jpg', 'Posted by Josh Ralph', '2019-11-22 09:15:26', 2),
(3, 'insights', 'https://www.netmatters.co.uk/assets/images/thumbnails/thumb/find-out-how-ogK2.jpg', 'Find out how IT grants can help small businesses', 'It feels as though a new Brexit announcement comes every day. Three years on from the referendum and there\'s still plenty of uncertainty for SMEs.', '#', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png', 'Posted by Netmatters Ltd', '2019-11-23 12:34:26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
