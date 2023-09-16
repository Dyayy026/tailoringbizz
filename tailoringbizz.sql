-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 03:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailoringbizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `concerns`
--

CREATE TABLE `concerns` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `con_concern` varchar(255) NOT NULL,
  `con_date` date NOT NULL,
  `con_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cust_id` int(50) DEFAULT NULL,
  `cust_fname` varchar(255) NOT NULL,
  `cust_lname` varchar(255) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `cust_cnumber` varchar(255) NOT NULL,
  `cust_password` varchar(255) NOT NULL,
  `cust_desc` varchar(255) NOT NULL,
  `cust_role` varchar(255) NOT NULL DEFAULT 'Customer',
  `cust_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `cust_balance` int(255) NOT NULL,
  `cust_date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_id`, `cust_fname`, `cust_lname`, `cust_address`, `cust_cnumber`, `cust_password`, `cust_desc`, `cust_role`, `cust_status`, `cust_balance`, `cust_date_created`) VALUES
(8, 790502, 'Arjay', 'Andal', 'Sta Cruz', '09076730151', '$2y$10$MyhgY1MLEESA1r0dwmvQWe.l2O3hUM56HrijGefZSOfgbPGr2i9Ai', 'Admin', 'Admin', 'Approved', 0, '2023-09-12'),
(14, 928560, 'Nida', 'Giwi', 'Patimbao', '09104319106', '$2y$10$CcQCPzolAW7rQTkhI2GkQexHgCregnA7N0o7ZcXUcfB3gKB6n6qxq', 'Regular', 'Customer', 'Approved', 0, '2023-09-12'),
(16, 721739, 'Nash', '', 'Sta. Cruz', '09972163401', '$2y$10$12LMQrLgjJSkaV/HkRjCLO0r5UD.MohvWZh1KOLw65TnnxatbtFr2', 'Dra. Cruz', 'Customer', 'Approved', 0, '2023-09-14'),
(17, 653686, 'Arnie', 'Herrera', 'Bubukal', '09254532087', '$2y$10$adXkcFPlJ00mR1kdaM9jq.rtJOhY64NW0fnt.uIdgYxVsa8IP/zGK', 'RTC employee', 'Customer', 'Approved', 0, '2023-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `garments`
--

CREATE TABLE `garments` (
  `id` int(11) NOT NULL,
  `cust_id` int(255) DEFAULT NULL,
  `garment_id` varchar(255) NOT NULL,
  `garment_receivedby` varchar(255) NOT NULL,
  `garment_type` varchar(255) NOT NULL,
  `garment_work_desc` varchar(255) NOT NULL,
  `garment_type_of_serve` varchar(255) NOT NULL,
  `garment_serv_charge` varchar(255) NOT NULL,
  `garment_down` int(255) NOT NULL,
  `garment_bal` int(255) NOT NULL,
  `garment_recieve_date` date NOT NULL DEFAULT current_timestamp(),
  `garment_pickup_date` date NOT NULL,
  `garment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `garments`
--

INSERT INTO `garments` (`id`, `cust_id`, `garment_id`, `garment_receivedby`, `garment_type`, `garment_work_desc`, `garment_type_of_serve`, `garment_serv_charge`, `garment_down`, `garment_bal`, `garment_recieve_date`, `garment_pickup_date`, `garment_status`) VALUES
(1, 14, '669434', 'Arjay', 'Uniform', 'LSHS 2x', 'Full Tailor', '1000', 500, 500, '2023-09-14', '2023-09-15', 'Working'),
(2, 16, '631367', 'Arjay', 'Clothing', 'white & black dress, -1 1/2 both sides armhole', 'Repair', '150', 0, 0, '2023-09-14', '2023-09-16', 'Received'),
(3, 17, '392871', 'Arjay', 'Clothing', 'basic repairs', 'Repair', '00', 0, 0, '2023-09-14', '2023-09-17', 'Working'),
(4, 17, '681549', 'Arjay', 'Rugs', 'aayusin lang ang gupit sa gilid', 'Repair', '30', 0, 0, '2023-09-14', '2023-09-17', 'Working');

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `id` int(11) NOT NULL,
  `garment_id` varchar(255) NOT NULL,
  `mb_back_crotch` int(255) NOT NULL,
  `mt_shoulder` int(255) NOT NULL,
  `mt_chest` int(255) NOT NULL,
  `mt_waistline` int(255) NOT NULL,
  `mt_hipline` int(255) NOT NULL,
  `mt_armhole` int(255) NOT NULL,
  `mt_armlength` int(255) NOT NULL,
  `mt_armgirth` int(255) NOT NULL,
  `mt_full_length` int(255) NOT NULL,
  `mt_neckline` int(255) NOT NULL,
  `mb_waistline` int(255) NOT NULL,
  `mb_hipline` int(255) NOT NULL,
  `mb_leg` int(255) NOT NULL,
  `mb_knee` int(255) NOT NULL,
  `mb_calf` int(255) NOT NULL,
  `mb_girth` int(255) NOT NULL,
  `mb_full_length` int(255) NOT NULL,
  `mb_front_crotch` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concerns`
--
ALTER TABLE `concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garments`
--
ALTER TABLE `garments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `concerns`
--
ALTER TABLE `concerns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `garments`
--
ALTER TABLE `garments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `garments`
--
ALTER TABLE `garments`
  ADD CONSTRAINT `garments_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
