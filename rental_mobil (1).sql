-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 02:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `link_wa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `no_hp`, `rekening`, `alamat`, `link_wa`) VALUES
(1, '082144740515', 'BRI : 12345678 an ATW', 'Karangwaru, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55241', 'https://wa.me/082144740515?text=Selamat%20datang\r\n					');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(30) NOT NULL,
  `durasi1` varchar(50) NOT NULL,
  `durasi2` varchar(50) NOT NULL,
  `durasi3` varchar(100) NOT NULL,
  `harga1` varchar(50) NOT NULL,
  `harga2` varchar(50) NOT NULL,
  `harga3` varchar(50) NOT NULL,
  `harga4` varchar(50) NOT NULL,
  `harga5` varchar(50) NOT NULL,
  `harga6` varchar(50) NOT NULL,
  `harga7` varchar(50) NOT NULL,
  `harga8` varchar(50) NOT NULL,
  `harga9` varchar(50) NOT NULL,
  `foto_mobil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_mobil`, `durasi1`, `durasi2`, `durasi3`, `harga1`, `harga2`, `harga3`, `harga4`, `harga5`, `harga6`, `harga7`, `harga8`, `harga9`, `foto_mobil`) VALUES
(10, 'avansa', '6 jam', '12 jam', '24 jam', '200000', '400000', '600000', '300000', '400000', '500000', '400000', '500000', '600000', 'avansa.jpeg'),
(11, 'xenia', '6 jam', '12 jam', '24 jam', '400000', '500000', '600000', '500000', '700000', '900000', '1000000', '1.500.000', '2.000.000', 'xenia.jpg'),
(12, 'Honda Brio', '6 jam', '12 jam', '24 jam', '200000', '400000', '600000', '500000', '700000', '900000', '1.000.000', '1.500.000', '1.700.000', 'Honda-Brio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(2, 'irhan', '13eb49b47133f45892b39221087a6b8eb35ae499', 'Irhan Mustofa');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga_wisata` int(30) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `deskripsi`, `harga_wisata`, `gambar`) VALUES
(2, 'PAKET BOROBUDUR', 'Durasi 6 Jam, Mobil Kapasitas 8 Oranga, Gratis Foto', 600000, '6225c0669e6d2.jpg'),
(6, 'PAKET PANTAI', 'Durasi 6 Jam, Mobil Kapasitas 6-7 Oranga, 3 Objek Wisata Pantai', 500000, '15632785941.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
