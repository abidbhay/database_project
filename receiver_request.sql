-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:55 PM
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
-- Database: `receiver_request`
--

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
(123456789, '', 'wertyuiolp', '', 'sdfghjkl;', 34567, 34567, 'asdfghjkl;', 'sdfghjkl');

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
('23456', '3456789099', 'sdfgh', 'sdfgh@gfmail.com', 'water', 100000, 0, 'ghagshhjads', 'kjaskjaskj');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
