-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 01:05 PM
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
(1, 258, 'test ', 'random', 'laguna', '789456', '$2y$10$AVrQ8wjelsdLQZdJZhphY.Kz897WunroskTX.8CKbtRRaFJEpxSBq', 'testing random input value', 'Customer', 'Pending', 0, '2023-09-08'),
(2, 437, 'Arjay', 'Andal', 'Sta. Cruz, Laguna', '09076730151', '$2y$10$XoFvApebiZmZNQ6G4zpk8uRsc3Ql7S3/9cfE47fDoER8wxyoSOETi', 'Admin', 'Admin', 'Approved', 0, '2023-09-08'),
(3, 709, 'Hannah Cristel', 'Lazanas', 'Pagsanjan, Laguna', '1245679', '$2y$10$0EnjqrC83KrzMEocobZAw.Jbv.Y652zY8Qe0/cNfcJ6jjiPu.vc7m', 'customer 1', 'Customer', 'Approved', 0, '2023-09-08'),
(4, 439, 'Armayne ', 'Arquiza', 'Liliw, Laguna', '456798', '$2y$10$ua1Qqn23HCESx9mj7DB79.EpSlEvJu8A/d.ijbgHc9DER6hUupr7W', 'customer 2', 'Customer', 'Approved', 0, '2023-09-08');

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
  `garment_recieve_date` date NOT NULL DEFAULT current_timestamp(),
  `garment_pickup_date` date NOT NULL,
  `garment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `garments`
--

INSERT INTO `garments` (`id`, `cust_id`, `garment_id`, `garment_receivedby`, `garment_type`, `garment_work_desc`, `garment_type_of_serve`, `garment_serv_charge`, `garment_recieve_date`, `garment_pickup_date`, `garment_status`) VALUES
(13, 439, '466-8', '', 'Clothing', 'repair all', 'Repair', '100', '2023-09-08', '2023-09-09', 'Received'),
(19, 0, '293-992', '', 'Curtains', 'make it 4 panels', 'Repair', '250', '2023-09-12', '2023-09-14', 'Received'),
(20, 3, '493-199', 'Arjay', 'Clothing', 'test id', 'Repair', '50', '2023-09-12', '2023-09-14', 'Received');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerns`
--
ALTER TABLE `concerns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `garments`
--
ALTER TABLE `garments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
