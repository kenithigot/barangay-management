-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2025 at 08:48 AM
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
-- Database: `labuay_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_staff_account`
--

CREATE TABLE `admin_staff_account` (
  `id` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contactNum` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(255) NOT NULL,
  `official` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_staff_account`
--

INSERT INTO `admin_staff_account` (`id`, `firstName`, `lastName`, `username`, `contactNum`, `address`, `email_address`, `password`, `user_role`, `official`, `profile_picture`, `timestamp`) VALUES
(7, 'administrator', 'administrator', 'administrator', '0000000', 'N/A', 'administrator@gmail.com', '$2y$10$L0rj7TbtFMqMrXqX98i2JewqMu9YhCNKiWSbaWKfaw0OxFKjDzHae', 1, '', 'profile_67fca88ceb77e9.91800854.jpg', '2025-03-17 09:54:18'),
(18, 'John', 'Neri', 'johnneri', '00000000', 'P-3, Labuay, Maigo, Lanao del Norte', 'johnneri@gmail.com', '$2y$10$mBQFl2SpE3O0nIg4upJaA.w.yYUAwz4hHoEAVbznEQyAOHDgsuvqS', 3, '0', 'profile_67fcad21347b52.34336190.jpg', '2025-03-17 14:14:00'),
(19, 'tessie', 'cabug', 'tessie', '1111111', 'labuay,maigo,lanao del norte', 'tessie@gmail.com', '$2y$10$vfbFa0hZQXy3JeZ4ZlF.MuA/vZcyHS50qRoJBag9QD7X.N7KCpv8W', 2, '', '', '2025-03-17 14:17:24'),
(20, 'marivic', 'calunod', 'marivic', '22222222', 'labuay,maigo,lanao del norte', 'marivic@gmail.com', '$2y$10$KEstQPyjf6yu702IlHPuAu66h3ZalQ1Jy0oG1CZumWtNmNle0QSbu', 4, '', 'profile_67fcaf8364ece0.97028969.jpg', '2025-03-17 14:20:12'),
(21, 'kenith', 'igot', 'kenithigot', '09167767623', 'labuay,maigo,lanao del norte', 'kennithigot@gmail.com', '$2y$10$1xXbzGEUuvluqXFfIoa6E.yadsBXK0yXFlqwyhCQ9qHsIcRu4hncO', 3, '1', 'profile_67fcab5f91cbd5.08465253.jpg', '2025-04-09 13:53:31'),
(22, 'kurt martin', 'igot', 'kurtmartin', '09167767623', 'labuay,maigo,lanao del norte', 'kurtmartin@gmail.com', '$2y$10$tLgVJr4IjqVuqNrLLeu7le8EyxYD.UjDgoxvRO2tPfzeSs5FCnZAW', 3, '2', '', '2025-04-09 13:54:08'),
(23, 'kimberly ', 'igot', 'kimberly', '09167767623', 'labuay,maigo,lanao del norte', 'kimberly@gmail.com', '$2y$10$oKyFzZbc4sqPjZ3NKVjqg.qhf7dAJZdglXXVDQ/w0poqfKpnkCftS', 3, '3', 'profile_67fcaa2945ca02.38572670.jpg', '2025-04-09 13:57:22'),
(24, 'jovy ', 'igot', 'jovyigot', '09167767623', 'labuay,maigo,lanao del norte', 'jovyigot@gmail.com', '$2y$10$6NcxTY5z1arAWgyPLcPp8e8JYo4hy2PPLHaE4lqcTfPvouHcyUntq', 3, '4', '', '2025-04-09 14:01:22'),
(25, 'jerry', 'selim', 'jerryselim', '09167767623', 'labuay,maigo,lanao del norte', 'jerryselim@gmail.com', '$2y$10$8zeF/4STKKxDMLcq2WhSnu6Qixe8PHoYHArRJW6uVfHp2l1bp1SQe', 3, '5', '', '2025-04-09 14:02:04'),
(26, 'princess jerri', 'selim', 'princessjerri', '09167767623', 'labuay,maigo,lanao del norte', 'princessjerri@gmail.com', '$2y$10$.gl2LxX.Y/PqOD0D2WDHM./D/LEEL7VGVPdmC2go5XHXXQsuwycLC', 3, '6', '', '2025-04-09 14:04:40'),
(27, 'joel', 'sinco', 'joelsinco', '09167767623', 'labuay,maigo,lanao del norte', 'joelsinco@gmail.com', '$2y$10$jWQJvec4hEsjg9KsmRQPWuibUo54Q1NMiHqV1Ng1jjJ7i6Kiya8aW', 3, '7', 'profile_67fcaf4fc4c0a9.38333003.jpg', '2025-04-09 14:11:20'),
(28, 'gina mae', 'rama', 'ginamaerama', '09167767623', 'labuay,maigo,lanao del norte', 'ginamaerama@gmail.com', '$2y$10$6dDcrz97FQPPq2UGMC77We6YWBxliS2Kdke./RHuiXM8Tpk5XVtJ2', 5, '', '', '2025-04-09 14:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin_staff_role`
--

CREATE TABLE `admin_staff_role` (
  `id` int(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_staff_role`
--

INSERT INTO `admin_staff_role` (`id`, `user_role`, `user_type`) VALUES
(1, '1', 'Admin'),
(2, '2', 'Staff'),
(3, '3', 'Barangay Official'),
(5, '4', 'Secretary'),
(6, '5', 'Treasurer');

-- --------------------------------------------------------

--
-- Table structure for table `blotter_record`
--

CREATE TABLE `blotter_record` (
  `id` int(255) NOT NULL,
  `blotter_caseNumber` varchar(255) NOT NULL,
  `complainant_name` varchar(255) NOT NULL,
  `respondent_name` varchar(255) NOT NULL,
  `date_of_incident` varchar(255) NOT NULL,
  `location_of_incident` varchar(255) NOT NULL,
  `date_filing` varchar(255) NOT NULL,
  `blotter_status` varchar(255) NOT NULL,
  `blotter_type` varchar(255) NOT NULL,
  `incident_details` varchar(525) NOT NULL,
  `caseTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blotter_record`
--

INSERT INTO `blotter_record` (`id`, `blotter_caseNumber`, `complainant_name`, `respondent_name`, `date_of_incident`, `location_of_incident`, `date_filing`, `blotter_status`, `blotter_type`, `incident_details`, `caseTime`) VALUES
(16, '07698', 'kenith igot', 'gina mae rama', '03-18-2025 02:19 PM', 'Fish port', '03-18-2025 02:19 PM', 'Dismissed', '2', 'poweeer', '03-18-2025 02:26:36 PM'),
(17, '41895', 'kenith igot', 'gina mae rama', '03-18-2025 02:41 AM', 'Fish port', '03-18-2025 02:41 AM', 'Resolved', '2', '132123', '03-18-2025 02:42 PM'),
(18, '90617', 'asd', 'asd', '03-18-2025 03:40 PM', 'asd', '03-18-2025 03:40 AM', 'Resolved', '3', '123123', '03-19-2025 08:45 AM'),
(19, '61839', 'kenith igot', 'gina mae rama', '03-18-2025 04:21 AM', 'Fish port', '03-18-2025 07:21 PM', 'Dismissed', '4', '123123', '03-19-2025 08:52 AM'),
(20, '87604', 'asdasd', 'gina mae rama', '03-18-2025 04:37 PM', '123', '03-21-2025 04:32 PM', 'Dismissed', '5', '123123', '03-19-2025 08:52 AM'),
(21, '76203', 'asd', 'as', '03-19-2025 08:49 AM', 'Fish port', '03-19-2025 08:49 AM', 'Dismissed', '2', 'asdas', '03-19-2025 08:52 AM');

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `id` int(255) NOT NULL,
  `documentType` varchar(255) NOT NULL,
  `documentClassification` varchar(255) NOT NULL,
  `documentPrice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `documentType`, `documentClassification`, `documentPrice`) VALUES
(1, '1', 'Barangay Certificate', '2000'),
(2, '2', 'Certificate of Indigency', '1001'),
(3, '3', 'Barangay Clearance', '230');

-- --------------------------------------------------------

--
-- Table structure for table `incident_types`
--

CREATE TABLE `incident_types` (
  `id` int(255) NOT NULL,
  `blotter_type` varchar(255) NOT NULL,
  `incident_classification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incident_types`
--

INSERT INTO `incident_types` (`id`, `blotter_type`, `incident_classification`) VALUES
(1, '1', 'Criminal Incidents'),
(2, '2', 'Civil Disputes'),
(3, '3', 'Public Safety and Order'),
(4, '4', 'Domestic Issues'),
(5, '5', ' Community Concerns'),
(6, '6', 'Miscellaneous Reports');

-- --------------------------------------------------------

--
-- Table structure for table `official_ranking`
--

CREATE TABLE `official_ranking` (
  `id` int(255) NOT NULL,
  `official` varchar(255) NOT NULL,
  `official_classification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `official_ranking`
--

INSERT INTO `official_ranking` (`id`, `official`, `official_classification`) VALUES
(1, '0', 'Barangay Captain'),
(2, '1', 'Barangay Kagawad 1'),
(3, '2', 'Barangay Kagawad 2'),
(4, '3', 'Barangay Kagawad 3'),
(5, '4', 'Barangay Kagawad 4'),
(6, '5', 'Barangay Kagawad 5'),
(7, '6', 'Barangay Kagawad 6'),
(8, '7', 'Barangay Kagawad 7');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(255) NOT NULL,
  `gcashPicCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purok`
--

CREATE TABLE `purok` (
  `id` int(255) NOT NULL,
  `prk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purok`
--

INSERT INTO `purok` (`id`, `prk`) VALUES
(1, 'Purok 1'),
(2, 'Purok 2'),
(3, 'Purok 3'),
(4, 'Purok 4'),
(5, 'Purok 5');

-- --------------------------------------------------------

--
-- Table structure for table `resident_request_docs`
--

CREATE TABLE `resident_request_docs` (
  `id` int(255) NOT NULL,
  `documentType` varchar(255) NOT NULL,
  `docsPrice` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleInitial` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civilStatus` varchar(255) NOT NULL,
  `contactNum` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `referenceNum` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `uploadReceipt` varchar(255) NOT NULL,
  `requestStatus` varchar(255) NOT NULL,
  `residencyYear` varchar(255) NOT NULL,
  `transactionCode` varchar(255) NOT NULL,
  `docs_timestamp` varchar(255) NOT NULL,
  `printrequest_docs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resident_request_docs`
--

INSERT INTO `resident_request_docs` (`id`, `documentType`, `docsPrice`, `firstName`, `middleInitial`, `lastName`, `age`, `gender`, `civilStatus`, `contactNum`, `address`, `purpose`, `referenceNum`, `paymentMethod`, `uploadReceipt`, `requestStatus`, `residencyYear`, `transactionCode`, `docs_timestamp`, `printrequest_docs`) VALUES
(1, '1', '', 'kenith', 'S.', 'IGOT', '24', 'Male', 'Single', '0916776762', 'p-3.Labuay', 'For TES', '12312312', 'GCASH Paym', 'receipt_17', 'Done', '25', '$2y$10$twp', '17-March-2', '19-March-2025 9:45:09 AM'),
(2, '3', '', 'kenith', 's', 'igot', '24', 'Male', 'Single', '09167767623', 'p-3.Labuay, Maigo,Lanao del Norte', 'test', '', 'On-Cash Payment', 'receipt_1742174555.jpg', 'Done', '25', '$2y$10$gK0TEPrr2u.TOOoxsUAS9eEuuZXTslikMo0iX/bKuSh/NYb72YjWW', '17-March-2025', '17-March-2025 10:43:34 AM'),
(3, '1', '', 'kenith', 'S.', 'igot', '24', 'Male', 'Single', '67867', 'p-3.Labuay, Maigo,Lanao del Norte', '123123', '', 'On-Cash Payment', 'receipt_1742177344.jpg', 'Done', '25', '$2y$10$mS9tRXEBj1Q17awf86D4luXVwNrEqglWkkwstMtfInm2.aou9HRfq', '17-March-2025', '17-March-2025 10:43:39 AM'),
(4, '2', '', '1231', '123', '1231', '23', 'Male', 'Married', '124124', 'p-3.Labuay, Maigo,Lanao del Norte', 'ASEDASD', '', 'On-Cash Payment', 'receipt_1742177865.jpg', 'Approve', '25', '$2y$10$6B3YsyArL7hXKvAIvXHKaOSmtZf0gj/15Fj04PuJT.CBsKcO2Nm9S', '17-March-2025', '17-March-2026 10:17:55 AM'),
(5, '3', '', 'kenith', 'S.', 'igot', '24', 'Male', 'Single', '213123', 'p-3.Labuay, Maigo,Lanao del Norte', 'asda', '', 'On-Cash Payment', 'receipt_1742180864.jpg', 'Approve', '25', '$2y$10$/4NdT0WYJEkneLyxbTbn8.HaSK2kjPkhOifvPdrCvaDFTkdriuoGS', '17-March-2025', '17-March-2025 11:09:30 AM'),
(6, '1', '', 'kenith', 'S.', 'igot', '28', 'Male', 'Single', '0932434', 'p-3.Labuay, Maigo,Lanao del Norte', 'asdas', '', 'On-Cash Payment', 'receipt_1742352922.jpg', 'Approve', '25', '$2y$10$27E4CPMbnwt767SNulPWrOFM1LfaVN3mPQcVEidkNnSGxGrYsbgOy', '19-March-2025', '19-March-2025 10:55:59 AM'),
(7, '1', '', 'kenith', 'S.', 'igot', '234', 'Male', 'Married', '123123', '123', '123', '', 'On-Cash Payment', 'receipt_1742362425.jpg', 'Approve', '25', '$2y$10$oySCaYv4qFv6f..sv5DYaO6N9j3hhx1IGzXpEZ5TJH6NyGZAF3c0O', '19-March-2025', '19-March-2025 1:34:02 PM'),
(8, '1', '', 'administrator', '123', '123', '123', 'Male', 'Single', '123', 'p-3.Labuay, Maigo,Lanao del Norte', '123123', '', 'On-Cash Payment', 'receipt_1742363909.jpg', 'Approve', '25', '$2y$10$8pjdKPnNCwe9AQmDRCSC2urGSoofSjbeeb1n2xPPtLl4VBCkrqdza', '19-March-2025', '19-March-2025 1:58:55 PM'),
(9, '1', '300', 'administrator', '2', 'asdas', '23', 'Male', 'Single', '232', 'p-3.Labuay, Maigo,Lanao del Norte', '2323', '', 'On-Cash Payment', 'receipt_1742364866.jpg', 'Approve', '25', '$2y$10$obp89vCNZORVKTr9WbmSjuBGI2ol3iN0bBYw1gzxeElf2nmeEoJR2', '19-March-2025', '19-April-2025 2:14:57 PM'),
(10, '1', '200', 'kenith', 'S.', 'igot', '23', 'Male', 'Single', '23', 'p-3.Labuay, Maigo,Lanao del Norte', '2323', '', 'On-Cash Payment', 'receipt_1742366201.jpg', 'Approve', '25', '$2y$10$.KcKiD4Ci4WouvI7oPZDlen/x9UChuXi/9oD4wO4Um0yPQG1r/ENG', '19-March-2025', '19-March-2027 2:37:01 PM'),
(11, '1', '2000', '23', '324', '324', '234', 'Female', 'Widowed', '123', 'p-3.Labuay, Maigo,Lanao del Norte', '123', '', 'On-Cash Payment', 'receipt_1742521540.jpg', 'Approve', '25', '$2y$10$tplURwEijfPjgXoBQ01hR.MtckwWilQD0kmJwuN/FNaYumKLmBMQC', '21-March-2025', '21-March-2025 9:45:57 AM'),
(12, '1', '2000', 'asdasd', '123', 'dasdasd', '123', 'Male', 'Widowed', '123', 'p-3.Labuay, Maigo,Lanao del Norte', '123', '', 'On-Cash Payment', 'receipt_1742524766.jpg', 'Approve', '25', '$2y$10$NWR9GKaZbj1PlzBNE3oEuuW3BjW37OgZeSH1d/Cdm9x0LE8dpZfTa', '21-March-2025 03:39 AM', '21-March-2025 10:39:38 AM'),
(13, '1', '2000', '123', '2', 'IGOT', '123', 'Female', 'Widowed', '123', 'p-3.Labuay, Maigo,Lanao del Norte', '1123', '', 'On-Cash Payment', 'receipt_1742524887.jpg', 'Approve', '25', '$2y$10$GalhCy.Lvyx.HRFAJOwjtenk3XeXncdZSwJELhtLsHQV1XubCu.zS', '21-March-2025 10:41 AM', '21-March-2025 11:18:11 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_staff_account`
--
ALTER TABLE `admin_staff_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_staff_role`
--
ALTER TABLE `admin_staff_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter_record`
--
ALTER TABLE `blotter_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incident_types`
--
ALTER TABLE `incident_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official_ranking`
--
ALTER TABLE `official_ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purok`
--
ALTER TABLE `purok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident_request_docs`
--
ALTER TABLE `resident_request_docs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_staff_account`
--
ALTER TABLE `admin_staff_account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `admin_staff_role`
--
ALTER TABLE `admin_staff_role`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blotter_record`
--
ALTER TABLE `blotter_record`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `incident_types`
--
ALTER TABLE `incident_types`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `official_ranking`
--
ALTER TABLE `official_ranking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resident_request_docs`
--
ALTER TABLE `resident_request_docs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
