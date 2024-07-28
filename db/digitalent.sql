-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2024 at 08:55 AM
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
-- Database: `digitalent`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` char(15) NOT NULL,
  `id_user` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `id_user`, `password`, `role`) VALUES
('admin', 1, '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('kiky', 2, '2346826a1e9e5cd4a92c870a5c571937', 'user'),
('zeta', 3, 'e26026b73cdc3b59012c318ba26b5518', 'user'),
('nijika', 4, 'f558d646e38971f3e19fb1752dfd5411', 'user'),
('ryo', 5, '86c40c09feb326e06f4040a5f781229a', 'user'),
('kobo', 6, '8a24a8b95776b1ec975b8cdd7dfdf7fd', 'user'),
('kaela', 7, '83b7cbc6214a7ea3a077b615eb1dc2d1', 'user'),
('mumei', 10, 'bd75976151187b7c550acc7340ec55a5', 'user'),
('gura', 11, '3c93868e3f9c17b7d9c241432e51ff4d', 'user'),
('firefly', 12, '53f018f2ee1fc4fb7ad2be1cc7b9ed43', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
