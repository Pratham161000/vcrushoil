-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 08:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prayas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(16, 33, 'Pratham Buddhadev', 'pratham.buddhadev@gmail.com', '7990974178', 'hi'),
(18, 34, 'Pratham Buddhadev', 'pratham.buddhadev@gmail.com', '7990974178', 'hiii!!!!!!!!!!!!!!!!!!!!!!!!!'),
(19, 34, 'Pratham Buddhadev', 'pratham.buddhadev@gmail.com', '7990974178', 'trhyrhrhnr'),
(21, 33, 'Pratham Buddhadev', 'pratham.buddhadev@gmail.com', '7990974178', 'need oil'),
(22, 33, 'Pratham Buddhadev', 'pratham.buddhadev@gmail.com', '7990974178', 'need kachariya'),
(23, 33, 'Pratham Buddhadev', 'pratham.buddhadev@gmail.com', '7990974178', 'hgffddgggyyy'),
(24, 33, 'Pratham Buddhadev', 'pratham.buddhadev@gmail.com', '7990974178', 'hi!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!hello');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(26, 33, 'Pratham Buddhadev', '7990974178', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. 150 Ring Road, Rajkot, Gokul Apartment-201,Shivanand Society, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', Coconut Oil (3) ', 1770, '19-Mar-2023', 'completed'),
(27, 34, 'Pratham Buddhadev', '07990974178', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. 150 Ring Road, Rajkot, Gokul Apartment-201,Shivanand Society, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', White Sesame Oil (1) ', 550, '20-Mar-2023', 'completed'),
(30, 33, 'Pratham Buddhadev', '07990974178', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. 150 Ring Road, Rajkot, Gokul Apartment-201,Shivanand Society, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', Groundnut Oil (1) ', 330, '23-Mar-2023', 'pending'),
(34, 33, 'Pratham Buddhadev', '7990974178', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. 150 Ring Road, Rajkot, Gokul Apartment-201,Shivanand Society, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', Groundnut Oil (1) ', 330, '24-Mar-2023', 'completed'),
(35, 33, 'Pratham Buddhadev', '7990974176', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. 150 Ring Road, Rajkot, Gokul Apartment-201,Shivanand Society, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', Groundnut Oil (1) , Mustard Oil (1) , Kachariya White Sesame (5) ', 1190, '25-Mar-2023', 'completed'),
(36, 50, 'Pratham Buddhadev', '7990974178', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. Gokul Apartment-201,Shivanand Society, 150 Ring Road, Rajkot, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', Kachariya White Sesame (1) ', 90, '10-Apr-2023', 'pending'),
(37, 50, 'Pratham Buddhadev', '07990974178', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. 150 Ring Road, Rajkot, Gokul Apartment-201,Shivanand Society, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', Kachariya Black Sesame (1) ', 90, '13-Apr-2023', 'pending'),
(38, 50, 'Pratham Buddhadev', '07990974178', 'pratham.buddhadev@gmail.com', 'cash on delivery', 'flat no. 150 Ring Road, Rajkot, Gokul Apartment-201,Shivanand Society, NR. Ayodhya Chowk, Shivanand Society, India - 360006', ', Mustard Oil (1) ', 410, '12-Apr-2023', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(2000) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image`) VALUES
(24, 'Groundnut Oil', '<center><h3>1 Litre Groundnut Oil</h3></center>             \r\n<h4>Benefits of Groundnut oil</h4>\r\n-> Improves immune system<br>\r\n-> Improves good cholesterol level<br>\r\n-> Helps to reduce the chances of heart \r\n   disease<br>\r\n-> Helps to reduce the chances of cancer<br>\r\n-> Helps to reduce the chances of high\r\n   blood pressure<br>', 330, 'groundnutoil.png'),
(26, 'Mustard Oil', '<center><h3>1 Litre Mustard Oil</h3></center>\r\n<h4>Benefits of Mustard oil</h4>\r\n-> Using this oil in cooking removes body weakness.<br>\r\n-> Applying camphor mixed with mustard oil relieves arthritis pain.<br>\r\n-> By mixing coconut oil in mustard oil with equal amount and massaging for 5 to 10 minutes, the skin will become soft.<br>\r\n-> Put garlic cloves in mustard oil and heat mild. Drop it in ear and it relieves ear pain.<br>\r\n-> This oil works in a tonic manner and it increases the efficiency', 410, 'mustardoil.png'),
(27, 'Black Sesame Oil', '<center><h3>1 Litre Black Sesame Oil</h3></center>\r\n<h4>Benefits of Black Sesame Oil</h4>\r\n-> Improves digestion: Black sesame seeds are high in fiber and fatty acids. Sesame oil keeps the intestines lubricated which is helpful in relieving constipation. As a result, digestion improves.<br>\r\n-> Best source of energy.<br>\r\n-> Rich in nutrients and vitamins<br>\r\n-> Reduces the risk of cancer<br>\r\n-> Relief from constipation and indigestion<br>\r\n-> Controls blood pressure<br>\r\n-> Beneficial for bones', 490, 'blacksesameoil.png'),
(28, 'White Sesame Oil', '<center><h3>1 Litre White Sesame Oil</h3></center>\r\n<h4>Benefits of White Sesame Oil</h4>\r\n-> Massaging with sesame oil strengthens teeth and gums.<br>\r\n-> Regular massage is extremely beneficial in pyorrhea and strengthens the gums.<br>\r\n-> Sesame oil is rich in natural calcium which strengthens the teeth.<br>\r\n-> Prevents gum disease. (Massage with light hands.)', 590, 'whitesesameoil.png'),
(29, 'Coconut Oil', '<center><h3>1 Litre Coconut Oil</h3></center>\r\n<h4>Benefits of coconut oil</h4>\r\n-> It is beneficial for health as well as skin.<br>\r\n-> Coconut oil acts as a moisturizer for the skin.<br>\r\n-> Coconut oil makes hair better and longer<br>\r\n-> Keeping coconut oil in the mouth for 20 minutes and then spitting out removes bacteria and gum problems.<br>\r\n-> Beneficial for immunity and heart health', 490, 'coconutoil.png'),
(30, 'Kachariya Black Sesame', '<center><h3>250 Gram</h3></center>\r\n-> શુદ્ધ કાળા તલનું કચરિયું.<br>\r\n-> તેલ કાઢી લેવામાં આવતું નથી.<br>\r\n-> માત્ર રસાયણ વગરનો ગોળ ઉમેરાય છે.<br>\r\n-> કોલ્ડ પ્રેસથી કચરિયું બને છે.', 90, 'kachriyu.png'),
(31, 'Kachariya White Sesame', '<center><h3>250 Gram</h3></center>\r\n-> શુદ્ધ સફેદ તલનું કચરિયું. <br>\r\n-> તેલ કાઢી લેવામાં આવતું નથી. <br>\r\n-> માત્ર રસાયણ વગરનો ગોળ ઉમેરાય છે.<br>\r\n-> કોલ્ડ પ્રેસથી કચરિયું બને છે.', 90, 'kachriyu.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `number` varchar(20) DEFAULT NULL,
  `verification_code` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `number`, `verification_code`) VALUES
(32, 'admin', 'admin01@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', NULL, NULL),
(48, 'Rakesh Oza', 'rakeshozahere@gmail.com', 'e0e9d8d77a05d34a54173c6af68d819c', 'admin', '9978068186', 'd75b6fb382a6690b850b5ab620e7eb97'),
(50, 'Pratham', 'pratham.buddhadev@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '7990974178', '8a5eb262c2b1d9b4390ca33263425a8b');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`, `name`, `price`, `image`) VALUES
(68, 35, 24, 'Groundnut Oil', 330, 'groundnutoil.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
