-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 09:02 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parwisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_bookingbus`
--

CREATE TABLE `t_bookingbus` (
  `kode_booking` int(11) NOT NULL,
  `id` int(15) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `nama_bus` varchar(45) NOT NULL,
  `jenis_bus` enum('bigbus59kursi','bigbus47kursi','mediumbus33kursi','mediumbus25kursi','microbus19kursi','microbus15kursi') NOT NULL,
  `jumlah_unit` enum('1','2','3','4','5','6','7','8','9') NOT NULL,
  `alamat_jemput` varchar(45) NOT NULL,
  `tujuan` varchar(45) NOT NULL,
  `berangkat` datetime NOT NULL,
  `pulang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_bookingbus`
--

INSERT INTO `t_bookingbus` (`kode_booking`, `id`, `tanggal`, `nama_user`, `no_telp`, `nama_bus`, `jenis_bus`, `jumlah_unit`, `alamat_jemput`, `tujuan`, `berangkat`, `pulang`) VALUES
(27, 2, '2018-05-20 20:53:54', 'argh', '082122224444', 'Agra Mas', 'bigbus59kursi', '1', 'SMAN 1 KLARI', 'Taman Safari', '2018-05-21 00:00:00', '2018-05-23 00:00:00'),
(28, 3, '2018-05-20 21:00:55', 'bismillah', '089698765432', 'Warga Baru', 'bigbus59kursi', '2', 'UNSIKA', 'Pangandaran', '2018-05-22 00:00:00', '2018-05-25 00:00:00'),
(32, 2, '2018-05-21 01:28:17', 'Somad', '085773414380', 'Agra Mas', 'bigbus47kursi', '3', 'Masjid Raya Teluk Jambe', 'Masjid Kubah Mas', '2018-05-22 00:00:00', '2018-05-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_daftarbus`
--

CREATE TABLE `t_daftarbus` (
  `id_bus` int(11) NOT NULL,
  `nama_bus` varchar(45) NOT NULL,
  `jenis_bus` enum('bigbus59kursi','bigbus47kursi','mediumbus33kursi','mediumbus25kursi','microbus19kursi','microbus15kursi') NOT NULL,
  `galeri_bus` varchar(45) NOT NULL,
  `harga` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_daftarbus`
--

INSERT INTO `t_daftarbus` (`id_bus`, `nama_bus`, `jenis_bus`, `galeri_bus`, `harga`) VALUES
(1, 'Agra Mas', 'bigbus59kursi', '', ''),
(2, 'Agra Mas', 'bigbus47kursi', '', ''),
(3, 'Agra Mas', 'mediumbus33kursi', '', ''),
(4, 'Agra Mas', 'mediumbus25kursi', '', ''),
(5, 'Agra Mas', 'microbus19kursi', '', ''),
(6, 'Agra Mas', 'microbus15kursi', '', ''),
(7, 'Warga Baru', 'bigbus59kursi', '', ''),
(8, 'Warga Baru', 'bigbus47kursi', '', ''),
(9, 'Warga Baru', 'mediumbus33kursi', '', ''),
(11, 'Warga Baru', 'mediumbus25kursi', '', ''),
(12, 'Warga Baru', 'microbus19kursi', '', ''),
(13, 'Warga Baru', 'microbus15kursi', '', ''),
(14, 'Kramat Djati', 'bigbus59kursi', '', ''),
(15, 'Kramat Djati', 'bigbus47kursi', '', ''),
(16, 'Kramat Djati', 'mediumbus33kursi', '', ''),
(17, 'Kramat Djati', 'mediumbus25kursi', '', ''),
(18, 'Kramat Djati', 'microbus19kursi', '', ''),
(19, 'Kramat Djati', 'microbus15kursi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` enum('admin','guest') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'parwisan', 'parwisanadmin', 'administrator', 'parwisan@admin.com', 'admin'),
(2, 'apabae', 'user', 'guest', 'apabae@gmail.com', 'guest'),
(3, 'yogbredfer', '1234lima', 'ferbredyog', 'apaya@gmail.com', 'guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_bookingbus`
--
ALTER TABLE `t_bookingbus`
  ADD PRIMARY KEY (`kode_booking`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `t_daftarbus`
--
ALTER TABLE `t_daftarbus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_bookingbus`
--
ALTER TABLE `t_bookingbus`
  MODIFY `kode_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `t_daftarbus`
--
ALTER TABLE `t_daftarbus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_bookingbus`
--
ALTER TABLE `t_bookingbus`
  ADD CONSTRAINT `t_bookingbus_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
