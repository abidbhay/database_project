-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 07:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` bigint(20) NOT NULL,
  `donor_id` bigint(20) NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `donation_type` varchar(20) NOT NULL,
  `moneyflag` tinyint(1) NOT NULL,
  `productflag` tinyint(1) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `trx_id` bigint(20) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `donor_id`, `receiver_id`, `donation_type`, `moneyflag`, `productflag`, `amount`, `payment_method`, `trx_id`, `ptype`, `quantity`, `address`, `status`) VALUES
(0, 7220195117738020409, 495805702, 'money', 0, 0, 0, '', 0, '', 0, '', 0),
(0, 7220195117738020409, 81085422, 'product', 0, 0, 0, '', 0, '', 0, '', 0),
(0, 86459289, 56196387045807, 'money', 0, 0, 0, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `utype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`, `utype`) VALUES
(5, 56196387045807, 'tanjim', '1234', '2022-04-14 16:36:55', 'receiver'),
(8, 85814585379, 'saif_', '1234', '2022-04-15 11:45:49', 'donor'),
(9, 5200346, 'madrasa_fund', '1234', '2022-04-15 12:33:14', 'receiver'),
(10, 3565515112256123, 'jaago_oldpeople_fund', '1234', '2022-04-15 12:33:40', 'receiver'),
(11, 9223372036854775807, 'project_trishna_fund', '1234', '2022-04-15 12:33:57', 'receiver'),
(12, 265100254128, 'grameen_shishu', '1234', '2022-04-15 12:34:06', 'receiver'),
(13, 81085422, 'tribal_safety_fund', '1234', '2022-04-15 12:34:31', 'receiver'),
(15, 86459289, 'abid', '1234', '2022-04-15 12:36:16', 'donor'),
(16, 242512473501494022, 'hasib', '1234', '2022-04-15 13:04:33', 'receiver'),
(17, 495805702, 'jago_fresh_water', '1234', '2022-04-15 14:03:23', 'receiver'),
(18, 7220195117738020409, 'anonto', '1234', '2022-04-15 14:03:30', 'donor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
