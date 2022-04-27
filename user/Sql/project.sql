-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 05:01 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `admin_name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(225) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Cat1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Pno` varchar(10) NOT NULL,
  `Hno` varchar(20) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Pin` int(6) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `Pimage` varchar(100) NOT NULL,
  `PCategory` varchar(100) NOT NULL,
  `PCategory1` varchar(100) NOT NULL,
  `PCategory2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `PName`, `PPrice`, `Pimage`, `PCategory`, `PCategory1`, `PCategory2`) VALUES
(1, 'Full Sleeve Solid Boys Casual Jacket', '350', 'Uploadimage/gallery-1A.jpg', 'boyClothes', 'boyindex', 'featuredindex'),
(2, 'Boys Graphic Print Hosiery TShirt', '400', 'Uploadimage/gallery-2B.jpg', 'boyClothes', 'boyindex', 'latestindex'),
(3, 'New Gen-India Casual TShirt', '350', 'Uploadimage/gallery-4D.jpg', 'boyClothes', 'boyindex', 'featuredindex'),
(5, 'Graphic Print Pure Cotton Yellow TShirt ', '400', 'Uploadimage/gallery-5B.jpg', 'boyClothes', 'boyindex', 'latestindex'),
(6, 'Graphic Print Pure Cotton Green TShirt ', '450', 'Uploadimage/gallery-5A.jpg', 'boyClothes', 'boyindex', 'latestindex'),
(7, 'Graphic Print Yellow TShirt ', '400', 'Uploadimage/gallery-5D.jpg', 'boyClothes', 'boyindex', 'featuredindex'),
(8, 'Girls Long Skirt', '450', 'Uploadimage/Girl 1.jpg', 'girlClothes', 'girlindex', 'featuredindex'),
(9, 'Girls Yellow Skirt', '450', 'Uploadimage/img4.jpg', 'girlClothes', 'girlindex', 'latestindex'),
(10, 'Girls Top Short', '450', 'Uploadimage/Girl 5.jpg', 'girlClothes', 'girlindex', 'mostindex'),
(11, 'Girls Red Skirt', '450', 'Uploadimage/Girl 2.jpeg', 'girlClothes', 'girlindex', 'mostindex'),
(12, 'Rainbow Skirt', '500', 'Uploadimage/Girl 4.jpg', 'girlClothes', 'girlindex', 'mostindex'),
(13, 'Girls Black Skirt', '350', 'Uploadimage/Girl 3.jpg', 'girlClothes', 'girlindex', 'latestindex'),
(14, 'Boys Yellow Kurta Pajama', '500', 'Uploadimage/img1.jpeg', 'boyClothes', 'boyindex', 'latestindex'),
(15, 'Boys Red Kurta Pajama', '500', 'Uploadimage/img2.jpg', 'boyClothes', 'boyindex', 'featuredindex'),
(16, 'Girls Yellow Short Skirt', '400', 'Uploadimage/img3.jpg', 'girlClothes', 'girlindex', 'latestindex'),
(17, 'MammyPoko Pants Extra-L', '500', 'Uploadimage/buy-1.jpg', 'babyProducts', 'babyindex', 'featuredindex'),
(18, 'HIMALAYA Happy Gift Pack', '600', 'Uploadimage/product-6.jpg', 'babyProducts', 'babyindex', 'mostindex'),
(19, 'HIMALAYA Baby Lotion and Massage Oil', '400', 'Uploadimage/gallery-7B.jpg', 'babyProducts', 'babyindex', 'latestindex'),
(20, 'Cheesy Baby Sleeping Bed Combo', '600', 'Uploadimage/buy-3.jpg', 'babyProducts', 'babyindex', 'featuredindex'),
(21, 'Fareto Cotton Bedding Set', '600', 'Uploadimage/gallery-11C.jpg', 'babyProducts', 'babyindex', 'latestindex'),
(22, 'YNA Baby Kick Play Gym Mosquito Net', '450', 'Uploadimage/gallery-10B.jpg', 'babyProducts', 'babyindex', 'latestindex'),
(23, 'Winter Jacket', '500', 'Uploadimage/exclusive.png', 'boyClothes', 'boyindex', 'latestindex');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Number` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `CPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `FullName`, `UserName`, `Number`, `Email`, `Password`, `CPassword`) VALUES
(1, 'Kaustav Ghosh', 'kaustav123', 6289827302, 'kaustavghosh444@gmail.com', '$2y$10$vGjLaqltl4qPdP3FH0wTU.groI3tpfwKS.vqFZiT62BD6vrA1UxSq', '$2y$10$uolBkn4hIdIFElSvFvcA1e0n1o38ZlayIVBkz7.Vey8PaW9w2Xree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
