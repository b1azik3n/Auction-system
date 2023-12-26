-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 09:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(9, 'Water Color', 1),
(10, '3D', 1),
(11, 'mithila art', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(2, 'suruchi', 'suruchi@gmail.com', '345678', '', '2022-02-25 06:02:23'),
(4, 'suruchi', 'suruchi@gmail.com', '234', 'nddkfdm sd', '2022-02-25 06:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `bid_amt` double NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `name`, `email`, `mobile`, `bid_amt`, `address`, `city`, `pincode`, `added_on`) VALUES
(1, 4, 20, 'suruchi', 'suruchi@gmail.com', '12345', 4567, '56', 'kathmandu', 78, '2022-03-06 09:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`) VALUES
(1, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `starting_price` float NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `image`, `starting_price`, `description`, `status`, `due_date`) VALUES
(12, 9, 'Syambhunath', '406595011_Syambhunath.jfif', 3999, 'Swayambhu is an ancient religious complex atop a hill in the Kathmandu Valley, west of Kathmandu city.  Dimension: 9\"x12\" Medium: Watercolor on paper Paper Type: Medium weight paper 90lb. This painting will fit in a nice frame of your choice. This original watercolor painting will be shipped by me to your address.', 1, '2022-03-27'),
(13, 9, 'Mount Kantega Himalaya', '659350912_download.jfif', 2999, 'Dimension: 9\"x12\" Medium: Watercolor on paper Paper Type: Medium weight paper 90lb. This painting will fit in a nice frame of your choice. This original watercolor painting will be shipped by me to your address. This painting does not come framed.', 1, '2022-03-27'),
(14, 9, 'Temple', '139677644_temple.jpg', 1999, 'Dimension: 9\"X12\" Medium: Watercolor On Paper Paper Type: Medium Weight Paper 80lb. This Painting Will Fit In A Nice Frame Of Your Choice. This Original Watercolor Painting Will Be Shipped By Me To Your Address.', 1, '2022-04-01'),
(15, 10, 'Dog', '447762870_4ec9149255363fb233f349a77e96f475.jpg', 599, 'THIS IS AN ORIGINAL DRAWING OF A CAT HEAD SHOWING THE STRIKING EYES . THE PICTURE MEASURES 10x10 INCHES IN SIZE THE ACTUAL PAPER SIZE IS 16x11 INCHES.', 1, '2022-03-04'),
(16, 10, 'Cat', '929763927_7b8e48254c1379df08a6f0bcf4729d6d.jpg', 699, 'THIS IS AN ORIGINAL DRAWING OF A CAT HEAD SHOWING THE STRIKING EYES THAT SHE HAS. THE PICTURE MEASURES 10x10 INCHES IN SIZE THE ACTUAL PAPER SIZE IS 16x11 INCHES.', 1, '2022-03-05'),
(17, 10, 'Cube', '175977040_90e09d9a575e8d55986a0d3411962e7f.jpg', 499, 'This is a 3D drawing of a cube. THE PICTURE MEASURES 10x10 INCHES IN SIZE . THE ACTUAL PAPER SIZE IS 16x11 INCHES.', 1, '2022-03-06'),
(18, 10, 'shark', '370497975_d9c13c2d98c4042d70dba68d1490e7b7.jpg', 3499, 'This Is A 3D Drawing Of a shark. Dimension: 9\"X12\" Medium: Watercolor On Paper Paper Type: Medium Weight Paper 80lb.', 1, '2022-03-29'),
(19, 10, 'Rat', '857851012_7670b16bba071fed2bebad3e2e6d746b.jpg', 459, 'This is 3d of rat. THE PICTURE MEASURES 10x10 INCHES IN SIZE . THE ACTUAL PAPER SIZE IS 16x11 INCHES.', 1, '2022-04-05'),
(20, 11, 'Elephant', '521885721_1b6b2b562f2a09cabc06a60c944bd4b2.jpg', 3500, 'THE PICTURE MEASURES 10x10 INCHES IN SIZE . THE ACTUAL PAPER SIZE IS 16x11 INCHES.', 1, '2022-04-11'),
(21, 11, 'Traditional Marriage', '714978823_5be375728af194d8eae82c73bee49edc.jpg', 4999, 'This Is the picture of bride and groom. THE PICTURE MEASURES 10x10 INCHES IN SIZE. THE ACTUAL PAPER SIZE IS 16x11 INCHES.', 1, '2022-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `mobile` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `mobile`) VALUES
(1, 'bag', 'bag@gmail.com', '4a82715423d654d61838e81060a4cdf1', 'user', NULL),
(2, 'laptop', 'laptop@gmail.com', '312f91285e048e09bb4aefef23627994', 'user', '3456'),
(3, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '12345'),
(4, 'suruchi', 'suruchi@gmail.com', 'b1758d8657f2b3eed3dd6bd44cad2f64', 'user', '6789'),
(6, 'mountain', 'mountain@gmail.com', 'ec6d9c8953ab272295ec0469bbed59ab', 'admin', '12345'),
(7, 'sunflower', 'sunflower@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'admin', '2345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
