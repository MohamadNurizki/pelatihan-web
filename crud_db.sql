-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2021 at 01:02 AM
-- Server version: 10.6.5-MariaDB-log
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` enum('Food','Fashion','Electronic','Home Supplies') NOT NULL,
  `product_description` text NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_category`, `product_description`, `product_price`, `product_img`) VALUES
(1, '5656', 'Electronic', '5656', 5656, '20211211-055739-1200px-UPC-A-036000291452.svg.png'),
(2, 'b', 'Food', 'b', 2, '20211203-193117-211202-045258-Acrobat.png'),
(3, 'dsda', 'Home Supplies', 'dfdsf', 1122, ''),
(4, 'fdsfgsg', 'Fashion', 'gswggs', 5345, ''),
(5, 'sfsdfd', 'Home Supplies', 'fdsfff', 1113, ''),
(6, 'as', 'Food', 'as', 11, '20211204-080247-211202-222047-msedge.png'),
(7, '5353', 'Fashion', '52352', 2141, '20211204-080328-04WYiblY_400x400.jpg'),
(8, 'wrrere', 'Fashion', 'erwerwer', 331313, '20211210-090918-1af2kO.jpg'),
(9, 'ewrwerwer', 'Food', 'etgdsgsdg', 2132134, '20211210-090949-002.png'),
(10, 'dsadasdasdasd', 'Food', 'dsda', 1111, 'NoImageAvailable.png'),
(11, '132131', 'Food', '231231', 1111, 'NoImageAvailable.png'),
(12, '131313', 'Food', '13131', 1111, 'NoImageAvailable.png'),
(13, '131313', 'Food', '13131', 1111, 'NoImageAvailable.png'),
(14, '1', 'Food', '1', 1, 'NoImageAvailable.png'),
(15, '1', 'Food', '1', 1, 'NoImageAvailable.png'),
(16, '13414', 'Food', '42412', 1111, 'NoImageAvailable.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_level` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_pass`, `user_level`) VALUES
(1, 'admin', 'admin', '0'),
(2, 'user', 'user', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
