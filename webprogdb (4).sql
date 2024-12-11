-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 07:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(25) NOT NULL,
  `id_product` int(25) NOT NULL,
  `orderid` int(25) NOT NULL,
  `tanggalpembelian` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `listproduct` varchar(2500) NOT NULL,
  `price` int(25) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inputproduk`
--

CREATE TABLE `inputproduk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inputproduk`
--

INSERT INTO `inputproduk` (`id`, `kode`, `nama`, `jenis`, `harga`, `deskripsi`, `foto`) VALUES
(28, '003', 'Kulkas 2 pintu', 'Elektronik', 2500000, 'Kulkas terbaru\r\nHemat\r\nMempunyai 2 pintu', 'SHARP KULKAS 2 PINTU 205L SJ-236MN-HS.jpg'),
(29, '004', 'AC ', 'Electronic', 3000000, 'Air Conditioner yang cocok digunakan waktu hari panas yang dapat mendinginkan ruangan', 'AC Split Mitsubishi Electric HP Series.jpg'),
(30, '005', 'Rice Cooker', 'Elektronik', 750000, 'rice cooker memiliki berbagai fungsi lainnya seperti dapat digunakan untuk menghangatkan nasi dengan fitur keep warm, untuk mengukus, menghangatkan lauk, dan beberapa fungsi lainnya.', 'Alat Pemasak nasi elektrik rice cooker serbaguna.jpeg'),
(31, '006', 'Speaker', 'Elekronik', 350000, 'Speaker terbaru yang memiliki suara yang lebih enak untuk didengar ', 'Speaker Aktif Polytron PAS10D22.jpg'),
(32, '001', 'Kipas Angin', 'Kipas Angin', 250000, 'Kipas Angin terbaru yang dapat mendingkan satu ruangan dengan sekali putaran', 'Kipas Angin Cosmos 12 Inch.jpg'),
(33, '007', 'DVD Player', 'Elekronik', 5000000, 'DVD PLayer sangat bagus digunakan', 'DVD rinrei Optik samsung dvd vcd mp3 mp4 player.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`id`, `nama`, `Username`, `Password`, `email`, `notelp`, `level`) VALUES
(2, '', 'farhan', 'farhan123', '', '', ''),
(3, '', 'samsul', 'samsul123', '', '', 'admin'),
(4, 'jarot', 'jarot', 'jarot123', 'jarotgans@gmail.com', '0893429482', 'pelanggan'),
(5, 'mufid', 'mufid', 'mufid123', 'mufidgasn@gmail.com', '9892387432', 'pelanggan'),
(6, 'mufid', 'mufid', 'sddjfdso', 'sdofjds', '320834534', 'pelanggan'),
(7, 'victo', 'victo', 'victo', 'victo', '1231231', 'pelanggan'),
(8, 'rijalgaming', 'rijal', 'rijall123', 'rijalsdasdhasud', '9302192324', 'pelanggan'),
(10, '', 'admin', 'admin123', '', '', 'admin'),
(11, 'arip', 'arip', 'arip123', 'arip12345@gmail.com', '082393432432', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputproduk`
--
ALTER TABLE `inputproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `inputproduk`
--
ALTER TABLE `inputproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
