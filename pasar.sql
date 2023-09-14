-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 06:08 PM
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
-- Database: `lokasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` int(11) NOT NULL,
  `pasar` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pasar`, `pasar`, `latitude`, `longitude`) VALUES
(1, 'pasar bogor suryakencana', '-6.6035186368101435', '106.79958331459866'),
(5, 'Pasar Induk Kemang', '-6.5385480827055265', '106.77001865661501'),
(6, 'Pasar Anyar Bogor', '-6.590149294602538', '106.793212268035'),
(7, 'Pasar Baru Bogor', '-6.602958125780162', '106.80037438009974'),
(8, 'Pasar Gunung Batu', '-6.593750256702059', '106.77803169713003'),
(9, 'Pasar Sukasari', '-6.617032573001447', '106.81247834412112'),
(10, 'Pasar Jambu 02', '-6.569092579773911', '106.80693979268051'),
(11, 'Pasar Mitra Tani Bogor', '-6.577059820603958', '106.78731346615223'),
(12, 'Lawang Sekateng Marketplace', '-6.602298459750411', '106.7961571947215'),
(13, 'Pasar Pagi', '-6.591214194197784', '106.78654169297975'),
(14, 'Pasar Ciomas', '-6.6024455473829935', '106.76789969504613');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id_pasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
