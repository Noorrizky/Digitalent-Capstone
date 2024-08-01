-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 09:21 AM
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
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link_info` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id`, `nama`, `deskripsi`, `gambar`, `link_info`, `link_video`) VALUES
(1, 'Loksado', 'Nikmati keindahan alam Kalimantan Selatan yang memukau.', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/a3/93/ed/loksado-bamboo-rafting.jpg?w=1000&h=800&s=1', 'https://www.indonesia.travel/id/id/home', 'https://www.youtube.com/watch?v=gZCCwxMC6AU&pp=ygUXa3Jpc3RpYW4gaGFuc2VuIGxva3NhZG8%3D'),
(2, 'Riam Kanan', 'Jelajahi kekayaan budaya dan alam Kalimantan Selatan.', 'https://wisato.id/wp-content/uploads/2020/03/26305800_197798214132150_237867301876006912_n-1068x801.jpg', 'https://www.indonesia.travel/id/id/search.html?q=Kalimantan+Selatan', 'https://www.youtube.com/watch?v=4R8VJI66ryc&pp=ygUXa3Jpc3RpYW4gaGFuc2VuIGxva3NhZG8%3D');

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
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
