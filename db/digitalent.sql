-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 01:24 AM
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
-- Table structure for table `daftar_paket`
--

CREATE TABLE `daftar_paket` (
  `daftar_paket_id` int(11) NOT NULL,
  `nama_pemesanan` varchar(255) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `pelayanan_paket` set('Penginapan','Transportasi','Servis/Makan') NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `total_harga_paket` decimal(10,2) NOT NULL,
  `total_jumlah_tagihan` decimal(10,2) NOT NULL,
  `jumlah_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_paket`
--

INSERT INTO `daftar_paket` (`daftar_paket_id`, `nama_pemesanan`, `nomor_hp`, `tanggal_pesan`, `pelayanan_paket`, `jumlah_peserta`, `total_harga_paket`, `total_jumlah_tagihan`, `jumlah_hari`) VALUES
(1, 'John Doe', '081234567890', '2024-07-01', 'Penginapan,Transportasi', 2, '500000.00', '500000.00', 3),
(2, 'Jane Smith', '081298765432', '2024-07-05', 'Transportasi,Servis/Makan', 4, '750000.00', '750000.00', 5),
(3, 'Alice Johnson', '081212345678', '2024-07-10', 'Penginapan,Servis/Makan', 3, '600000.00', '600000.00', 4),
(4, 'Bob Brown', '081223456789', '2024-07-15', 'Penginapan', 1, '300000.00', '300000.00', 2),
(5, 'Charlie Davis', '081234567891', '2024-07-20', 'Transportasi', 5, '400000.00', '400000.00', 3),
(6, 'David Wilson', '081245678912', '2024-07-25', 'Servis/Makan', 6, '550000.00', '550000.00', 4),
(7, 'Emma Thomas', '081256789123', '2024-07-30', 'Penginapan,Transportasi', 2, '500000.00', '500000.00', 3),
(8, 'Frank Harris', '081267891234', '2024-08-01', 'Transportasi,Servis/Makan', 4, '750000.00', '750000.00', 5),
(9, 'Grace Martin', '081278912345', '2024-08-05', 'Penginapan,Servis/Makan', 3, '600000.00', '600000.00', 4),
(10, 'Henry Walker', '081289123456', '2024-08-10', 'Penginapan', 1, '300000.00', '300000.00', 2);

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
(2, 'Riam Kanan', 'Jelajahi kekayaan budaya dan alam Kalimantan Selatan.', 'https://wisato.id/wp-content/uploads/2020/03/26305800_197798214132150_237867301876006912_n-1068x801.jpg', 'https://www.indonesia.travel/id/id/search.html?q=Kalimantan+Selatan', 'https://www.youtube.com/watch?v=4R8VJI66ryc&pp=ygUXa3Jpc3RpYW4gaGFuc2VuIGxva3NhZG8%3D'),
(3, 'Riam Bidadari', 'Lokasi Wisata Riam Bidadari yang  berada di Desa Lumbang RT 09, Kecamatan Muara Uya Kabupaten Tabalong, Provinsi Kalimantan Selatan', 'https://lh5.googleusercontent.com/p/AF1QipMqCrLpGi2eI2WZW56ureiZVS9HSWwYq0UmvPdz=w1080-h624-n-k-no', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiFkM7xuNaHAxUKRmwGHQMNFuYQFnoECDcQAQ&url=https%3A%2F%2Fjadesta.kemenparekraf.go.id%2Fdesa%2Friam_bidadari_desa_lumbang&usg=AOvVaw0i5knmfKUwZdWihv2rXUKt&opi=89978449', 'https://www.youtube.com/watch?v=j7eh_c61CLc');

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
('zeta', 2, 'e26026b73cdc3b59012c318ba26b5518', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_paket`
--
ALTER TABLE `daftar_paket`
  ADD PRIMARY KEY (`daftar_paket_id`);

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
-- AUTO_INCREMENT for table `daftar_paket`
--
ALTER TABLE `daftar_paket`
  MODIFY `daftar_paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
