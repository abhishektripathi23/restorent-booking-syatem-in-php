-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `form.php`
--
CREATE DATABASE form.php;
-- --------------------------------------------------------

--
-- Table structure for table `food order`
--

CREATE TABLE `food order` (
  `id` int(11) NOT NULL,
  `Table No` int(11) NOT NULL,
  `veg_pizza` int(11) NOT NULL,
  `Paneer_pizza` int(11) NOT NULL,
  `Alloo_tikki` int(11) NOT NULL,
  `Green_Momo` int(11) NOT NULL,
  `Mixed_Momo` int(11) NOT NULL,
  `Veg_Momo` int(11) NOT NULL,
  `Fry_rices` int(11) NOT NULL,
  `Tandoori_chap` int(11) NOT NULL,
  `Chilly_Potato` int(11) NOT NULL,
  `Sandwich` int(11) NOT NULL,
  `Cheese_burger` int(11) NOT NULL,
  `Ham_burger` int(11) NOT NULL,
  `Veg_burger` int(11) NOT NULL,
  `Total_bill` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Indexes for table `food order`
--
ALTER TABLE `food order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food order`
--
ALTER TABLE `food order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
