-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 04:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `way2ebikes`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_desc` varchar(255) DEFAULT NULL,
  `image` varchar(899) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `banner_bg` varchar(255) DEFAULT NULL,
  `status` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_desc`, `image`, `banner_bg`, `status`, `date`, `date_time`) VALUES
(11, 'STORM ZX', 'STORM ZX', 'mini-sport-63-500x500.png', '31.jpg', 'Active', '2019-03-17', NULL),
(12, 'Electrika 48', 'Electrika 48', 'electrica-48-1.png', '2.jpg', 'Active', '2019-03-17', NULL),
(13, 'Storm Advance', 'Storm Advance', 'Storm-Advance-Dual-Seater.png', '21.jpg', 'Active', '2019-03-17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `link_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='important links';

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo_images`
--

CREATE TABLE `photo_images` (
  `image_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `photo_id` int(10) NOT NULL,
  `image_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_images`
--

INSERT INTO `photo_images` (`image_id`, `title`, `image`, `photo_id`, `image_date`) VALUES
(1, 'estse', '1487183090_article2.jpg', 1, '2017-02-15'),
(2, 'estse', '1487183090_b9d9bb4a9cb0da24c9bf5e41a1e184a4.jpg', 1, '2017-02-15'),
(3, 'estse', '1487183090_bae2016ade6e1458dcc712a934d69380.jpg', 1, '2017-02-15'),
(4, 'estse', '1487183090_banner1.jpg', 1, '2017-02-15'),
(5, 'estse', '1487183090_banner2.jpg', 1, '2017-02-15'),
(6, 'Sai Dharma Jyothi Yatra', '1488671497_a7338850b9a603db440f3b21f0e07c5b.jpg', 2, '2017-03-04'),
(7, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_1.jpg', 3, '2017-03-08'),
(8, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_2.jpg', 3, '2017-03-08'),
(9, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_3.jpg', 3, '2017-03-08'),
(10, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_4.jpg', 3, '2017-03-08'),
(11, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_5.jpg', 3, '2017-03-08'),
(12, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_6.jpg', 3, '2017-03-08'),
(13, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_7.jpg', 3, '2017-03-08'),
(14, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_8.jpg', 3, '2017-03-08'),
(15, 'Shirdi Sai Satabdi Harathi Mahotsav', '1488994156_9.jpg', 3, '2017-03-08'),
(16, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007429_1.jpg', 4, '2017-03-08'),
(17, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_2.jpg', 4, '2017-03-08'),
(18, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_3.jpg', 4, '2017-03-08'),
(19, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_4.jpg', 4, '2017-03-08'),
(20, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_5.jpg', 4, '2017-03-08'),
(21, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_6.jpg', 4, '2017-03-08'),
(22, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_7.jpg', 4, '2017-03-08'),
(23, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_8.jpg', 4, '2017-03-08'),
(24, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_9.jpg', 4, '2017-03-08'),
(25, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_10.jpg', 4, '2017-03-08'),
(26, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_11.jpg', 4, '2017-03-08'),
(27, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_12.jpg', 4, '2017-03-08'),
(28, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_13.jpg', 4, '2017-03-08'),
(29, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_14.jpg', 4, '2017-03-08'),
(30, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_15.jpg', 4, '2017-03-08'),
(31, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_16.jpg', 4, '2017-03-08'),
(32, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_17.jpg', 4, '2017-03-08'),
(33, 'Sai Tho Oka Roju - Sai Satya Vratas and Chavadi Vutsavam', '1489007431_18.jpg', 4, '2017-03-08'),
(34, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008005_1.jpg', 5, '2017-03-08'),
(35, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008005_2.jpg', 5, '2017-03-08'),
(36, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008005_3.jpg', 5, '2017-03-08'),
(37, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_4.jpg', 5, '2017-03-08'),
(38, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_5.jpg', 5, '2017-03-08'),
(39, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_6.jpg', 5, '2017-03-08'),
(40, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_7.jpg', 5, '2017-03-08'),
(41, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_8.jpg', 5, '2017-03-08'),
(42, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_9.jpg', 5, '2017-03-08'),
(43, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_10.jpg', 5, '2017-03-08'),
(44, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_11.jpg', 5, '2017-03-08'),
(45, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_12.jpg', 5, '2017-03-08'),
(46, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_13.jpg', 5, '2017-03-08'),
(47, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_14.jpg', 5, '2017-03-08'),
(48, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_15.jpg', 5, '2017-03-08'),
(49, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_16.jpg', 5, '2017-03-08'),
(50, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_17.jpg', 5, '2017-03-08'),
(51, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_18.jpg', 5, '2017-03-08'),
(52, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_19.jpg', 5, '2017-03-08'),
(53, 'Sai Tho Oka Roju - Sri Rama Navami and Chawadi Vutsavam', '1489008007_20.jpg', 5, '2017-03-08'),
(54, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_1.jpg', 6, '2017-03-08'),
(55, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_2.jpg', 6, '2017-03-08'),
(56, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_3.jpg', 6, '2017-03-08'),
(57, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_5.jpg', 6, '2017-03-08'),
(58, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_11.jpg', 6, '2017-03-08'),
(59, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_13.jpg', 6, '2017-03-08'),
(60, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_14.jpg', 6, '2017-03-08'),
(61, 'Sai Tho Oka Roju - Guru Padhuka Mahotsavam and Calender Opening', '1489008607_16.jpg', 6, '2017-03-08'),
(62, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009171_1.jpg', 7, '2017-03-08'),
(63, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_3.jpg', 7, '2017-03-08'),
(64, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_4.jpg', 7, '2017-03-08'),
(65, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_5.jpg', 7, '2017-03-08'),
(66, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_6.jpg', 7, '2017-03-08'),
(67, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_8.jpg', 7, '2017-03-08'),
(68, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_9.jpg', 7, '2017-03-08'),
(69, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_10.jpg', 7, '2017-03-08'),
(70, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_11.jpg', 7, '2017-03-08'),
(71, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_13.jpg', 7, '2017-03-08'),
(72, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_14.jpg', 7, '2017-03-08'),
(73, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_17.jpg', 7, '2017-03-08'),
(74, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_18.jpg', 7, '2017-03-08'),
(75, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_35.jpg', 7, '2017-03-08'),
(76, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_38.jpg', 7, '2017-03-08'),
(77, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_40.jpg', 7, '2017-03-08'),
(78, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_44.jpg', 7, '2017-03-08'),
(79, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_46.jpg', 7, '2017-03-08'),
(80, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_48.jpg', 7, '2017-03-08'),
(81, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009173_52.jpg', 7, '2017-03-08'),
(82, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009260_00.jpg', 8, '2017-03-08'),
(83, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009260_0.jpg', 8, '2017-03-08'),
(84, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_3.jpg', 8, '2017-03-08'),
(85, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_4.jpg', 8, '2017-03-08'),
(86, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_5.jpg', 8, '2017-03-08'),
(87, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_6.jpg', 8, '2017-03-08'),
(88, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_8.jpg', 8, '2017-03-08'),
(89, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_9.jpg', 8, '2017-03-08'),
(90, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_10.jpg', 8, '2017-03-08'),
(91, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_11.jpg', 8, '2017-03-08'),
(92, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_13.jpg', 8, '2017-03-08'),
(93, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_14.jpg', 8, '2017-03-08'),
(94, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_17.jpg', 8, '2017-03-08'),
(95, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_18.jpg', 8, '2017-03-08'),
(96, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_35.jpg', 8, '2017-03-08'),
(97, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_38.jpg', 8, '2017-03-08'),
(98, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_40.jpg', 8, '2017-03-08'),
(99, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_52.jpg', 8, '2017-03-08'),
(100, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_57.jpg', 8, '2017-03-08'),
(101, 'Sai Tho Oka Roju - Shirdi Yatra', '1489009261_58.jpg', 8, '2017-03-08'),
(102, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_1.jpg', 9, '2017-03-08'),
(103, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_2.jpg', 9, '2017-03-08'),
(104, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_3.jpg', 9, '2017-03-08'),
(105, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_4.jpg', 9, '2017-03-08'),
(106, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_5.jpg', 9, '2017-03-08'),
(107, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_6.jpg', 9, '2017-03-08'),
(108, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_7.jpg', 9, '2017-03-08'),
(109, 'Sai Tho Oka Roju - Shivaratri Special Pooja and Abhishekams for Lord Siva and Sai Baba', '1489009496_8.jpg', 9, '2017-03-08'),
(110, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_1.jpg', 10, '2017-03-08'),
(111, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_2.jpg', 10, '2017-03-08'),
(112, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_3.jpg', 10, '2017-03-08'),
(113, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_4.jpg', 10, '2017-03-08'),
(114, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_5.jpg', 10, '2017-03-08'),
(115, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_6.jpg', 10, '2017-03-08'),
(116, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_7.jpg', 10, '2017-03-08'),
(117, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_8.jpg', 10, '2017-03-08'),
(118, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_9.jpg', 10, '2017-03-08'),
(119, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009666_10.jpg', 10, '2017-03-08'),
(120, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_11.jpg', 10, '2017-03-08'),
(121, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_12.jpg', 10, '2017-03-08'),
(122, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_13.jpg', 10, '2017-03-08'),
(123, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_14.jpg', 10, '2017-03-08'),
(124, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_15.jpg', 10, '2017-03-08'),
(125, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_16.jpg', 10, '2017-03-08'),
(126, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_17.jpg', 10, '2017-03-08'),
(127, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_18.jpg', 10, '2017-03-08'),
(128, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_19.jpg', 10, '2017-03-08'),
(129, 'Sai Tho Oka Roju - Sai Satya Vratas and Baba Special Alankarana', '1489009667_20.jpg', 10, '2017-03-08'),
(130, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010400_1.jpg', 11, '2017-03-08'),
(131, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010400_2.jpg', 11, '2017-03-08'),
(132, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010400_3.jpg', 11, '2017-03-08'),
(133, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_4.jpg', 11, '2017-03-08'),
(134, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_5.jpg', 11, '2017-03-08'),
(135, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_6.jpg', 11, '2017-03-08'),
(136, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_7.jpg', 11, '2017-03-08'),
(137, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_8.jpg', 11, '2017-03-08'),
(138, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_9.jpg', 11, '2017-03-08'),
(139, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_10.jpg', 11, '2017-03-08'),
(140, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_11.jpg', 11, '2017-03-08'),
(141, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_12.jpg', 11, '2017-03-08'),
(142, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_13.jpg', 11, '2017-03-08'),
(143, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_14.jpg', 11, '2017-03-08'),
(144, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_15.jpg', 11, '2017-03-08'),
(145, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_16.jpg', 11, '2017-03-08'),
(146, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_17.jpg', 11, '2017-03-08'),
(147, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_18.jpg', 11, '2017-03-08'),
(148, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_19.jpg', 11, '2017-03-08'),
(149, 'Sai Tho Oka Roju - Guru Pournami Special Poojas', '1489010403_20.jpg', 11, '2017-03-08'),
(150, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_1.jpg', 12, '2017-03-08'),
(151, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_2.jpg', 12, '2017-03-08'),
(152, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_5.jpg', 12, '2017-03-08'),
(153, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_11.jpg', 12, '2017-03-08'),
(154, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_14.jpg', 12, '2017-03-08'),
(155, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_16.jpg', 12, '2017-03-08'),
(156, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_17.jpg', 12, '2017-03-08'),
(157, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_18.jpg', 12, '2017-03-08'),
(158, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_19.jpg', 12, '2017-03-08'),
(159, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_20.jpg', 12, '2017-03-08'),
(160, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_21.jpg', 12, '2017-03-08'),
(161, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_23.jpg', 12, '2017-03-08'),
(162, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_24.jpg', 12, '2017-03-08'),
(163, 'Sai Tho Oka Roju -Special Abhishekam For Baba', '1489010675_25.jpg', 12, '2017-03-08'),
(164, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010759_1.jpg', 13, '2017-03-08'),
(165, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010759_2.jpg', 13, '2017-03-08'),
(166, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010759_5.jpg', 13, '2017-03-08'),
(167, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010759_11.jpg', 13, '2017-03-08'),
(168, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010759_14.jpg', 13, '2017-03-08'),
(169, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010759_16.jpg', 13, '2017-03-08'),
(170, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_17.jpg', 13, '2017-03-08'),
(171, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_18.jpg', 13, '2017-03-08'),
(172, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_19.jpg', 13, '2017-03-08'),
(173, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_20.jpg', 13, '2017-03-08'),
(174, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_21.jpg', 13, '2017-03-08'),
(175, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_23.jpg', 13, '2017-03-08'),
(176, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_24.jpg', 13, '2017-03-08'),
(177, 'Sai Tho Oka Roju - Special Abhishekam for Baba', '1489010761_25.jpg', 13, '2017-03-08'),
(178, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011576_1.jpg', 14, '2017-03-08'),
(179, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011576_2.jpg', 14, '2017-03-08'),
(180, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011576_3.jpg', 14, '2017-03-08'),
(181, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011576_4.jpg', 14, '2017-03-08'),
(182, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011576_5.jpg', 14, '2017-03-08'),
(183, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_6.jpg', 14, '2017-03-08'),
(184, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_7.jpg', 14, '2017-03-08'),
(185, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_8.jpg', 14, '2017-03-08'),
(186, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_9.jpg', 14, '2017-03-08'),
(187, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_10.jpg', 14, '2017-03-08'),
(188, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_11.jpg', 14, '2017-03-08'),
(189, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_12.jpg', 14, '2017-03-08'),
(190, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_13.jpg', 14, '2017-03-08'),
(191, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_14.jpg', 14, '2017-03-08'),
(192, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_15.jpg', 14, '2017-03-08'),
(193, 'Sai Tho Oka Roju - Vishnu Sahasranama Parayana', '1489011577_16.jpg', 14, '2017-03-08'),
(194, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011800_1.jpg', 15, '2017-03-08'),
(195, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011800_3.jpg', 15, '2017-03-08'),
(196, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_6.jpg', 15, '2017-03-08'),
(197, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_7.jpg', 15, '2017-03-08'),
(198, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_11.jpg', 15, '2017-03-08'),
(199, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_13.jpg', 15, '2017-03-08'),
(200, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_17.jpg', 15, '2017-03-08'),
(201, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_18.jpg', 15, '2017-03-08'),
(202, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_20.jpg', 15, '2017-03-08'),
(203, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_21.jpg', 15, '2017-03-08'),
(204, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_22.jpg', 15, '2017-03-08'),
(205, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_23.jpg', 15, '2017-03-08'),
(206, 'Sai Tho Oka Roju - Lakshadeepa Puja', '1489011802_24.jpg', 15, '2017-03-08'),
(207, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011987_1.jpg', 16, '2017-03-08'),
(208, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011987_2.jpg', 16, '2017-03-08'),
(209, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011987_3.jpg', 16, '2017-03-08'),
(210, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011987_4.jpg', 16, '2017-03-08'),
(211, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011987_5.jpg', 16, '2017-03-08'),
(212, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_6.jpg', 16, '2017-03-08'),
(213, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_7.jpg', 16, '2017-03-08'),
(214, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_8.jpg', 16, '2017-03-08'),
(215, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_9.jpg', 16, '2017-03-08'),
(216, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_10.jpg', 16, '2017-03-08'),
(217, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_11.jpg', 16, '2017-03-08'),
(218, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_12.jpg', 16, '2017-03-08'),
(219, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_13.jpg', 16, '2017-03-08'),
(220, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_14.jpg', 16, '2017-03-08'),
(221, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_15.jpg', 16, '2017-03-08'),
(222, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening', '1489011989_17.jpg', 16, '2017-03-08'),
(223, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012097_1.jpg', 17, '2017-03-08'),
(224, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012097_2.jpg', 17, '2017-03-08'),
(225, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_3.jpg', 17, '2017-03-08'),
(226, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_4.jpg', 17, '2017-03-08'),
(227, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_5.jpg', 17, '2017-03-08'),
(228, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_6.jpg', 17, '2017-03-08'),
(229, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_7.jpg', 17, '2017-03-08'),
(230, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_8.jpg', 17, '2017-03-08'),
(231, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_9.jpg', 17, '2017-03-08'),
(232, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_10.jpg', 17, '2017-03-08'),
(233, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_11.jpg', 17, '2017-03-08'),
(234, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_12.jpg', 17, '2017-03-08'),
(235, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_13.jpg', 17, '2017-03-08'),
(236, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_14.jpg', 17, '2017-03-08'),
(237, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_15.jpg', 17, '2017-03-08'),
(238, 'Sai Tho Oka Roju - Sai Satya Vratas and Calender Opening Ceremony', '1489012098_17.jpg', 17, '2017-03-08'),
(239, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012372_1.jpg', 18, '2017-03-08'),
(240, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012372_2.jpg', 18, '2017-03-08'),
(241, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012372_3.jpg', 18, '2017-03-08'),
(242, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_4.jpg', 18, '2017-03-08'),
(243, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_5.jpg', 18, '2017-03-08'),
(244, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_6.jpg', 18, '2017-03-08'),
(245, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_7.jpg', 18, '2017-03-08'),
(246, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_8.jpg', 18, '2017-03-08'),
(247, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_9.jpg', 18, '2017-03-08'),
(248, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_10.jpg', 18, '2017-03-08'),
(249, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_11.jpg', 18, '2017-03-08'),
(250, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_12.jpg', 18, '2017-03-08'),
(251, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_13.jpg', 18, '2017-03-08'),
(252, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_14.jpg', 18, '2017-03-08'),
(253, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_15.jpg', 18, '2017-03-08'),
(254, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_16.jpg', 18, '2017-03-08'),
(255, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_17.jpg', 18, '2017-03-08'),
(256, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_18.jpg', 18, '2017-03-08'),
(257, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_19.jpg', 18, '2017-03-08'),
(258, 'Sri Shiridi Sai Bhahugala Laksha Deepa Maha Sandhya Harathi', '1489012374_20.jpg', 18, '2017-03-08'),
(259, 'Sai Dharma Jyothi Yatra', '1489013495_1.jpg', 19, '2017-03-08'),
(260, 'Sai Dharma Jyothi Yatra', '1489013495_2.jpg', 19, '2017-03-08'),
(261, 'Sai Dharma Jyothi Yatra', '1489013497_3.jpg', 19, '2017-03-08'),
(262, 'Sai Dharma Jyothi Yatra', '1489013497_5.jpg', 19, '2017-03-08'),
(263, 'Sai Dharma Jyothi Yatra', '1489013497_6.jpg', 19, '2017-03-08'),
(264, 'Sai Dharma Jyothi Yatra', '1489013497_7.jpg', 19, '2017-03-08'),
(265, 'Sai Dharma Jyothi Yatra', '1489013497_8.jpg', 19, '2017-03-08'),
(266, 'Sai Dharma Jyothi Yatra', '1489013497_9.jpg', 19, '2017-03-08'),
(267, 'Sai Dharma Jyothi Yatra', '1489013497_10.jpg', 19, '2017-03-08'),
(268, 'Sai Dharma Jyothi Yatra', '1489013497_11.jpg', 19, '2017-03-08'),
(269, 'Sai Dharma Jyothi Yatra', '1489013497_12.jpg', 19, '2017-03-08'),
(270, 'Sai Dharma Jyothi Yatra', '1489013497_13.jpg', 19, '2017-03-08'),
(271, 'Sai Dharma Jyothi Yatra', '1489013497_14.jpg', 19, '2017-03-08'),
(272, 'Sai Dharma Jyothi Yatra', '1489013497_15.jpg', 19, '2017-03-08'),
(273, 'Sai Dharma Jyothi Yatra', '1489013497_16.jpg', 19, '2017-03-08'),
(274, 'Sai Dharma Jyothi Yatra', '1489013497_17.jpg', 19, '2017-03-08'),
(275, 'Sai Dharma Jyothi Yatra', '1489013497_18.jpg', 19, '2017-03-08'),
(276, 'Sai Dharma Jyothi Yatra', '1489013497_19.jpg', 19, '2017-03-08'),
(277, 'Sai Dharma Jyothi Yatra', '1489013497_20.jpg', 19, '2017-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_desc` varchar(255) DEFAULT NULL,
  `product_slug` varchar(255) NOT NULL,
  `status` varchar(400) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `product_desc`, `product_slug`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Strome ZX', ' testst                ', 'strome_zx_RE-test', 'Active', '2019-03-20 23:44:28', '0000-00-00 00:00:00'),
(5, 'Strome ZX0', '                  strome-zxstrome-zxstrome-zxstrome-zx', 'strome-zx', 'Active', '2019-03-21 00:18:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_feature_images`
--

CREATE TABLE `product_feature_images` (
  `feature_id` int(10) NOT NULL,
  `feature_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(10) NOT NULL,
  `product_id` bigint(10) NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions_and_answers`
--

CREATE TABLE `questions_and_answers` (
  `id` bigint(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_and_answers`
--

INSERT INTO `questions_and_answers` (`id`, `question`, `answer`, `status`, `date`) VALUES
(1, 'Question 001', 'First Question and Answer', 'Active', '2019-03-27 00:00:00'),
(3, 'Question 002', 'Answer 002', 'Active', '2019-03-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(500) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(233) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `first_name`, `last_name`, `username`, `password`, `user_type`, `status`) VALUES
(2, 'admin first', 'admin last', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `vedios`
--

CREATE TABLE `vedios` (
  `id` int(11) NOT NULL,
  `vedio_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `vedio` varchar(255) CHARACTER SET utf8 NOT NULL,
  `full_vedio_url` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='important links';

--
-- Dumping data for table `vedios`
--

INSERT INTO `vedios` (`id`, `vedio_name`, `vedio`, `full_vedio_url`, `is_active`, `created`) VALUES
(22, 'tunwal electrika 48', 'qfyffRGJOAo', 'https://www.youtube.com/watch?v=qfyffRGJOAo', 1, NULL),
(23, 'Mid Sport 63 ???? E-bike With Comfort | 75 km/charge', 'CS1qEaRmSLE', 'https://www.youtube.com/watch?v=CS1qEaRmSLE', 1, '2019-03-28 01:17:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_images`
--
ALTER TABLE `photo_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_feature_images`
--
ALTER TABLE `product_feature_images`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_and_answers`
--
ALTER TABLE `questions_and_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `vedios`
--
ALTER TABLE `vedios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `photo_images`
--
ALTER TABLE `photo_images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_feature_images`
--
ALTER TABLE `product_feature_images`
  MODIFY `feature_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions_and_answers`
--
ALTER TABLE `questions_and_answers`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vedios`
--
ALTER TABLE `vedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
