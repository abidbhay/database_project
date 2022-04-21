-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 04:45 PM
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
  `status` tinyint(1) NOT NULL,
  `acc_num` bigint(20) NOT NULL,
  `donor_name` varchar(20) NOT NULL,
  `receiver_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `donor_id`, `receiver_id`, `donation_type`, `moneyflag`, `productflag`, `amount`, `payment_method`, `trx_id`, `ptype`, `quantity`, `address`, `status`, `acc_num`, `donor_name`, `receiver_name`) VALUES
(73153, 86459289, 5200346, '', 1, 0, 2000, '', 1234234, '', 0, '', 0, 23423423, 'abid', 'madrasa_fund'),
(7357, 86459289, 3565515112256123, '', 1, 0, 20000, '', 312553454, '', 0, '', 0, 431513451, 'abid', 'jaago_oldpeople_fund'),
(58636, 86459289, 9223372036854775807, '', 1, 0, 42000, '', 62546254, '', 0, '', 0, 4352145, 'abid', 'project_trishna_fund'),
(4417, 7220195117738020409, 9223372036854775807, '', 1, 0, 50000, '', 14323434, '', 0, '', 0, 23443441, 'anonto', 'project_trishna_fund'),
(1528, 7220195117738020409, 265100254128, '', 1, 0, 60000, '', 972111, '', 0, '', 0, 75483567, 'anonto', 'grameen_shishu'),
(97387, 7220195117738020409, 81085422, '', 1, 0, 80000, '', 43254354, '', 0, '', 0, 245345345, 'anonto', 'tribal_safety_fund');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sender_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sender_username` varchar(20) NOT NULL,
  `txt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sender_id`, `to_id`, `time`, `sender_username`, `txt`) VALUES
(1, 86459289, '2022-04-21 05:18:54', 'admin', 'Hey. Check your inbox'),
(1, 86459289, '2022-04-21 05:33:36', 'admin', 'hi..... i am admin'),
(1, 5200346, '2022-04-21 06:20:16', 'admin', 'Hey, Do you want to receive donation tomorrow?'),
(1, 86459289, '2022-04-21 14:02:40', 'admin', 'Saif');

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE `org` (
  `org_userId` int(10) NOT NULL,
  `org_licence` varchar(50) NOT NULL,
  `org_name` varchar(35) NOT NULL,
  `org_email` varchar(100) NOT NULL,
  `org_product` varchar(100) NOT NULL,
  `org_product_quantity` int(255) NOT NULL,
  `org_amount` int(255) NOT NULL,
  `org_address` varchar(150) NOT NULL,
  `org_whyrequest` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `org`
--

INSERT INTO `org` (`org_userId`, `org_licence`, `org_name`, `org_email`, `org_product`, `org_product_quantity`, `org_amount`, `org_address`, `org_whyrequest`) VALUES
(2345, '987654', '', 'dfgh@gmail.com', '', 0, 0, 'aasdfghj dfghj', '0'),
(5678, '123456789', 'erfgb', 'yyyh@gmail.com', '', 0, 0, 'aswedfrtgyh', '0'),
(56785, '456987654', 'sdfghj', 'dtttt@gmail.com', '', 0, 0, 'asdfg', '0'),
(56744, '9876543', 'jhgfds', 'zzzzh@gmail.com', '', 0, 0, 'asdfghj', 'bgfde'),
(0, 'asdf', 'sedrftgyhujik', 'sdfgh@gmail.com', '', 0, 34567, 'edrftgy', 'dfghjk'),
(123456789, '', 'wertyuiolp', '', 'sdfghjkl;', 34567, 34567, 'asdfghjkl;', 'sdfghjkl'),
(123213214, '421434', 'BRAC', 'ad@gmail.com', 'Sweater', 33, 3324, 'drgfgdfesgfsdh', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `personal_userId` varchar(10) NOT NULL,
  `personal_nid` varchar(10) NOT NULL,
  `personal_name` varchar(35) NOT NULL,
  `personal_email` varchar(100) NOT NULL,
  `personal_product` varchar(100) NOT NULL,
  `personal_product_quantity` int(255) NOT NULL,
  `personal_amount` int(255) NOT NULL,
  `personal_address` varchar(150) NOT NULL,
  `personal_whyrequest` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`personal_userId`, `personal_nid`, `personal_name`, `personal_email`, `personal_product`, `personal_product_quantity`, `personal_amount`, `personal_address`, `personal_whyrequest`) VALUES
('1234', '1234567890', 'Saif', 'saifmokarrom24@gmail.com', '', 0, 0, 'Mohakhali', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('34567', '3456789', 'sdfgh', 'fghjk@gmail.com', '', 0, 0, 'asdfg', 'asdertyuio'),
('', '', '', '', '', 0, 0, '', ''),
('', '', '', '', '', 0, 0, '', ''),
('15626', '45789009', 'hjhjs', 'haha@gfmail.com', '', 0, 0, 'shjkskj', 'hqqsdhfsadkl,.'),
('12234567', '234567890', 'qwedfgh', 'aw@gfmail.com', '', 0, 34567, 'sdfgvhbnm', 'sdfghjkl;'),
('456789', '4567890-', '', 'edfg@gfmail.com', 'shirt', 0, 0, 'dfghjk', 'fghjkl;'),
('656776', '', 'dfxfdgf', 'dfdgv@gfmail.com', 'water', 0, 0, 'dsfgh', 'zxcvfgbhnjmk'),
('6567766', '34567890-', 'sdfg', 'dfgkjs@gfmail.com', 'sdfg', 0, 0, 'sdfg', 'asdfghjk'),
('156263456', '3456789', 'aszxcv bn', 'asdrftgyhuj@gfmail.com', 'pain', 0, 334556, 'errftrtr', 'sadsfghjhyggf'),
('23456', '3456789099', 'sdfgh', 'sdfgh@gfmail.com', 'water', 100000, 0, 'ghagshhjads', 'kjaskjaskj'),
('123', '3424124', 'Saif', 'ad@gmail.com', 'Shirt', 3, 2000, 'gargresre', '');

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
(1, 1, 'admin', 'admin', '2022-04-20 16:54:33', 'admin'),
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
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD KEY `time` (`time`);

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
