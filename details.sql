-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 02:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `itm_type` varchar(100) NOT NULL,
  `itm_photo` varchar(100) NOT NULL,
  `itm_det` varchar(100) NOT NULL,
  `itm_invc` varchar(100) NOT NULL,
  `itm_pri` varchar(100) NOT NULL,
  `Hand_ov_to` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  `Itm_code` varchar(100) NOT NULL,
  `Proj` varchar(100) NOT NULL,
  `Acode` varchar(100) NOT NULL,
  `Condtn` varchar(100) NOT NULL,
  `Othr1` varchar(100) NOT NULL,
  `Othr2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `itm_type`, `itm_photo`, `itm_det`, `itm_invc`, `itm_pri`, `Hand_ov_to`, `pdate`, `Itm_code`, `Proj`, `Acode`, `Condtn`, `Othr1`, `Othr2`) VALUES
(166, 'solar panel', '12121', 'solar panel from xyz', 'pojdslfjsafjsd', '65486515', 'dlkfjosdjf', 'xyz 232323', '16543121', 'scheme invert', '265131213', 'sdjdlfl', '65311', 'fdsfdsfsd'),
(5456, 'sdsd', 'sdasd', 'sadasd', 'sadasd', 'sadasdas', 'sadasd', 'sadasd', 'asdasd', 'sadasd', 'sadasd', 'sadasd', 'sadas', 'sadas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5457;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
