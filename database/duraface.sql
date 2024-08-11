-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 07:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duraface`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tile Adhesives', 'Polymer-modified cementitious adhesives for tile fixing.', '2024-08-10 12:20:05', '2024-08-10 12:20:05'),
(2, 'Wall Putty', 'High-quality putty for a smooth painting base.', '2024-08-10 12:20:05', '2024-08-10 12:20:05'),
(3, 'Block Joining Mortar', 'Non-shrink mortar for joining AAC blocks and bricks.', '2024-08-10 12:20:05', '2024-08-10 12:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Vivek Soni', 'sonivivek050@gmail.com', 'please reach out me', '2024-08-11 16:57:49'),
(2, 'Vivek Soni', 'sonivivek050@gmail.com', 'hey there', '2024-08-11 17:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `benefits` text DEFAULT NULL,
  `applications` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `technical_specifications` text DEFAULT NULL,
  `data_sheet_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `features`, `benefits`, `applications`, `image_url`, `technical_specifications`, `data_sheet_url`, `created_at`, `updated_at`) VALUES
(2, 1, 'Beta Tile Adhesive', 'A high-performance adhesive for medium & large format tiles.', 'High polymer modified, suitable for tile-on-tile and natural stone installations.', 'Strong bond, versatile application, suitable for high-traffic areas.', 'Interior floors and walls.', '../../public/images/alpha.jpg', 'Specifications for Beta', '/docs/beta_data_sheet.pdf', '2024-08-10 12:20:05', '2024-08-10 13:35:15'),
(3, 2, 'Dura Face Wall Putty', 'Putty for achieving a flawless paint finish.', 'Fills holes and cracks, ensures a smooth finish.', 'Improves paint adhesion, enhances aesthetic appeal.', 'Interior walls.', '../../public/images/alpha.jpg', 'Specifications for Wall Putty', '/docs/putty_data_sheet.pdf', '2024-08-10 12:20:05', '2024-08-10 13:35:19'),
(4, 3, 'Block Joining Mortar', 'Ready-to-use mortar for joining blocks.', 'Self-curing, non-shrink, enhances masonry strength.', 'Easy application, saves time and labor.', 'Joining AAC blocks and bricks.', '../../public/images/alpha.jpg', 'Specifications for Mortar', '/docs/mortar_data_sheet.pdf', '2024-08-10 12:20:05', '2024-08-10 13:35:22'),
(10, NULL, 'Beta Tile Adhesive', 'A high-performance adhesive for medium & large format tiles.', 'good', 'long life', 'wall', '../../public/images/aboutUs.jpg', NULL, NULL, '2024-08-11 16:46:55', '2024-08-11 16:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `customer_name`, `content`, `created_at`) VALUES
(1, 'John D.', 'Duraface adhesives made my tile installation a breeze! The strong bond and easy application saved me so much time and effort.', '2024-08-10 12:20:05'),
(2, 'Sarah M.', 'I was impressed by the durability of Duraface\'s products. My exterior tiles have withstood harsh weather conditions without any issues.', '2024-08-10 12:20:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
