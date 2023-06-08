-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 11:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `admin_name`, `email`, `password`) VALUES
(1, 'Aymen Ahmed Hazem Abdu', 'aymen_alhamwdy', 'aymnqyl2002@gmail.com', 'xxxxx'),
(3, 'osama', 'osama1234', 'osama@gmail.com', 'haia2020'),
(4, 'mohammed', '', 'mohammed@gmail.com', 'mohammed'),
(5, 'mohammed', '', 'mohammed@gmail.com', 'mohammed');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `ID` int(11) NOT NULL,
  `CurrentMoney` int(11) DEFAULT NULL,
  `RemainingMoney` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`ID`, `CurrentMoney`, `RemainingMoney`) VALUES
(0, 3000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` varchar(255) NOT NULL,
  `answer4` varchar(255) NOT NULL,
  `check_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `check_answer`) VALUES
(34, 'ما هي عاصمة فرنسا؟', 'باريس', 'نيويورك', 'لندن', 'طوكيو', 'باريس'),
(35, 'ما هي عاصمة إسبانيا؟', 'مدريد', 'برلين', 'روما', 'أبوظبي', 'مدريد'),
(36, 'ما هي عاصمة اليابان؟', 'طوكيو', 'بكين', 'كوالالمبور', 'مانيلا', 'طوكيو'),
(37, 'من هو مؤسس شركة أبل (Apple)؟', 'ستيف جوبز', 'بيل غيتس', 'مارك زوكربيرغ', 'لاري بايج', 'ستيف جوبز'),
(38, 'ما هو علم الأحياء؟', 'دراسة الكائنات الحية', 'دراسة الفلك', 'دراسة الأحجار الكريمة', 'دراسة الأعداد', 'دراسة الكائنات الحية'),
(39, 'ما هي عاصمة الصين؟', 'بكين', 'باريس', 'نيويورك', 'لندن', 'بكين'),
(40, 'ما هي اللغة الرسمية في البرازيل؟', 'البرتغالية', 'الإسبانية', 'الإنجليزية', 'الفرنسية', 'البرتغالية'),
(41, 'من هو مبتكر شركة فيسبوك (Facebook)؟', 'مارك زوكربيرغ', 'ستيف جوبز', 'بيل غيتس', 'لاري بايج', 'مارك زوكربيرغ'),
(42, 'ما هي عاصمة روسيا؟', 'موسكو', 'بكين', 'برلين', 'لندن', 'موسكو'),
(43, 'ما هي عاصمة ألمانيا؟', 'برلين', 'باريس', 'نيويورك', 'لندن', 'برلين'),
(44, 'ما هي عاصمة إيطاليا؟', 'روما', 'باريس', 'نيويورك', 'لندن', 'روما'),
(45, 'ما هي عاصمة كندا؟', 'أوتاوا', 'تورونتو', 'مونتريال', 'فانكوفر', 'أوتاوا'),
(46, 'من هو مؤسس شركة مايكروسوفت (Microsoft)؟', 'بيل غيتس', 'ستيف جوبز', 'ماركزوكيربيرغ', 'لاري بايج', 'بيل غيتس'),
(47, 'ما هي العاصمة الأسترالية؟', 'كانبرا', 'سيدني', 'ملبورن', 'بريسبان', 'كانبرا'),
(48, 'ما هو أكبر قارة في العالم؟', 'آسيا', 'أوروبا', 'أفريقيا', 'أمريكا الجنوبية', 'آسيا'),
(49, 'ما هو أطول نهر في العالم؟', 'النيل', 'الأمازون', 'الميسيسيبي', 'اليانغتسي', 'النيل'),
(50, 'ما هو أعلى جبل في العالم؟', 'إفرست', 'كيليمنجارو', 'دنالي', 'أكونكاجوا', 'إفرست');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`) VALUES
(27, 'aymen', 'aymen ahmed hazem abdu', 'aymenqyl303@gmail.com', 'aymen123'),
(30, 'osama_alhamwdy', 'osama abdulqawi hazaa mohammed', 'osama@gmail.com', 'osama123'),
(39, '[osama]', '[osama]', '[osama@gmail.com]', '[1234]'),
(40, 'osama', 'osama', 'osama@gmail.com', '123'),
(41, 'mohammed', 'mohammed', 'mohammed@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
