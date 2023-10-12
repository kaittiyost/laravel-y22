-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 11:11 AM
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
-- Database: `y22`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `thumbnail`, `slug`, `user_id`) VALUES
(1, 'Demo Game 1', 'This is demo game 1', 'demo-game-1.jpg', 'demo-game-1', 5),
(2, 'Demo Game 2', 'This is demo game 2', 'demo-game-2.png', 'demo-game-2', 6),
(13, 'fddfg', 'qwe', 'demo-game-1.jpg', 'fghhuj', 1),
(15, 'Robox', 'dfgg', 'FYxuDDnUYAAAUVl.jpg', 'robox', 1),
(16, 'PubG', 'battle royal', 'images (2).jpg', 'pubg', 1),
(17, 'StickMan', 'wowza', 'ajax_handler.jpg', 'stickman', 1),
(18, 'Legand', 'dfhgrtk', 'images (3).jpg', 'xxza', 1);

-- --------------------------------------------------------

--
-- Table structure for table `game_scores`
--

CREATE TABLE `game_scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `registered_time` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime DEFAULT NULL,
  `score` int(11) NOT NULL DEFAULT 0,
  `blocked` tinyint(1) NOT NULL DEFAULT 0,
  `reasons` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `registered_time`, `last_login`, `score`, `blocked`, `reasons`, `created_at`, `updated_at`) VALUES
(1, 'admin1', '1234', 'admin', '2023-10-10 00:02:46', NULL, 0, 0, '', '2023-10-10 00:04:00', '2023-10-10 00:04:00'),
(2, 'admin2', 'hellouniverse2!', 'admin', '2023-10-10 00:02:46', NULL, 0, 0, '', '2023-10-10 00:04:00', '2023-10-10 00:04:00'),
(3, 'player1', 'helloworld1!', 'gamer', '2023-10-10 00:02:46', NULL, 0, 0, '', '2023-10-10 00:04:00', '2023-10-10 00:04:00'),
(4, 'player2', 'helloworld2!', 'gamer', '2023-10-10 00:02:46', NULL, 0, 0, '', '2023-10-10 00:04:00', '2023-10-10 00:04:00'),
(5, 'dev1', 'hellobyte1!', 'developer', '2023-10-10 00:02:46', NULL, 0, 0, '', '2023-10-10 00:04:00', '2023-10-10 00:04:00'),
(6, 'dev2', 'hellobyte2!', 'developer', '2023-10-10 00:02:46', NULL, 0, 0, '', '2023-10-10 00:04:00', '2023-10-10 00:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `game_scores`
--
ALTER TABLE `game_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `game_scores`
--
ALTER TABLE `game_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
