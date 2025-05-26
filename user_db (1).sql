-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 09:31 AM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `query` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `query`, `name`, `email`) VALUES
(1, 'akjdkaskdjaksjdkasjdkasdasdasd', 'Shane Malcolm John', 'shanemj612@gmail.com'),
(2, 'I faced difficulties with the online reservation process. The date selection on the calendar was unclear, and there were no instructions. Choosing a preferred time slot was also confusing. I suggest improving the system for a better user experience. Looki', 'Smith', 'smith@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_form`
--

CREATE TABLE `reservation_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `people` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_form`
--

INSERT INTO `reservation_form` (`id`, `name`, `email`, `people`, `date`, `time`) VALUES
(6, 'Shane Malcolm John', 'shanemj612@gmail.com', 20, '2023-08-25', '00:00:00'),
(7, 'Malcolm', 'malcolmsj612@gmail.com', 2, '2023-02-05', '17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'Shane Malcolm John', 'shanemj612@gmail.com', '$2y$10$4m0isjoj.9w7605XQqgcROyJ2fPlxwmXk9iJEfwHbHPxuby9wOJaS', 'user'),
(4, 'Malcolm', 'malcolmsj612@gmail.com', '$2y$10$TiX2T1p06NtrYbqUf.EtDe6USr79uwMzhBvAh7E9TELDHPxsbUAU6', 'admin'),
(5, 'Johan', 'johan@gmail.com', '$2y$10$snsrr2RDajaVB/WFgc/6QOoAQ9ao4WfQY0vqW8z2AcueI6Zn4IROy', 'user'),
(6, 'johan', 'johan74@gmail.com', '$2y$10$4odO9r/7J6wLOUEQ5BZ91OdmwA462ciBJHL74YHo/fZZh1kmNhpLa', 'user'),
(7, 'loneth', 'loneth@gmail.com', '$2y$10$2mLU7JZwH9BaE8e5vrk61OSsBudIHfUW5wMidLpCxJrdRezND8yl.', 'user'),
(8, 'Jack', 'jack@gmail.com', '$2y$10$t7ljytgjb0uve0tnhe/kGuqxBNqg93Cd7n8l7Zg/VUwohpBZfWFmu', 'user'),
(9, 'Dihan', 'Dihan@gmail.com', '$2y$10$ADi5MBUfNksK6qX.1hBG/OAJnR24mDAa.WsyiVdqDF93QRTFQhX46', 'user'),
(10, 'Nethvin', 'Nethvin@gmail.com', '$2y$10$SRxqVtXzTGoDd0mHw.g9L.36X981qB7WmQ7T2X.KUZuiT5sa5zj4a', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_form`
--
ALTER TABLE `reservation_form`
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
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation_form`
--
ALTER TABLE `reservation_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
